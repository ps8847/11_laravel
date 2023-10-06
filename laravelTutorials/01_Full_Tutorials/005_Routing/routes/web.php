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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/demo', function () {
//    echo "demo";
//});

//Route::post('/test' , function () {
//    echo "Testing the route";
//});

//Route::any('/test' , function () {
//    echo "Testing the route";
//});

//Route::get('/demoo', function () {
//    return view('demo');
//});


//in postman we will write the 
//http://127.0.0.1:8000/get-data 

//Route::get('/get-data' , function () {
//    return 'hello';
//});

//Route::get('/demo/{name}', function ($name) {
//    return $name;
//});

//Route::get('/demo/{name}/{id?}', function ($name , $id = null) {
//    echo $name . " ";
//    echo $id;
//});

//Route::get('/demo/{name}/{id?}', function ($name , $id = null) {
//    $data = compact('name' , 'id');
//    print_r($data);
//});

//Route::get('/demo/{name}/{id?}', function ($name , $id = null) {
//    $data = compact('name' , 'id');
//    return view('demo')->with($data);
//});

//Route::get('user/{name?}', function ($name=null) {  
//    return $name;  
//})->where('name','[a-zA-Z]+');  

//Route::get('user/{id}/{name}', function ($id,$name) {  
//    	return "id is : ". $id ." ,".  "Name is : ".$name ;  
//    })->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']);  
    