@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

    <div class="row">

        <div class="col">
            <div class="card">
                <h1>{!!  $article->title  !!}</h1>

                <p><i>Publié le : {!! date('d-m-Y', strtotime($article->created_at)) !!} par Anne-Laure</i></p>
                <div class="row">
                    <div class="col">
                        {!! $article->description!!}
                    </div>


                    <div class="col-4">
                        <img src="{{ asset('img/nicolas.png') }}" alt="" class="img-float-right img-fluid">
                    </div>
                </div>
                    {!! $article->contenu  !!}
                    <p><b>Voir d'autres articles :</b></p>
                    <ul>
                @foreach ($articles as $arti)
                            <li> <a href="{!! $arti->id !!}"> {!! $arti->title !!} </a> </li>

                    @endforeach
                    </ul>

            </div>
        </div>
    </div>

@endsection
@section('footer')
    @parent
@endsection