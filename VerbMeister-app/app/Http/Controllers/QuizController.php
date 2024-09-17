<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function getQuizData()
    {
        $verb = DB::table('verbs')->inRandomOrder()->first();
        return view('quiz', ['verb' => $verb]);
    }

    public function storeQuizResult(Request $request)
    {
        $verbId = $request->input('verb_id');
        $userAnswer = $request->input('preposition');
        $verb = DB::table('verbs')->where('id', $verbId)->first();

        $isCorrect = $verb->preposition === $userAnswer;
        $score = $isCorrect ? 1 : 0;

        auth()->user()->userQuiz()->create([
            'score' => $score
        ]);

        return response()->json([
            'message' => $isCorrect ? 'Correct!' : 'Wrong!',
            'correct_preposition' => $verb->preposition
        ]);
    }
}