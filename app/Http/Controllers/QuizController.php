<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{

  // Method to fetch trivia questions from the database
  public function get()
  {
    $response = Http::get("https://opentdb.com/api.php?amount=10&difficulty=easy&type=multiple");
    if ($response->ok()) {
       $questions = $response->json()['results'];
       foreach ($questions as $question) {
           Quiz::create([
               'category' => $question['category'],
               'difficulty' => $question['difficulty'],
               'type' => $question['type'],
               'question' => $question['question'],
               'correct_answer' => $question['correct_answer'],
               'incorrect_answers' => json_encode($question['incorrect_answers']),
           ]);
         }
       return response()->json($questions);  // Return the trivia questions as JSON
     }
    return response()->json(['error' => 'Failed to fetch trivia questions.'], 500);
  }
}
