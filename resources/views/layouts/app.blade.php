<!doctype html>
<html lang="{{ app()->getLocale() }}">
@section('header')
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
@show

<body>
<div id="particles-js"></div>

<div class="container">

    @section('navbar')
        <div class="col">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link {!!(Request::is('/')) ? ' active ' : '' !!}" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!!(Request::is('blog')) ? ' active ' : '' !!}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!!(Request::is('mes-realisations')) ? ' active ' : '' !!}"
                       href="/mes-realisations">Réalisations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!!(Request::is('cv')) ? ' active ' : '' !!}" href="/cv">CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {!!(Request::is('contact')) ? ' active ' : '' !!}"
                       href="/contact">Contactez-moi</a>
                </li>
            </ul>
        </div>
    @show
</div>
<div class="container">
    @yield('content')

    @section('footer')
        <div class="col-12 ">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cv">CV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mes-realisations">Réalisations</a>
            </li>
        </ul>
        </div>

    @show
</div>
@section('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="{{ asset('js/particles-js.js') }}"></script> <!-- stats.js lib -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


@show

</body>
</html>