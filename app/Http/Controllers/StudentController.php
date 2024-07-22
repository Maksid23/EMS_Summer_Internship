<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studnt;
use App\Models\users;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index() { 
        $users = studnt::all();
        return view('student', compact('users'));   
        
    }

    public function store(Request $request){
        $request->validate(
            [
                'student_id' => 'required',
                'student_name'=>'required',
                'dob' => 'required|date',
                'gender' => 'required',
                'address' => 'required',
                'parent_guardian_contact_info' =>['required', 'regex:/^[0-9]{10}$/'],
                'other_contact' => ['required', 'regex:/^[0-9]{10}$/'],
                'email_address' => 'required|email',
                'class_id' => 'required|exists:class,class_id'
            ]);

            $studnt = new studnt();
            $users = new users();
            $studnt->student_id = $request->input('student_id');
            $studnt->student_name = $request->input('student_name');
            $users->name = $request->input('student_name');
            $studnt->dob = $request->input('dob');
            $studnt->gender = $request->input('gender');
            $studnt->address = $request->input('address');
            $studnt->parent_guardian_contact_info = $request->input('parent_guardian_contact_info');
            $studnt->other_contact = $request->input('other_contact');
            $studnt->email_address = $request->input('email_address');
            $users->email = $request->input('email_address');
            $users->password = Hash::make($request->input('password'));
            $users->role = 1;
            $studnt->class_id = $request->input('class_id');
            $studnt->save();
            $users->save();
            return redirect()->back()->with('success', 'Student data stored successfully!');
    }

//UPDATE
       public function update(Request $data){

            $studnt = studnt::find($data->input('update_id'));;
            $studnt->student_id = $data->input('student_id');
            $studnt->student_name = $data->input('student_name');
            $studnt->dob = $data->input('dob');
            $studnt->gender = $data->input('gender');
            $studnt->address = $data->input('address');
            $studnt->parent_guardian_contact_info = $data->input('parent_guardian_contact_info');
            $studnt->other_contact = $data->input('other_contact');
            $studnt->email_address = $data->input('email_address');
            $studnt->class_id = $data->input('class_id');
            $studnt->save();
            return redirect()->route('student.view')->with('success', 'Student data stored successfully!');
    }

//view    
    public function view(){
        $studnt = studnt::all();
        return view('studentview', compact('studnt'));
    }

    public function delete($student_id)
    {
        $studnt = studnt::find($student_id);
        $studnt->delete();

        // Additional logic or redirection after successful data deletion

        return redirect()->back()->with('success', 'Comment deleted successfully!');
    }

    public function edit($student_id)
    {
        $studnt = studnt::find($student_id);
        return view('studentEdit', compact('studnt'));
    }
}
