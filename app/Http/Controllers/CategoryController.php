<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        dd($categories = Category::where('status',1)->get());
        return view('frontend.destinations',compact('categories'));
    }
}
