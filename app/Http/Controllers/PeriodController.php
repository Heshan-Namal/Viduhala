<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Period;
use Illuminate\Http\Request;


class PeriodController extends Controller
{
    public function updateperiod(Request $req,$class_id,$day)
    {
        
        $req->validate([
            //'id'=>'required',
            // 'name'=>'required',
            'links'=>'required',
            // 'notes'=>'required',
            // 'timetable_id'=>'required',
            // 'class_id'=>'required'
        ]);

        // $period=array();
        $period=DB::table('Period')
        ->where('class_id',$class_id)
        ->where('name',$day)
        ->get('links');
        
        // foreach($period as $p){
        //     return $p;
        // }
        //$period=Period::find($period_id);
        //$period->id=$req->get('id');
        //$period->name=$req->get('name'); 
        // $period->links=$req->get('links');
        // $period->notes=$req->get('notes');
        // $period->links[0]=$req->get('links'[0]);
        // $period->links[1]=$req->get('links'[1]);
        // $period->links[2]=$req->get('links'[2]);
        // $period->links[3]=$req->get('links'[3]);
        // $period->links[4]=$req->get('links'[4]);
        // $period->links[5]=$req->get('links'[5]);
        // $period->links[6]=$req->get('links'[6]);
        // $period->links[7]=$req->get('links'[7]);
        // $period->timetable_id=$req->get('timetable_id');
        // $period->class_id=$req->get('class_id');

        // $period->save();
        return $period;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    
    public function destroy_a_period($period_id){
        $period=Period::find($period_id);
        return $period->delete();
    }

    // show period links and notes that include in specific class and day
    public function show_periods($class_id,$day){
        $period=DB::table('Period')
        ->where('class_id',$class_id)
        ->where('name',$day)
        //->get();
        ->get(['links','notes']);
        //->pluck('links');
        
        return $period;
    }
}
