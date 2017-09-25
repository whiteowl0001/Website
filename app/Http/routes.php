<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/nav', function(){
    return view('nav');
});
Route::get('/mybiz', function(){
    return view('mybiz');
});
Route::get('/portfolio', function(){
    return view('portfolio');
});
Route::get('/superformance', function(){
    return view('superformance');
});
Route::get('/roofing', function(){
    return view('layouts.master');
});
Route::get('/lone-wolf', function(){
    return view('preowned');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/development', function(){
    return view('development');
});
Route::get('/dog', function(){
    return view('dog');
});
Route::get('/lawyer', function(){
    return view('lawyer');
});
Route::get('/review', function(){
    return view('review');
});
Route::get('/mockup-nc', function(){
    return view('mockup-nc');
});
Route::get('/daycare', function(){
    return view('daycare');
});
Route::get('/code', function(){
    return view('code');
});
Route::get('/volcan', function(){
    return view('Volcan');
});