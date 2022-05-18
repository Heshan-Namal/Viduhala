<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = "Quiz";
    protected $guarded=[];
    public function getSubject()
    {
    	 return $this->belongsTo(\App\Models\Subject::class);
    }

    public function getClass()
    {
    	 return $this->belongsTo(\App\Models\Classroom::class);
    }

    public function getTeacher()
    {
    	 return $this->hasOne(\App\Models\Teacher::class);
    }

    public function getStudent()
    {
    	 return $this->belongsToMany(\App\Models\Student::class);
    }
    public function getquestions(){
        return $this->hasMany(\App\Models\Questions::class);
    }
}
