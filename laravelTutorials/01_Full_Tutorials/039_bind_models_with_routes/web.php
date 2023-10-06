<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\IndexController;


Route::get('/profile/{id}' , [IndexController::class , 'getData']);
