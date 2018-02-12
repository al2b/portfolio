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
            <p>Je travaille dans le web depuis 2010, où j'ai exercé différents métiers autour de la gestion web et du SEO, en agence web puis directement chez l'annonceur. J'ai décidé de me former au métier de développeur web car ce qui m'intéresse est de "construire" une application : j'aime participer à la réflexion autour de sa conception et surtout mettre en oeuvre sa réalisation.</p>
            <p>Après avoir suivi une formation à la Wild Code School, j'ai décidé de m'orienter vers le développement orienté back-office. Mon langage de prédilection est le PHP, je travaille sur différents projets personnels afin de développer mes compétences notamment sur les frameworks Laravel et Symfony.</p>
            <p>En parallèle, je me forme via des plateformes de cours sur des frameworks JavaScript tels que React et VueJS.</p>


        </div>
    </div>

    <div class="row">
        <div class="col home">
            <h2><a href="/blog"> Un peu de lecture ? </a></h2>
        </div>
    </div>

    <div class="row">

        <?php $i = 0;?>

        @foreach($articles as $article)

            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="blog/{{ $article->slug }}">{{  $article->title  }}</a>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">Publié le : {{ $article->created_at }}</h6>
                        <p class="card-text">{{ $article->description  }}</p>
                        <div>
                            <a href="blog/{{ $article->slug }}">
                                <button type="button"
                                        class="btn btn-outline-secondary float-right">Lire la suite
                                </button>
                            </a>

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


