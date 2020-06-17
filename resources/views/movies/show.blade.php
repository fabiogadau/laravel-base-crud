@extends('layouts.main')

@section('main-content')

   <h2 class="mt-4 mb-3 text-center text-danger">Movie details</h2>

   <ul class="list-group">
      <li class="list-group-item">
         <strong>ID: </strong>
         {{ $movie->id }}
      </li>
      <li class="list-group-item">
         <strong>Title: </strong>
         {{ $movie->title }}
      </li>
      <li class="list-group-item">
         <strong>Genre: </strong>
         {{ $movie->genre }}
      </li>
      <li class="list-group-item">
         <strong>Plot: </strong>
         {{ $movie->description }}
      </li>
      <li class="list-group-item">
         <strong>Release date: </strong>
         {{ $movie->release_date }}
      </li>
      <li class="list-group-item">
         <strong>Added to DB at: </strong>
         {{ $movie->created_at }}
      </li>
      <li class="list-group-item">
         <strong>Updated at: </strong>
         {{ $movie->updated_at }}
      </li>
   </ul>

@endsection