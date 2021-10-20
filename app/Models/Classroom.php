<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = "class";


    //get students that include in classroom
    public function getstudents(){
        return $this->hasMany(\App\Models\Student::class);
    }

    public function getteachers(){
        return $this->hasMany(\App\Models\Teacher::class,\App\Models\Teacher_classroom::class);
    }

    public function getclassteacher(){
        return $this->belongsTo(\App\Models\Teacher::class,'teacher_id');
    }
   
    public function getsubjects()
    {
        // need to declare relation and object tables
        return $this->belongsToMany(\App\Models\Classroom::class,\App\Models\Subject_classroom::class);

    }
}
