<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Address;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $sliders = Slider::active()->get();
        $about_us= About::firstOrFail();
        $categories = Address::active()->get();
        // dd($categories);
        return view('frontend.index',compact('sliders','categories','about_us'));
    }
}
