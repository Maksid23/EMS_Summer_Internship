<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studnt;
use App\Models\users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\Demomail;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index() { 
        $instituteId = Auth::user()->institute_id;
        $users = studnt::all();
        $classes = DB::table('class')
        ->where('institute_id', $instituteId)
        ->pluck('class_name', 'class_id')
        ->toArray();
        return view('student', compact('users','classes'));   
        
    }

    public function store(Request $request){
        $request->validate(
            [
                //'student_id' => 'required',
                'student_name'=>'required',
                'dob' => 'required|date',
                'gender' => 'required',
                'address' => 'required',
                'parent_guardian_contact_info' =>'required|regex:/^[0-9]{10}$/|distinct|numeric',
                'other_contact' => 'required|regex:/^[0-9]{10}$/|distinct|numeric|different:parent_guardian_contact_info',
                'email_address' => 'required|unique:users,email',
                'class_name' => 'required'
            ]);

            $studnt = new studnt();
            $studnt->student_id = $request->input('student_id');
            $studnt->institute_id = Auth::user()->institute_id;
            $studnt->student_name = $request->input('student_name');
            $studnt->dob = $request->input('dob');
            $studnt->gender = $request->input('gender');
            $studnt->address = $request->input('address');
            $studnt->parent_guardian_contact_info = $request->input('parent_guardian_contact_info');
            $studnt->other_contact = $request->input('other_contact');
            $studnt->email_address = $request->input('email_address');
            $studnt->class_name = $request->input('class_name');
            $studnt->save();


            $users = new users();
            $users->institute_id = Auth::user()->institute_id;
            $users->name = $request->input('student_name');
            $users->email = $request->input('email_address');
            $users->password = Hash::make($request->input('password'));
            $users->role = 'Student';
            $users->save();

            // Mail::to($request->email_address)->send(new Demomail($request->input('password')));
            
                $mailData = [
                    'email' => $request->input('email_address'),
                    'password' => $request->input('password')
                ];
                
                // Send email
                Mail::to($request->input('email_address'))->send(new Demomail($mailData));
            
            
            return redirect()->back()->with('success', 'Student data Added successfully!');
    }

//UPDATE
       public function update(Request $data){

        $data->validate(
            [
                //'student_id' => 'required',
                'student_name'=>'required',
                'dob' => 'required|date',
                'gender' => 'required',
                'address' => 'required',
                'parent_guardian_contact_info' =>'required|regex:/^[0-9]{10}$/|distinct|numeric',
                'other_contact' => 'required|regex:/^[0-9]{10}$/|distinct|numeric|different:parent_guardian_contact_info',
                'class_name' => 'required'
            ]);

            $studnt = studnt::find($data->input('update_id'));

            $oldemail = $studnt->email_address;
        $name = $data->input('student_name');
        $email = $data->input('email_address');
        $institute_id = Auth::user()->institute_id;
        $password = Hash::make($data->input('password'));
        $role = 'Student';
        DB::update("UPDATE `users` SET `name`='$name',`email`='$email',`institute_id`=$institute_id,`password`='$password',`role`='$role' WHERE `email`='".$oldemail."'");
           // $studnt->student_id = $data->input('student_id');
            $studnt->student_name = $data->input('student_name');
            $studnt->dob = $data->input('dob');
            $studnt->gender = $data->input('gender');
            $studnt->address = $data->input('address');
            $studnt->parent_guardian_contact_info = $data->input('parent_guardian_contact_info');
            $studnt->other_contact = $data->input('other_contact');
            $studnt->email_address = $data->input('email_address');
            $studnt->class_name = $data->input('class_name');
            $studnt->save();
            $mailData = [
                'email' => $data->input('email_address'),
                'password' => $data->input('password')
            ];
            
            // Send email
            Mail::to($data->input('email_address'))->send(new Demomail($mailData));
            
            return redirect()->route('student.view')->with('success', ' Data updated successfully!');
    }

//view    
    public function view(){
        $userInstituteId = Auth::user()->institute_id;
        $studnt = studnt::where('institute_id', $userInstituteId)->get();
        return view('studentview', compact('studnt'));
    }

    public function delete($student_id)
    {
        $user=studnt::find($student_id);
        $email=$user->email_address;
        users::where('email',$email)->delete();
        $user->delete();

        // Additional logic or redirection after successful data deletion

        return redirect()->back()->with('success', 'Data deleted successfully!');
    }

    public function edit($student_id)
    {
        $instituteId = Auth::user()->institute_id;
        $studnt = studnt::find($student_id);
        $classes = DB::table('class')
        ->where('institute_id', $instituteId)
        ->pluck('class_name', 'class_id')
        ->toArray();
        return view('studentEdit', compact('studnt','classes'));
    }
}
