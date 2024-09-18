<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/quiz', [QuizController::class, 'showQuiz'])->name('quiz.show');
    Route::post('/check-answer', [QuizController::class, 'checkAnswer'])->name('quiz.check');
    //Route::get('/quiz/next', [QuizController::class, 'getNextQuiz'])->name('quiz.next');
});

    

require __DIR__.'/auth.php';
