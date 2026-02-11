@extends('admin.layout.admin-app')

@section('content')
<div id="content" class="main-content">
    <div class="container mt-4">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">📝 Blogs</h3>
            <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Add Blog
            </a>
        </div>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <table id="zero-config" class="table table-bordered table-hover mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th width="60">#</th>
                            <th>Title</th>
                            <th width="120">Image</th>
                            <th width="100">Status</th>
                            <th width="160">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($blogs as $key => $blog)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>
                                @if($blog->image)
                                <img src="{{ asset('storage/'.$blog->image) }}" width="60">
                                @else
                                <span class="badge badge-secondary">No Image</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge badge-{{ $blog->status ? 'success' : 'danger' }}">
                                    {{ $blog->status ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-info btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Delete this blog?')" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No blogs found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection