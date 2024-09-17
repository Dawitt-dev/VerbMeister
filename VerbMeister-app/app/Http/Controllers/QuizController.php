<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    // Fetch a random verb for the quiz
    public function getQuizData()
    {
        $verb = DB::table('verbs')->inRandomOrder()->first();
        return view('quiz', ['verb' => $verb]);
    }

    // Store the quiz result and return if the answer was correct or not
    public function storeQuizResult(Request $request)
{
    $verbId = $request->input('verb_id');
    $userAnswer = $request->input('preposition');
    
    // Fetch the verb by ID
    $verb = DB::table('verbs')->where('id', $verbId)->first();

    // Check if the verb and preposition exist
    if (!$verb || !isset($verb->preposition)) {
        return response()->json([
            'correct' => false,
            'message' => 'Verb not found or preposition missing',
        ]);
    }

    // Check if the user's preposition is correct
    $isCorrect = $verb->preposition === $userAnswer;

    // Store score only if the answer is correct
    if ($isCorrect) {
        auth()->user()->userQuiz()->create([
            'score' => 1
        ]);
    }

    // Return the correct response with the preposition
    return response()->json([
        'correct' => $isCorrect,
        'correct_preposition' => $verb->preposition
    ]);
}
}