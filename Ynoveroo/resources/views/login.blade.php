@extends('layout')

@section('content')

    @include('header')

    <main class="px-3">
        <form action="/connexion" method="post">
            {{ csrf_field() }}
            <input type="email" name="email" placeholder="Email">

            <input type="password" name="password" placeholder="Mot de pase">

            <input type="submit" value="Connexion">

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
