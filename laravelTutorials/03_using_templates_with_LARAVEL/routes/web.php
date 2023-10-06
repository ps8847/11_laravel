<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\TicketController;
use App\Http\Controllers\uploadController;

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

Route::get('/' , [IndexController::class , 'index']);

Route::get('/ticket' , [TicketController::class , 'index']);

Route::get('/upload' , function(){
    return view('upload');
});

Route::post('/upload/up' , [uploadController::class , 'upload']);