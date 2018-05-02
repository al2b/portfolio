@extends('layouts.app')
@section('title', 'Page Title')
@section('navbar')
    @parent
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col card">

                    <h1>Contactez-moi <i class="fab fa-angellist"></i>



                    </h1>
                    <p>Quelques moyens de me contacter :</p>
                    <ul>
                        <li>
                            <a href="https://twitter.com/AnneLaure2B"> Sur Twitter</a>;
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/anne-laure-de-boissieu/"> Sur Linkedin</a>.
                        </li>
                    </ul>

                </div>
        </div>
    </div>

@endsection
