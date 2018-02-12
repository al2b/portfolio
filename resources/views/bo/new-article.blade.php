@extends('layouts.bo')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col">
        <h1>Ecrire un nouvel article</h1>
        {{ Form::open(['url' => 'posts/store']) }}

            <div class="form-group">
                {{ Form::label('title', 'Title :') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
                {!! $errors->first('title', '<small class="help-block">:message</small>') !!}

            </div>

    <div class="form-group">
        {!! Form::label('description', 'Description :') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<small class="help-block">:message</small>') !!}

    </div>

    <div class="form-group">
        {!! Form::label('contenu', 'Contenu :') !!}
        {!! Form::textarea('contenu', null, ['class' => 'form-control']) !!}
        {!! $errors->first('contenu', '<small class="help-block">:message</small>') !!}

    </div>

    <div class="form-group">
        {!! Form::label('slug', 'slug :') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        {!! $errors->first('slug', '<small class="help-block">:message</small>') !!}

    </div>
            <div class="form-group">
        {!! Form::label('active', 'Actif :') !!}
        {!! Form::checkbox('active', 1, ['class' => 'form-control']) !!}
        {!! $errors->first('slug', '<small class="help-block">:message</small>') !!}

            </div>
            <div class="form-group">
                {!! Form::label('category', 'Choose a category') !!}
                {!! Form::select('category', $select, null, ['class'=>'form-control']) !!}
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