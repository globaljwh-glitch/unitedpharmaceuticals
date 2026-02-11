@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">📂 Categories</h3>
                <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Add Category
                </a>
            </div>

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                </div>
            @endif

            <!-- Categories Table -->
            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="zero-config" class="table table-hover table-bordered mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Name</th>
                                    <th>Parent</th>
                                    <th width="10%">Status</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($categories as $key => $cat)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <strong>{{ $cat->name }}</strong>
                                        </td>
                                        <td>
                                            {{ $cat->parent->name ?? '—' }}
                                        </td>
                                        <td>
                                            <span class="badge badge-{{ $cat->status ? 'success' : 'danger' }}">
                                                {{ $cat->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('categories.edit', $cat->id) }}"
                                                class="btn btn-sm btn-outline-info">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ route('categories.destroy', $cat->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Delete this category?')"
                                                    class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">
                                            No categories found
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection