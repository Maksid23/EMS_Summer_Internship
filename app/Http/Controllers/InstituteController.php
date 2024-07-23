<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institute;
use App\Models\users;
use Illuminate\Support\Facades\Hash;

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

        $users = new users();
        $users->name = $data->input('institute_name');
        $users->institute_id=$data->input('institute_id');
        $users->email = $data->input('email');
        $users->password = Hash::make($data->input('password'));
        $users->role = 'Management';
        $users->save();

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
        return redirect('/institute/instituteshow')->with('message','Data Updated Successfully');
    }
}
