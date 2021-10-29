<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssStore;
use App\Models\Assignment;
use Illuminate\Http\Request;

class AssController extends Controller
{
    public function create(Request $req)
    {
        
        
        return view('Ass.create');
        //dd($request);
    }
    public function store(AssStore $req)
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
                'subject_id'=>$req->subject_id,
                'teacher_id'=>$req->teacher_id
            ]
            );
        return redirect()->route('ass.index')->with('message','Assignment added successfully');
        
    }
    public function index(Request $req)
    {
        
        $assments=Assignment::get();
        return view('Ass.index',compact('assments'));
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
        $ass->save();
        //return dd($req->assignments->getClientOriginalName());
        
        return redirect()->route('ass.index')->with('message','Assignment Updated successfully');
        
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
