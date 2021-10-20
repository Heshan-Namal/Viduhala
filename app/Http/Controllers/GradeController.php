<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Admin;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function addgrade(Request $req)
    {
        $req->validate([
            'id'=>'required',
            'grade_no'=>'required',
            'num_of_students'=>'required',
            'teacher_id'=>'required',
            'admin_id'=>'required'
            

        ]);
        $grade=new Grade();
        $grade->id=$req->id;
        $grade->grade_no=$req->grade_no; 
        $grade->num_of_students=$req->num_of_students;
        $grade->teacher_id=$req->teacher_id;
        $grade->admin_id=$req->admin_id;
        $grade->save();
        return $grade;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updategrade(Request $req,$grade_id)
    {
        
        $req->validate([
            'id'=>'required',
            'grade_no'=>'required',
            'num_of_students'=>'required',
        ]);
        $grade=Grade::find($grade_id);
        $grade->id=$req->get('id');
        $grade->garde_no=$req->get('grade_no'); 
        $grade->num_of_students=$req->get('num_of_students');
        $grade->teacher_id=$req->get('teacher_id');
        $grade->admin_id=$req->get('admin_id');

        $grade->save();
        return $grade;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_grade($grade_id){
        $grade=Grade::find($grade_id);
        return $grade->delete();
    }
    // using admin id can get admin created grades
    public function getadmin_creategrade($admin_id)
    {
        return Admin::find($admin_id)->getgrades;
    }
     
    //find grade that incharge
    public function get_gradeincharge_grade($teacher_id)
    {
        return Teacher::find($teacher_id)->getgrade;
    }
    //find gradeincharge
    public function getgradeincharge($grade_id)
    {
        return Grade::find($grade_id)->getgrade_incharge;
    }
}
