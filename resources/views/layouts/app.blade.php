<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">



</head>
<body>


<div class="content">
    @section('navbar')
        <div class="nav">
        <div class="links">
            <a href="http://localhost:8000/">Accueil</a>
            <a href="http://localhost:8000/blog">Blog</a>
            <a href="http://localhost:8000/cv">CV</a>
            <a href="http://localhost:8000/">Réalisations</a>
            <a href="http://localhost:8000/">Contact</a>
        </div>
        </div>
    @show
    @yield('content')


</div>
</body>
</html>