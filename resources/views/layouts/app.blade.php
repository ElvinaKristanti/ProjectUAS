<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="d-flex">
        <nav class="sidebar bg-secondary" style="width: 250px; height: 100vh;">
            <div class="text-center pt-4">
                <h2 class="text-light">LMS</h2>
            </div>
            <div class="sidebar-menu position-sticky pt-3 px-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-light active" href="">
                            <i class="pe-2 bi bi-people-fill"></i> Siswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('mapels.index') }}">
                            <i class="pe-2 bi bi-card-list"></i> Mata Pelajaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="">
                            <i class="pe-2 bi bi-journals"></i> Nilai
                        </a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link text-light btn btn-link">
                                    <i class="pe-2 bi bi-box-arrow-left"></i> Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}">
                                <img src="./assets/ikon/login.svg" alt="">Login
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>

        <div class="container py-5 flex-grow-1">
            @yield('content')
        </div>
    </div>
</body>

</html>
