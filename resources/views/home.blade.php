@extends('layouts.bo')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        <br>
                        <a href="http://localhost:8000/posts/create">Ecrire un nouvel article</a>
                        <br>
                    </div>
                </div>
                <br>
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <h2>Liste des articles (à supprimer/modifier)</h2>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>description</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($articles as $article)
                                    <tr>

                                    <td>{{$article->title}}</td>
                                    <td>{{$article->description}}</td>
                                    <td>Modifier</td>
                                    <td><form action="{{ route('remove', ['id' => $article->id]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </div>
                                        </form> </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
