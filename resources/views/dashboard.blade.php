<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mitra - PT. DERMILOSOFI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        body {
            background: linear-gradient(135deg, rgba(0,74,173,0.1) 0%, rgba(255,255,255,0.9) 100%), url('{{ asset('storage/images/background/background1.png') }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
        .dashboard-card {
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
            backdrop-filter: blur(5px);
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #004aad;
            border: none;
            border-radius: 50px;
            padding: 10px 25px;
        }
        .btn-primary:hover { background-color: #007bff; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 style="color: #004aad;">Dashboard Mitra</h1>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger">Logout</button>
            </form>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Kontrol Konten -->
        <div class="dashboard-card">
            <h3>Kontrol Produk Maklon</h3>
            <div class="row g-3">
                <div class="col-md-6">
                    <a href="{{ route('products.index', ['category' => 'maklon']) }}" class="btn btn-primary w-100">Edit Produk Maklon</a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('products.create', ['category' => 'maklon']) }}" class="btn btn-success w-100">Buat Produk Maklon Baru</a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <h3>Kontrol Produk Mesin</h3>
            <div class="row g-3">
                <div class="col-md-6">
                    <a href="{{ route('products.index', ['category' => 'mesin']) }}" class="btn btn-primary w-100">Edit Produk Mesin</a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('products.create', ['category' => 'mesin']) }}" class="btn btn-success w-100">Buat Produk Mesin Baru</a>
                </div>
            </div>
        </div>
        <div class="dashboard-card">
            <h3>Kontrol Blog</h3>
            <div class="row g-3">
                <div class="col-md-6">
                    <a href="{{ route('blogs.index') }}" class="btn btn-primary w-100">Edit Blog</a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('blogs.create') }}" class="btn btn-success w-100">Buat Blog Baru</a>
                </div>
            </div>
        </div>

        <!-- Konten Website -->

        <!-- Produk Maklon -->
        <div class="dashboard-card">
            <h3>Produk Maklon Terbaru</h3>
            @php $maklonProducts = $products->where('category', 'maklon'); @endphp
            @if($maklonProducts->count() > 0)
                <div class="row g-3">
                    @foreach($maklonProducts as $product)
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $product->name }}</h6>
                                    <p class="card-text"><strong>Kategori:</strong> {{ $product->category }}</p>
                                    <p class="card-text"><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>
                                    <small class="text-muted">Status: {{ $product->is_active ? 'Aktif' : 'Tidak Aktif' }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Belum ada produk maklon yang ditampilkan.</p>
            @endif
        </div>

        <!-- Produk Mesin -->
        <div class="dashboard-card">
            <h3>Produk Mesin Terbaru</h3>
            @php $mesinProducts = $products->where('category', 'mesin'); @endphp
            @if($mesinProducts->count() > 0)
                <div class="row g-3">
                    @foreach($mesinProducts as $product)
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="card-title">
                                        {{ $product->name }}
                                        @if(Str::contains(Str::lower($product->name), 'sampel'))
                                            <span class="badge bg-warning text-dark ms-1">Sampel</span>
                                        @endif
                                    </h6>
                                    <p class="card-text"><strong>Kategori:</strong> {{ $product->category }}</p>
                                    <p class="card-text"><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></p>
                                    <small class="text-muted">Status: {{ $product->is_active ? 'Aktif' : 'Tidak Aktif' }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Belum ada produk mesin yang ditampilkan.</p>
            @endif
        </div>

        <!-- Blog -->
        <div class="dashboard-card">
            <h3>Blog Terbaru</h3>
            @if($blogs->count() > 0)
                <div class="row g-3">
                    @foreach($blogs as $blog)
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $blog->title }}</h6>
                                    <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
                                    <small class="text-muted">Oleh: {{ $blog->author }} | {{ $blog->published_date ? $blog->published_date->format('d M Y') : 'Draft' }}</small>
                                    <br><small class="text-muted">Status: {{ $blog->is_active ? 'Aktif' : 'Tidak Aktif' }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Belum ada blog yang ditampilkan.</p>
            @endif
        </div>

        <!-- Profil -->
        <div class="dashboard-card">
            <h3>Profil Perusahaan</h3>
            @if($profiles->count() > 0)
                <div class="row g-3">
                    @foreach($profiles as $profile)
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $profile->title }}</h6>
                                    <p class="card-text">{{ Str::limit($profile->content, 150) }}</p>
                                    <small class="text-muted">Tipe: {{ $profile->type }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Belum ada profil yang ditampilkan.</p>
            @endif
        </div>

        <!-- Laporan -->
        <div class="dashboard-card">
            <h3>Laporan Terbaru</h3>
            @if($reports->count() > 0)
                <div class="row g-3">
                    @foreach($reports as $report)
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $report->title }}</h6>
                                    <p class="card-text">{{ Str::limit($report->content, 150) }}</p>
                                    <small class="text-muted">Tipe: {{ $report->type }} | {{ $report->report_date ? $report->report_date->format('d M Y') : 'Draft' }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Belum ada laporan yang ditampilkan.</p>
            @endif
        </div>
        </div>

        <!-- Lamaran Kerja -->
        <div class="dashboard-card">
            <h3>Lamaran Kerja</h3>
            <p>Daftar pelamar yang telah mengirimkan lamaran.</p>
            @if($applicants->count() > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Posisi</th>
                            <th>CV</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applicants as $applicant)
                            <tr>
                                <td>{{ $applicant->name }}</td>
                                <td>{{ $applicant->email }}</td>
                                <td>{{ $applicant->position }}</td>
                                <td><a href="{{ asset('storage/' . $applicant->cv_path) }}" target="_blank" class="btn btn-sm btn-outline-primary">Download CV</a></td>
                                <td>{{ $applicant->created_at->format('d M Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Belum ada lamaran yang diterima.</p>
            @endif
        </div>

        <!-- Lainnya -->
        <div class="dashboard-card">
            <h3>Lainnya</h3>
            <div class="row g-3">
                <div class="col-md-6">
                    <a href="{{ route('reports.index') }}" class="btn btn-primary w-100">Laporan</a>
                </div>
                <div class="col-md-6">
                    <a href="/" class="btn btn-secondary w-100">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
