<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addstudent(Request $req)
    {
        $req->validate([
            'id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'admin_id'=>'required',
            'grade_id'=>'required',
            'class_id'=>'required'
            

        ]);
        $student=new student();
        $student->id=$req->id;
        $student->name=$req->name; 
        $student->email=$req->email;
        $student->password=$req->password;
        $student->admin_id=$req->admin_id;
        $student->grade_id=$req->grade_id;
        $student->class_id=$req->class_id;
        $student->save();
        return $student;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updatestudent(Request $req,$student_id)
    {
        
        $req->validate([
            'id'=>'required',
            'name'=>'required'
            
        ]);
        $student=student::find($student_id);
        $student->id=$req->get('id');
        $student->name=$req->get('name'); 
        $student->email=$req->get('email');
        $student->password=$req->get('password');
        $student->admin_id=$req->get('admin_id');
        $student->grade_id=$req->get('grade_id');
        $student->class_id=$req->get('class_id');

        $student->save();
        return $student;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_student($student_id){
        $student=student::find($student_id);
        return $student->delete();
    }
    // using admin id
    public function getadmin_createstudents($student_id)
    {
        return Admin::find($student_id)->getstudents;
    }
    public function getgradestudents($student_id)
    {
        return Grade::find($student_id)->getstudents;
    }
    public function getclassstudents($student_id)
    {
        return Classroom::find($student_id)->getstudents;
    }
}
