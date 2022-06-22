<?php

namespace App\Http\Controllers;

use App\Models\Review;
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
        $reviews = Review::active()->orderByDesc('created_at')->get();
        return view('frontend.tour-detail',compact('tour','reviews'));

    }
}
