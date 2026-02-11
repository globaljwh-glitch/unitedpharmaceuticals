@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/machinery-equipment.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Qualified Machinery & Equipment Systems</h2>
                    <p class="mb-0">United Pharmaceuticals Inc. utilizes purpose-built manufacturing machinery and
                        processing equipment designed to support controlled, consistent, and scalable pharmaceutical
                        operations. All equipment is selected based on process suitability, compliance requirements, and
                        operational reliability. Equipment qualification activities ensure systems perform as intended and
                        support reproducible outcomes across defined operating parameters.
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
                    <img src="{{ asset('images/machinery-equipment-01.jpg') }}" alt="Machinery Equipment"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Equipment Validation Controls</h2>
                            <p>All critical machinery is subject to structured validation protocols to confirm performance,
                                accuracy, and repeatability. Installation Qualification (IQ), Operational Qualification
                                (OQ), and Performance Qualification (PQ) activities are conducted in accordance with
                                established validation plans.
                            </p>
                            <p>Documented validation ensures equipment remains fit for use throughout its lifecycle while
                                supporting regulatory compliance and process integrity.
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
                            <img src="{{ asset('images/machinery-equipment-02.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeImgThumb ourPurposeImgThumb02 order-sm-2 order-0">
                            <img src="{{ asset('images/machinery-equipment-03.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeContentBox ourPurposeContentBoxSmall order-sm-0 order-1">
                            <h2>Preventive Maintenance Framework</h2>
                            <p>A defined preventive maintenance program is implemented to maintain equipment functionality
                                and reduce the risk of unplanned downtime. Scheduled inspections, calibration, and servicing
                                activities are performed to ensure consistent operational performance. Maintenance records
                                are controlled and reviewed to support traceability and audit readiness.
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
                    <img src="{{ asset('images/machinery-equipment-04.jpg') }}" alt="Machinery Equipment"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Operational Reliability Oversight
                            </h2>
                            <p>Machinery and equipment performance is continuously evaluated through defined operational
                                checks, routine monitoring, and controlled performance reviews. Key parameters, deviation
                                trends, equipment wear indicators, and functional variances are assessed to identify
                                potential risks and initiate timely corrective or preventive actions.</p>
                            <p>This structured oversight ensures sustained equipment reliability, minimizes operational
                                disruptions, and supports safe, compliant, and efficient pharmaceutical manufacturing
                                throughout the equipment lifecycle.
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