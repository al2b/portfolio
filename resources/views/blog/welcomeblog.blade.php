@extends('layouts.app')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection
@section('content')

    <div class="row">
        <div class="col">
        <h1>Mon blog</h1>
        </div>
    </div>
        <p>
        Je partage ici pèle-mèle mes expériences sur mon apprentissage du développement, sur les réalisations ou les différents projets sur lesquels j'ai pu collaborer. On peut également y trouver quelques billets d'humeur. J'espère que la visite vous plaira ;)
    </p>

        <?php $i = 0; ?>

        @foreach($articles as $article)
            <div class="row">

            <div class="col">
                <div class="card">

            <h5><a href="blog/{!! $article->id !!}">{!!  $article->title  !!}</a></h5>
            <p>Publié le : {!! $article->created_at !!}</p>
                    <div class="row">
                        <?php if($i % 2) {?>

                        <div class="col"><p>{!! $article->description  !!}</p>            <a href="blog/{!! $article->id !!}"> Lire la suite </a>
                        </div>
                        <div class="col-4"><img src="{{ asset('img/nicolas.png') }}" alt="{!!  $article->title  !!}" class="img-fluid"> </div>
                        <?php }else{?>
                            <div class="col-4"><img src="{{ asset('img/nicolas.png') }}" alt="{!!  $article->title  !!}" class="img-fluid"> </div>

                            <div class="col"><p>{!! $article->description  !!}</p>            <a href="blog/{!! $article->id !!}"> Lire la suite </a>
                            </div>


                        <?php }?>

                    </div>
                </div>
            </div>
            </div>
            <?php $i++;?>
        @endforeach

@endsection
@section('footer')
    @parent
@endsection

