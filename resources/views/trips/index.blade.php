@extends('layout.app')

@section('content')
    <section class="trips">
        <div class="container">
                <h2>Trips</h4>
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
    </section>
@endsection