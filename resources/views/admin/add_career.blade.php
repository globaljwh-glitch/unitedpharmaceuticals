@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">🧑‍💼 Add Career / Job Post</h3>
                <a href="{{ route('career.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back to Careers
                </a>
            </div>

            <!-- Validation Errors -->
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                </div>
            @endif

            <!-- Add Career Form -->
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="{{ route('career.store') }}" method="POST">
                        @csrf

                        <!-- Job Title -->
                        <div class="form-group">
                            <label><strong>Job Title</strong></label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Job Title"
                                value="{{ old('title') }}" required>
                        </div>

                        <!-- Job Description -->
                        <div class="form-group">
                            <label><strong>Job Description</strong></label>
                            <textarea name="description" id="job_description" class="form-control" rows="8"
                                placeholder="Enter full job description">
                                {{ old('description') }}
                            </textarea>
                        </div>

                        <!-- Submit -->
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Save Job
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('job_description', {
            height: 250
        });
    </script>
@endsection