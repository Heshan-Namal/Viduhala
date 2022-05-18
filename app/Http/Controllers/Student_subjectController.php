<?php

namespace App\Http\Controllers;
use App\Models\Student_subject;
use Illuminate\Http\Request;

class Student_subjectController extends Controller
{
    public function addstudent_subject(Request $req)
    {
        $req->validate([
            'student_id'=>'required',
            'subject_id'=>'required'
            

        ]);
        $student_subject=new Student_subject();
        $student_subject->student_id=$req->student_id;
        $student_subject->subject_id=$req->subject_id; 
        $student_subject->save();
        return $student_subject;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updatestudent_subject(Request $req,$student_subject_id)
    {
        
        $req->validate([
            'student_id'=>'required',
            'subject_id'=>'required'
            
        ]);
        $student_subject=student_subject::find($student_subject_id);
        $student_subject->student_id=$req->get('student_id');
        $student_subject->subject_id=$req->get('subject_id'); 
        $student_subject->save();
        return $student_subject;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_student_subject($student_subject_id){
        $student_subject=student_subject::find($student_subject_id);
        return $student_subject->delete();
    }
}
