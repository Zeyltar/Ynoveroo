<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0">Ynoveroo</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Accueil</a>
            @if(!auth()->check())
                <a class="nav-link {{ Request::is('connexion') ? 'active' : '' }}" href="/connexion">Connexion</a>
            @else
                <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="/profil">Profil</a>
                <a class="nav-link" href="/deconnexion">Déconnexion</a>
            @endif
            <a class="nav-link" href="#">Contact</a>
        </nav>
    </div>
</header>
