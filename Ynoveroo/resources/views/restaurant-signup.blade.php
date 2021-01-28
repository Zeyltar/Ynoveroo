@extends('layout')

@section('content')
    @include('header')

    <main class="px-3">
        <form action="/inscription-restaurant" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="name" name="name" placeholder="Nom" value="{{ old('name') }}" required>

            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>

            <input type="text" name="address" placeholder="Adresse" required>

            <input type="file" name="logo" accept=".jpg,.jpeg,.png">

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
