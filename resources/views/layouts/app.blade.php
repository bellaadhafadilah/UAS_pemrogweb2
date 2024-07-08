<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'METODE WEIGHTED PRODUCT')</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Custom styles for navigation */
        .navbar {
            background-color: #800000 !important; /* Maroon */
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            color: #ffffff !important; /* White */
            font-weight: bold;
        }

        .navbar-toggler-icon {
            fill: #ffffff; /* White */
        }

        .navbar-nav .nav-link {
            color: #ffffff !important; /* White */
        }

        .navbar-nav .nav-link:hover {
            color: #f0f0f0 !important; /* Light Gray */
        }

        .navbar-nav .dropdown-menu {
            background-color: #800000 !important; /* Maroon */
            border: none;
        }

        .navbar-nav .dropdown-item {
            color: #ffffff !important; /* White */
            transition: background-color 0.3s ease;
        }

        .navbar-nav .dropdown-item:hover {
            background-color: #550000 !important; /* Darker Maroon */
        }

        .navbar-nav .dropdown-menu {
            animation: fadeInDown 0.4s ease;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-md bg-white shadow-lg bsb-navbar bsb-navbar-hover bsb-navbar-caret">
        <div class="container">
            <a class="navbar-brand" href="#">
                <strong>SPK PEMILIHAN KARIR DI BIDANG IT</strong>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('account.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('informasi') }}">Informasi</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dataDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data</a>
                            <ul class="dropdown-menu border-0 shadow">
                                <li><a class="dropdown-item" href="{{ route('data.alternatif') }}">Alternatif</a></li>
                                <li><a class="dropdown-item" href="{{ route('data.kriteria') }}">Kriteria</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="perhitunganDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Perhitungan</a>
                            <ul class="dropdown-menu border-0 shadow">
                                <li><a class="dropdown-item" href="{{ route('perhitungan.hasil') }}">Hasil</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu border-0 shadow">
                                <li>
                                    <a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
