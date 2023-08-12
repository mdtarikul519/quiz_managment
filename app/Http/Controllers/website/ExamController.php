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
          return redirect()->route('quiz_answer_view',request('quiz_id'));
     }
     public function quiz_question_view($id)
     {
          $item = Quiz::where('id', $id)->find($id);
          $data = Question::where('quiz_id', $item->id)->get();
          //     dd($data->toArray());
          return view('forntend.quiz_question', compact('data'));
     }



     public function quiz_answer_view($quiz_id)
     {
          $question=Question::join('question_submits','questions.id','=','question_submits.question_id')
          ->select('question_submits.*','questions.id')
          ->count();
          $currect_result = QuestionSubmit::join('questions','questions.answer','=','question_submits.submit_answer')
          ->select('question_submits.*','questions.question_name')
          ->count();
          $incorrect_result = $question - $currect_result;
          $total_markes = 100/$question * $currect_result;
          $quiz_subject = Quiz::where('id',$quiz_id)->first();
          // dd($quiz_name);   
          return view('forntend.quiz_answer_view',compact('currect_result','question','incorrect_result','total_markes','quiz_subject'));
     }


     public function exam_answer_view($id){

          $result_details=QuestionSubmit::join('questions', 'question_submits.question_id', '=', 'questions.id')
          ->select('question_submits.*','questions.*')
          ->where('question_submits.quiz_id','=',$id)
          ->get();
          $quiz=Quiz::where('id',$id)->first();
          // dd($result_details->toArray());
          // dd($quiz);
          //function_body
          return view('forntend.exam_answer_view',compact('result_details','quiz'));
      }
     
}
