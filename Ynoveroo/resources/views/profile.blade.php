@extends('layout')

@section('content')
    @include('header')

    <main class="px-3">
        @if($user->clientProfile)
            @include('client-profile')
        @elseif($user->restaurantProfile)
            @include('restaurant-profile')
        @endif
    </main>
@endsection
