@extends('layout.app')

@section('content')
    <section class="trip">
        <div class="container">
            <h2 class="text-light text-center">{{ $trip->location }}</small></h2>
            <div class="row py-4 align-items-center">
                <div class="col">
                    <div class="metadata text-light">
                        <div class="days"><strong>Days: </strong>{{ $trip->duration_days }};</div>
                        <div class="nights"><strong>Nights: </strong>{{ $trip->duration_nights }};</div>
                        <div class="accomodation"><strong>Accomodation: </strong>{{ $trip->accomodation }};</div>
                        <div class="description"><strong>Description: </strong>{{ $trip->description }};</div>
                        <div class="price"><strong>Price</strong> € {{ $trip->price }}</div>
                        <div class="action d-flex p-3 g-4">
                            <div
                                class="availability flex-grow-1 {{ $trip->is_available ? 'bg-success d-block' : 'd-none' }}">
                                <strong>Only few spots available!</strong>
                            </div>
                            <div
                                class="availability flex-grow-1 text-uppercase {{ !$trip->is_available ? 'bg-danger d-block' : 'd-none' }}">
                                <strong>Sold Out</strong>
                            </div>
                            <a href="" class="btn btn-primary flex-grow-1">Buy Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img class="img-fluid" src="{{ $trip->image }}" alt="Title">
                </div>
            </div>
        </div>
    </section>
@endsection
