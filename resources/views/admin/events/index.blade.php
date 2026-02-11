@extends('admin.layout.admin-app')

@section('content')
<div id="content" class="main-content">
    <div class="container mt-4">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">📝 Events</h3>
            <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Add Event
            </a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        @endif

        <!-- Events Table Card -->
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <table id="zero-config" class="table table-bordered table-hover mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th width="60">#</th>
                            <th>Title</th>
                            <th width="120">From Date</th>
                            <th width="120">To Date</th>
                            <th>Location</th>
                            <th width="160">Status</th>
                            <th width="180">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($events as $key => $event)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->from_date }}</td>
                            <td>{{ $event->to_date ?? '-' }}</td>
                            <td>{{ $event->location }}</td>
                            <td>
                                <span class="badge badge-{{ $event->status ? 'success' : 'danger' }}">
                                    {{ $event->status ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <form action="{{ route('events.delete', $event->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this event?')"
                                        class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">No Events found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection