<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function addteacher(Request $req)
    {
        $req->validate([
            'id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'admin_id'=>'required'
            

        ]);
        $teacher=new Teacher();
        $teacher->id=$req->id;
        $teacher->name=$req->name; 
        $teacher->email=$req->email;
        $teacher->password=$req->password;
        $teacher->admin_id=$req->admin_id;
        $teacher->save();
        return $teacher;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updateteacher(Request $req,$teacher_id)
    {
        
        $req->validate([
            'id'=>'required',
            'name'=>'required'
            
        ]);
        $teacher=Teacher::find($teacher_id);
        $teacher->id=$req->get('id');
        $teacher->name=$req->get('name'); 
        $teacher->email=$req->get('email');
        $teacher->password=$req->get('password');
        $teacher->admin_id=$req->get('admin_id');

        $teacher->save();
        return $teacher;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_teacher($teacher_id){
        $teacher=Teacher::find($teacher_id);
        return $teacher->delete();
    }
    // using admin id
    public function getadmin_createteacher($teacher_id)
    {
        return Admin::find($teacher_id)->getteachers;
    }
    
    
    
}
