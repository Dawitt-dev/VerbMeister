<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\QuizController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/about', function () {
    return view('welcome');
})->name('about') ;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile routes	
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Quiz routes
    Route::get('/quiz', [QuizController::class, 'showQuiz'])->name('quiz.show');
    Route::post('/check-answer', [QuizController::class, 'checkAnswer'])->name('quiz.check');
});

    

require __DIR__.'/auth.php';
