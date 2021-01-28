<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0">Ynoveroo</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link" aria-current="page" href="/">Accueil</a>
            @if(!auth()->check())
                @if(url()->current('connexion'))
                    <a class="nav-link active" href="/connexion">Connexion</a>
                @else
                    <a class="nav-link" href="/connexion">Connexion</a>
                @endif
            @else
                @if(url()->current('profil'))
                    <a class="nav-link active" href="/profil">Profil</a>
                @else
                    <a class="nav-link" href="/profil">Profil</a>
                @endif
                <a class="nav-link" href="/deconnexion">Déconnexion</a>
            @endif
            <a class="nav-link" href="#">Contact</a>
        </nav>
    </div>
</header>
