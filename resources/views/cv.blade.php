@extends('layouts.app')
@section('title', 'Page Title')
@section('navbar')
    @parent
@endsection
@section('content')

    <div class="row">
        <div class="col">
            <h1>Mon parcours professionnel</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2>Ma formation</h2>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2>Mon expérience</h2>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2>Technologies</h2>
        </div>
    </div>
@endsection
@section('footer')
    @parent
@endsection