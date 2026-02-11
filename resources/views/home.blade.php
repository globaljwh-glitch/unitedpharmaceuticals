@extends('layout.app')
@section ('content')

    <section class="mainBanner positionRelative">
        <div class="bannerContent">
            <h1>Welcome to <span>United Pharmaceuticals, INC.</span></h1>
            <p>At United Pharmaceuticals Inc., we specialize in contract manufacturing of top-quality pharmaceutical
                ingredients, excipients, machinery, equipment, and packaging materials to a global market.</p>
        </div>
        <div class="mainBannerBlockSlider">
            <div class="bannerImage">
                <img src="{{ asset('images/banner/banner-slider-01.jpg') }}" alt="" class="imgResponsive">
            </div>
            <div class="bannerImage">
                <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="" class="imgResponsive">
            </div>
            <div class="bannerImage">
                <img src="{{ asset('images/banner/banner-slider-03.jpg') }}" alt="" class="imgResponsive">
            </div>
            <div class="bannerImage">
                <img src="{{ asset('images/banner/banner-slider-04.jpg') }}" alt="" class="imgResponsive">
            </div>
        </div>
        <div class="mainBannerSliderPagination"></div>
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>ABOUT US</h2>
                    <p class="mb-0">With a robust distribution network, we proudly serve over 253 customers worldwide. Our
                        diverse portfolio includes Active Pharmaceutical Ingredients (APIs) such as anti-cancers,
                        MRI-enhancing agents, CNS agents, respiratory agents, vitamin D derivatives, anti-inflammatory and
                        analgesic agents, polymeric drugs, immunomodulators, steroids, and antibiotics. We also supply a
                        wide range of excipients, including additives, colors, sweeteners, preservatives, and fillers.
                        Committed to quality and safety, we adhere to rigorous standards, ensuring our products and services
                        meet the highest expectations. We aim to empower healthcare innovation and improve lives globally.
                    </p>
                    <a href="{{ route('about') }}" class="customBtn01">LEARN MORE</a>
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
                            <h2>Our Unique Approach</h2>
                            <p>At United Pharmaceuticals Inc., we design tailored development strategies supported by
                                real-time data, seamless communication channels, and cohesive project coordination. Our
                                integrated approach ensures faster progression toward product validation, combining
                                accuracy, efficiency, and transparency at every stage. With a focus on collaboration and
                                adaptability, we align our processes with your unique project goals. By uniting science,
                                technology, and expertise, we deliver reliable results that move your innovations from
                                concept to commercialization with confidence.</p>
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
                        <div class="ourPurposeContentBox order-sm-0 order-1">
                            <h2>OUR PURPOSE</h2>
                            <p>We strive to accelerate the creation of life-enhancing pharmaceutical solutions through
                                integrated development and manufacturing expertise. Our foundation is built on strong
                                values: quality in every detail, integrity in every action, respect in every partnership,
                                and a relentless pursuit of excellence. These principles guide us in delivering meaningful
                                outcomes with a human-centered approach.
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
                    <h2>Pharmaceutical Manufacturing</h2>
                    <p class="paddingLR75">We provide a complete range of research, development, processing, and
                        manufacturing solutions as a trusted Contract Development and Manufacturing Organization (CDMO),
                        dedicated to fulfilling the evolving needs of the pharmaceutical industry. Our services include
                        delivering premium-quality APIs and excipients, covering categories such as oncology drugs, CNS
                        therapeutics, and vitamin D derivatives.</p>
                </div>
            </div>
            <div class="infoBlockPharmaManufList">
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="infoBlockPharma d-flex align-items-stretch justify-content-start align-items-center bg-white">
                            <div class="d-flex"><img src="{{ asset('images/contract-manufacturing-services.jpg') }}" alt="">
                            </div>
                            <div class="infoBlockPosition infoBlockPositionRight d-flex align-items-center">
                                <div>
                                    <h4>Pharmaceutical CDMO and Contract Manufacturing Services</h4>
                                    <p>At United Pharmaceuticals Inc., we are committed to simplifying every phase of your
                                        drug development process through our integrated contract development and
                                        manufacturing services. Our FDA-inspected, top facility houses everything you need,
                                        from advanced R&D formulation and analytical laboratories to multiple manufacturing
                                        suites and a cGMP-certified warehouse, all located on a single campus. With
                                        dedicated Grade C cleanrooms for potent compound handling, we are fully equipped to
                                        manage APIs and highly potent APIs. Collaborate with our expert CDMO team to see how
                                        our end-to-end pharmaceutical manufacturing solutions can seamlessly align with your
                                        development goals.</p>
                                    <a href="{{ route('contact') }}" class="customBtn01 customBtn01Small me-2">Contact Our
                                        Expert</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div
                            class="infoBlockPharma d-flex align-items-stretch justify-content-start align-items-center bg-white">
                            <div class="order-md-1 order-0"><img src="{{ asset('images/our-pharmaceutical-cdmo.jpg') }}"
                                    alt=""></div>
                            <div
                                class="infoBlockPosition infoBlockPositionLeft order-md-0 order-1 d-flex align-items-center">
                                <div>
                                    <h4>Our Pharmaceutical CDMO Solutions</h4>
                                    <p>Our team provides comprehensive drug development, manufacturing, and analytical
                                        solutions for pharmaceutical and biotech companies around the world. Our
                                        capabilities span formulation development, Phase I through large-scale commercial
                                        manufacturing, and ICH-compliant stability storage and testing. We also specialize
                                        in analytical method development, qualification, and validation. Leveraging advanced
                                        and efficient manufacturing technologies, we have successfully developed, tested,
                                        and produced nearly every major pharmaceutical dosage form, including tablets,
                                        liquid- and powder-filled capsules, over-encapsulated formulations, nanomilled
                                        suspensions, creams, gels, powders, and terminally sterilized injectables.</p>
                                    <a href="{{ route('contact') }}" class="customBtn01 customBtn01Small">Contact Our
                                        Expert</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div
                            class="infoBlockPharma d-flex align-items-stretch justify-content-start align-items-center bg-white">
                            <div><img src="{{ asset('images/drug-product-manufacturing.jpg') }}" alt=""></div>
                            <div class="infoBlockPosition infoBlockPositionRight d-flex align-items-center">
                                <div>
                                    <h4>Drug Product Manufacturing</h4>
                                    <p class="highlightText">Our end-to-end pharmaceutical solutions cover the following
                                        areas:</p>
                                    <ul class="listing01">
                                        <li>Comprehensive manufacturing, storage, release, and distribution operations to
                                            ensure seamless product flow.</li>
                                        <li>Expertise in formulation development and drug substance production, from initial
                                            research to full commercialization.</li>
                                        <li>Ensuring strict environmental control and product stability.</li>
                                        <li>In-house R&D and analytical testing capabilities designed to enhance formulation
                                            efficiency and product success</li>
                                        <li>Continuous environmental monitoring with real-time temperature, humidity, and
                                            pressure alerts.</li>
                                    </ul>
                                    <a href="{{ route('contact') }}" class="customBtn01 customBtn01Small">Contact Our
                                        Expert</a>
                                </div>
                            </div>
                        </div>
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
                    <div class="col-md-12">
                        <div
                            class="infoBlockPharma d-flex align-items-stretch justify-content-start align-items-center bg-white">
                            <div class="order-md-1 order-0"><img src="{{ asset('images/analytical-lab-testing.jpg') }}"
                                    alt=""></div>
                            <div
                                class="infoBlockPosition infoBlockPositionLeft order-md-0 order-1 d-flex align-items-center">
                                <div>
                                    <h4>Analytical Lab and Testing</h4>
                                    <p>We offer comprehensive analytical and testing services to support every phase of your
                                        drug development process. Our expertise includes HPLC and UPLC method development
                                        and validation, along with raw material, in-process, finished product, and stability
                                        testing. We are committed to designing robust and reliable analytical procedures
                                        that ensure the highest quality standards for your products. Our analytical
                                        laboratory is fully equipped to perform a wide range of testing and validation
                                        activities, including the development of critical analytical methodologies, cleaning
                                        verification methods for detecting active pharmaceutical ingredients on
                                        manufacturing equipment, and assay or related substance testing for APIs.</p>
                                    <a href="{{ route('contact') }}" class="customBtn01 customBtn01Small">Contact Our
                                        Expert</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div
                            class="infoBlockPharma d-flex align-items-stretch justify-content-start align-items-center bg-white">
                            <div><img src="{{ asset('images/integrated-cro-cdmo-services.jpg') }}" alt=""></div>
                            <div class="infoBlockPosition infoBlockPositionRight d-flex align-items-center">
                                <div>
                                    <h4>Integrated CRO/CDMO Services for Rigorous and Faster Drug Development</h4>
                                    <p>We accelerate your drug development process through fully integrated CRO/CDMO
                                        services, all managed within a single, coordinated system. After formulation, our
                                        preclinical experts assess the safety profile while our manufacturing team develops
                                        a scalable and reproducible process using defined parameters and suitable equipment.
                                        Once safety testing is complete, our regulatory specialists compile the necessary
                                        data and documentation to support your Investigational New Drug (IND) submission. If
                                        clinical results are successful, we scale up and optimize manufacturing. With a
                                        holistic view of your program, we anticipate challenges, minimize risks, shorten
                                        timelines, and reduce overall development costs.</p>
                                    <a href="{{ route('contact') }}" class="customBtn01 customBtn01Small">Contact Our
                                        Expert</a>
                                </div>
                            </div>
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
                    <div class="text-center">
                        <h2>Countries We Serve</h2>
                        <p>We proudly serve over 1,000 customers in multiple countries through our international
                            distribution network.</p>
                    </div>
                    <div class="mapSection">
                        <div class="row">
                            <div class="col-lg-6 mapBg flexCol p-0"><img src="{{ asset('images/ufc-map.png') }}" alt=""
                                    class="imgResponsive"></div>
                            <div class="col-lg-6 flexCol">
                                <ul class="countryListWedoBussiness">
                                    <li>USA</li>
                                    <li>Argentina</li>
                                    <li>Australia</li>
                                    <li>Belgium</li>
                                    <li>Brazil</li>
                                    <li>Cambodia</li>
                                    <li>Canada</li>
                                    <li>Chile</li>
                                    <li>China</li>
                                    <li>Colombia</li>
                                    <li>Czech Republic</li>
                                    <li>Egypt</li>
                                    <li>Estonia</li>
                                    <li>France</li>
                                    <li>French Guiana</li>
                                    <li>Germany</li>
                                    <li>Guyana</li>
                                    <li>Hong Kong</li>
                                    <li>India</li>
                                    <li>Indonesia</li>
                                    <li>Israel</li>
                                    <li>Italy</li>
                                    <li>Japan</li>
                                    <li>Malaysia</li>
                                    <li>Mexico</li>
                                    <li>Myanmar</li>
                                    <li>Netherlands</li>
                                    <li>New Zealand</li>
                                    <li>Norway</li>
                                    <li>Pakistan</li>
                                    <li>Peru</li>
                                    <li>Philippines</li>
                                    <li>Russia</li>
                                    <li>Saudi Arabia</li>
                                    <li>Singapore</li>
                                    <li>South Africa</li>
                                    <li>South Korea</li>
                                    <li>Spain</li>
                                    <li>Swiss</li>
                                    <li>Taiwan of China</li>
                                    <li>Thailand</li>
                                    <li>Turkey</li>
                                    <li>UAE</li>
                                    <li>UK</li>
                                    <li>Ukraine</li>
                                    <li>Uruguay</li>
                                    <li>Venezuela</li>
                                    <li>Vietnam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="contentContainer signUpNewsletterBlock text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Sign up for exclusive content</h2>
                                    <p>Join our list of 30,000+ VIP members and have access to our exclusive content.</p>
                                    <div class="signUpNewsletter">
                                        <form>
                                            <input type="text" value="" placeholder="Enter your email address here">
                                            <input type="submit" value="Subscribe Now!" class="btn customBtn01" name="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->

@endsection