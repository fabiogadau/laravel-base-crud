@extends('layouts.main')

@section('main-content')

   {{-- Title --}}
   <h2 class="mt-4 mb-3 text-center text-danger">Movie details</h2>

   {{-- Single movie details --}}
   <table class="table table-striped table-secondary">
      <thead>
         <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Plot</th>
            <th>Release Date</th>
            <th>Added to DB at</th>
            <th>Updated at</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->genre }}</td>
            <td>{{ $movie->description }}</td>
            <td>{{ $movie->release_date }}</td>
            <td>{{ $movie->created_at }}</td>
            <td>{{ $movie->updated_at }}</td>
         </tr>
      </tbody>
   </table>

   <div class="mt-1 d-flex justify-content-between">
      {{-- Button that redirects to actual movie update page --}}
      <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-danger">Edit movie</a>
      
      <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
         @csrf
         @method('DELETE')
         {{-- Input button to delete actual movie --}}
         <input class="btn btn-secondary" type="submit" value="DELETE">
     </form>
   </div>

@endsection