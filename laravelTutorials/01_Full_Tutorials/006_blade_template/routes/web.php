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

Route::get('/{name?}' , function ($name = null) {
    $data = compact('name');
    return view('home')->with($data) ;
});

Route::get('/{name?}' , function ($name = null) {
    $demo = "<h2> prince >/h2>";
    $data = compact('name' , 'demo');
    return view('home')->with($data) ;
});