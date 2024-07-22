<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\staff;

class StaffController extends Controller
{
    public function index()
    {
        $user = staff::all();
        // dd($user);
        return view('staffform', compact('user'));
    }
    public function messages()
    {
        return [
            'staff_id.required' => 'The staff ID field is required.',
            'staff_id.numeric' => 'The staff ID must be a number.',
            'institute_id.required' => 'The Institute ID field is required.',
            'institute_id.numeric' => 'The Institute ID must be a number.',
            // other custom messages
        ];
    }
    public function insert(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'staff_id' => 'required|numeric',
            'institute_id' => 'required|numeric',
            'staff_name' => 'required|string|max:255',
            'contact_number' => 'required',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        // Create a new Staff record and save it to the database
        $staff = new staff();
        $staff->staff_id = $validatedData['staff_id'];
        $staff->institute_id = $validatedData['institute_id'];
        $staff->staff_name = $validatedData['staff_name'];
        $staff->contact_number = $validatedData['contact_number'];
        $staff->email = $validatedData['email'];
        $staff->address = $validatedData['address'];
        $staff->designation = $validatedData['designation'];
        $staff->department = $validatedData['department'];
        $staff->save();
        return redirect()->route('form.view')->with('success', 'Data Added sucsessfull');
    }
    public function view()
    {
        $user = staff::all();
        // dd($user);
        return view('viewdata', compact('user'));
    }
    public function edit($id)
    {
        $user = staff::find($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'staff_id' => 'required|numeric',
            'institute_id' => 'required|numeric',
            'staff_name' => 'required|string|max:255',
            'contact_number' => 'required',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);
        $staff = staff::find($request->input('update_id'));
        $staff->staff_id = $validatedData['staff_id'];
        $staff->institute_id = $validatedData['institute_id'];
        $staff->staff_name = $validatedData['staff_name'];
        $staff->contact_number = $validatedData['contact_number'];
        $staff->email = $validatedData['email'];
        $staff->address = $validatedData['address'];
        $staff->designation = $validatedData['designation'];
        $staff->department = $validatedData['department'];
        $staff->save();
        return redirect()->route('form.view')->with('success', 'Data Updated sucsessfully');
    }

    public function destroy($staff_id)
    {
        $user=staff::find($staff_id);
        $user->delete();
        return redirect()->route('form.view')->with('success', 'Data Deleted sucsessfully');
    }
}