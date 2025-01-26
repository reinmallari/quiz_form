<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuizController extends Controller
{

  public function index()
  {
      $response = Http::get('https://opentdb.com/api_category.php');
      if ($response->ok()) {
          $categories = $response->json()['trivia_categories'];
      } else {
          $categories = [];
      }
      return view('pages/quiz', ['categories' => $categories]);
  }
  // Method to fetch trivia questions from the database
  public function get($num_of_questions, $difficulty_type, $question_type, $category)
  {
        // Base URL
    $api_url = "https://opentdb.com/api.php?amount={$num_of_questions}&category={$category}";

    // Conditionally add parameters if they're not 'any'
    if ($difficulty_type !== 'any') {
        $api_url .= "&difficulty={$difficulty_type}";
    }

    if ($question_type !== 'any') {
        $api_url .= "&type={$question_type}";
    }

    $response = Http::get($api_url);

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
