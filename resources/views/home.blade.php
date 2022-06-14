@extends('layout.app')

@section('content')
    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Travel Agency</h1>
            <p class="lead">Welcome! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, vero!</p>
            <p class="lead">
                <a class="btn btn-primary text-uppercase" href="Jumbo action link" role="button">Travel with us!</a>
            </p>
        </div>
    </div>

    <div class="last_available">
        <div class="container">
            <div class="top d-flex justify-content-between">
                <h4>Ultimi viaggi disponibili</h4>
                <a href="@">Vedi tutti</a>
            </div>
        </div>
    </div>
@endsection