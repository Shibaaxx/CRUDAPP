<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon2.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.rtl.min.css"
    rel="stylesheet">
</head>
<body>
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a href="#" class="navbar-brand">CRUD App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=
"#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('index') }}" class="nav-link" {{ request()->
is('/') ? 'active' : '' }}>All posts</a></li>
                <li class="nav-item"><a href="{{ route('create') }}" class="nav-link">Create Posts</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                @auth

                    <li class="nav-item">
                        <a href="{{ route('create') }}" class="nav-link">Create Posts</a>
                    </li>

                    @if(auth()->user()->role == 1)
                        <li class="nav-item">
                            <a href="{{ route('admin') }}" class="nav-link">Admin</a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            {{ auth()->user()->name }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-link nav-link border-0">
                                Logout
                            </button>
                        </form>
                    </li>

                @else

                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
<p>&copy; 2026 CRUD App. All rights reserved.</p>
</footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>