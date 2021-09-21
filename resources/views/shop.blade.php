<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tshirt.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
</head>

<body>
@include('partials.header')
<main role="main">
    @yield('content')
</main>
<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a style="text-decoration: none" href="#">Haut de page</a>
        </p>
        <p>SweatPop - © 2021 - La Boutique Officielle</p>
    </div>
</footer>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>

