@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')



    <div class="container1">
        <h1>Mes réalisations</h1>
        <div class="container-row1">


        </div>
        <div class="barre"></div>

        <div class="real">
            <div class="content-real">
                <h2> Dernière réalisation</h2>
                <h3>Moteur de recherche / comparateur : compare.pro</h3>
                <p>Dans le cadre de ma formation, au sein d'une équipe de 4 personnes, j'ai réalisé un site
                    permettant de trouver le meilleur outil de marketing automation pour son entreprise.
                    <br>Les principales fonctionnalités sont :
                    <br>
                <li> un moteur de recherche et un algorithme pour affiner la pertinence des résultats,</li>
                <br>
                <li>un outil d'import/export de base de données permettant l'évolution du schema,</li>
                <br>
                <li> une fonctionnalité de comparaison des produits entre eux.</li>
                <br>
                <b>Technologies :</b> Symfony 3.3, Materialize,
                </p>
                <div class="links">
                    <a href="/my-work">Voir toutes mes réalisations</a>
                </div>
            </div>

            <div class="barre"></div>
        </div>
        <div class="real">

            <div class="content-real">
                <h2> Derniers articles publiés </h2>
                <h3>Hackathon n°2 : une app pour Google Home</h3>
                <p>Ces deux derniers jours ont été entièrement consacrés à un hackathon, issu d’un partenariat entre mon école et l’Efap, une école de communication. L’objectif était de trouver une idée (et de la réaliser techniquement 😉 ) d’app pour Sushi Shop, sur Google Home. J’étais ravie de travailler sur Google Home, car cela m’a permis de découvrir le monde des chatbots.…

                </p>
            </div>
        </div>
        <div class="real">
            <div class="content-real">
                <h3>Hackathon n°2 : une app pour Google Home</h3>
                <p>Ces deux derniers jours ont été entièrement consacrés à un hackathon, issu d’un partenariat entre mon école et l’Efap, une école de communication. L’objectif était de trouver une idée (et de la réaliser techniquement 😉 ) d’app pour Sushi Shop, sur Google Home. J’étais ravie de travailler sur Google Home, car cela m’a permis de découvrir le monde des chatbots.…

                </p>
            </div>
        </div>
        <div class="barre"></div>

    </div>
@endsection
@section('navbar')
    @parent
@endsection


