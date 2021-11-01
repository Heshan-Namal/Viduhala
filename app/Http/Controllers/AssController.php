<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssStore;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssController extends Controller
{
    public function create($classid,$subjectid)
    {
        
        //return $classid;
        return view('Ass.create',compact(['classid','subjectid']));
        //dd($request);
    }
    public function store(AssStore $req,$classid,$subjectid)
    {
        //return dd($req->assignments->getClientOriginalName());
        $path=$req->assignments;
        $name = $path->getClientOriginalName();
        $path->move('Ass',$name);
        Assignment::create(
            [
                'title'=>$req->title,
                'description'=>$req->description,
                'assignments'=>$name,
                'class_id'=>$classid,
                'subject_id'=>$req->subjectid
            ]
            );
        return redirect()->route('ass.index',[$classid,$subjectid])->with('message','Assignment added successfully');
        
    }
    public function index($classid,$subjectid)
    {
        $assments=DB::table('Assignment')
        ->where('Assignment.class_id','=',$classid)
        ->where('Assignment.subject_id','=',$subjectid)
        ->get();
        
        //$assments=Assignment::get();
        return view('Ass.index',compact(['assments','classid','subjectid']));
        //dd($request);
    }


    public function edit($id)
    {
        $ass=Assignment::find($id); 
        // $assments=Assignment::get();
        return view('Ass.edit',compact('ass'));
        //dd($request);
    }
    public function update(Request $req,$id)
    {

        $req->validate([
            'title'=>'required',
            'description'=>'required|min:3|max:500',
        ]);

        $ass=Assignment::find($id);
        if($req->has('assignments')){
            $path=$req->assignments;
            $name = $path->getClientOriginalName();
            $path->move('Ass',$name);
        }else{
            $name=$ass->assignments;
        }
        
        $ass->title=$req->title;
        $ass->description=$req->description;
        $ass->assignments=$name;
        $classid=$req->class_id;
        $subjectid=$req->subject_id;
        $ass->save();
        //return dd($req->assignments->getClientOriginalName());
        
        return redirect()->route('ass.index',[$classid,$subjectid])->with('message','Assignment Updated successfully');
        

    }


    public function changeStatus(Request $request ,$id)
    {
        $ass=Assignment::find($id); 
        Assignment::where('id',$id)->update(['status'=>$request->status]);
        // $assments=Assignment::get();
        return back();
        //dd($request);
    }
}
