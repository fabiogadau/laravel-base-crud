<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Laravel CRUD</title>
   {{-- Bootstrap Stylesheet --}}
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'/>
   {{-- Fontawesome --}}
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css'/>
</head>
<body>

   {{-- General app container --}}
   <div id="app" class="bg-dark mw-100 vh-100 d-flex flex-column">
      {{-- Header and Navbar --}}
      <header>
         <nav class="navbar navbar-expand navbar-dark bg-secondary">
            <div class="nav-brand">
               {{-- Button that redirects to Welcome page --}}
               <a href="{{ route('home') }}" class="nav-link text-body font-weight-bold"><i class="fas fa-video mr-1"></i>THE MOVIES DB</a>
            </div>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  {{-- Button that redirects to movies addition page --}}
                  <a href="{{ route('movies.create') }}" class="nav-link text-dark font-weight-bold">Add movies</a>
               </li>
               <li class="nav-item">
                  {{-- Button that redirects to Movies list page --}}
                  <a href="{{ route('movies.index') }}" class="nav-link text-dark font-weight-bold">Movie DB</a>
               </li>
            </ul>
         </nav>
      </header>
   