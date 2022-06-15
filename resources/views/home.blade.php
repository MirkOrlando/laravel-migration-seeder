@extends('layout.app')

@section('content')
    <div class="jumbo p-5 bg-transparent text-light">
        <div class="container">
            <h1 class="display-3">Travel Agency</h1>
            <p class="lead">Welcome! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, vero!</p>
            <p class="lead">
                <a class="btn btn-success text-uppercase" href="{{route('trips.index')}}" role="button">Travel with us!</a>
            </p>
        </div>
    </div>

    <div class="last_availables text-light">
        <div class="container">
            <div class="top d-flex justify-content-between align-items-center">
                <h4>Latest Available Trips</h4>
                <a class="btn btn-outline-light btn-sm d-flex justify-content-center align-items-center" href="{{route('trips.index')}}">See All</a>
            </div>
            <div class="row row-cols-3 pt-3 g-4">
                @forelse ($trips as $trip)
                <div class="col">
                    <a href="{{route('trips.show', $trip->id)}}">
                        <div class="card h-100 d-block">
                            <img class="card_img" src="{{$trip->image}}" alt="Title">
                                <h5 class="card_title position-absolute m-0 p-3">{{$trip->location}}</h5>
                        </div>
                    </a>
                </div>
                @empty
                <p>Nothing to show</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection