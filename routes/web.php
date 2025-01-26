<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/', [QuizController::class, 'index']);

Route::get('/quiz', [QuizController::class, 'index']);
Route::get('/quiz/get/{num_of_questions}/{difficulty_type}/{question_type}/{category}', [QuizController::class, 'get']);
// Route::get('/quiz/{id}', [QuizController::class, 'show']);
// Route::put('/quiz/{id}', [QuizController::class, 'update']);
// Route::delete('/quiz/{id}', [QuizController::class, 'destroy']);
