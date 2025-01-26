$(document).ready(function() {
    // Fetch trivia questions when the page loads
    $.ajax({
        url: '/quiz/get', // API endpoint to get trivia questions
        method: 'GET',
        success: function(response) {
          console.log(response)
            // Display trivia questions in the #quiz-container div
            if (response.length > 0) {
                let quizHtml = '';
                response.forEach(function(question, index) {
                    quizHtml += `
                               <div class="card mb-3">
                                   <div class="card-body">
                                       <h5 class="card-title">${index + 1}. ${question.question}</h5>
                                       <ul class="list-group">
                                           <li class="list-group-item list-group-item-primary">Correct Answer: ${question.correct_answer}</li>
                                           <li class="list-group-item">Incorrect Answers:</li>
                                           ${question.incorrect_answers.map(function(answer) {
                                            return `<li class="list-group-item red">${answer}</li>`;
                                            })}
                                       </ul>
                                   </div>
                               </div>
                           `;
                });

                $('.quiz-container').html(quizHtml); // Insert questions into the container
            } else {
                $('.quiz-container').html('<p>No trivia questions available.</p>');
            }
        },
        error: function() {
            $('.quiz-container').html('<p>Failed to fetch trivia questions.</p>');
        }
    });
});
