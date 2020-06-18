<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Validation\Rule;

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
        return view('movies.index', compact('movies'));
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
        $request->validate($this->validationRules());

        /* Save new movie on database */
        // Create new movie
        $movie = new Movie();

        // Populate new movie
        //$movie->title = $data['title'];
        //$movie->genre = $data['genre'];
        //$movie->description = $data['description'];
        //$movie->release_date = $data['release_date'];
        $movie->fill($data);

        // Save new movie on database
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
        // Return Movies Show of single movie by id
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(/*$id*/ Movie $movie)
    {
        //$movie = Movie::find($id);
        // Return Movies Edit of single movie by id
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        // Get data from form
        $data = $request->all();

        // Validation
        $request->validate($this->validationRules($movie->id));

        // Update movie
        $updated = $movie->update($data);

        // Redirect to Movies Show
        if ($updated){
            return redirect()->route('movies.show', $movie->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        // Reference for movie to delete
        $ref = $movie->title;

        // Delete movie
        $deleted = $movie->delete();

        // Redirect with session data
        if ($deleted){
            return redirect()->route('movies.index')->with('deleted', $ref);
        }
    }

    // Define validation rules
    private function validationRules($id = null){
        return [
            //'title' => 'required|unique:movies|max:100',
            'title' => [
                'required',
                Rule::unique('movies')->ignore($id),
                'max:100'
            ],
            'genre' => 'required|max:50',
            'description' => [
                'required',
                Rule::unique('movies')->ignore($id),
                'max:65000'
            ],
            'release_date' => 'required'
        ];
    }
}