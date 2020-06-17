<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Movies DB
        $movies = Movie::all();
        
        // Return Movies Index
        return view('movies/index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return Movies Create
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Get data from form
        $data = $request->all();

        // Validation
        $request->validate([
            'title' => 'required|unique:movies|max:100',
            'genre' => 'required|max:50',
            'description' => 'required|unique:movies|max:65000',
            'release_date' => 'required'
        ]);

        // Save new classroom on database
        $movie = new Movie();
        $movie->title = $data['title'];
        $movie->genre = $data['genre'];
        $movie->description = $data['description'];
        $movie->release_date = $data['release_date'];
        $saved = $movie->save();

        // Redirect to Movies Show
        if ($saved){
            $newMovie = Movie::find($movie->id);
            return redirect()->route('movies.show', $newMovie);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        // Return Movies Show of single movie
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
