<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GermanVerb;

class QuizController extends Controller
{
    public function showQuiz()
    {
        // Fetch a random verb from the database
        $randomVerb = GermanVerb::inRandomOrder()->first();

        // Pass the verb to the view
        return view('quiz', ['verb' => $randomVerb->verb]);
    }

    public function checkAnswer(Request $request)
    {
        // Fetch the corresponding verb from the database
        $verb = GermanVerb::where('verb', $request->input('verb'))->first();

        // Check if the submitted preposition is correct
        $submittedPreposition = $request->input('preposition');
        $correctPreposition = $verb->preposition;

        $score = session('score', 0); // Get the current score from session or default to 0

        if ($submittedPreposition === $correctPreposition) {
            $score++;
            session(['score' => $score]); // Update the score in session
            $message = "Correct!";
            
            // Fetch a new random verb
            $verb = GermanVerb::inRandomOrder()->first();
        } else {
            $message = "Wrong! Please, Try again!";
        }

        return view('quiz', [
            'verb' => $verb->verb,
            'message' => $message,
            'score' => $score,
        ]);
    }
}
