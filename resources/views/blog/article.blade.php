@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

    <h2>Derniers articles</h2>
    <div class="container1">

        <div class="real">



                <div class="content-real">

                    <h3>{!!  $article->title  !!}</h3>
                    <p>Publié le : {!! $article->created_at !!}</p>
                    <p>{!! $article->contenu  !!}</p>
                </div>


        </div>
    </div>

@endsection
@section('footer')
    @parent
@endsection