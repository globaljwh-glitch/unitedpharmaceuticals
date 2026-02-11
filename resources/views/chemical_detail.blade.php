@extends('layout.app')

@section('content')

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

    <style>
        .chemical-card {
            background: #fff;
            border-radius: 12px;
            padding: 28px 32px;
            margin-bottom: 25px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        }

        .chemical-card h4 {
            color: #0d3b66;
            font-size: 18px;
            margin-bottom: 12px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 6px;
            font-weight: 600;
        }

        .chemical-card p {
            font-size: 15px;
            line-height: 1.8;
            color: #444;
            margin-bottom: 0;
            white-space: inherit !important;
        }

        .sticky-info {
            position: sticky;
            top: 45px;
        }

        .info-box {
            background: #0d3b66;
            color: #fff;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .info-box h5 {
            font-size: 16px;
            margin-bottom: 10px;
            font-weight: 600;
            color: #fff;
        }

        .info-box p {
            margin-bottom: 6px;
            font-size: 14px;
            color: #fff;
            font-weight: 400;
        }

        .tag {
            display: inline-block;
            background: #eaf2ff;
            color: #0d3b66;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
            margin: 3px;
        }

        .innerBannerContent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
        }

        .innerBannerContent h1 {
            font-size: 58px;
        }
    </style>

    {{-- BANNER --}}
    <section class="innerBanner positionRelative">
        <div class="innerBannerImage">
            <div class="bannerOverlay innerBannerProductOverlay"></div>
            <img src="{{ asset('images/banner/products-01.jpg') }}">
        </div>
        <div class="innerBannerContent">
            <div class="container">
                <h1 class="text-center">{{ $product->chemical_name }}</h1>
            </div>
        </div>
    </section>

    <section class="contentContainer">
        <div class="container">
            <div class="row">

                {{-- LEFT SIDEBAR --}}
                <div class="col-lg-3">
                    <div class="sticky-info">

                        <div class="info-box">
                            <h5>Basic Information</h5>
                            <p>Name: {{ $product->chemical_name }}</p>
                            <p>CAS No: {{ $product->chemical_registry }}</p>

                        </div>

                        <div class="chemical-card">
                            <h4>Functional Categories</h4>
                            @foreach($product->categories as $cat)
                                <span class="tag">{{ $cat->name }}</span>
                            @endforeach
                        </div>

                        <div class="chemical-card text-center">
                            <!--a href="#" class="customBtn01 d-block mb-2">Request Quote</a>
                                <a href="#" class="customBtn01 d-block mb-2">Request Sample</a-->
                            <a href="{{ route('all_chemicals') }}" class="customBtn01 mt-1 d-block">Back to List</a>
                        </div>

                    </div>
                </div>

                {{-- MAIN CONTENT --}}
                <div class="col-lg-9">

                    @foreach($sections as $no => $data)

                        @php
                            $field = $data[0];
                            $label = $data[1];
                            $value = $product->$field;
                            $images = $product->imagesByKey($label);
                        @endphp

                        @if($value || $images->count())
                            <div class="chemical-card">
                                <h4>{{ $no }}. {{ $label }}</h4>

                                @if($value)
                                    <p style="white-space: pre-line">
                                        {{ $value }}
                                    </p>
                                @endif

                                @if($images->count())
                                    <div class="row mt-3">
                                        @foreach($images as $img)
                                            <div class="col-md-4 text-center mb-3">
                                                <img src="{{ asset('storage/' . $img->image_path) }}"
                                                    class="img-fluid rounded shadow border">
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endif

                    @endforeach

                </div>
            </div>
        </div>
    </section>

@endsection