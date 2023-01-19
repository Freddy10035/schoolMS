<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Transaction;
use Illuminate\Http\Request;

class FeeCollectionController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        return view('feeCollection.index', ['students' => $students]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'student_id' => 'required',
            'date'=> 'required',
            'amount' => 'required|numeric',
        ]);

        $transaction = new Transaction;
        $transaction->student_id = $request->student_id;
        $transaction->amount = $request->amount;
        $transaction->save();

        // Send Mpesa payment prompt here

        return redirect('/transactions');
    }
    
}
