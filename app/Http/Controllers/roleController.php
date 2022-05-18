<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Teacher;
use Illuminate\Http\Request;

class roleController extends Controller
{
    public function addteacher_role(Request $req)
    {
        $req->validate([
            'id'=>'required',
            'name'=>'required'
            

        ]);
        $role=new Role();
        $role->id=$req->id;
        $role->name=$req->name; 
        $role->save();
        return $role;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updaterole(Request $req,$role_id)
    {
        
        $req->validate([
            'id'=>'required',
            'name'=>'required'
            

        ]);
        $role=Role::find($role_id);
        $role->id=$req->get('id');
        $role->name=$req->get('name'); 
        $role->save();
        return $role;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_role($role_id){
        $role=Role::find($role_id);
        return $role->delete();
    }

    
    // To get all roles of a teacher
    public function getRoles($teacher_id)
    {
        return Teacher::find($teacher_id)->role; // not case sensitive
    }

    // To get id based teacher by role
    public function getrolebased_teacher($role_id)
    {
        return Role::find($role_id)->teacher;
    }
    
    //csrf token
    public function showToken() {
        echo csrf_token(); 
  
    }
}
