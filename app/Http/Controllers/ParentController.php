<?php

namespace App\Http\Controllers;
use App\Models\parents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parents = parents::all();
        // dd($user);
        return view(('parent_info'),compact('parents'));
    }
    public function index1()
    {
        // $parents = parents::all();
        // dd($user);
        return view('parentdashboard');
    }
    
    public function insert(Request $data)
    {
        $data->validate([
            //'parent_id' => 'required|numeric|unique:parent,parent_id',
            'parent_name' => 'required|string|max:255',
            'contact_number' => 'required|numeric',
            'parent_email' => 'required|email|unique:parent,parent_email',
            'address' => 'required|string|max:255',
            'relationship_to_student' => 'required|string|in:F,M,G'
        ]);
        
        
        $parent = new parents();
        $user = auth()->user();
        $parent->institute_id= $user->institute_id;
       // $parent->parent_id=$data->input('parent_id');
        $parent->parent_name=$data->input('parent_name');
        $parent->contact_number=$data->input('contact_number');
        $parent->parent_email=$data->input('parent_email');
        $parent->address=$data->input('address');
        $parent->relationship_to_student=$data->input('relationship_to_student');
        $parent->save();


        
        $users = new users();
        $users->name = $request->input('parent_name');
        $users->email = $request->input('parent_email');
        $users->institute_id = Auth::user()->institute_id;
        $users->password = Hash::make($request->input('password'));
        $users->role = 'Parents';
        $users->save();


        return redirect()->back();
    }

    public function update(Request $data)
    {

        $data->validate([
            //'parent_id' => 'required|numeric|unique:parent,parent_id,'.$request->input('update_id'),
            'parent_name' => 'required|string|max:255',
            'contact_number' => 'required|numeric',
            'parent_email' => 'required|email|unique:parent,parent_email,',
            'address' => 'required|string|max:255',
            'relationship_to_student' => 'required|string|in:F,M,G'
        ]);

        $parent = parents::find($data->input('update_id'));
        // $parent->parent_id = $data->input('parent_id');
        $parent->parent_name = $data->input('parent_name');
        $parent->contact_number=$data->input('contact_number');
        $parent->parent_email=$data->input('parent_email');
        $parent->address=$data->input('address');
        $parent->relationship_to_student=$data->input('relationship_to_student');
        $parent->save();
        return redirect('/parent/show');
    }

    public function delete($parent_id)
    {
        
        $parent = parents::find($parent_id);
        $parent->delete();
        return redirect()->back();
       
    }
    
    public function edit($parent_id)
    {
        $parent = parents::find($parent_id);
        return view('parentinfoupdate',compact('parent'));
        
    }
    public function showparent()
    {
        $parents = parents::all();
        return view('parentinfoview',compact('parents')); 
    }

}