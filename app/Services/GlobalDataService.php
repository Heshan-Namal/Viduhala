<?php

namespace App\Services;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GlobalDataService
{
    public static function getGlobalData()
    {
        $user=Auth::user();
        if(isset($user)){
	        Session::put('id',$user->id);
	        Session::put('name',$user->name);
	        Session::put('email',$user->email);
	        $data=Session::all();
	       
	      	$student=Student::where('email',$data['email'])->get();
      		$class=Classroom::where('id',$student[0]['class_id'])->get();
       		return $student;
		}

    }

}

