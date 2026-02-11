@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h3 class="mb-0">📋 Career Applications</h3>
                    <small class="text-muted">All verified job applications</small>
                </div>
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
                        <table id="zero-config" class="table table-hover align-middle">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Applicant</th>
                                    <th>Contact</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Applied On</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse($applications as $key => $app)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        <td>
                                            <strong>{{ $app->name }}</strong><br>
                                            <small class="text-muted">{{ $app->email }}</small>
                                        </td>

                                        <td>{{ $app->phone }}</td>

                                        <td>
                                            <span class="badge badge-info">
                                                {{ $app->job->title ?? 'General' }}
                                            </span>
                                        </td>

                                        <td>
                                            @if($app->status == 'new')
                                                <span class="badge badge-warning">New</span>
                                            @elseif($app->status == 'reviewed')
                                                <span class="badge badge-primary">Reviewed</span>
                                            @else
                                                <span class="badge badge-success">Shortlisted</span>
                                            @endif
                                        </td>

                                        <td>
                                            {{ $app->created_at->format('d M Y') }}<br>
                                            <small class="text-muted">
                                                {{ $app->created_at->diffForHumans() }}
                                            </small>
                                        </td>

                                        <td class="text-center">
                                            <button class="btn btn-sm btn-info" data-toggle="modal"
                                                data-target="#viewModal{{ $app->id }}">
                                                <i class="fas fa-eye"></i>
                                            </button>

                                            <!-- <form action="#" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Delete this application?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form> -->
                                        </td>
                                    </tr>

                                    <!-- View Modal -->
                                    <div class="modal fade" id="viewModal{{ $app->id }}">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5>Application Details</h5>
                                                    <button class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Name:</strong> {{ $app->name }}</p>
                                                    <p><strong>Email:</strong> {{ $app->email }}</p>
                                                    <p><strong>Phone:</strong> {{ $app->phone }}</p>
                                                    <p><strong>Subject:</strong> {{ $app->subject }}</p>
                                                    <hr>
                                                    <strong>Resume:</strong>
                                                    <div class="bg-light p-3 rounded mt-2">
                                                        {!! nl2br(e($app->resume)) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-5 text-muted">
                                            <i class="fas fa-inbox fa-2x mb-2"></i><br>
                                            No applications received yet.
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        {{ $applications->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection