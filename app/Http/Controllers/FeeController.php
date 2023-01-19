<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    //

    public function index()
    {
        $fees = Fee::all();
        return view('fees.index', ['fees' => $fees]);
    }

    public function create()
    {
        return view('fees.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'grade' => 'required',
            'amount' => 'required|numeric',
        ]);

        $fee = new Fee;
        $fee->grade = $request->grade;
        $fee->amount = $request->amount;
        $fee->save();

        return redirect('/');
    }
}
