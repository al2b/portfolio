@extends('layouts.bo')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

    <div class="row">

        <a href="{{ URL::action('PostController@index') }}">Retour à la liste</a>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <i>{{ $post->user->name }} {{ $post->user->firstname }}</i>
        <p>
            <a href="{{ URL::action('PostController@edit', $post->id) }}" class="button">Editer</a>
            {{ Form::model(
                     $post, [
                        'url' => URL::action('PostController@delete', $post ),
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