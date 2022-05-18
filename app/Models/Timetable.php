<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Timetable extends Model
{
	use HasFactory;
    protected $table = "Timetable";

    protected $fillable = ['id','day','period1','period1','period1','period1','period1','period1','period1','period1','class_id','teacher_id'];
}
