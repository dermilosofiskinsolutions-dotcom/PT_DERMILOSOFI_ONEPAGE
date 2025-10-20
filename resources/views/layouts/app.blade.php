<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT. DERMILOSOFI | Skin Solutions')</title>
    <!-- Favicon / tab logo -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        * { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
        body {
            background: linear-gradient(135deg, rgba(0,74,173,0.1) 0%, rgba(255,255,255,0.9) 100%), url('{{ asset('images/background/background1.png') }}') no-repeat center center fixed;
            background-size: cover;
            color: #222;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background: transparent !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            padding: 3px 0;
        }
        .navbar-brand img { height: 25px; margin-right: 5px; }
        .navbar-brand span { font-size: 1.2rem; font-weight: 700; }
        .nav-link { color: #004aad !important; font-weight: 600; font-size: 0.9rem; margin: 0 8px; }

        section { padding: 140px 0 100px 0; position: relative; }
        .container {
            background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(230,240,255,0.95) 100%);
            border-radius: 20px;
            padding: 30px;
            margin: 20px auto;
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
            backdrop-filter: blur(5px);
        }

        footer {
            background: linear-gradient(135deg, rgba(0,74,173,0.9) 0%, rgba(0,123,255,0.9) 100%), url('{{ asset('images/background/background1.png') }}') no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 50px 0 30px 0;
            backdrop-filter: blur(10px);
            position: relative;
            margin-top: 50px;
        }
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,74,173,0.8);
            z-index: 1;
        }
        footer > * {
            position: relative;
            z-index: 2;
        }
        @media (max-width:768px){
            section{min-height: auto !important; padding: 100px 20px 70px 20px !important; display: block !important;}
            .container-fluid{background: transparent !important; box-shadow: none !important; border-radius: 0 !important; padding: 0 !important; margin: 0 !important;}
            footer{margin-top: 20px; padding: 30px 20px;}
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <span class="fw-bold" style="color: #0292d8;">DERMILOSOFI</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="/#hero">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="/#products">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="/#alur-maklon">Alur Maklon</a></li>
                <li class="nav-item"><a class="nav-link" href="/#blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="/#testimoni">Testimoni</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('apply') }}">Karir</a></li>
                <li class="nav-item"><a class="nav-link" href="/#contact">Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user"></i></a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer style="background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%); color: white; padding: 50px 0 30px 0; margin-top: auto; position: relative; z-index: 10; border-top: 3px solid #004aad;">
        <div class="container">
            <div class="row">
            <!-- Navigasi -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="color: #004aad; font-size: 1.2rem; font-weight: 700;">Navigasi</h5>
                <ul class="list-unstyled" style="line-height: 2;">
                    <li><a href="/#hero" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Home</a></li>
                    <li><a href="/profil" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Profil</a></li>
                    <li><a href="/#products" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Produk</a></li>
                    <li><a href="/#alur-maklon" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Alur Maklon</a></li>
                    <li><a href="/#blog" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Blog</a></li>
                    <li><a href="/#testimoni" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Testimoni</a></li>
                    <li><a href="/#karir" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Karir</a></li>
                    <li><a href="/#contact" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Kontak</a></li>
                </ul>
            </div>

            <!-- Produk -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="color: #004aad; font-size: 1.2rem; font-weight: 700;">Produk</h5>
                <ul class="list-unstyled" style="line-height: 2;">
                    <li><a href="/#products" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Produk Maklon</a></li>
                    <li><a href="/#products" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Produk Mesin</a></li>
                </ul>
            </div>

            <!-- Hubungi Kami -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="color: #004aad; font-size: 1.2rem; font-weight: 700;">Hubungi Kami</h5>
                <ul class="list-unstyled" style="line-height: 2.2;">
                    <li style="font-size: 0.9rem; color: #004aad; font-weight: 600;"><i class="fas fa-envelope me-2" style="color: #004aad;"></i> dermilosofiskinsolutions@gmail.com</li>
                    <li style="font-size: 0.9rem; color: #004aad; font-weight: 600;"><i class="fas fa-phone me-2" style="color: #004aad;"></i> +62 856-9580-9589</li>
                    <li style="font-size: 0.85rem; line-height: 1.4; color: #004aad; font-weight: 600;"><i class="fas fa-map-marker-alt me-2" style="color: #004aad;"></i> MANUFACTURE: Jl.Wanajaya No.26,RT.01/RW.01,Pasir Jaya,Kec.Bogor Bar.,Kota Bogor,Jawa Barat 16119</li>
                    <li style="font-size: 0.85rem; line-height: 1.4; color: #004aad; font-weight: 600;"><i class="fas fa-map-marker-alt me-2" style="color: #004aad;"></i> MARKETING OFFICE: Wisma 46, 2nd Floor Unit 2.10, Jl. Jenderal Sudirman No.Kav. 1, RT.1/RW.8, Daerah Khusus Ibukota Jakarta 10220</li>
                    <li><a href="https://wa.me/dermilosofiskinsolutions" class="text-decoration-none fw-bold" target="_blank" style="font-size: 0.95rem; color: #004aad; font-weight: 600;">
                        <i class="fab fa-whatsapp me-2" style="color: #25d366;"></i> WhatsApp
                    </a></li>
                </ul>
            </div>
        </div>

        <hr class="my-4" style="border-color: rgba(255,255,255,0.2); border-width: 1px;">
        <div class="text-center" style="font-size: 0.9rem; color: #FFD700;">
            © {{ date('Y') }} PT. DERMILOSOFI. All Rights Reserved.
        </div>
        <div class="text-center mt-2" style="font-size: 0.8rem; color: #FFD700;">
            Developed by LiJarteam
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'showImageNumberLabel': false,
            'alwaysShowNavOnTouchDevices': true
        });
    </script>
</body>
</html>
