<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function create(){
         return view('admin.class.create');
    }

    public function store(Request $request){
          $data = new Classes();

          $data->name = $request->name;
          $data->roll = $request->roll;
          $data->teacher = $request->teacher;

          $data->save();
    }
}
