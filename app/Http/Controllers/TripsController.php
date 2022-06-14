<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripsController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        //dd($trips);
        return view('trips.index', compact('trips'));
    }

}
