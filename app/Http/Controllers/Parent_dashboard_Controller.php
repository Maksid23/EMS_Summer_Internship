<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class Parent_dashboard_Controller extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        $pwd = Auth::user()->password;
        $parent_id = Parents::where('parent_email', $email)->first();

        $student_id = $parent_id->student_id;
        $parent_name = $parent_id->parent_name;
        $contact_number = $parent_id->contact_number;
        $parent_email = $parent_id->parent_email;
        // $gender = $parent_id->gender;
        $address = $parent_id->address;
        $relationship_to_student = $parent_id->relationship_to_student;
        // $other_contact = $parent_id->other_contact;
        // $email_address = $parent_id->email_address;
         
        return view('parentdashboard',
         compact('student_id', 
         'parent_name', 
         'contact_number',
         'parent_email',
        'address',
        'relationship_to_student'
     ));
    }
}