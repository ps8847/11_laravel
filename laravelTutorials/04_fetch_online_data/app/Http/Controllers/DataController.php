<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function viewDataInTable(){

        $json = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts'), true);
        //$users = fetch('https://jsonplaceholder.typicode.com/posts');

        //echo "<pre>";
        //print_r($json);
        //echo '</pre>';
        
		$usersData = compact('json');

		return view('allData')->with($usersData);
		//return view('allData')->with($usersData);
		//return view('allData')->with($usersData['json']);
    }
}
