@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

<h1>Mon blog</h1>
<div class="container1">

<div class="real">
    <p>
        Je partage ici pèle-mèle mes expériences sur mon apprentissage du développement, sur les réalisations ou les différents projets sur lesquels j'ai pu collaborer. On peut également y trouver quelques billets d'humeur. J'espère que la visite vous plaira ;)
    </p>
    <div class="barre"></div>


        @foreach($articles as $article)
        <div class="content-real">

        <h3>{!!  $article->title  !!}</h3>
            <p>Publié le : {!! $article->created_at !!}</p>
            <p>{!! $article->description  !!}</p>
            <p><a href=""> Lire la suite </a></p>
        </div>

    @endforeach
</div>
</div>

@endsection
@section('footer')
    @parent
@endsection

