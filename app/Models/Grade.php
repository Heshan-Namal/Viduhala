<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Grade extends Model
{
    use HasFactory;

    protected $table = "Grade";
    
    //get classes that include in grade
    public function getclassrooms(){
        return $this->hasMany(\App\Models\Classroom::class);
    }

    //get subjects that include in grade
    public function getsubjects(){
        return $this->hasMany(\App\Models\Subject::class);
    }

    //get students that include in grade
    public function getstudents(){
        return $this->hasMany(\App\Models\Student::class);
    }

    public function teachers()
    {
        // need to declare relation and object table
        return $this->belongsToMany(\App\Models\Teacher::class,\App\Models\Grade_teacher::class);

    }

    public function getgrade_incharge(){
        return $this->belongsTo(\App\Models\Teacher::class,'teacher_id');
    }
}
