<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class TimetableController extends Controller
{
    public function addtimetable(Request $req)
    {
        $req->validate([
                'id'=>'required',
                'day'        =>'required',
                'class_id'   => 'required',
                'period1' =>'required',
                'period2' =>'required',
                'period3' =>'required',
                'period4' =>'required',
                'period5' =>'required',
                'period6' =>'required',
                'period7' =>'required',
                'period8' =>'required',
                'teacher_id' => 'required',
        ]);
        $timetable=new Timetable();
        $timetable->id=$req->id;
        $timetable->day=$req->day; 
        $timetable->class_id=$req->class_id;
        $timetable->teacher_id=$req->teacher_id;
        $timetable->period1=$req->period1;
        $timetable->period2=$req->period2;
        $timetable->period3=$req->period3;
        $timetable->period4=$req->period4;
        $timetable->period5=$req->period5;
        $timetable->period6=$req->period6;
        $timetable->period7=$req->period7;
        $timetable->period8=$req->period8;
    
        $timetable->save();

        $period = new Period();
        $period->id=$req->id;
        $period->name=$req->day;
        $period->class_id=$req->class_id;
        $period->timetable_id=$req->id;
        $period->links=[null,null,null,null,null,null,null,null];
        $period->notes=[null,null,null,null,null,null,null,null];
    
        $period->save();

        return $period;
    // if($result){
    //     return["result"=>"Data have been saved"];
    // }else{
    //     return["result"=>"not success"];
    // }


    }
    public function updatetimetable(Request $req,$timetable_id)
    {
    
        $req->validate([
            'id'=>'required',
            'day'        =>'required',
            'class_id'   => 'required',
            'period1' =>'required',
            'period2' =>'required',
            'period3' =>'required',
            'period4' =>'required',
            'period5' =>'required',
            'period6' =>'required',
            'period7' =>'required',
            'period8' =>'required',
            'teacher_id' => 'required',
    ]);
    $timetable=Timetable::find($timetable_id);
    $timetable->id=$req->get('id');
    $timetable->day=$req->get('day'); 
    $timetable->class_id=$req->get('class_id');
    $timetable->teacher_id=$req->get('teacher_id');
    $timetable->period1=$req->get('period1');
    $timetable->period2=$req->get('period2');
    $timetable->period3=$req->get('period3');
    $timetable->period4=$req->get('period4');
    $timetable->period5=$req->get('period5');
    $timetable->period6=$req->get('period6');
    $timetable->period7=$req->get('period7');
    $timetable->period8=$req->get('period8');
    $timetable->save();
    
    return $timetable;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
    

    }
    public function destroy_a_timetable($timetable_id){
        $timetable=Timetable::find($timetable_id);
        return  $timetable->delete();
    }

    public function showtimetable($class_id,$day){
        $timetable=DB::table('Timetable')
        ->where('class_id',$class_id)
        ->where('day',$day)
        ->get();
        return  $timetable;
    }
    
}
