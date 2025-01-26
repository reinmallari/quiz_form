<!-- Modal -->
<div class="modal fade" id="quiz_modal" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quizModalLabel">Quiz Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="quiz_form" class="form">
                    @csrf
                    <!-- Example Input -->
                    <div class="mb-3">
                        <label for="questionInput" class="form-label">Number of Question:</label>
                        <input type="text" class="form-control" id="number_of_questions" name="number_of_questions">
                    </div>
                    <div class="mb-3">
                        <label for="questionInput" class="form-label">Difficulty:</label>
                        <select class="form-control" id="difficulty_type" name="difficulty_type" class="form-select">
                            <option value="any">Any</option>
                            <option value="easy">Easy</option>
                            <option value="medium">Medium</option>
                            <option value="hard">Hard</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="questionInput" class="form-label">Question Type:</label>
                        <select class="form-control" id="question_type" name="question_type" class="form-select">
                            <option value="any">Any</option>
                            <option value="multiple">Multiple Choice</option>
                            <option value="boolean">True / False</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="questionInput" class="form-label">Categories:</label>
                        <select class="form-control" id="category" name="category" class="form-select">
                            <option value="any">Any Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
				            <div class="modal-footer">
				                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				                <button type="submit" class="btn btn-primary">Generate Questions</button>
				            </div>
	            </form>
		        </div>
        </div>
    </div>
</div>
