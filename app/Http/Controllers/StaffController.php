<?php

namespace App\Http\Controllers;

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
            'email' => 'required|unique:staff|email',
            'department' => 'required',
        ]);

        $staff = new Staff;
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->department = $request->department;
        $staff->save();

        return redirect('/staff');
    
}
}
