<?php

namespace App\Http\Controllers;
use App\Models\Questions;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function create($classid,$subjectid,$quizid)
    {
        $detail=DB::table('Subject_class')
        ->where('Subject_class.class_id','=',$classid)
        ->where('Subject_class.subject_id','=',$subjectid)
        ->join('Subject','Subject.id','=','Subject_class.subject_id')
        ->join('Class','Class.id','=','Subject_class.class_id')
        ->select('Subject.name as subject','Class.name as class','Class.id as classid','Subject.id as subjectid')
        ->get();
        //return $classid;
        return view('questions.create',compact(['classid','subjectid','detail','quizid']));
        //dd($request);
    }



    public function store(Request $req,$classid,$subjectid)
    {
        //return dd($req->assignments->getClientOriginalName());
        Questions::create(
            [
                'question'=>$req->question,
                'answer1'=>$req->answer1,
                'answer2'=>$req->answer2,
                'answer3'=>$req->answer3,
                'answer4'=>$req->answer4,
                'correct_answer'=>$req->correct_answer,
                'quiz_id'=>$req->quiz_id,
            ]
            );
        
        return redirect()->route('quiz.index',[$classid,$subjectid])->with('message','Quiz Question added successfully');
        
    }


    

    public function edit($classid,$subjectid,$questionid)
    {
        $detail=DB::table('Subject_class')
        ->where('Subject_class.class_id','=',$classid)
        ->where('Subject_class.subject_id','=',$subjectid)
        ->join('Subject','Subject.id','=','Subject_class.subject_id')
        ->join('Class','Class.id','=','Subject_class.class_id')
        ->select('Subject.name as subject','Class.name as class','Class.id as classid','Subject.id as subjectid')
        ->get();
        $question=Questions::find($questionid); 
       
        return view('questions.edit',compact(['classid','subjectid','question','detail']));
        //dd($request);
    }
    public function update(Request $req,$classid,$subjectid,$quizid)
    {

        $req->validate([
            
            'question'=>'required',
            'answer1'=>'required',
            'answer2'=>'required',
            'answer3'=>'required',
            'answer4'=>'required',
            'correct_answer'=>'required',
            'quiz_id'=>'required',

        ]);

        $question=Questions::find($quizid); 
       
        $question->question=$req->question;
        $question->answer1=$req->answer1;
        $question->answer2=$req->answer2;
        $question->answer3=$req->answer3;
        $question->answer4=$req->answer4;
        $question->correct_answer=$req->correct_answer;
        $question->quiz_id=$req->quiz_id;
        $question->save();
        //return dd($req->assignments->getClientOriginalName());
        
        return redirect()->route('quiz.index',[$classid,$subjectid])->with('message','Quiz Questions Updated successfully');
        

    }

}
