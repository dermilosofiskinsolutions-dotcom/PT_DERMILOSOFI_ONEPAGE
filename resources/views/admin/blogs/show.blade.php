<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blog - PT. DERMILOSOFI</title>
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
            <h2>Blog Details</h2>

            <div class="row">
                <div class="col-md-8">
                    <h4>{{ $blog->title }}</h4>
                    <p><strong>Author:</strong> {{ $blog->author }}</p>
                    <p><strong>Published Date:</strong> {{ $blog->published_date ? $blog->published_date->format('d M Y') : '-' }}</p>
                    <p><strong>Status:</strong>
                        <span class="badge {{ $blog->is_active ? 'bg-success' : 'bg-danger' }}">
                            {{ $blog->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </p>
                    @if($blog->tags)
                        <p><strong>Tags:</strong> {{ $blog->tags }}</p>
                    @endif
                </div>
                <div class="col-md-4">
                    @if($blog->image_path)
                        <img src="{{ asset('storage/' . $blog->image_path) }}" alt="{{ $blog->title }}" class="img-fluid rounded">
                    @endif
                </div>
            </div>

            @if($blog->excerpt)
                <div class="mt-4">
                    <h5>Excerpt</h5>
                    <p>{{ $blog->excerpt }}</p>
                </div>
            @endif

            <div class="mt-4">
                <h5>Content</h5>
                <div>{{ $blog->content }}</div>
            </div>

            <div class="mt-4">
                <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
