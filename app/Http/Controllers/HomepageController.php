<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Address;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Tour;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $sliders = Slider::active()->get();
        $about_us= About::firstOrFail();
        // dd($about_us);
        $categories = Address::active()->get();
        $populars = Tour::active()->where('order',1)->get();
        // dd($populars);
        return view('frontend.index',compact('sliders','categories','about_us','populars'));
    }
}
