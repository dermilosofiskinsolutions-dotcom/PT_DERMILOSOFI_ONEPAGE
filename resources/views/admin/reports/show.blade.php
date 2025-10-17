<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Report - PT. DERMILOSOFI</title>
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
            <h2>Report Details</h2>

            <div class="row">
                <div class="col-md-8">
                    <h4>{{ $report->title }}</h4>
                    <p><strong>Type:</strong> {{ $report->type }}</p>
                    <p><strong>Report Date:</strong> {{ $report->report_date ? $report->report_date->format('d M Y') : '-' }}</p>
                    <p><strong>Status:</strong>
                        <span class="badge {{ $report->is_active ? 'bg-success' : 'bg-danger' }}">
                            {{ $report->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </p>
                    @if($report->file_path)
                        <p><strong>File:</strong> <a href="{{ asset('storage/' . $report->file_path) }}" target="_blank">{{ basename($report->file_path) }}</a></p>
                    @endif
                </div>
            </div>

            @if($report->description)
                <div class="mt-4">
                    <h5>Description</h5>
                    <p>{{ $report->description }}</p>
                </div>
            @endif

            <div class="mt-4">
                <a href="{{ route('reports.edit', $report) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('reports.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
