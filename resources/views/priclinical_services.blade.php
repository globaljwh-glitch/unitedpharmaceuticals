@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/preclinical-services.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Preclinical Research Services
                    </h2>
                    <p class="mb-0">With decades of experience supporting early-stage drug development, United
                        Pharmaceuticals Inc. delivers comprehensive preclinical research services aligned with scientific
                        rigor and regulatory expectations. Our capabilities include a wide range of in vivo GLP and non-GLP
                        safety assessment programs conducted across both rodent and non-rodent species. We support
                        pharmaceutical compounds, biologics, veterinary products, agrochemical substances, and specialty
                        chemical programs. Each program is customized to generate robust toxicology, safety pharmacology,
                        and laboratory data.
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
                            <h2>Specialized Support for Preclinical Programs</h2>
                            <p>As a reliable preclinical research partner, United Pharmaceuticals Inc. provides integrated
                                CRO solutions that simplify and accelerate early drug development. Our experienced
                                scientists focus on generating high-quality, decision-enabling data to support confident
                                progression from lead optimization to first-in-human studies.
                            </p>
                            <p>Comprehensive technical documentation and study insights offer sponsors clear visibility
                                across all stages of preclinical development. Our expertise spans both small- and
                                large-molecule research, supporting efficient milestone achievement and regulatory
                                preparedness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>End-to-End Preclinical CRO Capabilities</h2>
                    <p>Preclinical programs at United Pharmaceuticals Inc. are structured to support sponsors at every stage
                        of early development through integrated, full-service CRO capabilities. Our approach focuses on
                        aligning scientific objectives with study design, execution, and data generation to meet regulatory
                        and development goals.</p>
                    <p>By bringing multiple disciplines under a single operational framework, we ensure seamless
                        coordination across formulation, analytical, and in vivo activities—supporting consistency, data
                        integrity, and efficient project progression.
                    </p>
                    <h3>Core Service Capabilities
                    </h3>
                    <ul class="listing01">
                        <li>Formulation Development</li>
                        <li>Analytical Method Development</li>
                        <li>Bioanalytical Testing</li>
                        <li>Pharmacokinetic and Toxicokinetic Evaluation</li>
                        <li>Immunohistochemical Analysis</li>
                        <li>Specialized Necropsy Services</li>
                        <li>Anatomic Pathology</li>
                        <li>Clinical Pathology</li>
                        <li>SEND (Standard for Exchange of Nonclinical Data) Compliance
                        </li>
                    </ul>
                    <h2 class="mt-5">Animal Models and Dosing Strategy Expertise</h2>
                    <p>Study designs are supported by access to a wide range of animal models and administration routes
                        selected based on scientific relevance and regulatory expectations. Our teams apply
                        species-appropriate methodologies and dosing strategies to ensure accurate interpretation of safety
                        and pharmacology outcomes.
                    </p>
                    <p>From standard laboratory models to advanced nonhuman primate studies, each program is executed with
                        controlled procedures and validated techniques.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>SPECIES</h4>
                            <ul class="listing01">
                                <li>Rats</li>
                                <li>Mice</li>
                                <li>Guinea Pigs</li>
                                <li>Rabbits</li>
                                <li>Swine</li>
                                <li>Miniature Swine</li>
                                <li>Dogs</li>
                                <li>Nonhuman Primates (Cynomolgus, Rhesus, Others Upon Request)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4>ROUTES OF ADMINISTRATION</h4>
                            <ul class="listing01">
                                <li>Oral</li>
                                <li>Parental</li>
                                <li>Infusion</li>
                                <li>Ocular</li>
                                <li>Dermal</li>
                                <li>Implantation</li>
                                <li>Intravaginal And Intrapenile</li>
                                <li>Rectal</li>
                            </ul>
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
                    <h2>Scope of Preclinical Studies</h2>
                    <p class="paddingLR75">Our scientists and technicians deliver reliable safety and toxicology studies
                        designed to support both early development and regulatory submissions. Our safety assessment
                        portfolio includes multiple preclinical study models aligned with global development and compliance
                        requirements.
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
                            <img src="{{ asset('images/large-image-thumb-01.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeImgThumb ourPurposeImgThumb02 order-sm-2 order-0">
                            <img src="{{ asset('images/large-image-thumb-02.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeContentBox ourPurposeContentBoxSmall order-sm-0 order-1">
                            <h2>Compliance-Based Animal Welfare Management</h2>
                            <p>Our trained personnel adhere to established laboratory animal care standards, emphasizing
                                ethical treatment, environmental enrichment, and responsible research practices. All studies
                                are conducted in accordance with applicable animal welfare regulations and ethical
                                guidelines, ensuring humane practices are maintained throughout study execution.
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
                    <img src="{{ asset('images/preclinical-research-facilities.jpg') }}" alt="Our Unique Approach"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Preclinical Research Infrastructure and Facilities
                            </h2>
                            <p>United Pharmaceuticals Inc. operates modern preclinical research facilities designed to
                                support comprehensive safety evaluation and bioanalytical testing in both rodent and
                                non-rodent species. Our infrastructure enables efficient execution of GLP and non-GLP
                                programs across a wide range of study types. Equipped to support pivotal toxicology, safety
                                pharmacology, and laboratory investigations, our facilities accommodate both small- and
                                large-molecule development while meeting global regulatory submission expectations.</p>
                            <a href="{{ route('contact') }}" class="customBtn01 customBtn01Small me-2  ">Explore Our
                                Facilities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection