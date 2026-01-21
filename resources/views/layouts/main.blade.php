<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB SUAD - Berita Dan Informasi</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/css/cyber.css">
</head>
<body>
    <!-- Enhanced Navbar with Three Dots Menu -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-enhanced">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="/">
            <i class="fas fa-graduation-cap"></i> SUAD GANTENG
        </a>

        <!-- Three Dots Menu for Right Side -->
        <div class="ml-auto">
            <div class="nav-item dropdown">
                <button class="btn btn-link nav-link" id="threeDotMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #0066CC; font-size: 24px;">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="threeDotMenu">
                    <a class="dropdown-item" href="/">
                        <i class="fas fa-home"></i> Home
                    </a>
                    <a class="dropdown-item" href="{{ url('/profile') }}">
                        <i class="fas fa-user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="/berita">
                        <i class="fas fa-newspaper"></i> Berita
                    </a>
                    <a class="dropdown-item" href="/contact">
                        <i class="fas fa-envelope"></i> Contact
                    </a>
                    <a class="dropdown-item" href="/datamahasiswa">
                        <i class="fas fa-book"></i> Data Mahasiswa
                    </a>
                    
                    @auth
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/my-profile">
                            <i class="fas fa-id-card"></i> My Profile
                        </a>
                        <a class="dropdown-item" href="/tambahmahasiswa">
                            <i class="fas fa-plus"></i> Tambah Mahasiswa
                        </a>
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                        </form>
                    @else
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                        <a class="dropdown-item" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <h6 style="color: #0066CC; font-weight: 700;">📝Platform</h6>
                    <p>Tentang Berita Dan Informasi</p>
                </div>
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <h6 style="color: #0066CC; font-weight: 700;">🔗Links</h6>
                    <p>
                        <a href="/about">Tentang Kami</a> | 
                        <a href="/contact">Hubungi Kami</a> | 
                        <a href="/berita">Berita</a>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <h6 style="color: #0066CC; font-weight: 700;">📞Kontak</h6>
                    <p>Email: sryoooadii@.com</p>
                </div>
            </div>
            <hr style="border-color: #ADD8E6;">
            <div class="text-center">
                <p class="mb-0">&copy; 2026 SuadGanteng - Semua hak dilindungi. Dibuat dengan hati</p>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>