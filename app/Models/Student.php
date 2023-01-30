<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
   // public $table ="users";
   //function getstudent_nameAttribute($value)
    // {
      //  return ucFirst($value);
    //}
    // function getGenderAttribute($value)
    // {
    //     return $value. "Raipur";
    // }
   public function setStudentNameAttribute($value)
    {
        //echo "fhjkgdg";die;
         return $this->attributes['student_name'] = 'Mr '.$value;
    } 

}
