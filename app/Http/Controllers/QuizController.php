<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{

  // Method to fetch trivia questions from the database
  public function index()
  {
      // $questions = Quiz::all(); // Fetch all questions from the database
      // return response()->json($questions); // Return the questions as JSON
  }

  public function get()
  {
    $response = Http::get("https://opentdb.com/api.php?amount=10&difficulty=easy&type=multiple");
    if ($response->ok()) {
       $questions = $response->json()['results'];
       return response()->json($questions);  // Return the trivia questions as JSON
     }
    return response()->json(['error' => 'Failed to fetch trivia questions.'], 500);
  }
}
