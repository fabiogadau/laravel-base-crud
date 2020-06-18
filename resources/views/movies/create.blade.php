@extends('layouts.main')

@section('main-content')

   {{-- Title --}}
   <h2 class="mt-4 mb-3 text-center text-danger">Add movies</h2>

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

   {{-- Form to compile to add new movies --}}
   <form action="{{ route('movies.store') }}" method="POST">
      @csrf
      @method('POST')

      <div class="form-group">
         <input type="text" value="{{ old('title') }}" class="form-control mb-2" name="title" placeholder="Title">
         <input type="text" value="{{ old('genre') }}" class="form-control mb-2" name="genre" placeholder="Genre">
         <input type="text" value="{{ old('description') }}" class="form-control mb-2" name="description" placeholder="Plot">
         <input type="text" value="{{ old('release_date') }}" class="form-control" name="release_date" placeholder="Release date">
      </div>

      {{-- Input button to confirm addition of new movies --}}
      <input class="btn btn-danger" type="submit" value="Add movie">

   </form>

@endsection