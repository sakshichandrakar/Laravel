<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Support\Facades\Http;




class StudentController extends Controller
{
    //
    function getData(Request $request)
    {
    	$request->validate([
    		'username'=>'required | max:10',
    		'password'=>'required | min:2'
    	]);
    	//print_r($_POST);
    	$data = $request->input('username');
       return $request->file('file')->store('img');
        // $request->session()->put('user',$data);
        // $request->session()->flash('user',$data);
        // //echo session('user');
        // return redirect('profile');

    }

     function getstudent()
    {
    	//echo "test";
    	return DB::select("select * from student_login");
    }
    
    function getDatalist()
    {
    	return Student::all();
    }
    function httpsdata()
    {
    	$data= Http::get("https://reqres.in/api/users?page=1");
    	return view('user',['colletcion'=>$data['data']]);
    }
}
