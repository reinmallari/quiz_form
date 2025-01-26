<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('trivia_questions', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('category'); // Question category
        $table->string('difficulty'); // Difficulty level
        $table->string('type'); // Type of question (e.g., multiple choice)
        $table->text('question'); // The trivia question
        $table->string('correct_answer'); // The correct answer
        $table->json('incorrect_answers'); // The incorrect answers as a JSON array
        $table->timestamps(); // Created at and Updated at timestamps
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trivia_questions');
    }
};
