<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	public function  index()
	{
     $name = ['prashant','sakshi'];
     $age = ['26','69'];
	$data = $name['1']; 
	$data_age = $age['1']; 

      //return view("index",array('name'=>$name,'age'=>$age));
	return view("index",["name"=>$name]);
      
	}
}
