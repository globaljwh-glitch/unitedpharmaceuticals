@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/quality-safety-controls.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>QUALITY AND SAFETY ASSURANCE</h2>
                    <p class="mb-0">Quality and safety at United Pharmaceuticals Inc. are governed by a formally established
                        Quality Management System (QMS) that controls and monitors all critical operational activities.
                        Standard Operating Procedures (SOPs), controlled documentation, and validated methodologies are
                        implemented to ensure consistent conformance to predefined quality specifications. In-process
                        controls, qualified analytical testing, and comprehensive batch record reviews are conducted to
                        ensure data integrity, process consistency, and full traceability across manufacturing, packaging,
                        and material handling operations.
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
                    <img src="{{ asset('images/quality-safety-01.jpg') }}" alt="Quality & Safety"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>QUALITY CONTROL SYSTEMS FOR REGULATED MANUFACTURING</h2>
                            <p>Safety controls are implemented through a structured, risk-based approach designed to
                                safeguard products, personnel, and controlled environments. Hazard identification, risk
                                assessment, and preventive control strategies are applied to reduce variability and maintain
                                operational integrity.
                            </p>
                            <p>Controlled access systems, environmental monitoring programs, and defined handling procedures
                                are enforced to mitigate contamination risks and ensure compliance with established safety
                                and hygiene requirements.
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
                            <img src="{{ asset('images/large-image-thumb-01.jpg') }}" class="imgResponsive" alt="">
                        </div>
                        <div class="ourPurposeImgThumb ourPurposeImgThumb02 order-sm-2 order-0">
                            <img src="{{ asset('images/quality-safety-02.jpg') }}" class="imgResponsive" alt="">
                        </div>
                        <div class="ourPurposeContentBox ourPurposeContentBoxSmall order-sm-0 order-1">
                            <h2>REGULATORY CONTROL FRAMEWORK
                            </h2>
                            <p>All quality and safety systems are aligned with applicable regulatory requirements and
                                recognized industry standards. GMP-based controls govern document management, change
                                control, deviation investigation, corrective and preventive actions (CAPA), and process
                                validation activities.
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
                    <img src="{{ asset('images/quality-safety-03.jpg') }}" alt="Quality & Safety"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>SAFETY SYSTEMS OVERSIGHT & RISK MITIGATION
                            </h2>
                            <p>Quality and safety systems are subject to continuous monitoring and periodic review to ensure
                                ongoing effectiveness. Key performance indicators, trend evaluations, and root cause
                                analyses support proactive system improvements. This systematic approach enables United
                                Pharmaceuticals Inc. to maintain robust quality oversight while adapting to evolving
                                regulatory requirements and operational demands.
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