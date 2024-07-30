<?php

namespace App\Http\Controllers;

use App\Models\clss;
use App\Models\studnt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class student_dashboard_Controller extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        // $pwd = Auth::user()->password;
        $student = studnt::where('email_address', $email)->first();
        $clss = clss::all();
        $student_id = $student->student_id;
        $class_id = $student->class_id;
        $institute_id = $student->institute_id;
        $student_name = $student->student_name;
        $dob = $student->dob;
        $gender = $student->gender;
        $address = $student->address;
        $parent_guardian_contact_info = $student->parent_guardian_contact_info;
        $other_contact = $student->other_contact;
        $email_address = $student->email_address;

        return view(
            'studentdashboard',
            compact(
                'student_id',
                'class_id',
                'institute_id',
                'student_name',
                'dob',
                'gender',
                'address',
                'parent_guardian_contact_info',
                'other_contact',
                'email_address',
                'clss'
            )
        );
    }
}
