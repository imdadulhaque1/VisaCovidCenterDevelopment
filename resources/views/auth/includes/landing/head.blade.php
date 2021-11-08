<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{ asset('assets/center-part/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/center-part/css/landing-page.css') }}" />

{{-- <link rel="stylesheet" href="{{ asset('assets/center-part/css/register.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('assets/center-part/css/style.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('assets/center-part/css/footer.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('assets/center-part/css/header.css') }}"> --}}
<!------------- font awesome cdn-------------------- -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<title> @stack('title') | {{ config('app.name') }}</title>

@stack('css')
