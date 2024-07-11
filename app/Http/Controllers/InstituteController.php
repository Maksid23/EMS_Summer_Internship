<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institute;

class InstituteController
{
    // Display the institute form
    public function showInstituteForm()
    {
        return view('institute');
    }

    // Handle form submission and store the institute data
    public function storeInstitute(Request $request)
    {
        $validatedData = $request->validate([
            'institute_id' => 'required|unique:institute,institute_id',
            'institute_name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'contact' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:institute,institute_id',
        ]);

        $institute = new Institute();
        $institute->institute_id = $request->input('institute_id');
        $institute->institute_name = $request->input('institute_name');
        $institute->address = $request->input('address');
        $institute->contact = $request->input('contact');
        $institute->email = $request->input('email');

        $institute->save();

        return redirect()->back()->with('success', 'Institute added successfully.');
    }

    // Other methods...
}
