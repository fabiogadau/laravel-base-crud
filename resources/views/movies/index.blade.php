@extends('layouts.main')

@section('main-content')

    <h1 class="mt-4 mb-3 text-center text-danger">Movies</h1>

    <section class="movies bg-dark">
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
                        <td><a class="btn btn-danger" href="{{ route('movies.show', $movie->id) }}">SHOW</a></td>
                        <td><a class="btn btn-danger" href="#">UPDATE</a></td>
                        <td><a class="btn btn-danger" href="#">DELETE</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection