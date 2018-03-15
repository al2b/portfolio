@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

    <div class="row">

        <div class="col">
            <div class="card">
                <p><a href="{{URL::route('welcomeblog')}}"> <i class="fas fa-chevron-left"></i> Retourner à la liste des articles</a></p>
                <h1>{!!  $article->title  !!}</h1>

                <p><i>Publié le : {!! date('d-m-Y', strtotime($article->created_at)) !!} par Anne-Laure</i></p>
                <div class="row">
                    <div class="col">
                        {!! $article->description!!}
                    </div>


                    <div class="col-4">
                        <img src="/../img/{{$article->img}}" alt="{{  $article->title  }}"
                             class="img-fluid">
                    </div>
                </div>
                    {!! $article->contenu  !!}
                    <p><b>Voir les derniers articles publiés :</b></p>
                    <ul>
                @foreach ($articles as $arti)
                            <li> <a href="{!! $arti->slug !!}"> {!! $arti->title !!} </a> </li>

                    @endforeach
                    </ul>
                <p><a href="{{URL::route('welcomeblog')}}"> <i class="fas fa-chevron-left"></i> Retourner à la liste des articles</a></p>

            </div>
        </div>
    </div>

@endsection
@section('footer')
    @parent
@endsection