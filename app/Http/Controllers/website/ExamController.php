<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function examlist(){
         $data = Quiz::get();
        return view('forntend.examlist',compact('data'));
     }
}
