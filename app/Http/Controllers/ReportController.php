<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    public function index()
    {
        $transactions = Transaction::all();
        $total_amount = Transaction::sum('amount');
        $paid_students = Transaction::groupBy('student_id')->count();

        return view('/reports', [
            'transactions' => $transactions, 
            'total_amount' => $total_amount, 
            'paid_students' => $paid_students
        ]);
    }
}
