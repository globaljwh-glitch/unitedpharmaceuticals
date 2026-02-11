@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/research-support-services-cro.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Research Support Services </h2>
                    <p class="mb-0">United Pharmaceuticals Inc. has been delivering comprehensive clinical research support
                        services to the global biopharmaceutical community. Our experienced, multidisciplinary teams are
                        equipped to design, coordinate, analyze, and report clinical studies conducted at our facilities or
                        in collaboration with external partners. Whether supporting an individual study or contributing to a
                        broader development program, our research support services are structured to seamlessly complement
                        your clinical strategy.
                    </p>
                    <a href="{{ route('contact') }}" class="customBtn01">Speak With Our Experts</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Advantages of Partnering with United Pharmaceuticals
                    </h2>
                    <p>As a full-service Contract Research Organization (CRO), United Pharmaceuticals Inc. offers end-to-end
                        oversight for early-phase through Phase Ib/IIa clinical trials. Our integrated model enables
                        efficient trial execution through a single strategic partner, reducing operational complexity while
                        maintaining scientific rigor.
                    </p>
                    <p>
                        Clients benefit from dedicated study leadership, customized service engagement, and a centralized
                        point of contact with the expertise to manage every phase of clinical development. This streamlined
                        approach ensures consistent communication, proactive risk management, and optimized timelines across
                        your clinical programs.

                    </p>
                    <div class="row">
                        <h3 class="mt-3">CRO Service Capabilities
                        </h3>
                        <div class="col-md-4">
                            <h4 class="mt-3">Clinical Operations & Trial Execution
                            </h4>
                            <ul class="listing01">
                                <li>Clinical Trial Site Identification and Feasibility Assessment
                                </li>
                                <li>Clinical Trial Study Start-Up and Regulatory Activation</li>
                                <li>Clinical Trial Site Management</li>

                                <li>Clinical Trial Monitoring</li>
                                <li>Project and Program Management
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mt-3">Data, Science & Regulatory Expertise
                            </h4>
                            <ul class="listing01">
                                <li>Biostatistics</li>
                                <li>Clinical Data Management</li>
                                <li>Scientific Strategy and Regulatory Affairs
                                </li>
                                <li>Medical Writing and Clinical Documentation</li>
                                <li>Program Management</li>
                                <li>Quality Assurance</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4 class="mt-3">Integrated Development Services</h4>
                            <ul class="listing01">
                                <li>Laboratory Sciences</li>
                                <li>Clinical Research Services</li>
                                <li>Manufacturing and Analytical Services</li>
                                <li>Nonclinical Research Services
                                </li>
                                <li>Quality Assurance and Compliance Oversight</li>

                            </ul>
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
                    <img src="{{ asset('images/research-facilities.jpg') }}" alt="Our Unique Approach"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Clinical Research Support Services</h2>
                            <p>The drug development environment continues to evolve rapidly, bringing increased scientific
                                expectations, operational demands, and regulatory scrutiny. At the same time, clinical
                                research programs face growing complexity across study design, execution, and compliance.
                                Our mission is to help you navigate these challenges while accelerating the safe and
                                efficient development of your therapeutic candidates.
                            </p>
                            <p>United Pharmaceuticals Inc. specializes in coordinating a broad portfolio of clinical
                                research support services with a focus on accountability, operational efficiency, and
                                seamless integration. By aligning expertise across disciplines, we minimize redundancies,
                                improve decision-making, and reduce the management burden for our partners.
                            </p>
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
                    <h2 class="text-center">CRO Services - FAQs</h2>
                    <div class="faq mt-4">
                        <div class="accordion accordion-faq" id="accordionfaqExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseOne" aria-expanded="false"
                                        aria-controls="faq-collapseOne">
                                        How do your research support services integrate with existing development programs?
                                    </button>
                                </h2>
                                <div id="faq-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingOne" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>Our services are designed to align smoothly with both standalone studies and
                                            broader clinical development programs. We work as an extension of your internal
                                            team, ensuring continuity, transparency, and efficient coordination across all
                                            stages of clinical research.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseTwo" aria-expanded="false"
                                        aria-controls="faq-collapseTwo">
                                        Can you support clinical studies conducted at third-party or external sites?

                                    </button>
                                </h2>
                                <div id="faq-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingTwo" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>Yes. We routinely support studies conducted at external clinical sites, academic
                                            centers, and partner facilities. Our teams collaborate closely with third-party
                                            vendors to maintain consistent oversight, data quality, and regulatory
                                            compliance throughout the study lifecycle.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseThree" aria-expanded="false"
                                        aria-controls="faq-collapseThree">
                                        What phases of clinical development do your CRO services cover?

                                    </button>
                                </h2>
                                <div id="faq-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingThree" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>Our CRO services primarily support early-phase through Phase Ib/IIa clinical
                                            development, with scalable capabilities that can be adapted to meet evolving
                                            program needs. This allows sponsors to engage our expertise for single studies
                                            or integrated development pathways.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapseFour" aria-expanded="false"
                                        aria-controls="faq-collapseFour">
                                        How does your integrated CRO model improve efficiency and timelines?

                                    </button>
                                </h2>
                                <div id="faq-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="faq-headingFour" data-bs-parent="#accordionfaqExample">
                                    <div class="accordion-body">
                                        <p>By combining clinical operations, regulatory expertise, laboratory sciences, and
                                            supporting infrastructure within a single organization, we reduce operational
                                            complexity and handoffs. This integrated approach enhances efficiency, improves
                                            accountability, and supports faster, well-controlled clinical development.
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