<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Quiz;
use COM;
use Illuminate\Http\Request;
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

        $alldata = Quiz::with('class_relation')->get();
        //    dd($alldata->toArray());
        return view('admin.quize.view', compact('alldata'));
    }

    public function edit($id){
            $data = Quiz::find($id);
            $classes = Classes::get();
            // dd( $data);
            return view('admin.quize.edit',compact('data','classes'));
    }
}
