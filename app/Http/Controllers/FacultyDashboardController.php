<?php
namespace App\Http\Controllers;
use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class FacultyDashboardController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        $faculty= Faculty::where('faculty_email', $email)->first();
        // Ensure faculty member is found
        if (!$faculty) {
            return redirect()->route('faculty.dashboard')->with('error', 'Faculty member not found.');
        }
        //dd($faculty_id->all());
        // Extract necessary details
        $faculty_id = $faculty->faculty_id;
        $institute_id = $faculty->institute_id;
        $faculty_name = $faculty->faculty_name;
        $faculty_dob = $faculty->faculty_dob;
        $faculty_gender = $faculty->faculty_gender;
        $faculty_contact = $faculty->faculty_contact;
        $faculty_address = $faculty->faculty_address;
        $faculty_email = $faculty->faculty_email;
        $faculty_qualification = $faculty->faculty_qualification;
        $faculty_doj = $faculty->faculty_doj;
        $faculty_specializations = $faculty->faculty_specializations;
        $faculty_experience = $faculty->faculty_experience;
        $faculty_designation = $faculty->faculty_designation;
        $faculty_department = $faculty->faculty_department;
        // Pass the details to the view
        return view('faculty_dashboard', compact(
            'faculty_id',
            'institute_id',
            'faculty_name',
            'faculty_dob',
            'faculty_gender',
            'faculty_contact',
            'faculty_address',
            'faculty_email',
            'faculty_qualification',
            'faculty_doj',
            'faculty_specializations',
            'faculty_experience',
            'faculty_designation',
            'faculty_department'
        ));
    }
}







