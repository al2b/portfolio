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
                        <li>En ce moment : <strong>Développeuse web PHP </strong>- <a
                                    href="http://www.mister-auto.com/">Mister Auto</a></li>
                        <li>Chargée de référencement naturel, de 2013 à 2017 - <a
                                    href="https://www.c-mon-assurance.com/"> Alptis Direct</a></li>
                        <li>Chef de projet SEO - <a href="https://www.cybercite.fr/">Agence CyberCité</a>, de 2012 à
                            2013
                        </li>
                        <li>Chef de projet logiciel - Infoworks, de 2010 à 2012</li>
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
                        <li><a href="https://certificates.opquast.com/certificate/UZE5J7/">opquast : niveau avancé</a> </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h2>Mon expérience :</h2>
                    <ul><a href="../mes-realisations"> Voir mes réalisations</a></ul>
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