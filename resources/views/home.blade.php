@extends('layouts.main')

@section('main-content')

   <section class="container d-flex justify-content-center align-items-center">
      <a href="{{ route('movies.index') }}" class="btn btn-danger mt-4 mb-3 text-center">Go to Movies Database</a>
   </section>

@endsection