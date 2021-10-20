<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Admin;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function addclass(Request $req)
    {
        $req->validate([
            'id'=>'required',
            'name'=>'required',
            'num_of_student'=>'required',
            'teacher_id'=>'required',
            'admin_id'=>'required',
            'grade_id'=>'required'

        ]);
        $classroom=new Classroom();
        $classroom->id=$req->id;
        $classroom->name=$req->name; 
        $classroom->num_of_student=$req->num_of_student;
        $classroom->teacher_id=$req->teacher_id;
        $classroom->admin_id=$req->admin_id;
        $classroom->grade_id=$req->grade_id;
        $classroom->save();
        return $classroom;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updateclass(Request $req,$classroom_id)
    {
        
        $req->validate([
            'id'=>'required',
            'name'=>'required',
            'num_of_student'=>'required',
        ]);
        $classroom=Classroom::find($classroom_id);
        $classroom->id=$req->get('id');
        $classroom->name=$req->get('name'); 
        $classroom->num_of_student=$req->get('num_of_student');
        $classroom->teacher_id=$req->get('teacher_id');
        $classroom->admin_id=$req->get('admin_id');
        $classroom->grade_id=$req->get('grade_id');
        $classroom->save();
        return $classroom;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_classroom($classroom_id){
        $classroom=Classroom::find($classroom_id);
        return  $classroom->delete();
    }
    // using admin id
    public function getadmin_createclassroom($classroom_id)
    {
        return Admin::find($classroom_id)->getclassrooms;
    }
    //using grade id
    public function getgrade_classroom($classroom_id)
    {
        return Grade::find($classroom_id)->getclassrooms;
    }
    // using class teacher id  
    public function getclassteacher_classroom($teacher_id)
    {
        return Teacher::find($teacher_id)->getclassroom;
    }

    // using classroom id get classteacher id that class own
    public function getclassroom_teacher($classroom_id)
    {
        return Classroom::find($classroom_id)->getclassteacher;
    }
}
