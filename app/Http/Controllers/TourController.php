<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::active()->get();
        // dd($tours);
        return view('frontend.tours',compact('tours'));
    }
}
