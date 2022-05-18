<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;
    protected $table = "Subject";

    public function getclasses()
    {
        // need to declare relation and object tables
        return $this->belongsToMany(\App\Models\Subject::class,\App\Models\Subject_classroom::class);

    }
	public function getstudents()
    {
        return $this->belongsToMany(\App\Models\Student::class);

    }

    public function getQuizes()
    {
        return $this->hasMany(\App\Models\Quiz::class);

    }
}
