<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    //

    public function index()
{
    $students = Student::all(); // retrieve all students from the database
    return response()->json($students); // return the students as a JSON response
}

}
