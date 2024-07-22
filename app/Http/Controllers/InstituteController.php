<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institute;

class institutecontroller extends Controller
{
    
    public function insert(Request $data){
        $user=new Institute();
        $user->institute_id=$data->input('institute_id');
        $user->institute_name=$data->input('institute_name');
        $user->address=$data->input('address');
        $user->contact=$data->input('contact');
        $user->email=$data->input('email');
        
        $user->save();
        return redirect()->back()->with('message','Data Inserted Successfully');
    }

    public function delete($institute_id){
        $user=Institute::find($institute_id);
        $user->delete();
        return redirect()->back()->with('message','Data deleted Successfully');
    }

    public function edit($id)
    {
        $user = Institute::findOrFail($id);
        return view('instituteedit', compact('user'));
    }

    public function update(Request $data){
        $user=Institute::find($data->input('institute_id'));
        $user->institute_id=$data->input('institute_id');
        $user->institute_name=$data->input('institute_name');
        $user->address=$data->input('address');
        $user->contact=$data->input('contact');
        $user->email=$data->input('email');
        $user->save();
        return redirect('/instituteshow')->with('message','Data Updated Successfully');
    }
}
