@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">📦 Product Listing</h3>
                <a href="{{ route('add_product') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Product
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

            <!-- Product Table -->
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Images</th>
                                    <th>Name</th>
                                    <!-- <th>Slug</th> -->
                                    <th>Vendor</th>
                                    <th>Inventory</th>
                                    <th>Price</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>

                                        <!-- Images -->
                                        <td>
                                            @if(!empty($product->image))
                                                @foreach($product->image as $img)
                                                    <img src="{{ asset('storage/' . $img) }}" class="rounded shadow-sm mr-1" width="45"
                                                        height="45" style="object-fit: cover;">
                                                @endforeach
                                            @else
                                                <span class="badge badge-secondary">No Images</span>
                                            @endif
                                        </td>

                                        <!-- Title -->
                                        <td>
                                            <strong>{{ $product->name }}</strong>
                                        </td>

                                        <!-- Slug -->
                                        <!-- <td>
                                            <span class="badge badge-light border">
                                                {{ $product->slug }}
                                            </span>
                                        </td> -->

                                        <!-- Vendor -->
                                        <td>
                                            {{ $product->vendor ?? '—' }}
                                        </td>

                                        <!-- Inventory -->
                                        <td>
                                            <span class="badge badge-info">
                                                {{ $product->quantity }}
                                            </span>
                                        </td>

                                        <!-- Price -->
                                        <td>
                                            <strong class="text-success">
                                                ${{ number_format($product->price ?? 0, 2) }}
                                            </strong>
                                        </td>

                                        <!-- Actions -->
                                        <td class="text-center">
                                            <a href="{{ route('edit_product', $product->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>

                                            <form action="{{ route('del_product', $product->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">
                                            No products found.
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