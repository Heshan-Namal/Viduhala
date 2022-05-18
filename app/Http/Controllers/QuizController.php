<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class QuizController extends Controller
{
    public function create($classid,$subjectid)
    {
        $detail=DB::table('Subject_class')
            ->where('Subject_class.class_id','=',$classid)
            ->where('Subject_class.subject_id','=',$subjectid)
            ->join('Subject','Subject.id','=','Subject_class.subject_id')
            ->join('Class','Class.id','=','Subject_class.class_id')
            ->select('Subject.name as subject','Class.name as class','Class.id as classid','Subject.id as subjectid')
            ->get();
        //return $classid;
        return view('quiz.create',compact(['classid','subjectid','detail']));
        //dd($request);
    }



    public function store(Request $req,$classid,$subjectid)
    {
        //return dd($req->assignments->getClientOriginalName());
        Quiz::create(
            [
                'title'=>$req->title,
                'date'=>$req->date,
                'validity'=>$req->validity,
                // 'period_starttime'=>$req->period_starttime,
                // 'period_endtime'=>$req->period_endtime,
                'class_id'=>$req->class_id,
                'subject_id'=>$req->subject_id,
                'teacher_id'=>$req->teacher_id
            ]
            );
        
        return redirect()->route('quiz.index',[$classid,$subjectid])->with('message','Quiz added successfully');
        
    }


    public function index($classid,$subjectid)
    {
        $detail=DB::table('Subject_class')
            ->where('Subject_class.class_id','=',$classid)
            ->where('Subject_class.subject_id','=',$subjectid)
            ->join('Subject','Subject.id','=','Subject_class.subject_id')
            ->join('Class','Class.id','=','Subject_class.class_id')
            ->select('Subject.name as subject','Class.name as class','Class.id as classid','Subject.id as subjectid')
            ->get();

        $quizes=DB::table('Quiz')
        ->where('Quiz.class_id','=',$classid)
        ->where('Quiz.subject_id','=',$subjectid)
        ->get();
        
        //$assments=Assignment::get();
        return view('quiz.index',compact(['quizes','classid','subjectid','detail']));
        //dd($request);
    }

    public function edit($classid,$subjectid,$quizid)
    {
        $detail=DB::table('Subject_class')
        ->where('Subject_class.class_id','=',$classid)
        ->where('Subject_class.subject_id','=',$subjectid)
        ->join('Subject','Subject.id','=','Subject_class.subject_id')
        ->join('Class','Class.id','=','Subject_class.class_id')
        ->select('Subject.name as subject','Class.name as class','Class.id as classid','Subject.id as subjectid')
        ->get();
        $quiz=Quiz::find($quizid); 
        // $assments=Assignment::get();
        return view('quiz.edit',compact(['classid','subjectid','quiz','detail']));
        //dd($request);
    }
    public function update(Request $req,$id)
    {

        $req->validate([
            'title'=>'required',
            'date'=>'required',
            // 'period_starttime'=>'required',
            // 'period_endtime'=>'required',

        ]);

        $quiz=Quiz::find($id);
       
        $quiz->title=$req->title;
        $quiz->date=$req->date;
        $quiz->period_starttime=$req->period_starttime;
        $quiz->period_endtime=$req->period_endtime;
        $quiz->class_id=$req->class_id;
        $quiz->subject_id=$req->subject_id;
        $quiz->teacher_id=$req->teacher_id;
        $quiz->save();
        //return dd($req->assignments->getClientOriginalName());
        
        return redirect()->route('quiz.index')->with('message','Quiz Updated successfully');
        

    }

    public function changeStatus(Request $request ,$id)
    {
        //$quiz=Quiz::find($id); 
        $num=DB::table('Question')
        ->where('Question.quiz_id','=',$id)
        ->count();
        if($num>0){
            Quiz::where('id',$id)->update(['status'=>$request->status]);
        }else{
            return back()->with('message','You didnt Add Questions for Quiz');
        }
        return back();
        //dd($request);
    }

    public function show($classid,$subjectid,$quizid)
    {
        $detail=DB::table('Subject_class')
        ->where('Subject_class.class_id','=',$classid)
        ->where('Subject_class.subject_id','=',$subjectid)
        ->join('Subject','Subject.id','=','Subject_class.subject_id')
        ->join('Class','Class.id','=','Subject_class.class_id')
        ->select('Subject.name as subject','Class.name as class','Class.id as classid','Subject.id as subjectid')
        ->get();
        $quiz=Quiz::find($quizid);
        $questions=Questions::where('quiz_id',$quizid)->get();
         return view('quiz.list',compact(['quiz','questions','detail','classid','subjectid']));
    }

    // for chart
    public function quizatemp($date){
        $data=DB::table('Quiz')
        ->where('Quiz.date','=',$date)
        ->join('Student_quiz','Student_quiz.quiz_id','=','Quiz.id')
        ->select('Quiz.id as quizid','Student_quiz.student_id as studentid','Student_quiz.marks as marks')
        ->orderBy('Student_quiz.student_id')
        ->get();
        return $data;
        // return view('front.teacher.subjects',compact('data'));
        //return view('Ass.index',compact('assments'));
    }
    public function pdf($classid,$subjectid){
        $quizes=DB::table('Quiz')
        ->where('Quiz.class_id','=',$classid)
        ->where('Quiz.subject_id','=',$subjectid)
        ->get();
        $pdf=PDF::loadView('quiz.index',compact('quizes'));
        return $pdf->download('quizes.pdf');
    }
}
