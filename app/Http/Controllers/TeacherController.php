<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Teacher;
use PDF;
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
    public function edit($teacherid)
    {
        $teacher=Teacher::find($teacherid); 
        return view('front.teacher.profile.edit',compact('teacher'));
         //dd($teacher);
    }
    public function updateteacher(Request $req,$teacherid)
    {
        $teacher=Teacher::find($teacherid);
        if($req->has('img')){
            $path=$req->img;
            $name = $path->getClientOriginalName();
            $path->move('assets\front\images',$name);
        }else{
            $name=$teacher->img;
        }
        
       // dd($req)
        //dd($teacher);
        $teacher->name=$req->get('name'); 
        $teacher->img=$name;
        $teacher->email=$req->get('email');
        $teacher->contact=$req->get('contact');

        $teacher->save();
        return redirect()->route('myprofile')->with('message','Your Profile Updated successfully');
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
    
    public function pdf(){
        $teacher=DB::table('Teacher')
        ->where('Teacher.id','=',333)
        ->get();
        $pdf=PDF::loadView('front.teacher.profile.profilepdf',compact('teacher'));
        return $pdf->download('teacher.pdf');
    }
    public function getteacher(){
        $teacher=DB::table('Teacher')
        ->where('Teacher.id','=',333)
        ->get();
        
        return view('front.teacher.profile.profile',compact('teacher'));
    }
}
