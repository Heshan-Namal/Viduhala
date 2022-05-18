<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Subject;
use App\Models\Admin;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function addsubject(Request $req)
    {
        $req->validate([
            'id'=>'required',
            'name'=>'required',
            'grade_id'=>'required',
            'admin_id'=>'required'
            

        ]);
        $subject=new Subject();
        $subject->id=$req->id;
        $subject->name=$req->name; 
        $subject->grade_id=$req->grade_id;
        $subject->admin_id=$req->admin_id;
        $subject->save();
        return $subject;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updatesubject(Request $req,$grade_id)
    {
        
        $req->validate([
            'id'=>'required',
            'name'=>'required'
            
        ]);
        $subject=Subject::find($grade_id);
        $subject->id=$req->get('id');
        $subject->name=$req->get('name'); 
        $subject->grade_id=$req->get('grade_id');
        $subject->admin_id=$req->get('admin_id');

        $subject->save();
        return $subject;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_subject($subject_id){
        $subject=Subject::find($subject_id);
        return $subject->delete();
    }
    // using admin id
    public function getadmin_createsubject($subject_id)
    {
        return Admin::find($subject_id)->getsubjects;
    }
    
    // using grade id  
    public function getgradesubjects($subject_id)
    {
        return Grade::find($subject_id)->getsubjects;
    }
}
