@extends('layouts.main')

@section('main-content')

    {{-- Title --}}
    <h1 class="mt-4 mb-3 text-center text-danger">Movies</h1>

    {{-- Message in case of deleting movies success --}}
    @if ( session('deleted') )
        <div class="alert alert-success mb-1">
            {{ session('deleted') }} succesfully deleted!
        </div>
    @endif

    {{-- Movies list and their details --}}
    <table class="table table-striped table-secondary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Plot</th>
                <th>Release Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>{{ $movie->release_date }}</td>
                    <td>
                        {{-- Button that redirects to actual movie details page --}}
                        <a class="btn btn-danger" href="{{ route('movies.show', $movie->id) }}">SHOW</a>
                    </td>
                    <td>
                        {{-- Button that redirects to actual movie update page --}}
                        <a class="btn btn-light" href="{{ route('movies.edit', $movie->id) }}">UPDATE</a>
                    </td>
                    <td>
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            {{-- Input button to delete actual movie --}}
                            <input class="btn btn-dark" type="submit" value="DELETE">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Button that redirects to movies addition page --}}
    <a href="{{ route('movies.create') }}" class="btn btn-danger mt-1">Add movie</a>

@endsection