<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student_period extends Model
{
	use HasFactory;
    protected $table = "Student_period";

    protected $fillable =['id','student_id','period_id','attendance'];
}
