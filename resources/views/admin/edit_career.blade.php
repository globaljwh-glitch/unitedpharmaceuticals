@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">✏️ Edit Career</h3>
                <a href="{{ route('career.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back to Careers
                </a>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="{{ route('career.update', $career->id) }}" method="POST">
                        @csrf
                      
                        <div class="form-group">
                            <label><strong>Title</strong></label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $career->title) }}"
                                required>
                        </div>

                        <div class="form-group">
                            <label><strong>Description</strong></label>
                            <textarea name="description" class="form-control"
                                id="description-editor">{{ old('description', $career->description) }}</textarea>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Update Career
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description-editor');
    </script>
@endsection