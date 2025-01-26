@extends ('layout/app')

@section ('style')
	<link rel="stylesheet" href="{{ URL::asset('assets/style/style.css') }}">
@endsection

@section ('script')
	<script src="{{ URL::asset('assets/scripts/script.js') }}" charset="utf-8"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
@endsection

@section ('content')
	@include ('partials/header')

  <div class="app-wrapper">
	    <div class="main-content">
        <header class="header">
          	@include ('pages/navbar')
        </header>

        <section id="analyzer" class="content-section">
          	@include ('pages/quiz_form')
        </section>

				<div class="quiz-container">
				</div>

	    </div>
    </div>
@endsection
