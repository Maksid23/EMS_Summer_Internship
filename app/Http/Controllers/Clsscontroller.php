<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clss;
use Illuminate\Support\Facades\Auth;

class Clsscontroller extends Controller
{
    public function index()
    {
        return view('clss');
    }

        public function insert(Request $request)
        {
            $request->validate([
                'class_name' => 'required|max:12',
                'class_teacher' => 'required|exists:faculty_info,faculty_name',
                'location' => 'required'
            ]);
            $user = auth()->user(); 
            $class = new clss();
            $class->institute_id= $user->institute_id;
            $class->class_name = $request->input('class_name');
            $class->class_teacher = $request->input('class_teacher');
            $class->location = $request->input('location');
            $class->save();
            return redirect()->back()->with('success', 'Data Added sucsess full');
        }

    //UPDATE
    public function update(Request $data){

        $class = clss::find($data->input('update_id'));;
        $class->class_name = $data->input('class_name');
        $class->class_teacher = $data->input('class_teacher');
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