<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    /**
     * Display the quiz page.
     */
    public function showQuiz()
    {
        // Get a random verb-preposition pair
        $verb = DB::table('german_verbs')->inRandomOrder()->first();

        // Get progress from session or set default
        $progress = session('progress', 0);

        return view('quiz', [
            'verb' => $verb->verb,
            'progress' => $progress,
        ]);
    }

    /**
     * Check the answer provided by the user.
     */
    public function checkAnswer(Request $request)
    {
        // Retrieve the verb and its correct preposition from the database
        $verbRecord = DB::table('german_verbs')->where('verb', $request->input('verb'))->first();
        $correctPreposition = $verbRecord->preposition;

        // Check if the answer is correct
        if (strtolower(trim($request->input('preposition'))) === strtolower($correctPreposition)) {
            $message = 'Correct! Well done!';
            // Increment score if correct
            Session::put('score', session('score', 0) + 1);
        } else {
            $message = "Incorrect. The correct preposition is '{$correctPreposition}'.";
            // Reset current score
            Session::put('score', 0);
        }

        // Update high score
        $currentScore = session('score', 0);
        $highScore = session('high_score', 0);

        if ($currentScore > $highScore) {
            Session::put('high_score', $currentScore);
        }

        // Increment progress
        $totalQuestions = 10; // Adjust this number as needed
        $progressIncrement = (100 / $totalQuestions);
        $progress = session('progress', 0) + $progressIncrement;

        if ($progress >= 100) {
            $progress = 0; // Reset progress after completion
            Session::put('score', 0); // Reset score
            $message .= ' You have completed the quiz!';
        }

        // Store progress in session
        Session::put('progress', $progress);

        // Return the next question
        $nextVerb = DB::table('german_verbs')->inRandomOrder()->first();

        return view('quiz', [
            'verb' => $nextVerb->verb,
            'progress' => $progress,
            'message' => $message,
        ]);
    }
}

