<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Student_quiz extends Model
{
    protected $table = "Student_quiz";

    protected $fillable =['student_id','quiz_id','marks'];

    
}
