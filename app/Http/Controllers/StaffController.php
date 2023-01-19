<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    public function index()
    {
        $staff = Staff::all();
        return view('staff.index', ['staff' => $staff]);
    }

    public function create()
    {
        return view('staff.create');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'staffID' => 'required|unique:staff',
            'department' => 'required',
        ]);

        $staff = new Staff;
        $staff->name = $request->name;
        $staff->staffID = $request->staffID;
        $staff->department = $request->department;
        $staff->save();

        //Hash Password
        $validatedData['password'] = bcrypt($validatedData['password']);

        //Create staff
        $staff = Staff::create($validatedData);

        //Login
        auth()->login($staff);

        return redirect('/')->with('message', 'Staff Memger created and logged in');
    }


    //shows staff login page
    public function login()
    {
        return view('staff.login');
    }
}
