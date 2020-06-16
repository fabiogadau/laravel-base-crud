<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    // Methods
    public function index()
    {
        // Get all records from database
        $students = Student::all();

        // Return welcome page
        return view('welcome', compact('students'));
    }
}
