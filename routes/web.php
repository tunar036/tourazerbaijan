<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TourController;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('about-us',function(){
    return view('frontend.about');
})->name('about');

Route::get('tours',[TourController::class,'index'])->name('tours');

Route::get('tour-detail',function(){
    return view('frontend.tour-detail');
})->name('tour-detail');


Route::get('destinations',[CategoryController::class,'index'])->name('destinations');


Route::get('blog',function(){
    return view('frontend.blog');
})->name('blog');


Route::get('contact-us',function(){
    return view('frontend.contact');
})->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/locale/{locale}',function($locale) {
    session()->put('locale',$locale);
    return Redirect::back();
});