<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ShowCon;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\listController;

/**  stirng function */
use Illuminate\Support\Str;
$info = "hello I am Sakshi Chandrakar";
// $info = Str::ucfirst($info);
// $info = Str::replaceFirst("Hello","Hi",$info);
// $info = Str::camel($info);
$info = Str::of($info)
        ->ucfirst($info)
        ->replaceFirst("Hello","Hi",$info);
        

echo $info;
echo "<br>";

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

/*Route::get('/{name}', function ($name) {
	//echo $name;
    return view('welcome',['name'=>$name]);
});*/
/*Route::get('about', function () {
    return view('about');
});*/
/*Middle Ware */
Route::view('/','welcome')->middleware('protectedPage');
Route::view('about','/about');
 Route::view('contact','/contact')->middleware('protectedPage');
 Route::view('noaccess','/noaccess');

 Route::group(['middleware'=>['protectedPage']],function()
 {
     Route::view('contact','/contact');
 
 });

/* end */



Route::get('list/{id}',[ShowCon::class,'show']);
Route::resource('first', Controller::class);
// Route::DELETE("student",[StudentController::class,'getdata']);
/* Session */
Route::POST("student",[StudentController::class,'getdata']);
Route::view('profile','/profile');
Route::get('logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('student_login');
});
//Route::('student_login','/student_login');
Route::get('/student_login', function () {
     if(session()->has('user'))
     {
        return redirect('profile');
     }
    return view('student_login');
});

Route::get("getstudent",[StudentController::class,'getstudent']);
Route::get("getData",[StudentController::class,'getDatalist']);
Route::get("httpsdata",[StudentController::class,'httpsdata']);
   /* Crud */

Route::GET("studentlist",[listController::class,'show']);
Route::view('list','/list');
Route::view('addmember','/addmember');
Route::POST("addmember",[listController::class,'addmember']);
Route::GET("delete/{id}",[listController::class,'deletemember']);
Route::GET("edit/{id}",[listController::class,'showmember']);
//Route::view('updateform','/update');

Route::POST("edit",[listController::class,'update']);
Route::GET("operation",[listController::class,'operation']);
Route::GET("joins",[listController::class,'joins']);

Route::GET("insert",[listController::class,'insert']);

Route::GET("oneralation",[listController::class,'oneralation']);







