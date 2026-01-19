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
    <nav class="navbar navbar-expand-lg sticky-top">
        <a class="navbar-brand" href="/">SUAD GANTENG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/datamahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    @auth
                        <span class="nav-link" style="cursor: default;"> {{ Auth::user()->name }}</span>
                    @endauth
                </li>
                <li class="nav-item">
                    @auth
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" style="margin-top: 5px;">Logout</button>
                        </form>
                    @else
                        <a class="nav-link btn btn-sm btn-primary text-white" href="{{ route('login') }}" style="margin-top: 5px;">Login</a>
                    @endauth
                </li>
            </ul>
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