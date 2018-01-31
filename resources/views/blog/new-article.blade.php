@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

    <div class="row">

        <div class="col">
        <h1>Ecrire un nouvel article</h1>
        {!! Form::open() !!}
            <div class="form-group">
            {!! Form::label('title', 'Title :') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description :') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('contenu', 'Contenu :') !!}
                {!! Form::textarea('contenu', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'slug :') !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}

            </div>
        {!! Form::close() !!}
        </div>
    </div>

@endsection
@section('footer')
    @parent
@endsection