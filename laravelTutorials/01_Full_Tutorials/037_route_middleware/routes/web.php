<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\IndexController;


//Route::get('/data' , [IndexController::class , 'index']);


Route::get('/login' , function(Request $request){
    $request->session()->put('user_id' , '123');
    return redirect('customer.view');
});

Route::get('/logout' , function(Request $request){
    $request->session()->forget('user_id');
    return redirect('/');
});

Route::get('/profile' , function(){
    echo "hyy world welcome ";
});


Route::get('/no-access' , function(){
    echo "you are not allowed to access the page ";
    die;
});

Route::get('/{lang?}' , function($lang = null) {
    App::setLocale($lang);
    return view('welcome');
});


    Route::get('/customer/create' , [CustomerController::class , 'create'])->name('customer.create')->middleware('guard');
    Route::get('/customer/view' , [CustomerController::class , 'view'])->name('customer.view')->middleware('guard');
    Route::get('/customer/delete/{id}' , [CustomerController::class , 'delete'])->name('customer.delete')->middleware('guard');
    Route::get('/customer/edit/{id}' , [CustomerController::class , 'edit'])->name('customer.edit')->middleware('guard');
    Route::post('/customer/update/{id}' , [CustomerController::class , 'update'])->name('customer.update')->middleware('guard');
    Route::post('/customer' , [CustomerController::class , 'store'])->middleware('guard');
    Route::get('/customer/trash' , [CustomerController::class , 'trash'])->middleware('guard');
    Route::get('/customer/restore/{id}' , [CustomerController::class , 'restore'])->name('customer.restore')->middleware('guard');
    Route::get('/customer/force-delete/{id}' , [CustomerController::class , 'forceeDelete'])->name('customer.force-delete')->middleware('guard');
