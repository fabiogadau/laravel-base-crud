@extends('layouts.main')

@section('main-content')

   {{-- Welcome Jumbotron --}}
   <div class="jumbotron mt-5 bg-secondary">
      {{-- Title and description --}}
      <h1 class="display-4">Welcome to The Movies DB!</h1>
      <p class="lead">A test website for using crud in Laravel.</p>
      <hr class="my-4">
      <p>You can create, read, update, and delete movies from the database.</p>
      <p class="lead">
         {{-- Button that redirects to Movies list page --}}
         <a href="{{ route('movies.index') }}" class="btn btn-danger mt-4 mb-3">Go to Movies Database</a>
      </p>
    </div>

@endsection