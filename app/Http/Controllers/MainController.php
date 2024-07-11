<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
{
    
    // public function admin(){
    //     return view('admin');
    // }

    public function login(){
        return view('login');
    }

    public function register1(){
        return view('register1');
    }


public function loginUser(Request $data){
    //dd($data);
    $user = User::where('email', $data->input('email'))->first();
    //dd($user);
    if ($user && $data->input('password') == $user->password && $data->input('user_id') == $user->user_id) {
        //session()->put('id', $user->id);
        session()->put('user_id', $user->user_id); // Add authentication of user_id
        return redirect('/form');
    }
    return redirect('/login')->with('error', 'Invalid email or password or ID');
}

    public function registerUser(Request $request){
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
    
        try {
            $newUser = new User();
            $newUser->name = $validatedData['name'];
            $newUser->email = $validatedData['email'];
            // Hash the password for security
            $newUser->password = Hash::make($validatedData['password']);
    
            if($newUser->save()){
                return redirect('/')->with('success', 'Registered successfully!');
            } else {
                // Debug statement to check if save() method returns false
                dd('Failed to save user');
            }
        } catch (\Exception $e) {
            // Log the error
            Log::error('User registration failed: ' . $e->getMessage());
            // Optionally, return an error response
            return redirect('register1')->withErrors('Registration failed. Please try again.');
        }   
    }

    public function logout()
    {
       Auth::logout();
        return redirect('/login')->with('status','You have been successfully logout!!!!');
    }

    
}
