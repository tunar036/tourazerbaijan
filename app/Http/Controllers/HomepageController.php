<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $sliders = Slider::active()->get();
        $categories = Category::active()->get();
        return view('frontend.index',compact('sliders','categories'));
    }
}
