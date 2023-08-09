<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionSubmit;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
     public function examlist()
     {
          $data = Quiz::get();
          return view('forntend.examlist', compact('data'));
     }

     public function quiz_question($id)
     {
          $item = Quiz::where('id', $id)->find($id);
          $data = Question::where('quiz_id', $item->id)->get();
          //     dd($data->toArray());
          return view('forntend.quiz_question', compact('data'));
     }


     public function quiz_question_store(Request $request)
     {

          foreach (request('question_id') as $key => $value) {

               QuestionSubmit::create([
                    'user_id' => Auth::user()->id,
                    'quiz_id' => request('quiz_id'),
                    'question_id' => $value,
                    'submit_answer' => $request->submit_answer[$key],

               ]);
               //    dd($request->all());
          }
          return redirect()->route('quiz_answer_view');
     }

     public function quiz_answer_view()
     {

          $question=Question::join('question_submits','questions.id','=','question_submits.question_id')
          ->select('question_submits.*','questions.id')
          ->count();
          $currect_result = QuestionSubmit::join('questions','question_submits.submit_answer','=','questions.answer')
          ->select('question_submits.*','questions.question_name')
          ->count();
         
          // dd($question);   
                 return view('forntend.quiz_answer_view',compact('currect_result','question'));
     }
}
