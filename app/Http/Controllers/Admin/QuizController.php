<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\QuestionSubmit;
use App\Models\Quiz;
use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class QuizController extends Controller
{
    public function create()
    {
        $class = Classes::get();
        
        return view('admin.quize.create', compact('class'));
    }


    public function store(Request $request)
    {

        $data = new Quiz();
        //  dd(request()->all());
        $data->class_id = $request->class_id;
        $data->quiz_name = $request->quiz_name;
        $data->teacher = $request->teacher;
        if ($request->hasFile('image')) {
            $data->image = Storage::put('/quiz', $request->file('image'));
        }
        //  dd($request->hasFile('image'));
        $data->save();

        return redirect()->route('admin.quiz.view')->with('success', 'data insert successfully');
    }

    public function view()
    {

        $alldata = Quiz::with('class_relation')->with('quizall_question')->with('total_examiner')->get();
        //    dd($alldata->toArray());
        return view('admin.quize.view', compact('alldata'));
    }

    public function examinner_details($id)
    {
        //function_body
        $quiz = quiz::find($id);
        // $quiz_result = QuizResult::where('quiz_id', $id)->get();

        $quiz_result = DB::table('quiz_results')
        ->join('quizzes', 'quiz_results.quiz_id', '=', 'quizzes.id')
        ->join('questions', 'quiz_results.ques_id', '=', 'questions.id')
        ->join('users', 'quiz_results.user_id', '=', 'users.id')
        ->select(
            'quizzes.*',
            'users.*',
            'quiz_results.user_id',
            DB::raw('SUM(CASE WHEN quiz_results.submit_answer = questions.answer THEN 1 ELSE 0 END) AS marks'),
            DB::raw('SUM(CASE WHEN quiz_results.ques_Id = questions.id THEN 1 ELSE 0 END) AS questions')
        )
        ->where('quiz_results.quiz_id', $id)
        ->groupBy('quizzes.id', 'quiz_results.user_id') // Group by both quiz ID and user ID to get marks per user for each quiz.
        ->get();
    
 dd($quiz_result->toArray());
        return view('admin.examinner_details',compact('examinner_details'));
    }
    

    public function edit($id){
            $data = Quiz::find($id);
            $classes = Classes::get();
            // dd( $data);
            return view('admin.quize.edit',compact('data','classes'));
    }


    public function update(Request $request, $id){
          
        $data = Quiz::find($id);
        $data->class_id = $request->class_id;
        $data->quiz_name = $request->quiz_name;
        $data->teacher = $request->teacher;
        if ($request->hasFile('image')) {
            $data->image = Storage::put('/quiz', $request->file('image'));
        }
        //  dd($request->hasFile('image'));
        $data->update();

        return redirect()->route('admin.quiz.view')->with('success', 'data update successfully');
    
    }

    public function delete($id){
            Quiz::where('id', $id)->delete();

            return redirect()->back()->with('success', 'data delete successfully');
    }
}
