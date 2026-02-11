@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <style>
                body {
                    background: #eef3f6;
                }

                /* HEADER BAR */
                .page-header {
                    background: linear-gradient(135deg, #0f4c5c, #1b6d80);
                    color: #fff;
                    border-radius: 14px;
                    padding: 20px 30px;
                    margin-bottom: 25px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
                }

                .page-header h3 {
                    margin: 0;
                    font-weight: 600;
                    letter-spacing: .5px;
                }

                /* CARD */
                .data-card {
                    background: #fff;
                    border-radius: 18px;
                    padding: 0;
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
                    overflow: hidden;
                }

                /* TABLE */
                .custom-table {
                    width: 100%;
                    border-collapse: separate;
                    border-spacing: 0 12px;
                }

                .custom-table thead tr {
                    background: #114d5c;
                    color: #fff;
                }

                .custom-table thead th {
                    padding: 16px;
                    font-size: 14px;
                    text-transform: uppercase;
                    letter-spacing: .6px;
                    border: none;
                }

                .custom-table tbody tr {
                    background: #fff;
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.06);
                    border-radius: 12px;
                }

                .custom-table tbody td {
                    padding: 16px;
                    font-size: 14px;
                    vertical-align: middle;
                }

                /* CATEGORY PILLS */
                .chip {
                    display: inline-block;
                    background: #e8f4f6;
                    color: #114d5c;
                    border: 1px solid #114d5c;
                    padding: 6px 14px;
                    border-radius: 20px;
                    font-size: 13px;
                    margin: 3px;
                }

                /* FILE BADGE */
                .file-badge {
                    background: #2c2c2c;
                    color: #fff;
                    padding: 6px 14px;
                    border-radius: 30px;
                    font-size: 12px;
                }

                /* ACTION BUTTONS */
                .action-btn {
                    width: 34px;
                    height: 34px;
                    border-radius: 50%;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    color: #fff;
                    margin: 0 2px;
                }

                .btn-view {
                    background: #ff9800;
                }

                .btn-edit {
                    background: #fbc02d;
                    color: #000;
                }

                .btn-delete {
                    background: #e53935;
                }

                .action-btn:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
                }
            </style>

            <!-- HEADER -->
            <div class="page-header d-flex justify-content-between align-items-center">
                <h3><i class="fas fa-flask mr-2"></i> Chemical Listing</h3>
                <a href="{{ route('add_chemical') }}" class="btn btn-light">
                    <i class="fas fa-plus"></i> Add Chemical
                </a>
            </div>

            <!-- TABLE -->
            <div class="data-card p-4">
                <div class="table-responsive">
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Chemical Name</th>
                                <th>CAS / Registry</th>
                                <!-- <th>Categories</th> -->
                                <th>Applications</th>
                                <!-- <th>Images</th> -->
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td><strong>{{ $product->chemical_name }}</strong></td>

                                    <td>{{ $product->chemical_registry }}</td>

                                    <!-- <td>
                                                                @foreach($product->categories as $cat)
                                                                    <span class="chip">{{ $cat->name }}</span>
                                                                @endforeach
                                                            </td> -->

                                    <td>
                                        {{ Str::limit($product->applications, 100) }}
                                    </td>

                                    <!-- <td>
                                                                <span class="file-badge">
                                                                    {{ $product->images->count() }} files
                                                                </span>
                                                            </td> -->

                                    <td>
                                        <!-- <a href="#" class="action-btn btn-view">
                                                                    <i class="fas fa-eye"></i>
                                                                </a> -->

                                        <a href="{{ route('edit_product', $product->id) }}" class="action-btn btn-edit">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('delete_chemical', $product->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Delete this chemical?')"
                                                class="action-btn btn-delete border-0">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted py-4">
                                        No chemicals found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $products->links() }}
                </div>
            </div>

        </div>
    </div>
@endsection