@extends('layout')

@section('content')
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Ynoveroo</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link" aria-current="page" href="/">Accueil</a>
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
        <form action="/inscription" method="post">
            {{ csrf_field() }}
            <input type="name" name="name" placeholder="Nom" value="{{ old('name') }}" required>

            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>

            <input type="date" name="birthday" placeholder="Date de naissance" required>

            <input type="password" name="password" placeholder="Mot de pase" required>

            <input type="password" name="password_confirmation" placeholder="Confirmer mot de passe" required>

            <input type="submit" value="S'inscrire">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </main>
@endsection
