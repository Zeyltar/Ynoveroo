@extends('layout')

@section('content')
    @include('header')

    <main class="px-3">
        <h1>Ynoveroo</h1>
        <p class="lead">
            Site de livraison de repas
        </p>
        @if(!auth()->check())
            <p class="lead">
                <a href="/inscription" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Inscription</a>
                <a href="/inscription-restaurant" class="text-muted d-block link">Vous êtes restaurateur? Inscrivez-vous ici.</a>
            </p>
        @else
            <a href="/restaurants" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Parcourir</a>
        @endif
    </main>
@endsection
