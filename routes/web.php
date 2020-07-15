<?php

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
Route::get('exam','exam')
Route::get('profile/{name}','ProfileController@showProfile');
Route::get('home','HomeController@showWelcome');
Route::get('about','AboutController@showAbout');
Route::get('/', function () {
    return view('welcome');
});

    //Route::get('about',function(){
        //return 'About Content';
   // });
Route::get('about/{theSubject}','AboutController@showSubject');

    Route::get('about/directions',function (){
        return 'Directions go here';
    });
    Route::any('submit_form',function(){
        return'Process Form';
    });
    Route::get('about/{theSubject}',function ($theSubject){
        return $theSubject. 'content goes here';
    });
Route::get('about/classes/{theArt}/{thePrice}',function ($theArt, $thePrice){
    return "the Product is $theArt and $thePrice here";
});
Route::get('where',function(){
   return Redirect::to('about/direction');
});
