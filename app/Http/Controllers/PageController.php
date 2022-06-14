<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class PageController extends Controller
{
    public function index()
    {
        $trips = Trip::limit(3)->get();
        //dd($trips);
        return view('home', compact('trips'));
    }
}
