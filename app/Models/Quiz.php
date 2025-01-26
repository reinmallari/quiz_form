<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

  protected $table = "trivia_questions";

  protected $fillable = [
      'category',
      'difficulty',
      'type',
      'question',
      'correct_answer',
      'incorrect_answers',
  ];


}
