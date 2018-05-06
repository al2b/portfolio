@extends('layouts.app')
@section('title', 'Mon parcours professionnel et mes formations')
@section('navbar')
    @parent
@endsection
@section('content')
    <h1>Parcours professionnel et formation:</h1>

    <div class="row">
        <div class="col card">

            <br>
            <h3>Développeuse web PHP (en stage) </h3>

            <div class="row">

                <div class="col">
                    Depuis février 2018 - <a
                            href="http://www.mister-auto.com/">Mister Auto</a>,
                    <ul>
                        <li>
                            Maintenance du code Legacy (PHP 5.3, SQL).
                        </li>
                        <li>
                            Participation à la création de la nouvelle architecture.
                        </li>
                        <p><b>Technologies:</b> PHP, Zend Expressive, Rabbit MQ, SQL, Doctrine, SOAP</p>
                    </ul>
                </div>
                <div class="col-4 d-none d-sm-block">
                    <img src="{{ asset('img/mister-auto.jpg') }}" class="d-none d-sm-block img-fluid img-minus ">
                </div>

            </div>
            <br>
            <h3>Chargée de référencement naturel </h3>
            <div class="row">
                <div class="col">
                    de 2013 à 2017 - <a
                            href="https://www.c-mon-assurance.com/"> Alptis Direct</a>
                    <ul>
                        <li>Création de plans éditoriaux et rédaction de contenus ;</li>
                        <li> Optimisations techniques des pages et du site ;</li>
                        <li> Développement de la popularité de la marque;</li>
                        <li> Gestion de projet : demande d’évolutions, suivi et recettes.</li>
                    </ul>
                </div>

                <div class="col-4 d-none d-sm-block">
                    <img src="{{ asset('img/cmonassurance.jpg') }}" class="d-none d-sm-block img-fluid img-minus ">
                </div>
            </div>

            <h3>Chef de projet SEO -</h3>
            <div class="row">
                <div class="col">
                    <a href="https://www.cybercite.fr/">Agence CyberCité</a>, de
                    2012 à
                    2013
                    <ul>

                        <li>
                            Audit des sites, rédaction de préconisations et spécifications techniques, suivi ;
                        </li>
                        <li> Accompagnement des clients dans leur stratégie : choix des mots-clés, mise en place du
                            calendrier d'actions, etc.
                        </li>
                    </ul>
                </div>
                <div class="col-4 d-none d-sm-block">
                    <img src="{{ asset('img/logo-cybercite.png') }}" class="d-none d-sm-block img-fluid img-minus ">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Chef de projet logiciel </h3> Infoworks, de 2010 à 2012
                    <ul>
                        <li>Gestion de projet : évolutions et maintenance du logiciel ;</li>
                        <li> Mise en place et suivi du projet des clients, notamment pour les développements
                            spécifiques ;
                        </li>
                    </ul>
                </div>
            </div>
            <h3>Rédactrice web </h3>
            <div class="row">
                <div class="col">
                    Idep Multimedia, de 2009 à 2010
                    <ul>
                        <li>Rédaction de contenus et optimisation des pages, rédaction de title, meta description ...
                        </li>
                    </ul>
                </div>
                <div class="col-4 d-none d-sm-block hidden-sm">
                    <img src="{{ asset('img/idep-multimedia.gif') }}" class="d-none d-sm-block img-fluid">
                </div>
            </div>



        </div>

    </div>
    <div class="row">
        <div class="col card">
            <h2>Formation / Certifications :</h2>
            <div class="row">
                <div class="col">
                    <h3>Wild Code School </h3>

                    <p><a href="https://wildcodeschool.fr/">Ecole de développement web, Titre RNCP
                            niveau II</a></p>
                    <ul>
                        <li>
                            Enseignements : Algorithmie, PHP, SQL (bases), Symfony, Doctrine, culture générale
                            autour du
                            web,
                        </li>
                        <li>
                            Réalisation d'un site pour chercher et trouver un logiciel de marketing automation.
                        </li>
                    </ul>
                </div>
                <div class="col-4 d-none d-sm-block hidden-sm">
                    <img src="{{ asset('img/wild-code-school.jpg') }}"
                         class="d-none d-sm-block img-minus ">
                </div>
            </div>
            <h3>Certification opquast</h3>
            <div class="row">
                <div class="col">
                    <li><a href="https://certificates.opquast.com/certificate/UZE5J7/">
                            Obtention du certificat niveau avancé</a></li>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col card">
            <h2>Technologies :</h2>
            <ul>
                <li>PHP 7.1</li>
                <li>Frameworks : Symfony, Laravel</li>
                <li>Doctrine, Eloquent</li>
                <li>HTML5, CSS 3, Sass</li>
                <li>Git</li>
            </ul>
        </div>
    </div>
@endsection
@section('footer')
    @parent
@endsection