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

          foreach ($request->question_id as $key => $value) {

               $submission = new QuestionSubmit();
               $submission->question_id = $value;
               $submission->quiz_id = $request->quiz_id;
               $submission->user_id = Auth::user()->id;
               // 'submit_answer' => $request->submit_answer[$key],


               $question = Question::find($value);
               
               if ($question->multipal == '1') {
                    $answer_arrey = [];

                    $decoded = json_decode($question->answer);

                    foreach ($decoded as $answer) {
                       array_push($answer_arrey, $request->submit_answer[$key]);
                           if ($answer = $request->submit_answer[$key]) {
                              $submission->right_ans = '1';
                            } else {
                              $submission->right_ans = '0';
                             }
                          }
                    $submission->submit_answer = json_encode($answer_arrey);
                    $submission->save();
                     } else {
                         $submission->submit_answer = $request->submit_answer[$key];
                      if ($question->answer = $request->submit_answer[$key]) {
                         $submission->right_ans = '1';
                     } else {
                         $submission->right_ans = '0';
                        }
                    $submission->save();
               }
               $submission->save();

               $questions = Question::where('quiz_id', $request->quiz_id)
                    ->with("submission")
                    ->get();
          }

          //    dd($request->all());

          // return view()

          return redirect()->route('quiz_answer_view', request('quiz_id'),compact('questions'));
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
          $question = Question::join('question_submits', 'questions.id', '=', 'question_submits.question_id')
               ->select('question_submits.*', 'questions.id')
               ->count();
          $currect_result = QuestionSubmit::join('questions', 'questions.answer', '=', 'question_submits.submit_answer')
               ->select('question_submits.*', 'questions.question_name')
               ->count();
          $incorrect_result = $question - $currect_result;
          $total_markes = 100 / $question * $currect_result;
          $quiz_subject = Quiz::where('id', $quiz_id)->first();
          // dd($quiz_name);   
          return view('forntend.quiz_answer_view', compact('currect_result', 'question', 'incorrect_result', 'total_markes', 'quiz_subject'));
     }


     public function exam_answer_view($id)
     {

          $result_details = QuestionSubmit::join('questions', 'question_submits.question_id', '=', 'questions.id')
               ->select('question_submits.*', 'questions.*')
               ->where('question_submits.quiz_id', '=', $id)
               ->get();
          $quiz = Quiz::where('id', $id)->first();
          // dd($result_details->toArray());
          // dd($quiz);
          //function_body
          return view('forntend.exam_answer_view', compact('result_details', 'quiz'));
     }
}
