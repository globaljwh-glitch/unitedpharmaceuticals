@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/preclinical-services.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Integrated Bioanalysis Across Drug Development Stages
                    </h2>
                    <p class="mb-0">United Pharmaceuticals Inc. delivers robust bioanalytical solutions designed to support
                        drug development programs from early discovery through late-stage clinical studies. Our
                        bioanalytical services encompass method development, assay validation, and sample analysis across
                        multiple platforms to generate reliable PK, TK, and PD data. Through strategically coordinated
                        laboratory operations, we focus on producing accurate, reproducible bioanalytical results that
                        support critical decision-making across preclinical and clinical research programs.</p>
                    <a href="{{ route('contact') }}" class="customBtn01">Speak With Our Experts</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <img src="{{ asset('images/our-unique-approach.jpg') }}" alt="Our Unique Approach"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>High-Accuracy Bioanalytical Testing Solutions</h2>
                            <p>Our bioanalytical testing services are conducted in purpose-built laboratories equipped with
                                advanced analytical instrumentation. Services may be performed as independent bioanalytical
                                engagements or integrated within broader preclinical and clinical service packages.
                            </p>
                            <p>Each study is supported by validated methods, controlled workflows, and experienced
                                scientific oversight to ensure data quality, regulatory alignment, and operational
                                efficiency.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contentContainer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Bioanalytical Study Applications</h2>
                    <p class="paddingLR75">Our laboratories generate high-quality data to support pharmacokinetic,
                        toxicokinetic, pharmacodynamic, and biomarker-driven decision-making. Bioanalytical support is
                        provided for a wide range of study applications, including:
                    </p>
                </div>
            </div>
            <div class="infoBlockPharmaManufList">
                <div class="row">
                    <div class="col-md-12">
                        <div class="manufactProductCatBlock">
                            <div class="row">

                                @foreach($blogs as $blog)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="manufactProductCatList">
                                            <div class="manufactProductCat">
                                                <a href="{{ route('blogs.show', $blog->slug) }}">
                                                    <div class="flip-card">
                                                        <div class="flip-card-inner">

                                                            <!-- FRONT -->
                                                            <div class="flip-card-front">
                                                                <img src="{{ asset('storage/' . $blog->image) }}"
                                                                    alt="{{ $blog->title }}">
                                                                <h5 class="d-flex align-items-center">
                                                                    {{ $blog->title }}
                                                                </h5>
                                                            </div>

                                                            <!-- BACK -->
                                                            <div class="flip-card-back">
                                                                <h4>{{ $blog->title }}</h4>
                                                                <p>
                                                                    {{ $blog->description }}
                                                                </p>
                                                                <p class="text-uppercase">Learn More</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg ourPurposeBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="productImgThumbOuter d-flex justify-content-end align-items-center positionRelative">
                        <div class="ourPurposeImgThumb ourPurposeImgThumb01 order-sm-1 order-0">
                            <img src="{{ asset('images/large-image-thumb-01.jpg')}}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeImgThumb ourPurposeImgThumb02 order-sm-2 order-0">
                            <img src="{{ asset('images/large-image-thumb-02.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeContentBox ourPurposeContentBoxSmall order-sm-0 order-1">
                            <h2>Broad Bioanalytical Capabilities and Scientific Expertise</h2>
                            <p>We support analysis across a wide range of biological matrices using techniques such as mass
                                spectrometry, ligand-binding platforms, immunogenicity testing, biomarker evaluation, flow
                                cytometry, and microsampling methodologies. Our laboratories are equipped to support both
                                internal research programs and external sponsor studies with consistency and precision.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <img src="{{ asset('images/preclinical-research-facilities.jpg') }}" alt="Our Unique Approach"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Multi-Platform Bioanalytical Laboratory Support
                            </h2>
                            <p>Our bioanalytical laboratories provide comprehensive analytical support for both small- and
                                large-molecule development programs. Utilizing LC-MS/MS and ligand-binding assay
                                technologies, we generate high-quality data across all development phases. From early
                                discovery through Phase IV, our teams support diverse bioanalytical requirements, including
                                molecular assays, PCR-based analysis, oligonucleotide testing, microsampling strategies, and
                                flow-based applications.
                            </p>
                            <a href="{{ route('contact') }}" class="customBtn01 customBtn01Small me-2  ">Explore Our
                                Facilities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection