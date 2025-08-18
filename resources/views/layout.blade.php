<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>id wed hackking</title>
</head>
<body>
  
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="http://127.0.0.1:8000/" class="navbar-brand ">my Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navberNav">
                <span class="navbar-toggler-icon"></span>
            </button>

          <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                       <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('index') }}">All posts</a>
                     </li>
                    <li class="nav-item">
                          <a class="nav-link" href="{{ route('create') }}">Create post</a>     
                    </li>
                </ul>
          </div>

        </div>
     </nav>

     <div class=" container mt-5">
        @yield('content')
     </div>

     <footer class="bg-dark p-3 mt-5 text-white text-center">
        <p>Copyright 2025 laravel 12 </p>
     </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>