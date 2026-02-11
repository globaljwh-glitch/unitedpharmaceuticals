@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/packaging-materials.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Packaging Materials</h2>
                    <p class="mb-0">United Pharmaceuticals Inc. supplies pharmaceutical-grade packaging materials designed
                        to protect product integrity throughout storage, handling, and distribution. Packaging solutions are
                        selected based on compatibility, regulatory requirements, and functional performance. All packaging
                        materials are evaluated to ensure they support product stability, identity, and compliance across
                        the pharmaceutical supply chain.
                    </p>
                    <a href="{{ route('contact') }}" class="customBtn01">Speak With Our Experts</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <img src="{{ asset('images/our-unique-approach.jpg') }}" alt="Our Unique Approach"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Material Qualification Controls
                            </h2>
                            <p>Packaging materials are subject to defined qualification and approval processes prior to use.
                                Supplier evaluations, material specifications, and incoming quality checks are conducted to
                                ensure consistency and conformity with established requirements.</p>
                            <p>Controlled documentation and approval workflows ensure that only qualified packaging
                                materials are released for operational use.
                            </p>
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
                            <img src="{{ asset('images/large-image-thumb-01.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeImgThumb ourPurposeImgThumb02 order-sm-2 order-0">
                            <img src="{{ asset('images/packaging-materials-03.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeContentBox ourPurposeContentBoxSmall order-sm-0 order-1">
                            <h2>Packaging Safety Measures
                            </h2>
                            <p>Packaging safety controls are implemented to prevent contamination, mix-ups, and
                                material-related risks. Clean handling procedures, controlled storage conditions, and
                                traceability mechanisms are enforced across packaging operations.
                            </p>
                            <p>These measures help maintain product safety while ensuring compliance with applicable
                                pharmaceutical packaging standards.
                            </p>
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
                    <img src="{{ asset('images/packaging-materials-04.jpg') }}" alt="Packaging Material"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>PACKAGING MATERIALS THAT ENSURE PRODUCT SAFETY</h2>
                            <p>Packaging materials and processes are continuously reviewed through monitoring, inspections,
                                and performance evaluations. Deviations, complaints, and material trends are assessed to
                                support corrective and preventive actions.</p>
                            <p>This ongoing oversight ensures packaging materials consistently meet quality, safety, and
                                regulatory expectations throughout their lifecycle.
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