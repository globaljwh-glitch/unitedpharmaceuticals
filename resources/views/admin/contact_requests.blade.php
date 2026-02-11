@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">📋 Contact Requests</h3>
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
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Company</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Zip</th>
                                    <th>Message</th>
                                    <!-- <th class="text-center">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($contact_req as $request)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <!-- TYPE -->
                                        <td>
                                            @if($request->type == 1)
                                                <span class="badge badge-info px-3 py-2">
                                                    🧪 Sample Request
                                                </span>
                                            @elseif($request->type == 2)
                                                <span class="badge badge-primary px-3 py-2">
                                                    📩 Contact Request
                                                </span>
                                            @else
                                                <span class="badge badge-secondary">
                                                    Unknown
                                                </span>
                                            @endif
                                        </td>

                                        <!-- NAME -->
                                        <td>
                                            <strong>{{ $request->f_name }} {{ $request->l_name }}</strong>
                                        </td>

                                        <td>{{ $request->email }}</td>
                                        <td>{{ $request->phone }}</td>
                                        <td>{{ $request->company_name }}</td>
                                        <td>{{ $request->city }}</td>
                                        <td>{{ $request->state }}</td>
                                        <td>{{ $request->country }}</td>
                                        <td>{{ $request->zip }}</td>

                                        <!-- MESSAGE -->
                                        <td style="max-width: 250px;">
                                            <span title="{{ $request->message }}">
                                                {{ Str::limit($request->message, 60) }}
                                            </span>
                                        </td>

                                        <!-- ACTION -->
                                        <!-- <td class="text-center">
                                                    <a href="#"
                                                        class="btn btn-sm btn-outline-primary">
                                                        View
                                                    </a>

                                                    <form action="#" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-outline-danger"
                                                            onclick="return confirm('Are you sure?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td> -->
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" class="text-center text-muted py-4">
                                            🚫 No contact requests found.
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