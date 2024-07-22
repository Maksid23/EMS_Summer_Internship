<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clss;

class Clsscontroller extends Controller
{
    public function index()
    {
        return view('clss');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'class_id' => 'required|numeric',
            'staff_id' => 'required|numeric|exists:staff_information,staff_id',
            'location' => 'required|string|max:255'

        ]);

        $class = new clss();
        $class->class_id = $request->input('class_id');
        $class->staff_id = $request->input('staff_id');
        $class->location = $request->input('location');

        $class->save();
        return redirect()->back()->with('success', 'Data Added sucsess full');
    }

    //UPDATE
    public function update(Request $data){

        $class = clss::find($data->input('update_id'));;
        $class->class_id = $data->input('class_id');
        $class->staff_id = $data->input('staff_id');
        $class->location = $data->input('location');
        $class->save();
        return redirect()->route('clss.view')->with('success', 'Student data stored successfully!');
}

//view    
public function view(){
    $class = clss::all();
    return view('clssView', compact('class'));
}

public function delete($class_id)
{
    $class = clss::find($class_id);
    $class->delete();

    // Additional logic or redirection after successful data deletion

    return redirect()->back()->with('success', 'Comment deleted successfully!');
}

public function edit($class_id)
{
    $class = clss::find($class_id);
    return view('clssEdit', compact('class'));
}
}