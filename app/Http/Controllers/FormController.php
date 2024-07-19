<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Institute;
use App\Models\studnt;
use App\Models\Faculty;

class FormController extends Controller
{
    /**
     * Display the form.
     *
     * @return \Illuminate\View\View
     */

    public function showForm()
    {
        $rowCount1 = studnt::count();
        $rowCount2 = Faculty::count();
        $rowCount3 = Institute::count();
        return view('index', [
            'rowCount1' => $rowCount1,
            'rowCount2' => $rowCount2,
            'rowCount3' => $rowCount3,
        ]);
        
    }

    /**
     * Handle form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email_verified' => 'required|in:yes,no',
        ]);

        // Process the form data here
        // For example, you can create a new user or update a database record

        // Redirect back to the form page with a success message
        return redirect()->route('form')->with('success', 'Form submitted successfully!');
    }
}
