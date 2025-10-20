 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. DERMILOSOFI | Skin Solutions</title>
    <!-- Favicon / tab logo -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


    <style>
        * { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
        html, body {
            overflow-x: hidden;
        }
        body {
            margin: 0;
            background: linear-gradient(135deg, rgba(0,74,173,0.1) 0%, rgba(255,255,255,0.9) 100%), url('{{ asset('images/background/background1.png') }}') no-repeat center center;
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
        .navbar-brand img { height: 40px; margin-right: 8px; }
        .navbar-brand span { font-size: 1.4rem; font-weight: 700; }
        .nav-link { color: #004aad !important; font-weight: 600; font-size: 0.9rem; margin: 0 8px; }

        /* Background with PNG image */
        .leaf-bg {
            background: linear-gradient(135deg, rgba(0,74,173,0.2) 0%, rgba(255,255,255,0.9) 100%), url('{{ asset('images/background/background1.png') }}') no-repeat center center;
            background-size: cover;
            position: relative;
        }
        .leaf-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255,255,255,0.3);
            z-index: 1;
        }
        .leaf-bg .container-fluid {
            position: relative;
            z-index: 2;
        }

        /* Alternating backgrounds */
        .leaf-bg:nth-child(odd) {
            background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(240,248,255,0.95) 100%);
        }
        .leaf-bg:nth-child(odd)::before {
            background: rgba(255,255,255,0.5);
        }
        .leaf-bg:nth-child(even) {
            background: linear-gradient(135deg, rgba(0,74,173,0.15) 0%, rgba(255,255,255,0.85) 100%), url('{{ asset('images/background/background1.png') }}') no-repeat center center;
            background-size: cover;
        }
        .leaf-bg:nth-child(even)::before {
            background: rgba(255,255,255,0.2);
        }

        section { padding: 140px 0 100px 0; position: relative; }
        .container {
            background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(230,240,255,0.95) 100%);
            border-radius: 20px;
            padding: 30px;
            margin: 20px auto;
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
            backdrop-filter: blur(5px);
        }
        #hero {
            background: linear-gradient(135deg, rgba(0,74,173,0.3) 0%, rgba(255,255,255,0.7) 100%), url('{{ asset('images/background/background1.png') }}') no-repeat center center;
            background-size: cover;
            text-align: center;
            padding: 150px 20px;
            min-height: 100vh;
            position: relative;
        }
        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255,255,255,0.2);
            z-index: 1;
        }
        #hero .container-fluid {
            position: relative;
            z-index: 2;
            padding-left: 15px;
            padding-right: 15px;
            margin-left: auto;
            margin-right: auto;
            max-width: 1400px;
            box-sizing: border-box;
        }

        #hero h1 { font-size: 2.8rem; font-weight: 700; color: #004aad; margin-bottom: 20px; }
        #hero p { font-size: 1.2rem; margin-top: 15px; color: #444; line-height: 1.6; }
        .btn-primary {
            background-color: #004aad; border: none; border-radius: 50px; padding: 10px 25px;
        }
        .btn-primary:hover { background-color: #007bff; }

        .section-title { text-align: center; margin-bottom: 50px; }
        .section-title h2 { color: #004aad; font-weight: 700; }

        .product-card, .service-card {
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            border: none;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            transition: 0.3s;
        }
        .product-card:hover, .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }
        .product-card img {
            cursor: pointer;
            transition: 0.3s;
        }
        .product-card img:hover {
            transform: scale(1.05);
        }
        .lightbox {
            z-index: 9999 !important;
        }
        .lightbox .lb-outerContainer {
            background-color: rgba(0, 0, 0, 0.9) !important;
        }
        .lightbox .lb-data .lb-caption {
            background-color: rgba(0, 0, 0, 0.8) !important;
            color: white !important;
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

        .pulse {
            animation: pulse 2s infinite;
        }
        /* Keyframe Animations */
        
        /* Pulse Animation */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        @keyframes slideUp {
            0% { transform: translateY(20px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        @keyframes slideInLeft {
            0% { transform: translateX(-20px); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideInRight {
            0% { transform: translateX(20px); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }
        @keyframes zoomIn {
            0% { transform: scale(0.9); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); opacity: 1; }
        }
        @media (max-width:760px){
            #hero h1{font-size:2rem;}
            #hero { 
                padding: 140px 20px 180px 20px !important; /* Increased top and bottom padding for better spacing */
                min-height: auto !important;
                height: auto !important;
                overflow: visible !important;
            }
            section{min-height: auto !important; padding: 100px 20px 70px 20px !important; display: block !important;}
            .container-fluid{background: transparent !important; box-shadow: none !important; border-radius: 0 !important; padding: 0 !important; margin: 0 !important;}
            #hero .container-fluid {
                flex-direction: column;
                height: auto !important;
                padding: 20px;
            }
            #hero .container-fluid > div:first-child {
                flex-direction: column;
                width: 100% !important;
                margin-bottom: 20px;
            }
            #hero .container-fluid > div:first-child img {
                width: 80% !important;
                margin: 10px auto;
                display: block;
            }
            #hero .container-fluid > div:last-child {
                margin-top: 0 !important;
            }
            .section-title{margin-bottom: 30px;}
            .product-card, .service-card{margin-bottom: 20px;}
            .ceo-card{margin-bottom: 20px;}
            .vision-mission{margin-top: 20px; padding: 20px;}
            footer{margin-top: 20px; padding: 30px 20px;}



            /* Responsive carousel adjustments */
            #heroCarousel { max-width: 100% !important; }
            .carousel-item .text-center { max-width: 100% !important; padding: 0 20px; }
            .carousel-item img { max-height: 150px !important; }
            .carousel-item h5 { font-size: 1rem !important; }
            .carousel-item p { font-size: 0.9rem !important; }

            /* Responsive blog grid */
            .product-card img { height: 150px !important; }
            .product-card h6 { font-size: 0.9rem !important; }
            .product-card p { font-size: 0.8rem !important; }

            /* Responsive MOQ cards */
            .card h5 { font-size: 1rem !important; }
            .card ul li { font-size: 0.8rem !important; }

            /* Responsive columns */
            .columns { gap: 20px !important; }
            .column { min-width: 280px !important; }

            /* Ensure "Hubungi Kami" button is visible */
            #hero .btn-lg { font-size: 1rem !important; padding: 12px 24px !important; margin-top: 50px !important; }
        }

        /* Carousel indicators styling */
        .carousel-indicators {
            bottom: -50px;
        }
        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(0,74,173,0.5);
            border: 2px solid #004aad;
            margin: 0 5px;
        }
        .carousel-indicators .active {
            background-color: #004aad;
        }

        /* Mobile carousel controls positioning */
        @media (max-width: 760px) {
            .carousel-control-prev, .carousel-control-next {
                width: 40px !important;
                height: 40px !important;
                top: 40% !important; /* Position higher up from center */
                transform: translateY(-50%) !important;
            }
            .carousel-control-prev {
                left: 10px !important;
            }
            .carousel-control-next {
                right: 10px !important;
            }
        }

        /* Services section styling */
        .content {
            position: relative;
            z-index: 2;
        }

        .content h2 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 10px;
            text-align: center;
        }

        .content h2 span {
            color: #004aad;
            font-weight: 700;
        }

        .content p {
            max-width: 700px;
            margin: 0 auto 50px auto;
            font-size: 1rem;
            color: #444;
        }

        .columns {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }

        .column {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 30px;
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .column:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .column h3 {
            color: #004aad;
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .column p {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        @media (max-width: 760px) {
            .columns {
                flex-direction: column;
                align-items: center;
            }
        }
        .about-section {
            position: relative;
            background: linear-gradient(135deg, rgba(0,74,173,0.1) 0%, rgba(255,255,255,0.95) 100%), url('{{ asset('images/background/background1.png') }}') no-repeat center center;
            background-size: cover;
            margin-top: -60px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            padding: 40px;
        }
        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255,255,255,0.4);
            border-radius: 20px;
            z-index: 1;
        }
        .about-section > * {
            position: relative;
            z-index: 2;
        }
        .ceo-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
            overflow: hidden;
            text-align: center;
            padding: 10px;
            margin-bottom: 20px;
        }
        .ceo-card img {
            width: 100%;
            border-bottom: 3px solid #007bff;
        }
        .vision-mission {
            background-color: #e8f1ff;
            border-radius: 15px;
            padding: 30px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <span class="fw-bold" style="color: #0292d8;">DERMILOSOFI</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#hero"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#profil"><i class="fas fa-user me-1"></i>Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="#products"><i class="fas fa-box me-1"></i>Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="#alur-maklon"><i class="fas fa-route me-1"></i>Alur Maklon</a></li>
                <li class="nav-item"><a class="nav-link" href="#blog"><i class="fas fa-blog me-1"></i>Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimoni"><i class="fas fa-star me-1"></i>Testimoni</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('apply') }}"><i class="fas fa-briefcase me-1"></i>Karir</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact"><i class="fas fa-envelope me-1"></i>Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user"></i></a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <section id="hero" data-aos="fade-up" style="position: relative;">
        <div class="container-fluid text-center" style="position: relative; z-index: 2; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; margin-top: 60px;">
            <div>
                <h1 data-aos="fade-up" data-aos-delay="100">Solusi Maklon Skincare Profesional</h1>
                <p data-aos="fade-up" data-aos-delay="400">PT. DERMILOSOFI hadir membantu Anda mewujudkan brand skincare impian dengan layanan formulasi, produksi, dan legalitas lengkap.</p>
            </div>
                <div style="width: 100%; max-width: 1400px; margin: 30px auto 0 auto; display: flex; justify-content: center; align-items: center;">
                <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" style="flex: 1; max-width: 1200px;">
                    <div class="carousel-indicators">
                        @foreach($blogs->take(4) as $index => $blog)
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach($blogs->take(4) as $index => $blog)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="d-flex justify-content-center align-items-center" style="height: 350px;">
                                <div class="text-center" style="max-width: 500px;">
@if($blog->image_path)
    <img src="{{ asset('images/' . str_replace('blogs/', 'BLOG/', $blog->image_path)) }}" class="img-fluid mb-2 rounded" alt="{{ $blog->title }}" style="max-height: 200px; object-fit: cover; width: 100%; border-radius: 10px !important;" data-aos="fade-up" data-aos-delay="200">
@else
    <img src="{{ asset('images/BLOG/1.png') }}" class="img-fluid mb-2 rounded" alt="{{ $blog->title }}" style="max-height: 200px; object-fit: cover; width: 100%; border-radius: 10px !important;" data-aos="fade-up" data-aos-delay="200">
@endif
                                    <h5 class="text-white mb-2" style="font-weight: 600; font-size: 1.2rem;">{{ $blog->title }}</h5>
                                    <p class="text-white mb-3" style="font-size: 1rem; line-height: 1.5;">{{ Str::limit($blog->excerpt ?: strip_tags($blog->content), 100) }}</p>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blogModal{{ $blog->id }}">Baca Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div style="text-align: center; margin-top: 110px; margin-bottom: 50px;">
                <a href="https://wa.me/dermilosofiskinsolutions" class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="300" target="_blank">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <!-- ABOUT US -->
    <section id="profil" class="about-section" style="background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(240,248,255,0.95) 100%);">
        <div class="row">
            <div class="col-12">
                <h3 class="fw-bold text-primary text-center" style="font-size: 2.2rem;">Tentang Kami</h3>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="ceo-card text-center">
                        <img src="{{ asset('images/Profil/ceo.jpg') }}" alt="CEO Founder">
                    <p class="fw-bold mt-2 mb-0" style="font-size: 1.1rem;">CEO Founder - Mr. Ruly Haykal</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <p style="font-size: 1.15rem; line-height: 1.7;">
                    PT. DERMILOSOFI adalah perusahaan yang bergerak di bidang maklon skincare dengan komitmen tinggi terhadap kualitas dan inovasi. Kami menyediakan layanan formulasi, produksi, dan legalitas produk skincare yang lengkap untuk membantu mewujudkan brand impian Anda.
                </p>
            </div>
        </div>

        <!-- VISION & MISSION -->
        <div class="vision-mission mt-4">
            <h4 class="fw-bold text-primary" style="font-size: 1.5rem;">🌟 VISI</h4>
            <p style="font-size: 1.1rem; line-height: 1.6;">
              Menjadi perusahaan maklon skincare terdepan di Indonesia yang memberikan solusi inovatif, berkualitas tinggi, dan berdaya saing global untuk mewujudkan impian brand kecantikan setiap klien.
            </p>

            <h4 class="fw-bold text-primary mt-4" style="font-size: 1.5rem;">🎯 MISI</h4>
            <p style="font-size: 1.1rem; line-height: 1.6;">
                -Memberikan layanan maklon profesional dengan standar kualitas internasional, mulai dari formulasi, produksi, hingga legalitas produk.
                 <br>
                -Mendukung pengembangan brand skincare lokal agar mampu bersaing di pasar nasional dan internasional.
                 <br>
                -Mengutamakan riset dan inovasi berkelanjutan untuk menghasilkan produk yang aman, efektif, dan sesuai tren pasar.
 <br>
                -Membangun kemitraan jangka panjang dengan setiap klien melalui transparansi, kepercayaan, dan layanan yang responsif.
<br>
                -Berkomitmen terhadap keberlanjutan lingkungan dengan menerapkan praktik produksi yang ramah lingkungan dan efisien.
            </p>
        </div>

        <!-- COMPANY PROFILE GALLERY -->
        <div class="company-gallery mt-5">
            <h5 class="fw-bold text-center text-primary mb-4" style="font-size: 1.4rem;">Galeri Profil Perusahaan</h5>
            <div class="row g-3">
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('images/Profil/SUASANA PABRIK SKINCARE DAN KOSMETIK. DENGAN MESIN PRODUKSI SEDANG MENGISI BOTOL KEMASAN SKINCARE (1).jpg') }}" class="img-fluid rounded shadow-sm" alt="Company Profile" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('images/Profil/SUASANA PABRIK SKINCARE DAN KOSMETIK. DENGAN MESIN PRODUKSI SEDANG MENGISI BOTOL KEMASAN SKINCARE (2).jpg') }}" class="img-fluid rounded shadow-sm" alt="Company Profile" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('images/Profil/SUASANA PABRIK SKINCARE DAN KOSMETIK. DENGAN MESIN PRODUKSI SEDANG MENGISI BOTOL KEMASAN SKINCARE.jpg') }}" class="img-fluid rounded shadow-sm" alt="Company Profile" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('images/Profil/BUAT GAMBAR PRODUK SKINCARE SEDANG DI PRODUKSI (1).jpg') }}" class="img-fluid rounded shadow-sm" alt="Company Profile" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('images/Profil/BUAT GAMBAR PRODUK SKINCARE SEDANG DI PRODUKSI (2).jpg') }}" class="img-fluid rounded shadow-sm" alt="Company Profile" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="{{ asset('images/Profil/BUAT GAMBAR PRODUK SKINCARE SEDANG DI PRODUKSI (3).jpg') }}" class="img-fluid rounded shadow-sm" alt="Company Profile" style="width: 100%; height: 200px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Alur Maklon -->
    <section id="alur-maklon" class="leaf-bg" data-aos="fade-up" style="min-height: 100vh; padding: 150px 20px; position: relative; display: flex; align-items: center; justify-content: center;">
        <div class="container-fluid" style="background: transparent; box-shadow: none; border-radius: 0; padding: 0; margin: 0;">
            <div class="section-title">
                <h2 data-aos="fade-up" data-aos-delay="100">Tahapan Proses dan Persyaratan Maklon</h2>
                <p data-aos="fade-up" data-aos-delay="200">Berikut alur kerja pembuatan produk jika Anda bekerjasama dengan kami — dari konsep hingga pengiriman.</p>
            </div>

            <div class="row">
                <!-- Tahapan -->
                <div class="col-md-6">
                    <h3 class="text-center mb-4" style="color: #004aad; font-weight: 700;">Tahapan</h3>
                    <div class="row">
                        <!-- Column 1: Steps 1-4 -->
                        <div class="col-md-6">
                            <div class="mb-3 p-3 border rounded shadow-sm" style="min-height: 120px;">
                                <div class="text-center mb-2">
                                    <span style="font-size: 2rem;">💡</span>
                                </div>
                                <h5 class="text-center" style="font-weight: 600;">Konsep Produk</h5>
                                <p class="text-sm text-muted">Pelanggan berdiskusi dengan tim R&D Beauty Lab untuk membuat konsep produk sesuai dengan yang dinginkan oleh pelanggan.</p>
                            </div>
                            <div class="mb-3 p-3 border rounded shadow-sm" style="min-height: 120px;">
                                <div class="text-center mb-2">
                                    <span style="font-size: 2rem;">🧪</span>
                                </div>
                                <h5 class="text-center" style="font-weight: 600;">Sampel Produk & Panel Test</h5>
                                <p class="text-sm text-muted">Beauty Lab mengirimkan sampel produk kepada pelanggan untuk dilakukan percobaan pemakaian oleh pelanggan.</p>
                            </div>
                            <div class="mb-3 p-3 border rounded shadow-sm" style="min-height: 120px;">
                                <div class="text-center mb-2">
                                    <span style="font-size: 2rem;">📦</span>
                                </div>
                                <h5 class="text-center" style="font-weight: 600;">Pemilihan Bahan Kemasan</h5>
                                <p class="text-sm text-muted">Pelanggan memilih jenis kemasan produk (primer maupun sekunder) yang akan dipakai.</p>
                            </div>
                            <div class="mb-3 p-3 border rounded shadow-sm" style="min-height: 120px;">
                                <div class="text-center mb-2">
                                    <span style="font-size: 2rem;">💰</span>
                                </div>
                                <h5 class="text-center" style="font-weight: 600;">Kesepakatan Harga</h5>
                                <p class="text-sm text-muted">Pelanggan dan Sales Marketing Beauty Lab melakukan persetujuan harga sesuai dengan sampel terakhir yang disetujui oleh pelanggan.</p>
                            </div>
                        </div>

                        <!-- Column 2: Steps 5-8 -->
                        <div class="col-md-6">
                            <div class="mb-3 p-3 border rounded shadow-sm" style="min-height: 120px;">
                                <div class="text-center mb-2">
                                    <span style="font-size: 2rem;">🧫</span>
                                </div>
                                <h5 class="text-center" style="font-weight: 600;">Uji Stabilitas Produk</h5>
                                <p class="text-sm text-muted">Uji stabilitas untuk mengetahui kestabilan, keamanan dan kompatibilitas dari produk yang dikembangkan.</p>
                            </div>
                            <div class="mb-3 p-3 border rounded shadow-sm" style="min-height: 120px;">
                                <div class="text-center mb-2">
                                    <span style="font-size: 2rem;">📋</span>
                                </div>
                                <h5 class="text-center" style="font-weight: 600;">Registrasi BPOM</h5>
                                <p class="text-sm text-muted">Produk akan didaftarkan ke BPOM RI untuk mendapatkan notifikasi (izin edar) kosmetika.</p>
                            </div>
                            <div class="mb-3 p-3 border rounded shadow-sm" style="min-height: 120px;">
                                <div class="text-center mb-2">
                                    <span style="font-size: 2rem;">🏭</span>
                                </div>
                                <h5 class="text-center" style="font-weight: 600;">Proses Produksi</h5>
                                <p class="text-sm text-muted">Produk akan masuk ke tahapan produksi oleh Beauty Lab sesuai dengan purchase order dari pelanggan.</p>
                            </div>
                            <div class="mb-3 p-3 border rounded shadow-sm" style="min-height: 120px;">
                                <div class="text-center mb-2">
                                    <span style="font-size: 2rem;">🚚</span>
                                </div>
                                <h5 class="text-center" style="font-weight: 600;">Pengiriman</h5>
                                <p class="text-sm text-muted">Produk siap dikirim ke pelanggan dan siap untuk dipasarkan oleh pelanggan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Persyaratan -->
                <div class="col-md-6">
                    <h3 class="text-center mb-4" style="color: #004aad; font-weight: 700;">Persyaratan</h3>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="p-4 border rounded shadow-sm bg-light">
                                <h5 class="mb-3" style="font-weight: 600;">Perseorangan</h5>
                                <ul class="list-unstyled">
                                    <li>• HAKI/Sertifikat, Merk/Form Pendaftaran Merk (harus kelas 3/kelas kosmetik)</li>
                                    <li>• Nomor Pokok Wajib Pajak (NPWP) Orang Pribadi</li>
                                    <li>• Kartu Tanda Penduduk (KTP)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-4 border rounded shadow-sm bg-light">
                                <h5 class="mb-3" style="font-weight: 600;">Badan Usaha</h5>
                                <ul class="list-unstyled">
                                    <li>• HAKI/Sertifikat, Merk/Form Pendaftaran Merk (harus kelas 3/kelas kosmetik)</li>
                                    <li>• Nomor Pokok Wajib Pajak (NPWP) Perusahaan</li>
                                    <li>• Kartu Tanda Penduduk (KTP Direktur/Penanggung jawab)</li>
                                    <li>• Nomor Induk Berusaha</li>
                                    <li>• Surat Izin Usaha Perdagangan</li>
                                    <li>• Surat Izin Operasional</li>
                                    <li>• Surat Izin Komersial</li>
                                    <li>• Surat Rekomendasi dari Balai BPOM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MOQ & Benefit -->
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="text-center mb-4" style="color: #004aad; font-weight: 700;">MOQ & Benefit</h3>
                    <div class="row g-4 justify-content-center">
                        <!-- MOQ 50 pcs -->
                        <div class="col-12 col-sm-6 col-lg-2">
                            <div class="card h-100" style="background: linear-gradient(135deg, #5ce1e6 0%, #0292d8 100%); color: white; border: none; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                                <div class="card-body p-4">
                                    <h5 class="card-title text-center mb-3" style="font-weight: 700;">MOQ 50 pcs</h5>
                                    <ul class="list-unstyled">
                                        <li>• Repeat order minimal 50 pcs / bulan selama 3 tahun</li>
                                        <li>• Biaya notifikasi BPOM Rp. 1.000.000 / produk</li>
                                        <li>• Biaya sertifikasi halal Rp. 2.000.000 / produk</li>
                                        <li>• Payment 100% di awal turun PO</li>
                                        <li>• Biaya sampel Rp. 500.000 / produk (max 5x revisi)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- MOQ 100 pcs -->
                        <div class="col-12 col-sm-6 col-lg-2">
                            <div class="card h-100" style="background: linear-gradient(135deg, #5ce1e6 0%, #0292d8 100%); color: white; border: none; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                                <div class="card-body p-4">
                                    <h5 class="card-title text-center mb-3" style="font-weight: 700;">MOQ 100 pcs</h5>
                                    <ul class="list-unstyled">
                                        <li>• Repeat order minimal 15x selama masa notifikasi 3 tahun</li>
                                        <li>• Biaya notifikasi BPOM Rp. 1.000.000 / produk</li>
                                        <li>• Biaya sertifikasi halal Rp. 2.000.000 / produk</li>
                                        <li>• Payment 100% di awal turun PO</li>
                                        <li>• Biaya sampel Rp. 500.000 / produk (max 5x revisi)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- MOQ 500 pcs -->
                        <div class="col-12 col-sm-6 col-lg-2">
                            <div class="card h-100" style="background: linear-gradient(135deg, #5ce1e6 0%, #0292d8 100%); color: white; border: none; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                                <div class="card-body p-4">
                                    <h5 class="card-title text-center mb-3" style="font-weight: 700;">MOQ 500 pcs</h5>
                                    <ul class="list-unstyled">
                                        <li>• Free desain kemasan 3x revisi</li>
                                        <li>• Free mockup kemasan</li>
                                        <li>• Pembayaran 50% PO, 30% BPOM, 20% kirim</li>
                                        <li>• Biaya BPOM Rp. 1.000.000 / produk</li>
                                        <li>• Sertifikasi halal Rp. 2.000.000 / produk</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- MOQ 1000 pcs -->
                        <div class="col-12 col-sm-6 col-lg-2">
                            <div class="card h-100" style="background: linear-gradient(135deg, #5ce1e6 0%, #0292d8 100%); color: white; border: none; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                                <div class="card-body p-4">
                                    <h5 class="card-title text-center mb-3" style="font-weight: 700;">MOQ 1000 pcs</h5>
                                    <ul class="list-unstyled">
                                        <li>• Free desain & mockup kemasan</li>
                                        <li>• Free video promosi</li>
                                        <li>• Free ongkir franco Semarang</li>
                                        <li>• Pembayaran 50% PO, 50% kirim</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- MOQ 10.000 pcs -->
                        <div class="col-12 col-sm-6 col-lg-2">
                            <div class="card h-100" style="background: linear-gradient(135deg, #5ce1e6 0%, #0292d8 100%); color: white; border: none; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                                <div class="card-body p-4">
                                    <h5 class="card-title text-center mb-3" style="font-weight: 700;">MOQ 10.000 pcs</h5>
                                    <ul class="list-unstyled">
                                        <li>• Free biaya sertifikasi halal</li>
                                        <li>• Free video promosi + kunjungan industri</li>
                                        <li>• Pembayaran 50% PO, 50% kirim</li>
                                        <li>• Free ongkir franco Semarang</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk -->
    <section id="products" class="leaf-bg" data-aos="fade-up" style="min-height: 100vh; padding: 150px 20px; position: relative; display: flex; align-items: center; justify-content: center;">
        <div class="container-fluid" style="background: transparent; box-shadow: none; border-radius: 0; padding: 0; margin: 0;">
            <div class="section-title">
                <h2 data-aos="fade-up" data-aos-delay="100">Produk Kami</h2>
                <p data-aos="fade-up" data-aos-delay="200">Kami menyediakan berbagai pilihan produk skincare maklon dan produk mesin yang dapat disesuaikan dengan kebutuhan brand Anda.</p>
            </div>

            @php
                $maklonProducts = $products->where('category', 'maklon');
                $mesinProducts = $products->where('category', 'mesin');
            @endphp

            <!-- Produk Maklon -->
            @if($maklonProducts->count() > 0)
            <h3 data-aos="fade-up" data-aos-delay="250" style="text-align: center; margin-bottom: 30px; color: #004aad; font-size: 2.5rem; font-weight: 700;">Produk Maklon</h3>
            <div class="row g-4">
                @foreach($maklonProducts as $index => $product)
                <div class="col-md-3">
                    <div class="product-card" data-aos="fade-up" data-aos-delay="{{ 300 + ($index * 100) }}">
                        @if($product->image_path)
                            <a href="{{ asset('storage/' . $product->image_path) }}" data-lightbox="maklon" data-title="{{ $product->name }}">
                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" width="150">
                            </a>
@else
    <img src="{{ asset('images/PRODUK MAKLOON/ACNE SPOT DRYING LOTION.jpg') }}" class="img-fluid mb-3" alt="{{ $product->name }}">
@endif
                        <h6 class="text-center">{{ $product->name }}</h6>
                        @if($product->price)
                            <p class="text-center text-primary fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        @endif
                        <a href="https://wa.me/dermilosofiskinsolutions" class="btn btn-primary btn-sm d-block mx-auto" target="_blank">Hubungi via WA</a>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            <hr style="border: 1px solid #004aad; margin: 50px auto; width: 80%;">

            <!-- Produk Mesin -->
            @if($mesinProducts->count() > 0)
            <h3 data-aos="fade-up" data-aos-delay="650" style="text-align: center; margin: 50px 0 30px 0; color: #004aad; font-size: 2.5rem; font-weight: 700;">Produk Mesin</h3>
            <div class="row g-4">
                @foreach($mesinProducts as $index => $product)
                <div class="col-md-3">
                    <div class="product-card" data-aos="fade-up" data-aos-delay="{{ 700 + ($index * 100) }}">
                        @if($product->image_path)
                            <a href="{{ asset('storage/' . $product->image_path) }}" data-lightbox="mesin" data-title="{{ $product->name }}">
                                <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid mb-3" alt="{{ $product->name }}">
                            </a>
@else
    <img src="{{ asset('images/PRODUK MESIN/1.png') }}" class="img-fluid mb-3" alt="{{ $product->name }}">
@endif
                        <h6 class="text-center">{{ $product->name }}</h6>
                        @if($product->price)
                            <p class="text-center text-primary fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        @endif
                        <a href="https://wa.me/dermilosofiskinsolutions" class="btn btn-primary btn-sm d-block mx-auto" target="_blank">Hubungi via WA</a>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <!-- Blog -->
    <section id="blog" class="leaf-bg" data-aos="fade-up" style="min-height: 100vh; padding: 150px 20px; position: relative; display: flex; align-items: center; justify-content: center; width: 100vw; margin-left: calc(-50vw + 50%); margin-right: calc(-50vw + 50%);">
        <div class="container-fluid" style="background: transparent; box-shadow: none; border-radius: 0; padding: 0; margin: 0; max-width: 100%;">
            <div class="section-title">
                <h2 data-aos="fade-up" data-aos-delay="100">Blog & Artikel</h2>
                <p data-aos="fade-up" data-aos-delay="200">Informasi terkini seputar skincare, tips kecantikan, dan inovasi produk.</p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($blogs->take(4) as $blog)
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="product-card" data-aos="fade-up" data-aos-delay="{{ 300 + ($loop->index * 100) }}">
                        @if($blog->image_path)
                            <a href="{{ asset('storage/' . $blog->image_path) }}" data-lightbox="blog" data-title="{{ $blog->title }}">
                                <img src="{{ asset('storage/' . $blog->image_path) }}" class="img-fluid mb-3 rounded" alt="{{ $blog->title }}" style="height: 200px; object-fit: cover; width: 100%; border-radius: 10px !important;">
                            </a>
@else
    <img src="{{ asset('images/BLOG/1.png') }}" class="img-fluid mb-3 rounded" alt="{{ $blog->title }}" style="height: 200px; object-fit: cover; width: 100%; border-radius: 10px !important;">
@endif
                        <h6 style="font-size: 1rem;">{{ $blog->title }}</h6>
                        <p style="font-size: 0.9rem;">{{ Str::limit($blog->excerpt ?: strip_tags($blog->content), 100) }}</p>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#blogModal{{ $blog->id }}">Lihat</button>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </section>

    <!-- Blog Modals -->
    @foreach($blogs as $blog)
    <div class="modal fade" id="blogModal{{ $blog->id }}" tabindex="-1" aria-labelledby="blogModal{{ $blog->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogModal{{ $blog->id }}Label">{{ $blog->title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
@if($blog->image_path)
    <img src="{{ asset('images/' . str_replace('blogs/', 'BLOG/', $blog->image_path)) }}" class="img-fluid mb-3 rounded" alt="{{ $blog->title }}" style="width: 100%; border-radius: 10px !important;">
@else
    <img src="{{ asset('images/BLOG/1.png') }}" class="img-fluid mb-3 rounded" alt="{{ $blog->title }}" style="width: 100%; border-radius: 10px !important;">
@endif
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Testimoni -->
    <section id="testimoni" class="leaf-bg" data-aos="fade-up" style="min-height: 100vh; padding: 150px 20px; position: relative; display: flex; align-items: center; justify-content: center;">
        <div class="container-fluid" style="background: transparent; box-shadow: none; border-radius: 0; padding: 0; margin: 0;">
            <div class="section-title">
                <h2 data-aos="fade-up" data-aos-delay="100">Testimoni Klien</h2>
                <p data-aos="fade-up" data-aos-delay="200">Apa kata klien kami tentang layanan PT. DERMILOSOFI.</p>
            </div>
            <div id="testimoniCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-aos="fade-up" data-aos-delay="300">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimoniCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Testimoni 1"></button>
                    <button type="button" data-bs-target="#testimoniCarousel" data-bs-slide-to="1" aria-label="Testimoni 2"></button>
                    <button type="button" data-bs-target="#testimoniCarousel" data-bs-slide-to="2" aria-label="Testimoni 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-4">
                                <div class="service-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                                    </div>
                                    <p>"Layanan maklon yang sangat profesional dan hasil produk sesuai ekspektasi."</p>
                                    <h6 class="text-primary">- Brand A</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                                    </div>
                                    <p>"Tim yang responsif dan proses yang transparan dari awal hingga akhir."</p>
                                    <h6 class="text-primary">- Brand B</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                                    </div>
                                    <p>"Kualitas produk tinggi dan sesuai dengan standar BPOM."</p>
                                    <h6 class="text-primary">- Brand C</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-4">
                                <div class="service-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                                    </div>
                                    <p>"Proses produksi yang efisien dan hasil yang memuaskan."</p>
                                    <h6 class="text-primary">- Brand D</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                                    </div>
                                    <p>"Konsultasi yang mendalam dan solusi yang tepat sasaran."</p>
                                    <h6 class="text-primary">- Brand E</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                                    </div>
                                    <p>"Dukungan penuh dalam proses legalitas dan distribusi."</p>
                                    <h6 class="text-primary">- Brand F</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-4">
                                <div class="service-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                                    </div>
                                    <p>"Inovasi produk yang terus berkembang sesuai tren pasar."</p>
                                    <h6 class="text-primary">- Brand G</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                                    </div>
                                    <p>"Komitmen terhadap kualitas yang tidak pernah berkompromi."</p>
                                    <h6 class="text-primary">- Brand H</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>
                                    </div>
                                    <p>"Partner yang dapat diandalkan untuk pertumbuhan bisnis."</p>
                                    <h6 class="text-primary">- Brand I</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimoniCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimoniCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Karir -->
    <section id="karir" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-up" data-aos-delay="100">Karir di PT. DERMILOSOFI</h2>
                <p data-aos="fade-up" data-aos-delay="200">Bergabunglah dengan tim kami untuk berkontribusi dalam industri skincare.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="product-card" data-aos="fade-up" data-aos-delay="300">
                        <h5>Formulator Skincare</h5>
                        <p>Posisi untuk ahli formulasi produk skincare dengan pengalaman minimal 3 tahun.</p>
                        <a href="{{ route('apply') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-card" data-aos="fade-up" data-aos-delay="400">
                        <h5>Quality Control</h5>
                        <p>Posisi untuk memastikan kualitas produk sesuai standar industri.</p>
                        <a href="{{ route('apply') }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan -->
    <section id="services" class="leaf-bg" data-aos="fade-up" style="min-height: 100vh; padding: 150px 20px; position: relative; display: flex; align-items: center; justify-content: center;">
        <div class="container-fluid" style="background: transparent; box-shadow: none; border-radius: 0; padding: 0; margin: 0;">
            <div class="content">
                <h2 data-aos="fade-up" data-aos-delay="100">Pelayanan <span style="color: #004aad; font-weight: 700;">PT. Dermilosofi</span></h2>
                <p data-aos="fade-up" data-aos-delay="200">PT. Dermilosofi memiliki 2 pilihan layanan yang dapat disesuaikan dengan kebutuhan dan keinginan pelanggan. Layanan kami adalah sebagai berikut:</p>

                <div class="columns">
                    <div class="column" data-aos="fade-up" data-aos-delay="300">
                        <h3>Basic Formulation (OEM)</h3>
                        <p>Basic Formulation digunakan untuk pelanggan yang setuju dengan mengambil formula standar dari PT. Dermilosofi tanpa ada custom bahan aktif maupun permintaan khusus terkait karakteristik fisik produk dan kemasan.</p>
                    </div>

                    <div class="column" data-aos="fade-up" data-aos-delay="400">
                        <h3>Custom Formulation (ODM)</h3>
                        <p>Custom Formulation digunakan untuk pelanggan yang secara khusus memiliki permintaan terkait produk, baik dari segi bahan aktif maupun karakteristik fisik produk serta kemasan produk.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="contact" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-up" data-aos-delay="100">Kontak Kami</h2>
                <p data-aos="fade-up" data-aos-delay="200">Hubungi kami untuk informasi lebih lanjut tentang layanan maklon skincare.</p>
            </div>
            <div class="row text-start align-items-start">
                <!-- Kolom 1: PT DERMILOSOFI -->
                <div class="col-md-4">
                    <h5 class="fw-bold">PT. DERMILOSOFI</h5>
                    <p>Solusi Maklon Skincare Profesional</p>
                </div>

                <!-- Kolom 2: Kontak Kami -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Kontak Kami</h5>
                    <ul class="list-unstyled" style="line-height: 2;">
                        <li style="font-size: 0.85rem;"><i class="fas fa-map-marker-alt me-2 text-primary"></i> Marketing Office: Wisma 46, 2nd Floor Unit 2.10, Jl. Jenderal Sudirman No.Kav. 1, RT.1/RW.8, Daerah Khusus Ibukota Jakarta 10220</li>
                        <li style="font-size: 0.85rem;"><i class="fas fa-map-marker-alt me-2 text-primary"></i> Manufacture: Jl.Wanajaya No.26,RT.01/RW.01,Pasir Jaya,Kec.Bogor Bar.,Kota Bogor,Jawa Barat 16119</li>
                        <li style="font-size: 0.9rem;"><i class="fas fa-phone me-2 text-primary"></i> +62 856-9580-9589</li>
                        <li style="font-size: 0.9rem;"><i class="fas fa-envelope me-2 text-primary"></i> dermilosofiskinsolutions@gmail.com</li>
                    </ul>
                </div>

                <!-- Kolom 3: Media Sosial -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Media Sosial</h5>
                    <ul class="list-unstyled" style="line-height: 2;">
                        <li><a href="https://www.facebook.com/share/1D2nikwKCF/" class="text-dark text-decoration-none" target="_blank"><i class="fab fa-facebook me-2 text-primary"></i> Facebook</a></li>
                        <li><a href="https://www.instagram.com/dermilosofi?igsh=b2lrdHh6enl0d2Q0" class="text-dark text-decoration-none" target="_blank"><i class="fab fa-instagram me-2 text-primary"></i> Instagram</a></li>
                        <li><a href="#" class="text-dark text-decoration-none"><i class="fab fa-twitter me-2 text-primary"></i> Twitter</a></li>
                        <li><a href="#" class="text-dark text-decoration-none"><i class="fab fa-linkedin me-2 text-primary"></i> LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%); color: white; padding: 50px 0 30px 0; margin-top: auto; position: relative; z-index: 10; border-top: 3px solid #004aad;">
        <div class="container">
            <div class="row">
            <!-- Navigasi -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="color: #004aad; font-size: 1.2rem; font-weight: 700;">Navigasi</h5>
                <ul class="list-unstyled" style="line-height: 2;">
                    <li><a href="#hero" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Home</a></li>
                    <li><a href="#profil" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Profil</a></li>
                    <li><a href="#products" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Produk</a></li>
                    <li><a href="#alur-maklon" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Alur Maklon</a></li>
                    <li><a href="#blog" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Blog</a></li>
                    <li><a href="#testimoni" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Testimoni</a></li>
                    <li><a href="#karir" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Karir</a></li>
                    <li><a href="#contact" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Kontak</a></li>
                </ul>
            </div>

            <!-- Produk -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="color: #004aad; font-size: 1.2rem; font-weight: 700;">Produk</h5>
                <ul class="list-unstyled" style="line-height: 2;">
                    <li><a href="#products" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Produk Maklon</a></li>
                    <li><a href="#products" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Produk Mesin</a></li>
                </ul>
            </div>

            <!-- Hubungi Kami -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="color: #004aad; font-size: 1.2rem; font-weight: 700;">Hubungi Kami</h5>
                <ul class="list-unstyled" style="line-height: 2.2;">
                    <li style="font-size: 0.8rem; line-height: 1.4; color: #004aad; font-weight: 600;"><i class="fas fa-map-marker-alt me-2" style="color: #004aad;"></i> Marketing Office: Wisma 46, 2nd Floor Unit 2.10, Jl. Jenderal Sudirman No.Kav. 1, RT.1/RW.8, Daerah Khusus Ibukota Jakarta 10220</li>
                    <li style="font-size: 0.8rem; line-height: 1.4; color: #004aad; font-weight: 600;"><i class="fas fa-map-marker-alt me-2" style="color: #004aad;"></i> Manufacture: Jl.Wanajaya No.26,RT.01/RW.01,Pasir Jaya,Kec.Bogor Bar.,Kota Bogor,Jawa Barat 16119</li>
                    <li style="font-size: 0.9rem; color: #004aad; font-weight: 600;"><i class="fas fa-phone me-2" style="color: #004aad;"></i> +62 856-9580-9589</li>
                    <li style="font-size: 0.9rem; color: #004aad; font-weight: 600;"><i class="fas fa-envelope me-2" style="color: #004aad;"></i> dermilosofiskinsolutions@gmail.com</li>
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



        // Auto-slide carousels
        const testimoniCarousel = new bootstrap.Carousel(document.getElementById('testimoniCarousel'), {
            interval: 4000, // 4 seconds
            ride: 'carousel',
            wrap: true
        });
    </script>
</body>
</html>
