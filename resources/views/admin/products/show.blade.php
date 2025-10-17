<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product - PT. DERMILOSOFI</title>
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
            <h2>Product Details</h2>

            <div class="row">
                <div class="col-md-6">
                    <h4>{{ $product->name }}</h4>
                    <p><strong>Category:</strong> {{ $product->category }}</p>
                    <p><strong>Price:</strong> {{ $product->price ? 'Rp ' . number_format($product->price, 0, ',', '.') : '-' }}</p>
                    <p><strong>Status:</strong>
                        <span class="badge {{ $product->is_active ? 'bg-success' : 'bg-danger' }}">
                            {{ $product->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </p>
                </div>
                <div class="col-md-6">
                    @if($product->image_path)
                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="img-fluid rounded">
                    @endif
                </div>
            </div>

            @if($product->description)
                <div class="mt-4">
                    <h5>Description</h5>
                    <p>{{ $product->description }}</p>
                </div>
            @endif

            @if($product->specifications)
                <div class="mt-4">
                    <h5>Specifications</h5>
                    <p>{{ $product->specifications }}</p>
                </div>
            @endif

            @if($product->benefits)
                <div class="mt-4">
                    <h5>Benefits</h5>
                    <p>{{ $product->benefits }}</p>
                </div>
            @endif

            <div class="mt-4">
                <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
