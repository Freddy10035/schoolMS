<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class StudentAdmissionController extends Controller
{

    public function create()
    {
        return view('studentAdmission.register');
    }

    //create new student
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:students|email',
            'password' => 'required|confirmed|min:6'
        ]);

        
        //Hash Password
        $validatedData['password'] = bcrypt($validatedData['password']);
        
        //Create User 
        $student = Student::create($validatedData);

        //Login
        auth()->login($student);

        return redirect('/')->with('message', 'Student created and logged in');
    }


    //Logging out student
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    //show login form
    public function login()
    {
        return view('studentAdmission.login');
    }

    //authenticate student

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Authentication passed...
            return redirect('/')->with('message', 'Welcome Back');
        }
        
        return back()->withInput()->withErrors(['email' => 'Email or password is incorrect']);
    }

    
}
