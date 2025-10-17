<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Report - PT. DERMILOSOFI</title>
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
            <h2>Edit Report</h2>

            <form action="{{ route('reports.update', $report) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Report Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $report->title }}" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Report Type</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="">Select Type</option>
                        <option value="financial" {{ $report->type == 'financial' ? 'selected' : '' }}>Financial</option>
                        <option value="annual" {{ $report->type == 'annual' ? 'selected' : '' }}>Annual</option>
                        <option value="quarterly" {{ $report->type == 'quarterly' ? 'selected' : '' }}>Quarterly</option>
                        <option value="monthly" {{ $report->type == 'monthly' ? 'selected' : '' }}>Monthly</option>
                        <option value="other" {{ $report->type == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5">{{ $report->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Report File</label>
                    <input type="file" class="form-control" id="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx">
                    @if($report->file_path)
                        <small class="form-text text-muted">Current file: {{ basename($report->file_path) }}</small>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="report_date" class="form-label">Report Date</label>
                    <input type="date" class="form-control" id="report_date" name="report_date" value="{{ $report->report_date ? $report->report_date->format('Y-m-d') : '' }}" required>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ $report->is_active ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">Active</label>
                </div>

                <button type="submit" class="btn btn-primary">Update Report</button>
                <a href="{{ route('reports.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
