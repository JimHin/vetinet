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
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Le Shop de la Pop'Culture</h1>
                <p class="lead text-muted">Tu trouveras forcément ton univers</p>

            </div>
        </div>
    </section>
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
