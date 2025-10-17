<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamar Kerja - PT. DERMILOSOFI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        body {
            background: linear-gradient(135deg, rgba(0,74,173,0.1) 0%, rgba(255,255,255,0.9) 100%), url('{{ asset('storage/images/background/background1.png') }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .apply-card {
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
            backdrop-filter: blur(5px);
            max-width: 500px;
            width: 100%;
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
    <div class="apply-card">
        <h2 class="text-center mb-4" style="color: #004aad;">Lamar Kerja di PT. DERMILOSOFI</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('apply.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Posisi yang Dilamar</label>
                <select class="form-control" id="position" name="position" required>
                    <option value="">Pilih Posisi</option>
                    <option value="Formulator Skincare">Formulator Skincare</option>
                    <option value="Quality Control">Quality Control</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">Upload CV (PDF/DOC/DOCX)</label>
                <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim Lamaran</button>
        </form>
        <p class="text-center mt-3"><a href="/">Kembali ke Beranda</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
