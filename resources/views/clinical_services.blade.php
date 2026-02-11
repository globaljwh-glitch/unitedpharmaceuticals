@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Clinical Development Solutions
                    </h2>
                    <p class="mb-0">Drive confident clinical progress through purpose-built early-stage research programs
                        supporting Phase I, Phase IIa, and regulatory-enabling clinical pharmacology studies. Our clinical
                        development model supports both small and large molecules across multiple administration routes,
                        engaging healthy volunteers as well as targeted patient and special populations. Success in early
                        clinical research depends on accuracy, operational agility, and execution speed. With a strong
                        emphasis on early-phase strategy and execution, we help programs reach critical decision points
                        efficiently and consistently. Additional details on our clinical capabilities are available through
                        our Clinical Research overview materials.
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
                            <h2>End-to-End Clinical Execution Framework
                            </h2>
                            <p>Our clinical research offering is built as a flexible, fully integrated framework that adapts
                                to your development objectives. From first-in-human studies to proof-of-concept and
                                regulatory-supporting trials, we deliver coordinated solutions that reduce complexity and
                                streamline execution. Experienced clinical teams oversee planning, operational delivery, and
                                data integrity throughout each study phase. Leveraging adaptable timelines, strong
                                enrollment performance, and cross-functional expertise, we customize each program to meet
                                specific scientific and regulatory needs. This structured approach supports efficient
                                clinical progression while maintaining high standards of quality and compliance.
                            </p>
                            <p>Trust us to provide the guidance, support, and expertise needed to safely accelerate your
                                drug development journey, efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Core Elements of Our Clinical Research Offering</h2>
                    <p class="paddingLR75">We provide a comprehensive suite of services to support early-phase clinical
                        trials, managing activities from study initiation through close-out. Our capabilities include:</p>
                </div>
            </div>
            <div class="infoBlockPharmaManufList">
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="infoBlockPharma d-flex align-items-stretch justify-content-start align-items-center bg-white">
                            <div class="d-flex"><img src="{{ asset('images/project-management.jpg') }}" alt=""></div>
                            <div class="infoBlockPosition infoBlockPositionRight d-flex align-items-center">
                                <div>
                                    <h4>Program Oversight and Coordination</h4>
                                    <p>Our program management ensures structured execution of development activities across formulation, process development, pilot-scale production, analytical evaluation, and manufacturing readiness. Teams coordinate every step to maintain quality, regulatory compliance, and seamless progression from one stage to the next. Centralized oversight, clear milestones, and cross-functional alignment keep programs on schedule and within scope. This disciplined approach improves transparency, mitigates risks early, and supports efficient advancement toward commercialization. Clients benefit from a single, accountable framework that delivers end-to-end visibility, clear ownership, and consistent control across all phases of development.</p>
                                    <!-- <a href="#" class="customBtn01 customBtn01Small me-2">Program Management</a><a href="#"
                                                                                class="customBtn01 customBtn01Small">Project Management</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div
                            class="infoBlockPharma d-flex align-items-stretch justify-content-start align-items-center bg-white">
                            <div class="order-md-1 order-0"><img src="{{ asset('images/protocol-review-and-development.jpg') }}" alt="">
                            </div>
                            <div
                                class="infoBlockPosition infoBlockPositionLeft order-md-0 order-1 d-flex align-items-center">
                                <div>
                                    <h4>Process Development and Optimization
                                    </h4>
                                    <p>We focus on developing robust, reproducible processes that meet regulatory expectations. From creating initial formulations to optimizing scale-up processes, we provide structured plans, method validation support, and regulatory documentation to streamline approval readiness. Process understanding is strengthened through risk-based development strategies and data-driven optimization. This end-to-end approach reduces variability, supports consistent manufacturing performance, and accelerates the path to regulatory approval. Well-defined and thoroughly optimized processes establish a strong foundation for scalable operations, regulatory confidence, and long-term commercial viability.</p>
                                    <!-- <a href="#" class="customBtn01 customBtn01Small">Medical Writing</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div
                            class="infoBlockPharma d-flex align-items-stretch justify-content-start align-items-center bg-white">
                            <div><img src="{{ asset('images/early-phase-clinical-conduct.jpg') }}" alt=""></div>
                            <div class="infoBlockPosition infoBlockPositionRight d-flex align-items-center">
                                <div>
                                    <h4>Scale-Up and Manufacturing Preparedness
                                    </h4>
                                    <p>Pilot-scale production and technology transfer are central to our programs. Our facilities and technical teams ensure process consistency, operational readiness, and GMP alignment for a smooth transition to commercial manufacturing. We also support scale-up optimization and process validation to minimize risk, reduce timelines, and ensure reliable performance at commercial volumes. This structured scale-up strategy enables predictable manufacturing outcomes and long-term process robustness. Manufacturing readiness is achieved through disciplined planning and execution, ensuring continuity, reliability, and minimal disruption as programs transition to commercial production.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div
                            class="infoBlockPharma d-flex align-items-stretch justify-content-start align-items-center bg-white">
                            <div class="order-md-1 order-0"><img src="{{ asset('images/clinical-research-associate.jpg') }}"
                                    alt=""></div>
                            <div
                                class="infoBlockPosition infoBlockPositionLeft order-md-0 order-1 d-flex align-items-center">
                                <div>
                                    <h4>Quality Systems and Regulatory Oversight
                                    </h4>
                                    <p>We embed quality oversight throughout every stage, ensuring traceability, compliance with global standards, and robust documentation. Regulatory readiness and product integrity are maintained from early development through scale-up. This integrated approach enables audit-ready operations, consistent quality outcomes, and confident regulatory submissions across global markets. Proactive risk management and continuous quality monitoring further safeguard product approval and lifecycle success. Comprehensive quality systems support sustained compliance, inspection readiness, and consistent product performance throughout the entire product lifecycle.</p>
                                    <!-- <a href="#" class="customBtn01 customBtn01Small">Clinical Monitoring</a> <a href="#"
                                                        class="customBtn01 customBtn01Small">Clinical Trial Site Solutions</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div
                            class="infoBlockPharma d-flex align-items-stretch justify-content-start align-items-center bg-white">
                            <div><img src="{{ asset('images/bioanalytical-services.jpg') }}" alt=""></div>
                            <div class="infoBlockPosition infoBlockPositionRight d-flex align-items-center">
                                <div>
                                    <h4>Analytical and Technical Capabilities
                                    </h4>
                                    <p>Our advanced labs support method development, validation, in-process controls, and product characterization. These capabilities ensure reproducibility, consistent quality, and regulatory compliance, providing actionable data to guide development decisions. Our analytical insights reduce development uncertainty, accelerate timelines, and strengthen confidence at every stage of the product lifecycle. Data-driven evaluations support informed decision-making and seamless progression from development to commercialization. Integrated analytical and technical expertise reinforces scientific rigor, regulatory assurance, and confident advancement toward successful commercial outcomes.</p>
                                    <!-- <a href="#" class="customBtn01 customBtn01Small">Validated Assay List</a> <a href="#"
                                                class="customBtn01 customBtn01Small">PK/PD Analysis and Interpretation</a> -->
                                </div>
                            </div>
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
                    <h2>Focused Clinical Expertise Areas
                    </h2>
                    <p class="paddingLR75">As part of our early clinical research framework, we maintain specialized
                        capabilities supporting a wide range of study designs, populations, and development objectives.
                    </p>
                </div>
            </div>
            <div class="infoBlockPharmaManufList">
                <div class="row">
                    <div class="col-md-12">
                        <div class="manufactProductCatBlock">
                            <div class="row">

                                @foreach($blogs as $blog)
                                    <div class="col-md-3 col-sm-6">
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
                            <img src="{{ asset('images/purpose-thumb-01.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeImgThumb ourPurposeImgThumb02 order-sm-2 order-0">
                            <img src="{{ asset('images/purpose-thumb-02.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeContentBox ourPurposeContentBoxSmall order-sm-0 order-1">
                            <h2>Participant Safety and Operational Control</h2>
                            <p>Clinical operations are conducted within highly controlled environments supported by
                                continuous monitoring, restricted access, and proximity to major medical centers.
                                Experienced physicians oversee all clinical activities, with participants evaluated daily
                                and continuously supervised throughout study participation. Advanced monitoring systems,
                                including cardiac and respiratory assessments, are available as required to support
                                participant safety and data integrity.
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
                <div class="col-md-12">
                    <h2 class="text-center">Frequently Asked Questions
                    </h2>
                    <div class="faq mt-4">
                        <div class="accordion accordion-faq" id="accordionfaqExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseOne" aria-expanded="false"
                                        aria-controls="faq-collapseOne">
                                        What types of clinical research solutions do you provide?
                                    </button>
                                </h2>
                                <div id="faq-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingOne" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>We support early-phase clinical development, including Phase I, Phase IIa, and
                                            clinical pharmacology studies across diverse molecule types and administration
                                            routes. Our services cover study design, execution, monitoring, and data
                                            support.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseTwo" aria-expanded="false"
                                        aria-controls="faq-collapseTwo">
                                        Do you support manufacturing and supply needs for clinical studies?
                                    </button>
                                </h2>
                                <div id="faq-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingTwo" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>Yes, we provide integrated CDMO support aligned with clinical programs, including
                                            material sourcing, formulation support, and trial-ready supply coordination
                                            under global regulatory standards.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseThree" aria-expanded="false"
                                        aria-controls="faq-collapseThree">
                                        What makes United Pharmaceuticals a reliable CRO partner?
                                    </button>
                                </h2>
                                <div id="faq-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingThree" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>United Pharmaceuticals combines regulatory-driven processes, operational
                                            consistency, and scientific expertise to support dependable clinical outcomes
                                            across early development programs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseFour" aria-expanded="false"
                                        aria-controls="faq-collapseFour">
                                        How is quality embedded into your clinical research operations?

                                    </button>
                                </h2>
                                <div id="faq-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingFour" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>Quality is maintained through standardized SOPs, regulatory compliance
                                            frameworks, continuous training, and oversight at every stage of study planning
                                            and execution.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseFive" aria-expanded="false"
                                        aria-controls="faq-collapseFive">
                                        How do you maintain integration across your clinical and development services?
                                    </button>
                                </h2>
                                <div id="faq-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingFive" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>Our teams work within a unified development model that aligns clinical research,
                                            manufacturing support, and analytical services to reduce handoffs and improve
                                            program continuity.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseSix" aria-expanded="false"
                                        aria-controls="faq-collapseSix">
                                        What level of industry experience supports your clinical research services?
                                    </button>
                                </h2>
                                <div id="faq-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingSix" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>Our clinical development teams bring decades of combined experience across
                                            multiple therapeutic areas, study designs, and regulatory pathways supporting
                                            global drug development.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection