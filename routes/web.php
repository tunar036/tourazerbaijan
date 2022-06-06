<?php

use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

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


Route::get('destinations',function(){
    return view('frontend.destinations');
})->name('destinations');


Route::get('blog',function(){
    return view('frontend.blog');
})->name('blog');


Route::get('contact-us',function(){
    return view('frontend.contact');
})->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
