@extends('layout')

@section('content')
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Ynoveroo</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                @if(!auth()->check())
                    <a class="nav-link" href="/connexion">Connexion</a>
                @else
                    <a class="nav-link" href="/profil">Profil</a>
                    <a class="nav-link" href="/deconnexion">Déconnexion</a>
                @endif
                <a class="nav-link" href="#">Contact</a>
            </nav>
        </div>
    </header>

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
            <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Parcourir</a>
        @endif
    </main>
@endsection
