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
                    <div class="col-4 d-none d-sm-block"><img src="{{ asset('img/compare-pro.png') }}" alt="comparer.pro" class="d-none d-sm-block img-fluid">
                    </div>
                    <div class="col">
                        <p>Dans le cadre de ma formation, au sein d'une équipe de 4 personnes, j'ai réalisé un site
                            permettant de trouver le meilleur outil de marketing automation pour son entreprise.
                            <br>Les principales fonctionnalités sont :
                            <br>
                        <li> un moteur de recherche et un algorithme pour affiner la pertinence des résultats,</li>
                        <li>un outil d'import/export de base de données permettant l'évolution du schema,</li>
                        <li> une fonctionnalité de comparaison des produits entre eux.</li>
                        <br>
                        <b>Technologies :</b> Symfony 3.3, PostgreSQL, Doctrine, Twig, Materialize, Vue JS.

                        <br>
                            <a href="https://comparer.pro">
                            <b>Voir le site</b></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">

                <h2>Portfolio</h2>
                <div class="row">
                    <div class="col">
                        <p>Le site sur lequel vous naviguez a été un excellent exercice ! J'ai décidé d'utiliser le framework Laravel pour les besoins minimes de mon portfolio, qui nécessitent en effet de n'afficher que quelques vues et de stocker des articles pour la partie blog. <p>J'ai donc développé un simple espace d'administration où je peux créer, modifier, supprimer les articles.  </p>
                        <p>Ce portfolio m'a également permis de gérer de A à Z la mise en place d'un serveur et de la mise en ligne de mon site :)</p>
                        <br>
                        <b>Technologies :</b> Laravel 5.5, MySQL, Eloquent, Blade.
                    </div>
                    <div class="col-4 d-none d-sm-block"><img src="{{ asset('img/laravel.png') }}" alt="" class="  img-fluid">
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">

                    <h2>Fabulous Spot : outil pour les webmasters</h2>
                    <div class="row">
                        <div class="col-4 d-none d-sm-block"><img src="{{ asset('img/200.jpg') }}" alt="" class="d-none d-sm-block img-real img-fluid">
                        </div>
                        <div class="col">
                            <p>Dans ma précédente vie professionnelle, je travaillais comme chargée de SEO. J'ai toujours rêvé de développer mes propres outils SEO, mais je n'en avais pas le temps et surtout pas les compétences. Quand j'ai décidé d'apprendre à coder, j'ai décidé de m'exercer sur des fonctionnalités utiles aux webmasters, car je connaissais bien les besoins et les enjeux me semblaient intéressants.
                            </p>
                            <br>
                            <b>Technologies :</b> Symfony 3.3, MySQL, Doctrine, Twig et Materialize.
                            <p><br>
                                <a href="https://github.com/al2b/fabspot">
                                    <b>Voir le dépôt</b></a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('navbar')
    @parent
@endsection


