@extends('layouts.app')
@section('title', 'Page Title')
@section('navbar')
    @parent
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h1>Mon parcours professionnel :</h1>
                    <p>J'ai travaillé au sein de ces agences ou annonceurs :</p>
                    <ul>
                        <li>Actuellement : <strong>Développeuse web PHP (en stage) </strong>- <a
                                    href="http://www.mister-auto.com/">Mister Auto</a></li>
                        <ul>
                            <li>
                                Maintenance et évolution du système d’affectation de commandes aux fournisseurs.
                            </li>
                        </ul>
                        <br>
                        <li><strong>Chargée de référencement naturel -</strong> de 2013 à 2017 - <a
                                    href="https://www.c-mon-assurance.com/"> Alptis Direct</a></li>
                        <ul>
                            <li>Création de plans éditoriaux et rédaction de contenus ;</li>
                            <li> Optimisations techniques des pages et du site ;</li>
                            <li> Développement de la popularité de la marque;</li>
                            <li> Gestion de projet : demande d’évolutions, suivi et recettes. </li>
                        </ul>
                        <br>

                        <li><strong>Chef de projet SEO -</strong> <a href="https://www.cybercite.fr/">Agence CyberCité</a>, de 2012 à
                            2013
                        </li>
                        <ul>

                            <li>
                                Audit qualité de sites, préconisations et spécifications techniques ;
                            </li>
                            <li> Accompagnement des clients dans leur stratégie.
                            </li>
                        </ul>
                        <br>

                        <li><strong>Chef de projet logiciel -</strong> Infoworks, de 2010 à 2012</li>
                        <ul>
                            <li>Gestion de projet : évolutions et maintenance du logiciel ;</li>
                               <li> Mise en place et suivi du projet des clients, notamment pour les développements spécifiques ;</li>
                        </ul>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h2>Ma formation / Certifications :</h2>
                    <ul>
                        <li><a href="https://wildcodeschool.fr/">Wild Code School </a>- Développement web, Titre RNCP
                            niveau II
                        </li>
                        <li><a href="https://certificates.opquast.com/certificate/UZE5J7/">Certification opquast : niveau avancé</a> </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h2>Technologies :</h2>
                    <ul>
                        <li>PHP</li>
                        <li>Frameworks : Symfony, Laravel</li>
                        <li>Doctrine, Eloquent</li>
                        <li>HTML5, Sass</li>
                        <li>Git</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('footer')
    @parent
@endsection