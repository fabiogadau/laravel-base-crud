<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index()
    {   
        // Movies DB
        $movies = Movie::all();
        
        // Return Homepage
        return view('home', compact('movies'));
    }
}
