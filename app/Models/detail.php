<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;
    public $table ="students";
    function Studentdata()
    {
        return $this->hasMany('App\Models\student_detail');
    }
     function getStudentNameAttribute($value)
     {
         return ucFirst($value);
     }
     function getStudentGenderAttribute($value)
     {
        return $value. " M";
     }
    public function setStudent_nameAttribute($value)
    {
         return $this->attributes['student_name'] = 'Mr '.$value;
    } 

   
}
