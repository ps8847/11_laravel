<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;

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

Route::get('/' , function() {
    return view('index');
});
//Route::get('/register' , [RegistrationController::class , 'index']);
//Route::post('/register' , [RegistrationController::class , 'register']);
Route::get('/customer/create' , [CustomerController::class , 'create'])->name('customer.create');
Route::get('/customer/view' , [CustomerController::class , 'view']);
Route::get('/customer/delete/{id}' , [CustomerController::class , 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}' , [CustomerController::class , 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}' , [CustomerController::class , 'update'])->name('customer.update');
Route::post('/customer' , [CustomerController::class , 'store']);

