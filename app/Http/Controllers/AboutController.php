<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about_us= About::firstOrFail();
        return view('frontend.about',compact('about_us'));
    }
}
