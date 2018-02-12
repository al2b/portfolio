@extends('layouts.bo')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

    <div class="row">

        <a href="/home">Retour à la liste</a>
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->description }}</p>
        <p>
            <a href="" class="button">Editer</a>
            {{ Form::model(
                     $article, [
                        'url' => URL::action('HomeController@remove', $article ),
                        'method' => 'DELETE'
                     ]
               )
            }}
            {{ Form::submit('Delete', ['class' => 'button']) }}
            {{ Form::close() }}
        </p>

    </div>

@endsection
@section('footer')
    @parent
@endsection