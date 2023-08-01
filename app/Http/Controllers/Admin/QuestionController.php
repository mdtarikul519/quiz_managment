<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
   public function create(){
        $quiz = Quiz::get();
        return view('admin.question.create',compact('quiz'));
   }


   public function store(request $request){
  
       $data = new Question();
        // dd(request()->all());
       $data->quiz_id = $request->quiz_id;
       $data->question_name = $request->question_name;
       $data->optionA = $request->optionA;
       $data->optionB = $request->optionB;
       $data->optionC = $request->optionC;
       $data->optionD = $request->optionD;
       $data->answer = $request->answer;
       
       $data->save();
    //    dd($data);
            //   return redirect()-back();

   }
}
