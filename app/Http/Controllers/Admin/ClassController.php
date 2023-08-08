<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function classcreate()
    {
        return view('admin.class.create');
    }

    public function store(Request $request)
    {
        $data = new Classes();

        $data->class_name = $request->class_name;
        $data->class_roll = $request->class_roll;
        $data->teacher_name = $request->teacher_name;

        $data->save();
        return redirect()->route('admin.class.view')->with('success', 'data store successfully');
    }


    public function view()
    {
        $alldata = Classes::all();
        return view('admin.class.view', compact('alldata'));
    }

    public function edit($id)
    {
        $data = Classes::find($id);
        return view('admin.class.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $datas = Classes::find($id);
        $datas->class_name = $request->class_name;
        $datas->class_roll = $request->class_roll;
        $datas->teacher_name = $request->teacher_name;

        $datas->update();

        return redirect()->route('admin.class.view')->with('update', 'data update successfully');
    }

    public function delete($id)
    {

        Classes::where('id', $id)->delete();
        return redirect()->route('admin.class.view')->with('delete', 'data delete successfully');
    }
}
