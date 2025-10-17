<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - PT. DERMILOSOFI</title>
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
            <h2>Edit Profile</h2>

            <form action="{{ route('profiles.update', $profile) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $profile->title }}" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="">Select Type</option>
                        <option value="about" {{ $profile->type == 'about' ? 'selected' : '' }}>About</option>
                        <option value="vision" {{ $profile->type == 'vision' ? 'selected' : '' }}>Vision</option>
                        <option value="mission" {{ $profile->type == 'mission' ? 'selected' : '' }}>Mission</option>
                        <option value="team" {{ $profile->type == 'team' ? 'selected' : '' }}>Team</option>
                        <option value="contact" {{ $profile->type == 'contact' ? 'selected' : '' }}>Contact</option>
                        <option value="other" {{ $profile->type == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="10" required>{{ $profile->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Profile Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    @if($profile->image_path)
                        <small class="form-text text-muted">Current image: {{ basename($profile->image_path) }}</small>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="order" class="form-label">Display Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ $profile->order }}" min="1">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $profile->is_active ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Active</label>
                </div>

                <button type="submit" class="btn btn-primary">Update Profile</button>
                <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
