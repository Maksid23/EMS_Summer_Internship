<?php

namespace App\Http\Controllers;
use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function view()
    {
        $courses = course::all();
        return view('courseview', compact('courses'));
    }

    public function insertform()
    {
        return view('courseadd');
    }

    public function insert(Request $request)
    {
        $courses = new course();
        $courses->course_name = $request->course_name;
        $courses->user_id= $request->user_id;
        $courses->course_name = $request->course_name;
        $courses->save();
        return redirect()->route('course.view');
    }

    public function delete($course_id){
        $field  =new course();
        $field=course::find($course_id);
        $field->delete();
        return redirect()->back()->with('message', 'Course deleted successfully.');
        
        
    }
}