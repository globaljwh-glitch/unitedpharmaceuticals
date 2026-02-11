@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">✏️ Edit Category</h3>
                <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back to Categories
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

            <!-- Edit Category Form -->
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.update', $category->id) }}">
                        @csrf

                        <!-- Parent Category -->
                        <div class="form-group">
                            <label><strong>Parent Category</strong></label>
                            <select name="parent_id" class="form-control">
                                <option value="">Main Category</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ old('parent_id', $category->parent_id) == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Category Name -->
                        <div class="form-group">
                            <label><strong>Category Name</strong></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter category name"
                                value="{{ old('name', $category->name) }}" required>
                        </div>

                        <!-- Status -->
                        <div class="form-group">
                            <label><strong>Status</strong></label>
                            <select name="status" class="form-control">
                                <option value="1" {{ old('status', $category->status) == 1 ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0" {{ old('status', $category->status) == 0 ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                        </div>

                        <!-- Submit -->
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Update Category
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection