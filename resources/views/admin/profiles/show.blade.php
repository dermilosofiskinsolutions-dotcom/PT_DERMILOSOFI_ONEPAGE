<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile - PT. DERMILOSOFI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        body { background-color: #f8f9fa; }
        .admin-card { background: white; border-radius: 15px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
        .btn-primary { background-color: #004aad; border: none; }
        .btn-primary:hover { background-color: #007bff; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="admin-card">
            <h2>Profile Details</h2>

            <div class="row">
                <div class="col-md-8">
                    <h4>{{ $profile->title }}</h4>
                    <p><strong>Type:</strong> {{ $profile->type }}</p>
                    <p><strong>Order:</strong> {{ $profile->order }}</p>
                    <p><strong>Status:</strong>
                        <span class="badge {{ $profile->is_active ? 'bg-success' : 'bg-danger' }}">
                            {{ $profile->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </p>
                </div>
                <div class="col-md-4">
                    @if($profile->image_path)
                        <img src="{{ asset('storage/' . $profile->image_path) }}" alt="{{ $profile->title }}" class="img-fluid rounded">
                    @endif
                </div>
            </div>

            <div class="mt-4">
                <h5>Content</h5>
                <div>{{ $profile->content }}</div>
            </div>

            <div class="mt-4">
                <a href="{{ route('profiles.edit', $profile) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
