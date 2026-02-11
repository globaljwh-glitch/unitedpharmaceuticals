@extends('admin.layout.admin-app')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        label {
            font-weight: 600;
        }

        .card {
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, .08);
        }

        .section-title {
            color: #0f4c5c;
            border-bottom: 2px solid #0f4c5c;
            padding-bottom: 6px;
            margin-top: 30px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .img-box {
            position: relative;
            display: inline-block;
            margin: 8px;
        }

        .img-box img {
            width: 100px;
            border-radius: 10px;
            border: 2px solid #ddd;
        }

        .img-box button {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #e53935;
            border: none;
            color: #fff;
            border-radius: 50%;
            width: 26px;
            height: 26px;
        }

        body {
            background: #e2e8f0;
        }

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
    </style>

    <div id="content" class="main-content">
        <div class="container mt-4">

            <div class="page-header d-flex justify-content-between align-items-center">
                <h3><i class="fas fa-edit"></i> Edit Chemical</h3>
                <a href="{{ route('all_product') }}" class="btn btn-light">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <div class="card border-0 p-4">

                <form action="{{ route('update_chemical', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <h5 class="section-title">Basic Information</h5>

                    <div class="form-group">
                        <label>Chemical Name</label>
                        <input type="text" name="chemical_name" class="form-control" value="{{ $product->chemical_name }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label>Functional Categories</label>
                        <select name="categories[]" class="form-control select2" multiple>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ $product->categories->contains($cat->id) ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Sections --}}
                    @php
                        $sections = [
                            1 => ['nonproprietary_names', 'Nonproprietary Names'],
                            2 => ['synonyms', 'Synonyms'],
                            3 => ['chemical_registry', 'Chemical Name & CAS Registry'],
                            4 => ['empirical_formula', 'Empirical Formula & Molecular Weight'],
                            5 => ['structural_formula', 'Structural Formula'],
                            6 => ['applications', 'Applications'],
                            7 => ['description', 'Description'],
                            8 => ['pharmacopeial_specifications', 'Pharmacopeial Specifications'],
                            9 => ['typical_properties', 'Typical Properties'],
                            10 => ['stability_storage', 'Stability & Storage'],
                            11 => ['incompatibilities', 'Incompatibilities'],
                            12 => ['method_of_manufacture', 'Method of Manufacture'],
                            13 => ['safety', 'Safety'],
                            14 => ['handling_precautions', 'Handling Precautions'],
                            15 => ['regulatory_status', 'Regulatory Status'],
                            16 => ['related_substances', 'Related Substances'],
                            17 => ['comments', 'Comments'],
                        ];
                    @endphp

                    @foreach($sections as $no => $data)
                        <div class="form-group">
                            <label>{{ $no }}. {{ $data[1] }}</label>
                            <textarea name="{{ $data[0] }}" rows="4" class="form-control">
                                                                                {{ $product->{$data[0]} }}
                                                                                </textarea>
                        </div>
                    @endforeach

                    <h5 class="section-title">Existing Images</h5>

                    @if($product->images->count())

                        @php
                            $groupedImages = $product->images->groupBy('image_key');
                        @endphp

                        @foreach($groupedImages as $key => $images)
                            <div class="mb-3">
                                <strong>{{ $key }}</strong>

                                <div class="mt-2">
                                    @foreach($images as $img)
                                        <div class="img-box">
                                            <img src="{{ asset('storage/' . $img->image_path) }}">
                                            <button type="button" class="delete-img" data-id="{{ $img->id }}">×</button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    @else
                        <span class="text-muted">No images uploaded</span>
                    @endif



                    <h5 class="section-title">Add New Images</h5>

                    <div id="image-wrapper">
                        <div class="input-group mb-3">
                            <input type="text" name="image_key[]" class="form-control" placeholder="image key">
                            <input type="file" name="image_file[]" class="form-control">
                            <button class="btn btn-danger remove-img d-none" type="button">×</button>
                        </div>
                    </div>

                    <button type="button" class="btn btn-outline-primary add-img">
                        + Add Image
                    </button>

                    <div class="text-right mt-4">
                        <button type="submit" class="btn btn-success btn-lg">
                            <i class="fas fa-save"></i> Update Chemical
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('.select2').select2();

        $('.add-img').click(function () {
            $('#image-wrapper').append(`
                                    <div class="input-group mb-3">
                                        <input type="text" name="image_key[]" class="form-control" placeholder="image key">
                                        <input type="file" name="image_file[]" class="form-control">
                                        <button class="btn btn-danger remove-img" type="button">×</button>
                                    </div>`);
        });

        $(document).on('click', '.remove-img', function () {
            $(this).parent().remove();
        });


        $('.delete-img').click(function () {
            if (!confirm('Delete this image?')) return;

            let btn = $(this);

            $.ajax({
                url: "{{ route('delete_chemical_image') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: btn.data('id')
                },
                success: function () {
                    btn.closest('.img-box').fadeOut();
                }
            });
        });

    </script>

@endsection