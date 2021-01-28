@extends('layout')
@section('content')
    @include('header')
        <div class="row">
            @foreach($list as $restaurant)
                <div class="card text-dark col p-0 m-4" style="width: 18rem;">
                    <a href=""><img src="{{ $restaurant->image_id ? route('image.path', $restaurant->image_id) : "" }}" class="card-img-top" alt=""></a>
                    <div class="card-body m-0 p-0">
                        <h5 class="card-title">{{$restaurant->owner->name}}</h5>
                        <p class="card-text">{{$restaurant->address}}</p>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
