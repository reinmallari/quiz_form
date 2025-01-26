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
                        <label for="questionInput" class="form-label">Question</label>
                        <input type="text" class="form-control" id="questionInput" name="question" placeholder="Enter your question">
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
