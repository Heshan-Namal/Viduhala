<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Teacher;
use Illuminate\Http\Request;

class Grade_teacherController extends Controller
{
    public function addgrade_teacher(Request $req)
    {
        $req->validate([
            'teacher_id'=>'required',
            'grade_id'=>'required'
            

        ]);
        $grade_teacher=new Grade_teacher();
        $grade_teacher->teacher_id=$req->teacher_id;
        $grade_teacher->grade_id=$req->grade_id; 
        $grade_teacher->save();
        return $grade_teacher;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updategrade_teacher(Request $req,$grade_teacher_id)
    {
        
        $req->validate([
            'teacher_id'=>'required',
            'grade_id'=>'required'
            
        ]);
        $grade_teacher=Grade_teacher::find($grade_teacher_id);
        $grade_teacher->teacher_id=$req->get('teacher_id');
        $grade_teacher->grade_id=$req->get('grade_id'); 
        $grade_teacher->save();
        return $grade_teacher;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_grade_teacher($grade_teacher_id){
        $grade_teacher=Grade_teacher::find($grade_teacher_id);
        return $grade_teacher->delete();
    }

    // To get all grades that participating by teacher
    public function getgrades($teacher_id)
    {
        return Teacher::find($teacher_id)->grade; // not case sensitive
    }

    // To get  teachers in specific grade
    public function getteachersin_grade($grade_id)
    {
        return Grade::find($grade_id)->teachers;
    }
}
