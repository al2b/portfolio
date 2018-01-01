@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

    <div class="container1">

        <div class="real">



                <div class="real">

                    <h1>{!!  $article->title  !!}</h1>
                    <p><i>Publié le : {!! date('d-m-Y', strtotime($article->created_at)) !!} par Anne-Laure</i></p>
                    {!! $article->description, $article->contenu  !!}
                    <p><b>Voir d'autres articles :</b></p>
                    <li></li>
                    <li></li>
                    <li></li>
                </div>


        </div>
    </div>

@endsection
@section('footer')
    @parent
@endsection