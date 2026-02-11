@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">📋 Career Listing</h3>
                <a href="{{ route('career.store') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Career
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif

            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero-config" class="table table-hover table-striped align-middle">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($careers as $career)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $career->title }}</td>
                                        <td>
                                            @if($career->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>

                                        <td class="text-center">
                                            <a href="{{ route('career.edit', $career->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('career.destroy', $career->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this career?')">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">
                                            No careers found.
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