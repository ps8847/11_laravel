<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

//methdo 1
Route::get('/' , [demoController::class , 'index']);
Route::get('/about' , [demoController::class , 'about']);
Route::get('/courses' , [demoController::class , 'courses']);

//method 2
Route::get('/' , 'App\Http\Controllers\demoController@index');
Route::get('/about' , 'App\Http\Controllers\demoController@about');
Route::get('/courses' , 'App\Http\Controllers\demoController@courses');

