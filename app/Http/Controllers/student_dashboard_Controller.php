<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student_dashboard_Controller extends Controller
{
    public function index()
    {
        return view('studentdashboard');
    }
}
