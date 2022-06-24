<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Tour;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Address::active()->get();
        return view('frontend.destinations',compact('categories'));
    }

    public function single($id)
    {
        $category = Address::where('id',$id)->firstOrFail();
        $tours=Tour::where('address_id',$id)->active()->get();
        return view('frontend.tours',compact('tours','category'));
    }
}
