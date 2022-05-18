<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $table = 'Assignment';

    public function getclass()
    {
    	return $this->belongsTo(\App\Models\Classroom::class);
    }

    public function getStudent()
    {
    	return $this->belongsToMany(\App\Models\Student::class);
    }
}
