@extends('layout')

@section('content')
    @include('header')

    <main class="px-3">
        @if(auth()->user()->clientProfile)
            @include('client-profile')
        @elseif(auth()->user()->restaurantProfile)
            @include('restaurant-profile')
        @endif
    </main>
@endsection
