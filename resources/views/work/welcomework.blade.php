@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection

@section('content')

    <div class="row">
        <div class="col">
            <h1>Mes réalisations</h1>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">

                <h2>Moteur de recherche / comparateur : comparer.pro</h2>
                <div class="row">
                    <div class="col-4"><img src="{{ asset('img/compare-pro.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col">
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
                        <b>Technologies :</b> Symfony 3.3, Twig, Doctrine, Materialize, Vue JS.
                        <a href="http://comparer.pro"><b>Voir le site</b></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">

                <h2>Moteur de recherche / comparateur : compare.pro</h2>
                <div class="row">
                    <div class="col">
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
                        <a href="/my-work">Voir toutes mes réalisations</a>
                    </div>
                    <div class="col-4"><img src="{{ asset('img/nicolas.png') }}" alt="" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

@section('navbar')
    @parent
@endsection


