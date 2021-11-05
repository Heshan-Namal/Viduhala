<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = "Question";
    protected $guarded=[];

    public function getquiz(){
        return $this->belongsTo(\App\Models\Quiz::class,'quiz_id');
    }
}
