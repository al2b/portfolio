@extends('layouts.bo')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

    <div class="row">

        <a href="{{ URL::action('HomeController@index') }}">Retour à la liste</a>

        <div class="col">
            <h1>Modifier l'article</h1>
            {{ Form::model($article, [ 'url' => URL::action('HomeController@update', $article ), 'method' => 'post'])}}
            <p>{{ Form::label('title', 'Titre :') }} {{ Form::text('title') }}</p>
            <p>{{ Form::label('description', 'description :') }} {{ Form::textarea('description') }}</p>
            <p>{{ Form::label('content', 'Contenu :') }} {{ Form::textarea('contenu') }}</p>
            <p>{{ Form::label('slug', 'slug :') }} {{ Form::text('slug') }}</p>
            <p>{{ Form::label('img', 'img :') }} {{ Form::file('img') }}</p>
            {{ Form::submit() }}
            {{ Form::close() }}
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