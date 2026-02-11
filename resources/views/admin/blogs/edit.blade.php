@extends('admin.layout.admin-app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<div id="content" class="main-content">
    <div class="container mt-4">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">✏️ Edit Blog</h3>
            <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Back
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

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    

                    <!-- Title -->
                    <div class="form-group">
                        <label><strong>Blog Title</strong></label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}"
                            placeholder="Enter Blog Title" required>
                    </div>

                    <!-- Blog Description -->
                    <div class="form-group">
                        <label><strong>Blog Description</strong></label>
                        <textarea name="description" class="form-control" rows="3"
                            placeholder="Enter short description">{{ old('description', $blog->description) }}</textarea>
                    </div>

                    <!-- Blog Content (CKEditor) -->
                    <div class="form-group">
                        <label><strong>Blog Content</strong></label>
                        <textarea name="content" id="content-editor" class="form-control"
                            placeholder="Enter blog content">{{ old('content', $blog->content) }}</textarea>
                    </div>

                    <!-- Current Image -->
                    <div class="form-group">
                        <label><strong>Current Image</strong></label><br>
                        @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" width="120" class="img-thumbnail">
                        @else
                        <span class="badge badge-secondary">No Image</span>
                        @endif
                    </div>

                    <!-- Replace Image -->
                    <div class="form-group">
                        <label><strong>Replace Image</strong></label>
                        <input type="file" name="image" class="form-control">
                        <small class="text-muted">Uploading new image will replace existing one.</small>
                    </div>

                    <!-- Status + Frontend Page -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><strong>Status</strong></label>
                            <select name="status" class="form-control select2" required>
                                <option value="1" {{ old('status', $blog->status) == 1 ? 'selected' : '' }}>Active
                                </option>
                                <option value="0" {{ old('status', $blog->status) == 0 ? 'selected' : '' }}>Inactive
                                </option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label><strong>Frontend Page</strong></label>
                            <select name="frontend_page" class="form-control select2">
                                <option value="">-- Select Page --</option>
                                @foreach($frontendPages as $key => $label)
                                <option value="{{ $key }}" {{ old('frontend_page', $blog->frontend_page) == $key ?
                                    'selected' : '' }}>
                                    {{ $label }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Update Blog
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

<script>
    CKEDITOR.replace('content-editor');

    $(document).ready(function () {
        $('.select2').select2({ width: '100%' });
    });
</script>

@endsection