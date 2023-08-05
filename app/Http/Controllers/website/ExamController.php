<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function examlist(){
         $data = Quiz::get();
        return view('forntend.examlist',compact('data'));
        }

   public function quiz_question($id){
                   $item =Quiz::where('id',$id)->find($id);     
                   $data = Question::where('quiz_id',$item->id)->get(); 
               //     dd($data->toArray());
                return view('forntend.quiz_question',compact('data'));
     }
}
