<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_assignment extends Model
{
    use HasFactory;

    protected $table = "Assignment_student";
    protected $fillable = [
    	'assignment_id',
    	'student_id',
   		'submission_name',
   		'submission_path'
   	];
}
