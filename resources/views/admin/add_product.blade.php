@extends('admin.layout.admin-app')

@section('content')

    <style>
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

        label {
            color: #212529;
            font-weight: 600;
        }

        .select2-container--default .select2-selection--multiple {
            min-height: 38px;
            border: 1px solid #ced4da;
        }
    </style>

    <div id="content" class="main-content">
        <div class="container mt-4">

            <!-- Header -->
            <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="mb-0 text-primary">
                        <i class="fas fa-flask"></i> Add Chemical / Excipient
                    </h3>
                    <a href="{{ route('all_product') }}" class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div> -->
            <div class="page-header d-flex justify-content-between align-items-center">
                <h3><i class="fas fa-flask"></i> Add Chemical / Excipient</h3>
                <a href="{{ route('all_product') }}" class="btn btn-light">
                    <i class="fas fa-plus"></i> Back
                </a>
            </div>

            <div class="card shadow border-0">
                <div class="card-body">

                    <form action="{{ route('save_chemical') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- BASIC -->
                        <h5 class="mb-3 text-info border-bottom pb-2">
                            <i class="fas fa-info-circle"></i> Basic Information
                        </h5>

                        <div class="form-group">
                            <label>Chemical Name</label>
                            <input type="text" name="chemical_name" class="form-control"
                                placeholder="e.g. Acesulfame Potassium" required>
                        </div>

                        <!-- FUNCTIONAL CATEGORY -->
                        <div class="form-group">
                            <label>Functional Category</label>
                            <select name="categories[]" class="form-control select2" multiple>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Select multiple categories</small>
                        </div>

                        <!-- SECTIONS -->
                        @php
                            $sections = [
                                1 => ['nonproprietary_names', 'Nonproprietary Names', 'BP / USP / PhEur names'],
                                2 => ['synonyms', 'Synonyms', 'Alternative names, codes'],
                                3 => ['chemical_registry', 'Chemical Name & CAS Registry', 'IUPAC + CAS'],
                                4 => ['empirical_formula', 'Empirical Formula & Molecular Weight', 'C,H,O etc'],
                                5 => ['structural_formula', 'Structural Formula', 'Text description'],

                                6 => ['applications', 'Applications', 'Uses in pharma'],
                                7 => ['description', 'Description', 'Physical description'],
                                8 => ['pharmacopeial_specifications', 'Pharmacopeial Specifications', 'USP, BP, FCC'],
                                9 => ['typical_properties', 'Typical Properties', 'Density, solubility'],
                                10 => ['stability_storage', 'Stability & Storage', 'Storage rules'],
                                11 => ['incompatibilities', 'Incompatibilities', 'What not to mix'],
                                12 => ['method_of_manufacture', 'Method of Manufacture', 'Production process'],
                                13 => ['safety', 'Safety', 'Toxicology, LD50'],
                                14 => ['handling_precautions', 'Handling Precautions', 'PPE instructions'],
                                15 => ['regulatory_status', 'Regulatory Status', 'FDA, EU'],
                                16 => ['related_substances', 'Related Substances', 'Similar chemicals'],
                                17 => ['comments', 'Comments', 'Extra notes'],
                            ];
                        @endphp

                        @foreach($sections as $no => $data)
                            <div class="form-group">
                                <label>
                                    <strong>{{ $no }}. {{ $data[1] }}</strong>
                                </label>
                                <textarea name="{{ $data[0] }}" class="form-control" rows="4"
                                    placeholder="{{ $data[2] }}"></textarea>
                            </div>
                        @endforeach

                        <!-- IMAGE SYSTEM -->
                        <h5 class="text-info border-bottom pb-2 mt-4">
                            <i class="fas fa-image"></i> Scientific Images (Key Based)
                        </h5>

                        <div id="image-wrapper">
                            <div class="input-group mb-3">
                                <input type="text" name="image_key[]" class="form-control"
                                    placeholder="e.g structural_formula / nir_graph">
                                <input type="file" name="image_file[]" class="form-control">
                                <div class="input-group-append">
                                    <button class="btn btn-danger remove-img d-none" type="button">×</button>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-sm btn-outline-primary add-img">
                            + Add Image
                        </button>

                        <!-- DOCUMENTS -->
                        <!-- <h5 class="text-info border-bottom pb-2 mt-4">
                                                            <i class="fas fa-file-upload"></i> Reference Documents
                                                        </h5>

                                                        <div id="doc-wrapper">
                                                            <div class="input-group mb-3">
                                                                <input type="text" name="chemical_doc_name[]" class="form-control"
                                                                    placeholder="Document title">
                                                                <input type="file" name="chemical_doc_file[]" class="form-control">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-danger remove-doc d-none" type="button">×</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button type="button" class="btn btn-sm btn-outline-primary add-doc">
                                                            + Add Document
                                                        </button> -->

                        <!-- SUBMIT -->
                        <div class="text-right mt-4">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="fas fa-save"></i> Save Chemical
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('.select2').select2();

        $('.add-img').click(function () {
            $('#image-wrapper').append(`
                                    <div class="input-group mb-3">
                                    <input type="text" name="image_key[]" class="form-control"
                                    placeholder="image key">
                                    <input type="file" name="image_file[]" class="form-control">
                                    <div class="input-group-append">
                                    <button class="btn btn-danger remove-img" type="button">×</button>
                                    </div>
                                    </div>`);
        });

        $(document).on('click', '.remove-img', function () {
            $(this).closest('.input-group').remove();
        });

        $('.add-doc').click(function () {
            $('#doc-wrapper').append(`
                                    <div class="input-group mb-3">
                                    <input type="text" name="chemical_doc_name[]" class="form-control"
                                    placeholder="Document title">
                                    <input type="file" name="chemical_doc_file[]" class="form-control">
                                    <div class="input-group-append">
                                    <button class="btn btn-danger remove-doc" type="button">×</button>
                                    </div>
                                    </div>`);
        });

        $(document).on('click', '.remove-doc', function () {
            $(this).closest('.input-group').remove();
        });
    </script>

@endsection