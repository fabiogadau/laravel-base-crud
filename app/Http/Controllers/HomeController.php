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
        //$students = Student::all();

        // Get all records from database WHERE 'id' = 1
        //$students = Student::where('id', 1)->get();

        // Get all records from database WHERE 'id' != 1
        //$students = Student::where('id', '<>', 1)->get();

        // Get all records from database WHERE 'id' != 3
        //$students = Student::where('id', '<>', 3)->get();

        // Get all records from database WHERE 'description' != '' and ordered by 'name' asc
        //$students = Student::where('description', '<>', '')->orderBy('name', 'asc')->get();

        // Get all records from database WHERE 'id' != 2 and ordered by 'id' desc
        //$students = Student::where('id', '<>', 2)->orderBy('id', 'desc')->get();

        /* SINGLE INSTANCES */
        // FIRST (get first record from database)
        //$students[] = Student::first();

        // FIND (get single record by id number from database)
        $students[] = Student::find(2);


        // Return welcome page
        return view('welcome', compact('students'));
    }
}
