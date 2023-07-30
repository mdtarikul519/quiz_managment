<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function create()
    {
        return view('admin.class.create');
    }

    public function store(Request $request)
    {
        $data = new Classes();

        $data->name = $request->name;
        $data->roll = $request->roll;
        $data->teacher = $request->teacher;

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
        $datas->name = $request->name;
        $datas->roll = $request->roll;
        $datas->teacher = $request->teacher;

        $datas->update();

        return redirect()->route('admin.class.view')->with('update', 'data update successfully');
    }

    public function delete($id)
    {

        Classes::where('id', $id)->delete();
        return redirect()->route('admin.class.view')->with('delete', 'data delete successfully');
    }
}
