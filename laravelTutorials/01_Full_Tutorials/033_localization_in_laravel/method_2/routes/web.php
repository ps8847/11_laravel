<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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





Route::get('/{lang?}' , function($lang = null) {
    App::setLocale($lang);
    return view('welcome');
});

