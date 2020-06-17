@extends('layouts.main')

@section('main-content')

   <h2 class="mt-4 mb-3 text-center text-danger">Add movies</h2>

   @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
   @endif

   <form action="{{ route('movies.store') }}" method="POST">
      @csrf
      @method('POST')

      <div class="form-group">
         <input type="text" class="form-control mb-2" name="title" placeholder="Title">
         <input type="text" class="form-control mb-2" name="genre" placeholder="Genre">
         <input type="text" class="form-control mb-2" name="description" placeholder="Plot">
         <input type="text" class="form-control" name="release_date" placeholder="Release date">
      </div>

      <input class="btn btn-danger" type="submit" value="Add movie">

   </form>

@endsection