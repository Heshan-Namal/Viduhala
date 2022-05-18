<?php

namespace App\Http\Controllers;

use App\Models\Teacher_role;
use Illuminate\Http\Request;

class Teacher_roleController extends Controller
{
    public function addteacher_role(Request $req)
    {
        $req->validate([
            'teacher_id'=>'required',
            'role_id'=>'required'
            

        ]);
        $teacher_role=new Teacher_role();
        $teacher_role->teacher_id=$req->teacher_id;
        $teacher_role->role_id=$req->role_id; 
        $teacher_role->save();
        return $teacher_role;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updateteacher_role(Request $req,$teacher_role_id)
    {
        
        $req->validate([
            'teacher_id'=>'required',
            'role_id'=>'required'
            
        ]);
        $teacher_role=Teacher_role::find($teacher_role_id);
        $teacher_role->teacher_id=$req->get('teacher_id');
        $teacher_role->role_id=$req->get('role_id'); 
        $teacher_role->save();
        return $teacher_role;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_teacher_role($teacher_role_id){
        $teacher_role=Teacher_role::find($teacher_role_id);
        return $teacher_role->delete();
    }
    
    
}
