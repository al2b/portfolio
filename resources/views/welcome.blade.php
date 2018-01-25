@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection

@section('content')

    <div class="row">
        <div class="col">
            <h1>Anne-Laure, développeuse web PHP/Symfony.</h1>
        </div>
    </div>
    <div class="row">

        <div class="col-4 hidden-sm">
            <img src="{{ asset('img/al-deboissieu.jpg') }}" class="img-fluid ">
        </div>
        <div class="col">
            <p>Après quelques années dédiées au SEO et à la gestion de projets webs, j'ai décidé de <b>me tourner vers
                    le développement web </b> dans un premier temps par simple curiosité. J'ai rapidement su que je
                devais en faire mon métier. <br> <br> J'ai suivi une <b>formation spécialisée en PHP où j'ai notamment
                    exploré Symfony&nbsp;3.</b> <br> <br> J'aime découvrir de nouvelles technologies (comme NodeJS) et
                de nouveaux frameworks (comme Laravel), le cinéma bis et me déplacer en vélo. <br> <br> Merci pour votre
                visite !</p>


        </div>
    </div>
    <div class="row">
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <h2>Mes dernières réalisations</h2>

                <h3>Moteur de recherche / comparateur : compare.pro</h3>
                <div class="row">
                    <div class="col">
                        <p class="lead">Dans le cadre de ma formation, au sein d'une équipe de 4 personnes, j'ai réalisé un site
                            permettant de trouver le meilleur outil de marketing automation pour son entreprise.
                            <br>Les principales fonctionnalités sont :
                            <br>
                        <ul>
                            <li> un moteur de recherche et un algorithme pour affiner la pertinence des résultats,</li>
                            <li>un outil d'import/export de base de données permettant l'évolution du schema,</li>
                            <li> une fonctionnalité de comparaison des produits entre eux.</li>
                        </ul>
                        <b>Technologies :</b> Symfony 3.3, Materialize,
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/nicolas.png') }}" alt="" class="img-fluid">
                    </div>
                </div>

                <div>
                    <button type="button" href="/my-work" class="btn-lg btn btn-outline-secondary float-right">Voir tous
                        mes travaux
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Un peu de lecture ? </h2>
        </div>
    </div>

    <div class="row">

        <?php $i = 0;?>

        @foreach($articles as $article)

            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog/{!! $article->id !!}">{!!  $article->title  !!}</a>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">Publié le : {!! $article->created_at !!}</h6>
                        <p class="card-text">{!! $article->description  !!}</p>
                        <div>
                            <button type="button" href="blog/{!! $article->id !!}"
                                    class="btn btn-outline-secondary float-right">Lire la suite
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++;?>
            <?php if($i % 3 === 0) {?>
    </div>
    <div class="row">
        <?php

        }
        ?>
        @endforeach

    </div>

@endsection


