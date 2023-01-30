<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/* Get data */
Route::get("apidata/{id?}",[apiController::class,'getdata']);
/* Insert */
Route::post("apidatasave",[apiController::class,'savedata']);
/* Update] */
Route::put("updatedata",[apiController::class,'updatedata']);
/* Delete */
Route::delete("deletedata/{id}",[apiController::class,'deletedata']);
/* Search */
Route::get("Searchdata/{name}",[apiController::class,'Searchdata']);
/* Validate */
Route::post("validatedata",[apiController::class,'validatedata']);
/* File */
Route::post("fileuploaddata",[apiController::class,'uolpoad']);


