@extends('layout.app')

@section('content')


    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Manufacturing and Analytical Services
                    </h2>
                    <p class="mb-0">United Pharmaceuticals provides end-to-end contract development and manufacturing
                        services designed to simplify your drug advancement process. Our FDA-inspected facility includes
                        dedicated analytical labs, R&D formulation labs, multiple production suites, and cGMP warehousing,
                        all centralized on a single campus. Segregated Grade C cleanrooms allow for safe handling of APIs
                        and highly potent compounds from early development through commercial production. Engage with our
                        CDMO experts to discover how our manufacturing solutions can support your drug development
                        objectives.
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
                            <h2>Holistic Approach to Formulation and Production</h2>
                            <p>Our team delivers a full spectrum of services, combining drug formulation, scalable
                                manufacturing, and analytical testing for pharmaceutical and biotech programs. We are
                                experienced in producing a wide variety of dosage forms, including tablets, capsules,
                                over-encapsulated products, nanomilled suspensions, creams, gels, powders, and terminally
                                sterilized injectables. By integrating these capabilities, we reduce handoffs, improve
                                efficiency, and maintain consistent quality across every stage of development.
                            </p>
                            <!-- <p>Using advanced manufacturing processes, we have formulated, tested, and/or manufactured
                                                                                                                                                                                    nearly every currently available pharmaceutical dosage form on the market, including
                                                                                                                                                                                    tablets, liquid- and powder-filled capsules, over-encapsulated capsules, nanomilled
                                                                                                                                                                                    suspensions, creams, gels, powders, and terminally sterilized injectables.</p> -->
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
                    <h2>Comprehensive Drug Product Capabilities
                    </h2>
                    <p>Our contract manufacturing services include:</p>
                    <!-- <p>They include:</p> -->
                    <ul class="listing01">
                        <li>Development and manufacturing of drug substances from early prototypes to commercial scale
                        </li>
                        <li>Flexible production solutions optimized for cost and efficiency</li>
                        <li>In-house research and development and analytical testing to drive formulation success</li>
                        <li>In-house R&D and analytical support to guide formulation success</li>
                        <li>Storage, handling, release, and distribution for clinical and commercial products
                        </li>
                        <li>Full Phase I–III clinical supply capabilities
                        </li>
                        <li>DEA licensing for Schedule I–V products, including secure storage and pallet positions
                        </li>
                        <li>Environmental monitoring for temperature, humidity, and pressure</li>
                        <li>Primary, secondary, and clinical packaging services, including bottles and blister packs</li>
                        <li>Complete turnkey manufacturing solutions with dedicated client support and optional facility
                            expansion</li>
                        <li>Scalable pilot batches to support formulation optimization and process validation
                        </li>
                        <li>GMP-compliant cleaning and segregation protocols for high-potency compounds
                        </li>
                        <li>Customized labeling and serialization to meet regulatory requirements worldwide
                        </li>
                        <li>Real-time monitoring and reporting systems to ensure product quality throughout production</li>
                    </ul>
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
    </section>
    <section class="contentContainer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Analytical Testing & Quality Assurance</h2>
                    <p>United Pharmaceuticals’ analytical laboratories provide advanced testing solutions to ensure your
                        products meet global regulatory standards. We develop and validate analytical methods, perform
                        stability testing, and support raw material, in-process, and finished product testing. Our methods
                        are designed for reproducibility, robustness, and regulatory compliance.
                    </p>
                    <h3>Analytical services include:</h3>
                    <ul class="listing01">
                        <li>Method development and validation for APIs and finished products
                        </li>
                        <li>Cleaning validation to ensure equipment safety
                        </li>
                        <li>Stability testing under ICH-compliant conditions</li>
                        <li>Controlled substance testing with DEA approvals (Schedules I–V)
                        </li>
                        <li>Excipient and API characterization
                        </li>
                        <li>Verification against USP, EP, BP, and JP standards

                        </li>
                        <li>Techniques including HPLC, UPLC, GC, UV/VIS, FTIR, Karl Fischer moisture, TOC, viscosity,
                            particle sizing, melting point, and residue on ignition
                        </li>

                    </ul>
                </div>

                <!-- <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <h4 class="mt-4">Development and Validation of Critical Methodologies</h4>
                                                                                                    <ul class="listing01">
                                                                                                        <li>Cleaning methods for the detection of API on manufacturing equipment</li>
                                                                                                        <li>API methods for assay/related substance</li>
                                                                                                        <li>Finished dosage products (assay/degradation, dissolution)</li>
                                                                                                    </ul>
                                                                                                    <h4 class="mt-4">Stability Testing</h4>
                                                                                                    <ul class="listing01">
                                                                                                        <li>ICH environment stability chambers</li>
                                                                                                    </ul>
                                                                                                    <h4 class="mt-4">Controlled Substance Testing</h4>
                                                                                                    <ul class="listing01">
                                                                                                        <li>DEA Analytical License (Schedules I-V)</li>
                                                                                                    </ul>
                                                                                                    <h4 class="mt-4">Excipient and Active Pharmaceutical Ingredients (APIs)</h4>
                                                                                                    <ul class="listing01">
                                                                                                        <li>Compendial method verification and validation studies</li>
                                                                                                        <li>Monograph release testing per the USP, EP, BP, and JP</li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <h4 class="mt-4">ROUTES OF ADMINISTRATION</h4>
                                                                                                    <ul class="listing01">
                                                                                                        <li>High-performance liquid chromatography (HPLC) and ultra performance liquid chromatography
                                                                                                            (UPLC)</li>
                                                                                                        <li>Gas chromatography (GC)</li>
                                                                                                        <li>Dissolution and disintegration</li>
                                                                                                        <li>Moisture analysis (gravimetric and Karl Fischer [KF] titration)</li>
                                                                                                        <li>Melting point determination</li>
                                                                                                        <li>Residue on ignition</li>
                                                                                                        <li>Spectroscopy (ultraviolet/visible [UV/VIS] and infrared [FTIR])</li>
                                                                                                        <li>Total organic carbon (TOC)</li>
                                                                                                        <li>Viscosity</li>
                                                                                                        <li>Particle size analysis (HORIBA analyzer, AccuSizer® (USP<788>))</li>
                                                                                                    </ul>
                                                                                                </div>-->
            </div>



        </div>

        </div>
    </section>
    <section class="contentContainer greyBg ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <img src="{{ asset('images/research-facilities.jpg') }}" alt="Our Unique Approach"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Seamless Integration of CDMO and CRO Services
                            </h2>
                            <p>Our integrated model links formulation, analytical testing, preclinical evaluation, and
                                manufacturing, creating a seamless pathway from development to clinical trials. While safety
                                and preclinical studies are ongoing, we optimize scalable manufacturing processes and
                                document regulatory-ready protocols. This coordinated approach ensures timely IND
                                submissions, smooth clinical transitions, and accelerated development timelines.</p>
                            <p>Explore our fully equipped manufacturing and analytical campus, designed to support every
                                stage of your drug development program. From early formulation to commercial production, our
                                facilities maintain rigorous quality standards and regulatory compliance to ensure your
                                product’s success.
                            </p>
                            <a href="{{ route('contact') }}" class="customBtn01 customBtn01Small me-2  ">Explore Our
                                Facilities</a>
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
                    <h2 class="text-center">Pharmaceutical Contract Manufacturing - FAQs</h2>
                    <div class="faq mt-4">
                        <div class="accordion accordion-faq" id="accordionfaqExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseOne" aria-expanded="false"
                                        aria-controls="faq-collapseOne">
                                        Why should companies partner with a contract manufacturing organization?

                                    </button>
                                </h2>
                                <div id="faq-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingOne" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p> Partnering with a CDMO streamlines development, reduces operational complexity,
                                            and provides access to specialized expertise and advanced manufacturing
                                            capabilities. This accelerates product timelines and ensures regulatory
                                            compliance.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseTwo" aria-expanded="false"
                                        aria-controls="faq-collapseTwo">
                                        What is involved in pharmaceutical formulation development?
                                    </button>
                                </h2>
                                <div id="faq-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingTwo" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>Formulation development includes designing, testing, and optimizing drug products
                                            for safety, efficacy, and stability across dosage forms like tablets, capsules,
                                            liquids, and injectables. It ensures the product performs reliably in clinical
                                            and commercial use.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseThree" aria-expanded="false"
                                        aria-controls="faq-collapseThree">
                                        How does clinical supply manufacturing support drug trials?

                                    </button>
                                </h2>
                                <div id="faq-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingThree" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p> Clinical manufacturing provides trial-ready batches of investigational drugs,
                                            including packaging and labeling, ensuring consistent quality and regulatory
                                            compliance for Phase I–III studies.
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