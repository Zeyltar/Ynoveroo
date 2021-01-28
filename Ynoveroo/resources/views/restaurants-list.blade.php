@extends('layout')

@section('content')
    @include('header')

    @foreach($list as $restaurant)
        <div class="card text-dark" style="width: 18rem;">
            <img src="{{ route('image.path', $restaurant->image_id) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$restaurant->owner->name}}</h5>
                <p class="card-text">{{$restaurant->address}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    @endforeach
@endsection
