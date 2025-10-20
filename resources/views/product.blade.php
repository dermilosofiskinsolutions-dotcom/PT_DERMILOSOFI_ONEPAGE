<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami - PT. DERMILOSOFI | Skin Solutions</title>
    <!-- Favicon / tab logo -->
    <link rel="icon" type="image/png" href="{{ asset('public/images/logo.png') }}" />
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
            background: linear-gradient(135deg, rgba(0,74,173,0.1) 0%, rgba(255,255,255,0.9) 100%), url('{{ asset('public/images/background/background1.png') }}') no-repeat center center;
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
            background: linear-gradient(135deg, rgba(0,74,173,0.2) 0%, rgba(255,255,255,0.9) 100%), url('{{ asset('public/images/background/background1.png') }}') no-repeat center center;
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
            background: linear-gradient(135deg, rgba(0,74,173,0.15) 0%, rgba(255,255,255,0.85) 100%), url('{{ asset('public/images/background/background1.png') }}') no-repeat center center;
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
            background: linear-gradient(135deg, rgba(0,74,173,0.3) 0%, rgba(255,255,255,0.7) 100%), url('{{ asset('public/images/background/background1.png') }}') no-repeat center center;
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
        }
        .product-card img {
            cursor: pointer;
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
            background: linear-gradient(135deg, rgba(0,74,173,0.9) 0%, rgba(0,123,255,0.9) 100%), url('{{ asset('public/images/background/background1.png') }}') no-repeat center center;
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
            section{min-height: auto !important; padding: 200px 20px 70px 20px !important; display: block !important;}
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
            .section-title{margin-bottom: 30px; padding-top: 50px !important;}
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
            /* Adjust maklon section padding for mobile */
            #maklon { padding: 100px 20px 70px 20px !important; }
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
            background: linear-gradient(135deg, rgba(0,74,173,0.1) 0%, rgba(255,255,255,0.95) 100%), url('{{ asset('public/images/background/background1.png') }}') no-repeat center center;
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

        /* Category Navbar Styles */
        .category-navbar {
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            border-radius: 25px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 10px 20px;
            margin: 0 auto;
            max-width: 600px;
            position: sticky;
            top: 70px;
            z-index: 1031;
        }
        .category-nav {
            display: flex;
            justify-content: center !important;
            gap: 20px;
        }
        .category-link {
            color: #004aad !important;
            font-weight: 600;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 20px;
            transition: all 0.3s ease;
            position: relative;
        }
        .category-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background-color: #004aad;
            border-radius: 2px;
            transition: width 0.3s ease;
        }

        @media (max-width: 760px) {
            .category-nav {
                flex-wrap: wrap;
                gap: 10px;
                justify-content: center;
            }
            .category-link {
                font-size: 0.9rem;
                padding: 6px 12px;
            }
        }

        /* Scroll to Top Button */
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #004aad;
            color: white;
            border: none;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 1040;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        .scroll-to-top:hover {
            background-color: #003399;
            transform: scale(1.1);
        }
        .scroll-to-top i {
            font-size: 1.2rem;
        }
        @media (max-width: 760px) {
            .scroll-to-top {
                bottom: 15px;
                right: 15px;
                width: 45px;
                height: 45px;
            }
            .scroll-to-top i {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('public/images/logo.png') }}" alt="Logo">
                <span class="fw-bold" style="color: #0292d8;">DERMILOSOFI</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="/#hero"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/#profil"><i class="fas fa-user me-1"></i>Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product') }}"><i class="fas fa-box me-1"></i>Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="/#alur-maklon"><i class="fas fa-route me-1"></i>Alur Maklon</a></li>
                <li class="nav-item"><a class="nav-link" href="/#blog"><i class="fas fa-blog me-1"></i>Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="/#testimoni"><i class="fas fa-star me-1"></i>Testimoni</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('apply') }}"><i class="fas fa-briefcase me-1"></i>Karir</a></li>
                <li class="nav-item"><a class="nav-link" href="/#contact"><i class="fas fa-envelope me-1"></i>Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user"></i></a></li>
            </ul>
        </div>
    </nav>

    <!-- Produk Section -->
    <section id="products" class="leaf-bg" data-aos="fade-up" style="padding: 0 20px 100px 20px; position: relative;">
        <div class="container-fluid" style="background: transparent; box-shadow: none; border-radius: 0; padding: 0; margin: 0;">
            <div class="section-title" style="padding-top: 150px;">
                <h2 data-aos="fade-up" data-aos-delay="100">Produk Kami</h2>
                <nav class="navbar navbar-expand-lg fixed-top category-navbar mt-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="container-fluid justify-content-center">
                        <div class="navbar-nav category-nav">
                            <a class="nav-link category-link active" href="#maklon">Produk Maklon</a>
                            <a class="nav-link category-link" href="#mesin">Produk Mesin</a>
                        </div>
                    </div>
                </nav>
            </div>

@php
    $maklonProducts = $products->where('category', 'maklon');
    $mesinProducts = $products->where('category', 'mesin');
@endphp
@if($maklonProducts->count() > 0)
<section id="maklon" class="leaf-bg" data-aos="fade-up" style="padding: 140px 0 100px 0; position: relative;">
    <div class="container-fluid" style="background: transparent; box-shadow: none; border-radius: 0; padding: 0; margin: 0;">
        <h3 data-aos="fade-up" data-aos-delay="250" style="text-align: center; margin-bottom: 30px; color: #004aad; font-size: 2.5rem; font-weight: 700;">Produk Maklon</h3>
        <div class="row g-4 justify-content-center">
            @foreach($maklonProducts as $index => $product)
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="product-card" data-aos="fade-up" data-aos-delay="{{ 300 + ($index * 100) }}">
                    @if($product->image_path)
                        <a href="#productModal{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">
                            <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid mb-3 rounded" alt="{{ $product->name }}" style="height: 200px; object-fit: cover; width: 100%; border-radius: 10px !important;">
                        </a>
    @else
        <img src="{{ asset('images/PRODUK MAKLOON/ACNE SPOT DRYING LOTION.jpg') }}" class="img-fluid mb-3 rounded" alt="{{ $product->name }}" style="height: 200px; object-fit: cover; width: 100%; border-radius: 10px !important;">
    @endif
                    <h6 style="font-size: 1rem; font-weight: 600;">{{ $product->name }}</h6>
                    @if($product->price)
                        <p style="font-size: 0.9rem; color: #004aad; font-weight: 600;">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    @endif
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">Lihat Detail</button>
                    <a href="https://wa.me/dermilosofiskinsolutions" class="btn btn-outline-primary btn-sm d-block mt-2" target="_blank">Hubungi via WA</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@if($mesinProducts->count() > 0)
<section id="mesin" class="leaf-bg" data-aos="fade-up" style="padding: 140px 0 100px 0; position: relative;">
    <div class="container-fluid" style="background: transparent; box-shadow: none; border-radius: 0; padding: 0; margin: 0;">
        <h3 data-aos="fade-up" data-aos-delay="650" style="text-align: center; margin: 50px 0 30px 0; color: #004aad; font-size: 2.5rem; font-weight: 700;">Produk Mesin</h3>
        <div class="row g-4 justify-content-center">
            @foreach($mesinProducts as $index => $product)
            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                <div class="product-card" data-aos="fade-up" data-aos-delay="{{ 700 + ($index * 100) }}">
                    @if($product->image_path)
                        <a href="#productModal{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">
                            <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid mb-3 rounded" alt="{{ $product->name }}" style="height: 200px; object-fit: cover; width: 100%; border-radius: 10px !important;">
                        </a>
    @else
        <img src="{{ asset('images/PRODUK MESIN/1.png') }}" class="img-fluid mb-3 rounded" alt="{{ $product->name }}" style="height: 200px; object-fit: cover; width: 100%; border-radius: 10px !important;">
    @endif
                    <h6 style="font-size: 1rem; font-weight: 600;">{{ $product->name }}</h6>
                    @if($product->price)
                        <p style="font-size: 0.9rem; color: #004aad; font-weight: 600;">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    @endif
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">Lihat Detail</button>
                    <a href="https://wa.me/dermilosofiskinsolutions" class="btn btn-outline-primary btn-sm d-block mt-2" target="_blank">Hubungi via WA</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

    <!-- Product Modals -->
    @foreach($products as $product)
    <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" aria-labelledby="productModal{{ $product->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModal{{ $product->id }}Label">{{ $product->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
@if($product->image_path)
    <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid mb-3 rounded" alt="{{ $product->name }}" style="width: 100%; border-radius: 10px !important;">
@else
    @if($product->category == 'maklon')
        <img src="{{ asset('images/PRODUK MAKLOON/ACNE SPOT DRYING LOTION.jpg') }}" class="img-fluid mb-3 rounded" alt="{{ $product->name }}" style="width: 100%; border-radius: 10px !important;">
    @else
        <img src="{{ asset('images/PRODUK MESIN/1.png') }}" class="img-fluid mb-3 rounded" alt="{{ $product->name }}" style="width: 100%; border-radius: 10px !important;">
    @endif
@endif
                    @if($product->description)
                        {!! $product->description !!}
                    @else
                        <p>Deskripsi produk akan segera ditambahkan.</p>
                    @endif
                    @if($product->price)
                        <p class="mt-3"><strong>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>
                    @endif
                    <div class="mt-3">
                        <a href="https://wa.me/dermilosofiskinsolutions" class="btn btn-primary" target="_blank">Hubungi via WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Footer -->
    <footer style="background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%); color: white; padding: 50px 0 30px 0; margin-top: auto; position: relative; z-index: 10; border-top: 3px solid #004aad;">
        <div class="container">
            <div class="row">
            <!-- Navigasi -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="color: #004aad; font-size: 1.2rem; font-weight: 700;">Navigasi</h5>
                <ul class="list-unstyled" style="line-height: 2;">
                    <li><a href="/#hero" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Home</a></li>
                    <li><a href="/#profil" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Profil</a></li>
                    <li><a href="{{ route('product') }}" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Produk</a></li>
                    <li><a href="/#alur-maklon" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Alur Maklon</a></li>
                    <li><a href="/#blog" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Blog</a></li>
                    <li><a href="/#testimoni" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Testimoni</a></li>
                    <li><a href="#karir" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Karir</a></li>
                    <li><a href="/#contact" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Kontak</a></li>
                </ul>
            </div>

            <!-- Produk -->
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3" style="color: #004aad; font-size: 1.2rem; font-weight: 700;">Produk</h5>
                <ul class="list-unstyled" style="line-height: 2;">
                    <li><a href="{{ route('product') }}#maklon" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Produk Maklon</a></li>
                    <li><a href="{{ route('product') }}#mesin" class="text-decoration-none fw-semibold" style="font-size: 0.95rem; color: #004aad;">Produk Mesin</a></li>
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

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" id="scrollToTopBtn">
        <i class="fas fa-arrow-up"></i>
    </button>

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

        // Function to scroll to section
        function scrollToSection(hash) {
            if (hash) {
                const id = hash.substring(1); // Remove # for element ID
                const targetElement = document.getElementById(id);
                if (targetElement) {
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const elementTop = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                    window.scrollTo({
                        top: elementTop,
                        behavior: 'smooth'
                    });
                }
            }
        }

        // Function to update active category link
        function updateActiveCategoryLink(hash) {
            document.querySelectorAll('.category-link').forEach(link => {
                link.classList.remove('active');
            });
            if (hash) {
                const activeLink = document.querySelector(`.category-link[href="${hash}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            } else {
                // Default to "Semua Kategori" if no hash
                document.querySelector('.category-link[href="#products"]').classList.add('active');
            }
        }

        // Category link click handlers
        document.querySelectorAll('.category-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const hash = this.getAttribute('href');
                window.location.hash = hash;
                scrollToSection(hash);
                updateActiveCategoryLink(hash);
            });
        });

        // Handle hash changes (e.g., when clicking footer links or direct URL access)
        window.addEventListener('hashchange', function() {
            const hash = window.location.hash;
            scrollToSection(hash);
            updateActiveCategoryLink(hash);
        });

        // Function to update active category link based on scroll position
        function updateActiveOnScroll() {
            const navbarHeight = document.querySelector('.navbar').offsetHeight;
            const categoryNavbarHeight = document.querySelector('.category-navbar').offsetHeight;
            const totalOffset = navbarHeight + categoryNavbarHeight + 50; // Adjust offset as needed

            const maklonSection = document.getElementById('maklon');
            const mesinSection = document.getElementById('mesin');

            const scrollPosition = window.pageYOffset + totalOffset;

            // Check if mesin section is in view
            if (mesinSection && scrollPosition >= mesinSection.offsetTop && scrollPosition < mesinSection.offsetTop + mesinSection.offsetHeight) {
                updateActiveCategoryLink('#mesin');
            }
            // Check if maklon section is in view
            else if (maklonSection && scrollPosition >= maklonSection.offsetTop && scrollPosition < maklonSection.offsetTop + maklonSection.offsetHeight) {
                updateActiveCategoryLink('#maklon');
            }
            // Do not change active link if no section is in view
        }

        // Initialize on page load
        window.addEventListener('load', function() {
            const hash = window.location.hash;
            scrollToSection(hash);
            updateActiveCategoryLink(hash || '#maklon');
        });

        // Add scroll event listener to update active link on scroll
        window.addEventListener('scroll', updateActiveOnScroll);

        // Scroll to Top Button functionality
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');
        const maklonSection = document.getElementById('maklon');

        // Show/hide button based on scroll position past "Produk Maklon"
        window.addEventListener('scroll', function() {
            if (maklonSection && window.pageYOffset > maklonSection.offsetTop) {
                scrollToTopBtn.style.display = 'flex';
            } else {
                scrollToTopBtn.style.display = 'none';
            }
        });

        // Scroll to top when button is clicked
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>
