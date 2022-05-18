<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Classroom extends Model
{
    use HasFactory;

    protected $table = "class";


    //get students that include in classroom
    public function getstudents(){
        return $this->hasMany(\App\Models\Student::class);
    }

    public function getteachers(){
        return $this->hasMany(\App\Models\Teacher::class,\App\Models\Teacher_classroom::class);
    }

    public function getclassteacher(){
        return $this->hasOne(\App\Models\Teacher::class,'teacher_id');
    }
   
    public function getsubjects()
    {
        // need to declare relation and object tables
        return $this->hasMany(\App\Models\Classroom::class,\App\Models\Subject_classroom::class);

    }

    public function getQuizes(){
        return $this->hasMany(\App\Models\Teacher::class,'teacher_id');
    }

}
