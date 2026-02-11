@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Development Programs
                    </h2>
                    <p class="mb-0">Accelerate early-phase product development with structured pharmaceutical development
                        programs designed to support small and large molecules, excipients, and formulation components. Our
                        integrated approach spans early formulation design, process optimization, and readiness for
                        manufacturing scale-up. Progress in development programs relies on precision, process control, and
                        regulatory compliance. With a focus on seamless program execution, we help ensure critical
                        milestones are met efficiently and reliably. Whether you need full program management from start to
                        finish or support for a specific stage of development, United Pharmaceuticals Inc. provides the
                        technical expertise and oversight required. Consult our Development Programs Fact Sheet for details
                        on our capabilities and services.
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
                            <h2>Comprehensive Solutions for Product Advancement
                            </h2>
                            <p>We deliver end-to-end development solutions tailored to pharmaceutical manufacturing needs.
                                Our services cover formulation refinement, process development, analytical evaluation, and
                                scale-up readiness. By integrating technical, analytical, and regulatory elements, we ensure
                                each product is developed efficiently and consistently. With experienced teams, flexible
                                timelines, and adherence to GMP and global standards, we customize our programs to fit each
                                product’s development requirements. Count on us to provide structured guidance and
                                operational support to advance your products safely and efficiently.

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
                            <img src="{{ asset('images/purpose-thumb-01.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeImgThumb ourPurposeImgThumb02 order-sm-2 order-0">
                            <img src="{{ asset('images/purpose-thumb-02.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeContentBox ourPurposeContentBoxSmall order-sm-0 order-1">
                            <h2>Commitment to Compliance and Product Integrity
                            </h2>
                            <p>All activities are conducted in controlled environments with rigorous access, monitoring, and
                                oversight. Dedicated technical and quality teams supervise processes to maintain compliance,
                                safeguard product integrity, and ensure operational readiness. From initial formulation
                                through scale-up and production preparation, every step is designed to meet regulatory and
                                quality standards.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection