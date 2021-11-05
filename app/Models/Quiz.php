<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = "Quiz";
    protected $guarded=[];

    public function getquestions(){
        return $this->hasMany(\App\Models\Questions::class);
    }
}
