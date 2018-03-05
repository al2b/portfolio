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
                {!! Form::label('img', 'img :') !!}
                {!! Form::text('img', null, ['class' => 'form-control']) !!}
                {!! $errors->first('img', '<small class="help-block">:message</small>') !!}

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
    <script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <script>
        var editor_config = {

            path_absolute : "{{ URL::to('/') }}/",
            selector : "textarea",
            plugins : [
                " autolink lists image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify |bullist numlist outdent indent | link image media",
            relative_urls : false

        };
        tinymce.init(editor_config);
    </script>
@endsection
@section('footer')
@parent
@endsection