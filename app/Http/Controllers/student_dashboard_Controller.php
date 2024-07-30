<?php

namespace App\Http\Controllers;

use App\Models\studnt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  

class student_dashboard_Controller extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        $pwd = Auth::user()->password;
        $student_id = DB::table('student')
    ->join('class', 'student.class_id', '=', 'class.class_id')
    ->select(
        'student.*', 
        'class.class_name'
    )
    ->where('student.email_address', $email)
    ->first();
        $class_name = $student_id->class_name;
        $institute_id = $student_id->institute_id;
        $student_name = $student_id->student_name;
        $dob = $student_id->dob;
        $gender = $student_id->gender;
        $address = $student_id->address;
        $parent_guardian_contact_info = $student_id->parent_guardian_contact_info;
        $other_contact = $student_id->other_contact;
        $email_address = $student_id->email_address;
         
        return view('studentdashboard',
         compact('class_name', 
         'institute_id', 
         'student_name',
         'dob',
        'gender',
        'address',
        'parent_guardian_contact_info',
        'other_contact',
        'email_address'
     ));
    }
    
}