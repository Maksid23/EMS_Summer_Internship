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
        return redirect()->route('course.view')->with('message', 'Course added successfully');
    }
    public function delete($course_id){
        
        $field=course::find($course_id);
        $field->delete();
        return redirect()->back()->with('message', 'Course deleted successfully.');
    }

    public function edit($course_id)
    {
        $course = course::find($course_id);
        return view('courseedit',compact('course'));  
    }

    public function update(Request $request)
    {
        $course = course::find($request->input('update_id'));

        $course->course_id = $request->input('course_id');
        $course->user_id = $request->input('user_id');
        $course->course_name = $request->input('course_name');

        // $course = course::find($request->course_id);
        // $course->course_id = $request->course_id;
        // $course->user_id= $request->user_id;
        // $course->course_name = $request->course_name;
        $course->save();
        return redirect()->route('course.view')->with('message', 'Course updated successfully.');
    }
}
