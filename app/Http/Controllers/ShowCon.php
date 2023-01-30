<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowCon extends Controller
{
    //
    function show($id)
    {
    	//return $id;
    	return view('about',['user'=>$id]);
    }
}
