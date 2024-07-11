<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class StudentController
{
    public function showStudentForm()
    {
        return view('student');
    }

    // Handle form submission and store the student data
    public function storeStudent(Request $request)
    {
        $validatedData = $request->validate([
            'student_id' => 'required|unique:student,student_id',
            'student_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'address' => 'required|string|max:500',
            'parent_guardian_contact_info' => 'required|string|max:10',
            'other_contact' => 'nullable|string|max:10',
            'email_address' => 'required|email|max:255',


        ]);

        /* dd($request);
 */
        $student = new Student();
        $student->student_id = $request->input('student_id');
        $student->student_name = $request->input('student_name');
        $student->dob = $request->input('dob');
        $student->gender = $request->input('gender');
        $student->address = $request->input('address');
        $student->parent_guardian_contact_info = $request->input('parent_guardian_contact_info');
        $student->other_contact = $request->input('other_contact');
        $student->email_address = $request->input('email_address');

        $student->save();

        return redirect()->back()->with('success', 'Student added successfully.');
    }

    // Other admin panel methods...
}
