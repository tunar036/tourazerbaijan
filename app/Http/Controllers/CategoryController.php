<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tour;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::active()->get();
        return view('frontend.destinations',compact('categories'));
    }

    public function single($id)
    {
        $category = Category::where('id',$id)->firstOrFail();
        $tours=Tour::where('address_id',$id)->active()->get();
        return view('frontend.tours',compact('tours','category'));
    }
}
