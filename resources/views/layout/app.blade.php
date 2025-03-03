<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Quiz Form API</title>
		<link rel="stylesheet" href="{{ URL::asset('assets/style/fonts/montserrat/montserrat.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('assets/style/app.css') }}">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
		@yield ('style')
	</head>
	<body>
		@yield ('content')
		<script src="{{ URL::asset('assets/scripts/jquery-3.5.1.min.js') }}" charset="utf-8"></script>
		<script src="{{ URL::asset('assets/scripts/jquery-ui.min.js') }}" charset="utf-8"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
		@yield ('script')
	</body>
</html>
