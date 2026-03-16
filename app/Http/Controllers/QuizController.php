<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\UserVerbStat;

class QuizController extends Controller
{
    public function showQuiz()
    {
        $verb = $this->getWeightedVerb();
        $options = $this->buildOptions($verb->preposition);

        return view('quiz', [
            'verb'               => $verb->verb,
            'verbId'             => $verb->id,
            'englishTranslation' => $verb->english_translation,
            'exampleSentence'    => $verb->example_sentence,
            'options'            => $options,
            'progress'           => session('progress', 0),
            'highScore'          => $this->getHighScore(),
            'isGuest'            => !auth()->check(),
        ]);
    }

    public function checkAnswer(Request $request)
    {
        $request->validate([
            'verb'                 => 'required|string',
            'verb_id'              => 'required|integer',
            'selected_preposition' => 'required|string',
        ]);

        $verbRecord = DB::table('german_verbs')->where('verb', $request->verb)->first();
        $correctPreposition = $verbRecord->preposition;
        $isCorrect = strtolower(trim($request->selected_preposition)) === strtolower($correctPreposition);

        if ($isCorrect) {
            $message = 'Correct! Well done!';
            Session::put('score', session('score', 0) + 1);
        } else {
            $message = "Incorrect. The correct preposition is <strong>{$correctPreposition}</strong>.";
            Session::put('score', 0);
        }

        $this->recordVerbStat($request->verb_id, $isCorrect);
        $this->updateHighScore(session('score', 0));

        $questionsAnswered = session('questions_answered', 0) + 1;
        $totalQuestions = 25;
        $progress = ($questionsAnswered / $totalQuestions) * 100;

        if ($questionsAnswered >= $totalQuestions) {
            $progress = 0;
            $questionsAnswered = 0;
            Session::put('score', 0);
            $message .= ' You have completed the quiz!';
        }

        Session::put('questions_answered', $questionsAnswered);
        Session::put('progress', $progress);

        $nextVerb = $this->getWeightedVerb();
        $options = $this->buildOptions($nextVerb->preposition);

        return view('quiz', [
            'verb'                => $nextVerb->verb,
            'verbId'              => $nextVerb->id,
            'englishTranslation'  => $nextVerb->english_translation,
            'exampleSentence'     => $nextVerb->example_sentence,
            'options'             => $options,
            'progress'            => $progress,
            'message'             => $message,
            'lastVerb'            => $verbRecord->verb,
            'lastTranslation'     => $verbRecord->english_translation,
            'lastExample'         => $verbRecord->example_sentence,
            'correctPreposition'  => $correctPreposition,
            'wasCorrect'          => $isCorrect,
            'selectedPreposition' => $request->selected_preposition,
            'highScore'           => $this->getHighScore(),
            'isGuest'             => !auth()->check(),
        ]);
    }

    // -------------------------------------------------------------------------
    // Private helpers
    // -------------------------------------------------------------------------

    private function getWeightedVerb()
    {
        $allVerbs = DB::table('german_verbs')->get();

        if ($allVerbs->isEmpty()) {
            abort(500, 'No verbs in database.');
        }

        $stats = $this->getVerbStats();

        if (empty($stats)) {
            return $allVerbs->random();
        }

        $weights = [];
        $total = 0;
        foreach ($allVerbs as $verb) {
            $s = $stats[$verb->id] ?? ['correct' => 0, 'incorrect' => 0];
            $w = ($s['incorrect'] + 1) / ($s['correct'] + 1);
            $weights[$verb->id] = $w;
            $total += $w;
        }

        $rand = (mt_rand() / mt_getrandmax()) * $total;
        $cumulative = 0;
        foreach ($allVerbs as $verb) {
            $cumulative += $weights[$verb->id];
            if ($rand <= $cumulative) {
                return $verb;
            }
        }

        return $allVerbs->last();
    }

    private function buildOptions(string $correctPreposition): array
    {
        $distractors = DB::table('german_verbs')
            ->where('preposition', '!=', $correctPreposition)
            ->inRandomOrder()
            ->pluck('preposition')
            ->unique()
            ->values()
            ->take(3)
            ->toArray();

        $options = array_values(array_unique(array_merge([$correctPreposition], $distractors)));
        shuffle($options);

        return $options;
    }

    private function getVerbStats(): array
    {
        $user = auth()->user();

        if ($user) {
            return UserVerbStat::where('user_id', $user->id)
                ->get()
                ->keyBy('german_verb_id')
                ->map(fn($s) => ['correct' => $s->correct_count, 'incorrect' => $s->incorrect_count])
                ->toArray();
        }

        return session('guest_verb_stats', []);
    }

    private function recordVerbStat(int $verbId, bool $isCorrect): void
    {
        $user = auth()->user();

        if ($user) {
            $stat = UserVerbStat::firstOrNew([
                'user_id'        => $user->id,
                'german_verb_id' => $verbId,
            ]);
            $isCorrect ? $stat->correct_count++ : $stat->incorrect_count++;
            $stat->save();
        } else {
            $guestStats = session('guest_verb_stats', []);
            if (!isset($guestStats[$verbId])) {
                $guestStats[$verbId] = ['correct' => 0, 'incorrect' => 0];
            }
            $isCorrect ? $guestStats[$verbId]['correct']++ : $guestStats[$verbId]['incorrect']++;
            Session::put('guest_verb_stats', $guestStats);
        }
    }

    private function getHighScore(): int
    {
        $user = auth()->user();
        return $user ? ($user->high_score ?? 0) : session('guest_high_score', 0);
    }

    private function updateHighScore(int $currentScore): void
    {
        $user = auth()->user();

        if ($user) {
            if ($currentScore > $user->high_score) {
                $user->high_score = $currentScore;
                $user->save();
            }
        } else {
            if ($currentScore > session('guest_high_score', 0)) {
                Session::put('guest_high_score', $currentScore);
            }
        }
    }
}
