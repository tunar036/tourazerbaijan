<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'text' => 'required',
            'tour_id' => 'required',
        ]);

        Review::create([
            'name'=>$request->name,
            'tour_id' =>$request->tour_id,
            'email'=>$request->email,
            'text' =>$request->text,
            // 'status' => 0,
        ]);
        return redirect()->back()->with('success','Mesajınız yoxlanışa göndərildi.');
    }
}
