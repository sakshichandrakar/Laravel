<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\detail;
use App\Models\Student;




class listController extends Controller
{
    //
    function show()
    {
         $data =detail::all();
           $data =detail::paginate(5);
        return view("list",["list"=>$data]);
        //return detail::all();
        //return detail::find(2)->Studentdata; 
    }

    function addmember(Request $req)
    {
    	$req->validate([
    		'username'=>'required ',
    		'email'=>'required | min:2'
    	]);
        $student = new Student;
        $student->student_name = $req->username;
        $student->student_email = $req->email;
        $student->student_gender = $req->gender;
        $image = $req->file('file')->store('img');
        $student->student_image = $image;
        $student->save();
        $req->session()->flash('username',"Add");
        return redirect('addmember');

    }

    function deletemember($id)
    {
    	$data =detail::find($id);
        $data->delete(); 
        return redirect('studentlist');
    }

    function showmember($id)
    {
        $data= detail::find($id);
        return view('update',['data'=>$data]);
    }

    function update(Request $req)
    {  
        $data =  detail::find($req->id);
        // echo "<pre>";	
        // print_r($data);die;
       $data->student_name = $req->username;
        $data->student_email = $req->email;
        $data->student_gender = $req->gender;
        $image = $req->file('file')->store('img');
        $data->student_image = $image;
        $data->save();
        $req->session()->flash('username',"update");
        return redirect('studentlist');
    }


    function operation()
    {
         /*   Condition*/
        //  return DB::table('students')
        //  ->where('id',1)
        //  ->get();
        ///Count
        // return DB::table('students')
        //  ->count();



        /*   Update  */
        return DB::table('students')
         ->where('id',1)
         ->update([
            'student_name'=>"Prashant"
         ]);


         /* Delete */
         return DB::table('students')
         ->where('id',2)
         -delete();


          /* joins */
          
       //return view("list",["list"=>$data]);
    }



    function joins()
    {

        /* joins */

        return DB::table('student_detail')
        ->join('students','student_detail.student_id','=','students.id')
        ->select('student_detail.*','students.*')
        ->where('student_detail.father_name','Test')
        ->get();
    }

function insert()
{
    $student = new Student;
        $student->student_name = 'sakshi';
        $student->student_email = 'sakshi@gmail.com';
        $student->student_gender = 'female';
        $student->student_image = '';
        $student->save();
        return "Data Save";
}


   function oneralation()
   {
   
        // $data =detail::all();
        //   $data =detail::paginate(5);
        // return view("list",["list"=>$data]);
        //return detail::all();
        return detail::find(1)->Studentdata; 
    
   }

}
