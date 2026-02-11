@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">📋 Orders Listing</h3>

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
                                    <th>Order Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                               
                                    <!-- <tr>
                                        <td colspan="4" class="text-center text-muted">
                                            No Orders found.
                                        </td>
                                    </tr> -->
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection