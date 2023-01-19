<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


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

        //Create User 
        $student = Student::create($validatedData);

        //Hash Password
        $validatedData['password'] = bcrypt($validatedData['password']);


        //Login
        auth()->login($student);

        return redirect('/')->with('message', 'Student created and logged in');
    }


    //Log out user
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

    //authenticate user
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
