@extends('admin.layout.admin-app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<div id="content" class="main-content">
    <div class="container mt-4">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">➕ Add Event</h3>
            <a href="{{ route('events.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Back to Events
            </a>
        </div>

        <!-- Validation Errors -->
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        @endif

        <!-- Event Form Card -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ route('events.store') }}" method="POST">
                    @csrf

                    <!-- Event Title -->
                    <div class="form-group mb-3">
                        <label><strong><i class="fas fa-heading text-primary"></i> Event Title *</strong></label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                            placeholder="Enter Event Title" required>
                    </div>

                    <!-- From / To Date -->
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label><strong><i class="fas fa-calendar-day text-primary"></i> From Date *</strong></label>
                            <input type="date" name="from_date" class="form-control" value="{{ old('from_date') }}"
                                required>
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label><strong><i class="fas fa-calendar-day text-primary"></i> To Date</strong></label>
                            <input type="date" name="to_date" class="form-control" value="{{ old('to_date') }}">
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="form-group mb-3">
                        <label><strong><i class="fas fa-map-marker-alt text-primary"></i> Location *</strong></label>
                        <input type="text" name="location" class="form-control" value="{{ old('location') }}"
                            placeholder="Enter Event Location" required>
                    </div>

                    <!-- Description -->
                    <div class="form-group mb-3">
                        <label><strong><i class="fas fa-align-left text-primary"></i> Description</strong></label>
                        <textarea name="description" id="description-editor" class="form-control" rows="5"
                            placeholder="Enter Event Description">{{ old('description') }}</textarea>
                    </div>

                    <!-- Status -->
                    <div class="form-group mb-3">
                        <label><strong><i class="fas fa-toggle-on text-primary"></i> Status</strong></label>
                        <select name="status" class="form-control select2" required>
                            <option value="1" {{ old('status')==1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status')==0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <!-- Submit -->
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Save Event
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

<script>
    // Initialize CKEditor for description
    CKEDITOR.replace('description-editor');

    // Initialize Select2
    $(document).ready(function () {
        $('.select2').select2({ width: '100%' });
    });
</script>

@endsection