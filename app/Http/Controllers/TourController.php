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


    public function single($id)
    {
        $tour = Tour::where('id',$id)->active()->firstOrFail();
        return view('frontend.tour-detail',compact('tour'));

    }
}
