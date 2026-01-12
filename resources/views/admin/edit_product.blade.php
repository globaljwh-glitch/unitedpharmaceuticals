@extends('admin.layout.admin-app')

@section('content')
    <div id="content" class="main-content">
        <div class="container mt-4">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">✏️ Edit Product</h3>
                <a href="{{ route('all_product') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <!-- Validation Errors -->
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif

            <!-- Edit Form -->
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="{{ route('update_product', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Title + Vendor -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><strong>Product Title</strong></label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title', $product->name) }}" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label><strong>Vendor</strong></label>
                                <input type="text" name="vendor" class="form-control"
                                    value="{{ old('vendor', $product->vendor) }}">
                            </div>
                        </div>

                        <!-- Price + Inventory -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><strong>Product Price ($)</strong></label>
                                <input type="number" step="0.01" name="product_price" class="form-control"
                                    value="{{ old('product_price', $product->price) }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label><strong>Inventory Quantity</strong></label>
                                <input type="number" name="variant_inventory_qty" class="form-control"
                                    value="{{ old('variant_inventory_qty', $product->quantity) }}" required>
                            </div>
                        </div>

                        <!-- Existing Images -->
                        <div class="form-group">
                            <label><strong>Current Images</strong></label><br>
                            @if(!empty($product->image))
                                @foreach($product->image as $img)
                                    <img src="{{ asset('storage/' . $img) }}" class="img-thumbnail mr-2 mb-2" width="90">
                                @endforeach
                            @else
                                <span class="badge badge-secondary">No Images</span>
                            @endif
                        </div>

                        <!-- Upload New Images -->
                        <div class="form-group">
                            <label><strong>Replace Images</strong></label>
                            <input type="file" name="images[]" class="form-control" multiple>
                            <small class="text-muted">
                                Uploading new images will replace existing ones.
                            </small>
                        </div>

                        <!-- Submit -->
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Update Product
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection