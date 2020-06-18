@extends('layouts.main')

@section('main-content')

   {{-- Title --}}
   <h2 class="mt-4 mb-3 text-center text-danger">Edit movies</h2>

   {{-- Message in case of errors --}}
   @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
   @endif

   {{-- Form to compile to edit movies --}}
   <form action="{{ route('movies.update', $movie->id) }}" method="POST">
      @csrf
      @method('PATCH')

      <div class="form-group">
         <label for="title" class="text-muted">Title *</label>
         <input type="text" value="{{ old('title', $movie->title) }}" id="title" class="form-control mb-2" name="title" placeholder="Title">
         <label for="genre" class="text-muted">Genre *</label>
         <input type="text" value="{{ old('genre', $movie->genre) }}" id="genre" class="form-control mb-2" name="genre" placeholder="Genre">
         <label for="description" class="text-muted">Description *</label>
         <input type="text" value="{{ old('description', $movie->description) }}" id="description" class="form-control mb-2" name="description" placeholder="Plot">
         <label for="release_date" class="text-muted">Release date *</label>
         <input type="text" value="{{ old('release_date', $movie->release_date) }}" id="release_date" class="form-control" name="release_date" placeholder="Release date">
      </div>

      {{-- Input button to confirm movies updates --}}
      <input class="btn btn-danger" type="submit" value="Edit movie">

   </form>

@endsection