<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultyController
{
    // Display the faculty form
    public function showFacultyForm()
    {
        return view('faculty');
    }

    // Handle form submission and store the faculty data
    public function storeFaculty(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'faculty_id' => 'required|unique:faculty_info,faculty_id',
            'faculty_name' => 'required|string|max:255',
            'faculty_age' => 'required|integer',
            'faculty_dob' => 'required|date',
            'faculty_gender' => 'required|string',
            'faculty_contact' => 'required|string|max:20',
            'faculty_address' => 'required|string|max:500',
            'faculty_email' => 'required|email|max:255|unique:faculty_info,faculty_email',
            'faculty_qualification' => 'required|string|max:255',
            'faculty_doj' => 'required|date',
            'faculty_specializations' => 'required|string|max:500',
            'faculty_experience' => 'required|string|max:255',
            'faculty_designation' => 'required|string|max:255',
            'faculty_department' => 'required|string|max:255',
        ]);

        // Create a new Faculty instance
        $faculty = new Faculty();

        // Assign each field individually from the request input
        $faculty->faculty_id = $request->input('faculty_id');
        $faculty->faculty_name = $request->input('faculty_name');
        $faculty->faculty_age = $request->input('faculty_age');
        $faculty->faculty_dob = $request->input('faculty_dob');
        $faculty->faculty_gender = $request->input('faculty_gender');
        $faculty->faculty_contact = $request->input('faculty_contact');
        $faculty->faculty_address = $request->input('faculty_address');
        $faculty->faculty_email = $request->input('faculty_email');
        $faculty->faculty_qualification = $request->input('faculty_qualification');
        $faculty->faculty_doj = $request->input('faculty_doj');
        $faculty->faculty_specializations = $request->input('faculty_specializations');
        $faculty->faculty_experience = $request->input('faculty_experience');
        $faculty->faculty_designation = $request->input('faculty_designation');
        $faculty->faculty_department = $request->input('faculty_department');

        // Save the faculty data to the database
        $faculty->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Faculty added successfully.');
    }
}
