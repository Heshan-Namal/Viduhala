<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Teacher_classroom;

use Illuminate\Http\Request;

class Teacher_classController extends Controller
{
    public function addteacher_class(Request $req)
    {
        $req->validate([
            'teacher_id'=>'required',
            'class_id'=>'required'
            

        ]);
        $teacher_class=new Teacher_classroom();
        $teacher_class->teacher_id=$req->teacher_id;
        $teacher_class->class_id=$req->class_id; 
        $teacher_class->save();
        return $teacher_class;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updateteacher_class(Request $req,$teacher_class_id)
    {
        
        $req->validate([
            'teacher_id'=>'required',
            'class_id'=>'required'
            
        ]);
        $teacher_class=Teacher_classroom::find($teacher_class_id);
        $teacher_class->teacher_id=$req->get('teacher_id');
        $teacher_class->class_id=$req->get('class_id'); 
        $teacher_class->save();
        return $teacher_class;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_teacher_class($teacher_class_id){
        $teacher_class=Teacher_classroom::find($teacher_class_id);
        return $teacher_class->delete();
    }

    // using teacher id and get classids
    public function getclasses($teacher_id)
    {
        return Teacher::find($teacher_id)->classrooms; // not case sensitive
    }

    // using class id get the all teachers that teaches in class
    public function getteachers($class_id)
    {
        return Classroom::find($class_id)->teachers;
    }
}
