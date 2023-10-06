<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    public function upload(Request $request){
        //echo "<pre>";
        //print_r($request->all());

        //method 1
        echo $request->file('image')->store('uploads');

        //method 2
        $filename = time() . " vs " . $request->file('image')->getClientOriginalExtention();
        echo $request->file('image')->storeAs('uploads' , $filename);
    }
}
