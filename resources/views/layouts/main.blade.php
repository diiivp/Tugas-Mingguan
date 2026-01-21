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
    <!-- Enhanced Navbar with Hamburger Menu -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-enhanced">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="/">
            <i class="fas fa-graduation-cap"></i> SUAD GANTENG
        </a>

        <!-- Desktop Navigation Menu -->
        <div class="navbar-nav-desktop ml-auto d-none d-lg-flex">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
            <a class="nav-link" href="/berita">Berita</a>
            <a class="nav-link" href="/contact">Contact</a>
            <a class="nav-link" href="/datamahasiswa">Data Mahasiswa</a>

            @auth
                <!-- Profile Dropdown for Desktop -->
                <div class="nav-item dropdown ml-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarProfileDropdown" role="button" 
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarProfileDropdown">
                        <a class="dropdown-item" href="{{ url('/profile') }}">
                            <i class="fas fa-user"></i> My Profile
                        </a>
                        <a class="dropdown-item" href="/datamahasiswa">
                            <i class="fas fa-book"></i> Data Mahasiswa
                        </a>
                        <a class="dropdown-item" href="/tambahmahasiswa">
                            <i class="fas fa-plus"></i> Tambah Mahasiswa
                        </a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a class="nav-link btn btn-sm btn-primary text-white ml-3" href="{{ route('login') }}">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
                <a class="nav-link btn btn-sm btn-success text-white ml-2" href="{{ route('register') }}">
                    <i class="fas fa-user-plus"></i> Register
                </a>
            @endauth
        </div>

        <!-- Hamburger Menu for Mobile -->
        <div class="ml-auto d-lg-none">
            <button class="btn btn-link hamburger-menu" id="hamburgerBtn" type="button">
                <i class="fas fa-bars fa-2x"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Dropdown -->
    <div class="mobile-menu-dropdown" id="mobileMenuDropdown">
        <div class="mobile-menu-content">
            <div class="mobile-menu-header">
                <h5>Menu</h5>
                <button class="btn btn-link" id="closeMenuBtn">
                    <i class="fas fa-times fa-2x"></i>
                </button>
            </div>

            <div class="mobile-menu-items">
                <a href="/" class="mobile-menu-item">
                    <i class="fas fa-home"></i> Home
                </a>
                <a href="{{ url('/profile') }}" class="mobile-menu-item">
                    <i class="fas fa-user"></i> Profile
                </a>
                <a href="/berita" class="mobile-menu-item">
                    <i class="fas fa-newspaper"></i> Berita
                </a>
                <a href="/contact" class="mobile-menu-item">
                    <i class="fas fa-envelope"></i> Contact
                </a>
                <a href="/datamahasiswa" class="mobile-menu-item">
                    <i class="fas fa-book"></i> Data Mahasiswa
                </a>

                <div class="mobile-menu-divider"></div>

                @auth
                    <div class="mobile-menu-user">
                        <div class="user-info">
                            <i class="fas fa-user-circle fa-2x"></i>
                            <div>
                                <h6>{{ Auth::user()->name }}</h6>
                                <small>{{ Auth::user()->email }}</small>
                            </div>
                        </div>
                    </div>

                    <a href="/tambahmahasiswa" class="mobile-menu-item">
                        <i class="fas fa-plus"></i> Tambah Mahasiswa
                    </a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="mobile-menu-item btn-logout">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="mobile-menu-item">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                    <a href="{{ route('register') }}" class="mobile-menu-item">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                @endauth
            </div>
        </div>
    </div>

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

    <!-- Hamburger Menu JavaScript -->
    <script>
        $(document).ready(function() {
            const hamburgerBtn = $('#hamburgerBtn');
            const closeMenuBtn = $('#closeMenuBtn');
            const mobileMenuDropdown = $('#mobileMenuDropdown');
            const mobileMenuItems = $('.mobile-menu-item');

            // Open menu
            hamburgerBtn.on('click', function() {
                mobileMenuDropdown.addClass('active');
                $('body').addClass('menu-open');
            });

            // Close menu
            closeMenuBtn.on('click', function() {
                mobileMenuDropdown.removeClass('active');
                $('body').removeClass('menu-open');
            });

            // Close menu when clicking on a menu item
            mobileMenuItems.on('click', function() {
                mobileMenuDropdown.removeClass('active');
                $('body').removeClass('menu-open');
            });

            // Close menu when clicking outside
            $(document).on('click', function(event) {
                if (!$(event.target).closest(mobileMenuDropdown).length && 
                    !$(event.target).closest(hamburgerBtn).length) {
                    if (mobileMenuDropdown.hasClass('active')) {
                        mobileMenuDropdown.removeClass('active');
                        $('body').removeClass('menu-open');
                    }
                }
            });

            // Close menu on ESC key
            $(document).on('keydown', function(event) {
                if (event.key === 'Escape' && mobileMenuDropdown.hasClass('active')) {
                    mobileMenuDropdown.removeClass('active');
                    $('body').removeClass('menu-open');
                }
            });
        });
    </script>
</body>
</html>