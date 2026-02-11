@extends('layout.app')
@section ('content')
    <style>
        .tabContentBlock {
            padding: 15px 10px;
        }

        .tabContentBlock h3 {
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .tabContentBlock .lead {
            font-size: 1.05rem;
            color: #333;
        }

        .listStyled {
            padding-left: 18px;
        }

        .listStyled li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 15px;
        }

        .listStyled li::before {
            /* content: "•"; */
            position: absolute;
            left: 0;
            /* color: #0d6efd; */
            font-weight: bold;
        }
    </style>
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>

    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Targeted Therapeutic Disciplines in Drug Discovery and Development
                    </h2>
                    <p class="mb-0">
                        Our deep knowledge across diverse treatment fields within early and late-stage research allows us to
                        advance your compound efficiently, whether via early, late, or bioanalytical support solutions. As
                        an integrated development pathway or an independent engagement, we embed therapeutic understanding
                        into every activity we deliver. We guide the smooth progression of your compound across all stages
                        of development within each of our therapeutic focus areas, enabling you to reach patients sooner and
                        smarter.

                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-11 m-auto">
                    <div class="therapeuticAreas">
                        <div class="d-flex align-items-start">

                            <!-- LEFT TABS -->
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist">

                                <button class="nav-link active" data-bs-toggle="pill"
                                    data-bs-target="#pane-cardiology">Cardiology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-dermatology">Dermatology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-gastroenterology">Gastroenterology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-hematology">Hematology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-immunology">Immunology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-infectious-diseases">Infectious Diseases</button>
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pane-cns-neurology">CNS /
                                    Neurology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-oncology">Oncology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-metabolism-and-endocrinology">Metabolism & Endocrinology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-ophthalmology">Ophthalmology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-orthopedics">Orthopedics</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-psychiatry">Psychiatry</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-respirology">Respirology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-rheumatology">Rheumatology</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-substance-abuse">Substance Abuse</button>
                                <button class="nav-link" data-bs-toggle="pill"
                                    data-bs-target="#pane-urology">Urology</button>
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pane-womens-health">Women’s
                                    Health</button>

                            </div>

                            <!-- RIGHT CONTENT -->
                            <div class="tab-content flex-grow-1">

                                <div class="tab-pane fade show active" id="pane-cardiology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Cardiology</h3>

                                        <p class="lead">
                                            At <strong>United Pharmaceuticals Inc.</strong>, we support the cardiology
                                            sector through reliable contract
                                            manufacturing of high-quality pharmaceutical ingredients, excipients, machinery,
                                            equipment, and packaging
                                            materials used in cardiovascular healthcare products.
                                        </p>

                                        <p>
                                            Our focus is on delivering consistent quality, regulatory compliance, and
                                            scalable manufacturing solutions
                                            to meet the growing global demand for cardiology formulations. With
                                            cardiovascular diseases remaining a
                                            leading global health challenge, we are committed to enabling safe, effective,
                                            and accessible cardiology
                                            products through precision-driven manufacturing and supply expertise.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Serving Global Cardiology Markets with Confidence
                                            </h5>

                                            <p>
                                                We partner with pharmaceutical companies to manufacture materials that play
                                                a critical role in the
                                                development and commercialization of cardiology medicines. Our capabilities
                                                are designed to support a
                                                wide range of cardiovascular therapeutic needs, including:
                                            </p>

                                            <ul class="listStyled">
                                                <li>Hypertension and blood pressure management products</li>
                                                <li>Cardiac rhythm and heart rate control formulations</li>
                                                <li>Cholesterol and lipid-lowering therapies</li>
                                                <li>Heart failure and vascular health medications</li>
                                            </ul>

                                            <p class="mt-3">
                                                Our contract manufacturing solutions are tailored to align with each
                                                client’s formulation requirements,
                                                scale, and long-term market strategy.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-dermatology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Dermatology</h3>

                                        <p class="lead">
                                            <strong>United Pharmaceuticals</strong> specializes in the production and supply
                                            of pharmaceutical-grade
                                            ingredients and excipients suitable for dermatology formulations, including
                                            creams, gels, ointments,
                                            lotions, and other topical or transdermal systems. Our services help ensure
                                            product safety, performance,
                                            and patient acceptance.
                                        </p>

                                        <p>
                                            With increasing demand for safe and effective skin therapies, we are committed
                                            to supplying materials that
                                            meet stringent quality, safety, and regulatory expectations across topical and
                                            systemic dermatology
                                            applications.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Why dermatology partners choose us:</h5>

                                            <ul class="listStyled">
                                                <li>GMP-compliant production of dermatology-grade materials</li>
                                                <li>Consistent quality for topical and dermatological applications</li>
                                                <li>Excipients designed for stability, absorption, and skin compatibility
                                                </li>
                                                <li>Full documentation and traceability for regulatory compliance</li>
                                            </ul>

                                            <p class="mt-3">
                                                We play a vital role in enabling dermatology innovation by supplying the
                                                materials that form the foundation
                                                of effective skin therapies. Our manufacturing capabilities help
                                                pharmaceutical companies bring
                                                dermatology products to market with confidence, efficiency, and long-term
                                                sustainability.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-gastroenterology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Gastroenterology</h3>

                                        <p class="lead">
                                            <strong>United Pharmaceuticals Inc.</strong> focuses on gastroenterology-related
                                            manufacturing services
                                            designed to support a wide range of formulations used in digestive health and
                                            gastrointestinal-related
                                            conditions. We work closely with partners to ensure materials are suitable for
                                            complex gastrointestinal
                                            environments and diverse dosage forms.
                                        </p>

                                        <p>
                                            Our focus is on enabling safe, effective, and scalable production of products
                                            designed to act within the
                                            digestive system or systemically through GI delivery.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Applications include products developed for:</h5>

                                            <ul class="listStyled">
                                                <li>Inflammatory and functional GI disorders</li>
                                                <li>Acid-related and gastric pH–sensitive therapies</li>
                                                <li>Intestinal and colorectal health products</li>
                                                <li>Localized and systemically absorbed GI medications</li>
                                            </ul>

                                            <p class="mt-3">
                                                Each solution is tailored to formulation behavior, stability requirements,
                                                and intended route of
                                                administration. Our integrated manufacturing approach helps partners reduce
                                                sourcing complexity while
                                                maintaining high quality and operational reliability.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-hematology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Hematology</h3>

                                        <p class="lead">
                                            <strong>United Pharmaceuticals Inc.</strong> helps pharmaceutical companies
                                            produce high-quality hematology
                                            products that meet strict safety, performance, and regulatory requirements
                                            across global markets. With
                                            blood disorders requiring high levels of accuracy and consistency, our
                                            manufacturing processes are
                                            designed to support therapies where quality cannot be compromised.
                                        </p>

                                        <p>
                                            Hematology products often demand complex formulation behavior and strict control
                                            of material
                                            characteristics. <strong>United Pharmaceuticals</strong> works closely with
                                            partners to manufacture
                                            materials suitable for a wide range of hematology-focused products, supporting
                                            both early-stage and
                                            commercial manufacturing needs.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Our capabilities extend to products used in:</h5>

                                            <ul class="listStyled">
                                                <li>Coagulation and thrombosis-related therapies</li>
                                                <li>Hematological malignancy treatments</li>
                                                <li>Immune and complement system–related applications</li>
                                                <li>Blood disorder management and supportive care</li>
                                            </ul>

                                            <p class="mt-3">
                                                Each manufacturing program is customized based on formulation sensitivity,
                                                dosage form, and end-use
                                                requirements.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-immunology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Immunology</h3>

                                        <p class="lead">
                                            <strong>United Pharmaceuticals</strong> works with partners to manufacture
                                            materials suitable for a wide
                                            range of immune-focused therapies, supporting both innovation and scalability.
                                            We manufacture
                                            pharmaceutical-grade ingredients and excipients designed for immunology
                                            formulations where stability,
                                            reproducibility, and purity are essential.
                                        </p>

                                        <p>
                                            Our materials are produced under strict quality systems to support consistent
                                            performance across sensitive
                                            immune-related applications. Each manufacturing program is tailored to the
                                            specific molecular profile,
                                            formulation complexity, and intended market.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Our immunology manufacturing capabilities support
                                                products used in:</h5>

                                            <ul class="listStyled">
                                                <li>Autoimmune and inflammatory conditions</li>
                                                <li>Immune modulation and suppression therapies</li>
                                                <li>Allergy and hypersensitivity treatments</li>
                                                <li>Immuno-oncology and supportive immune care</li>
                                            </ul>

                                            <p class="mt-3">
                                                Through technical expertise and a global manufacturing mindset, we
                                                contribute to the advancement of
                                                immunology care worldwide.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-infectious-diseases">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Infectious Diseases</h3>

                                        <p class="lead">
                                            <strong>United Pharmaceuticals Inc.</strong> has deep knowledge of regulatory
                                            frameworks governing vaccine
                                            authorization and strong operational readiness. We are well-positioned to
                                            accelerate the development of
                                            novel vaccines and delivery technologies. Supported by access to extensive
                                            participant pools, our teams
                                            have contributed to vaccine programs targeting a broad range of infectious
                                            conditions, including:
                                        </p>

                                        <ul class="listStyled">
                                            <li>Seasonal influenza</li>
                                            <li>Pandemic influenza</li>
                                            <li>Norovirus</li>
                                            <li>Hepatitis B</li>
                                            <li>Human papillomavirus (HPV)</li>
                                            <li>Herpes simplex virus (HSV)</li>
                                        </ul>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Pharmaceutical Ingredients for Anti-Infectives
                                            </h5>

                                            <p>
                                                We manufacture and supply pharmaceutical-grade ingredients and excipients
                                                used in infectious disease
                                                treatments and vaccine formulations. These materials are produced under
                                                stringent quality systems to
                                                ensure suitability for sensitive biological and chemical applications.
                                            </p>

                                            <ul class="listStyled">
                                                <li>Vaccine formulations requiring high purity and consistency</li>
                                                <li>Antiviral, antibacterial, antifungal, and antiparasitic products</li>
                                                <li>Stability-sensitive formulations and delivery systems</li>
                                                <li>Products requiring controlled interaction with the immune system</li>
                                            </ul>

                                            <p>
                                                All materials are manufactured with full traceability and documentation to
                                                support global regulatory
                                                submissions.
                                            </p>
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Global Supply Capabilities for Infectious Disease
                                                Programs</h5>

                                            <p>
                                                We operate with a strong international supply network, enabling reliable
                                                delivery of pharmaceutical
                                                materials for infectious disease and vaccine programs worldwide. Our
                                                integrated manufacturing and
                                                supply model helps partners reduce complexity while maintaining consistent
                                                quality across regions.
                                            </p>

                                            <ul class="listStyled">
                                                <li>Centralized sourcing of ingredients, equipment, and packaging</li>
                                                <li>Strong quality management and compliance systems</li>
                                                <li>Reliable supply for large-scale immunization and treatment programs</li>
                                                <li>Support for global distribution and market expansion</li>
                                            </ul>

                                            <p>
                                                Packaging formats are selected to meet both regulatory and logistical
                                                requirements across global markets.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-cns-neurology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">CNS / Neurology</h3>

                                        <p class="lead">
                                            <strong>United Pharmaceuticals Inc.</strong> considers neurology a core
                                            therapeutic focus supported by deep
                                            scientific knowledge and strong technical infrastructure. Our teams have
                                            extensive experience contributing
                                            to a wide range of neurology-focused programs across both nonclinical and
                                            clinical stages, while also
                                            supporting formulation development, pharmaceutical manufacturing, and analytical
                                            testing activities
                                            required for central nervous system products.
                                        </p>

                                        <p>
                                            We work with both small- and large-molecule neurology therapies, providing
                                            integrated support that spans
                                            early formulation design through scalable manufacturing solutions. Our
                                            capabilities are designed to help
                                            sponsors navigate the complexity of CNS development while maintaining product
                                            quality, regulatory
                                            compliance, and operational efficiency.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Our CNS development support includes:</h5>

                                            <ul class="listStyled">
                                                <li>Formulation and excipient support for CNS drug candidates</li>
                                                <li>Manufacturing of pharmaceutical-grade materials for neurological
                                                    therapies</li>
                                                <li>Analytical testing and stability studies for CNS products</li>
                                                <li>Integrated nonclinical and clinical program support</li>
                                            </ul>

                                            <p class="mt-3">
                                                By partnering with <strong>United Pharmaceuticals</strong> as a single,
                                                end-to-end provider, companies
                                                can streamline their neurology development pathways and significantly reduce
                                                timelines by minimizing
                                                handoffs between vendors. This integrated approach enables faster
                                                progression from concept to
                                                commercialization while ensuring consistent quality and regulatory
                                                readiness.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-oncology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Oncology</h3>

                                        <p class="lead">
                                            <strong>United Pharmaceuticals Inc.</strong> supports oncology development
                                            through specialized scientific
                                            and manufacturing capabilities built to address the complexity of modern cancer
                                            therapies. Our experience
                                            enables oncology compounds to progress efficiently toward clinical readiness
                                            while meeting strict quality
                                            and regulatory expectations.
                                        </p>

                                        <p>
                                            Our integrated approach combines formulation expertise, manufacturing readiness,
                                            and quality-driven
                                            processes to support oncology programs from early development onward. We focus
                                            on ensuring that oncology
                                            products are developed within controlled systems that prioritize patient safety,
                                            product integrity, and
                                            regulatory compliance.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Our oncology support capabilities include:</h5>

                                            <ul class="listStyled">
                                                <li>Support for targeted and non-cytotoxic oncology therapies</li>
                                                <li>Oncology-specific formulation development</li>
                                                <li>Manufacturing readiness for early clinical programs</li>
                                                <li>Scalable and quality-driven production processes</li>
                                                <li>Analytical testing and compliance-focused support</li>
                                            </ul>

                                            <p class="mt-3">
                                                By partnering with <strong>United Pharmaceuticals</strong>, companies can
                                                streamline oncology
                                                development and reduce operational complexity. Our integrated manufacturing
                                                and supply approach helps
                                                accelerate the transition from development to commercialization while
                                                maintaining consistency,
                                                reliability, and regulatory readiness across all stages of the product
                                                lifecycle.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-metabolism-and-endocrinology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Metabolism & Endocrinology</h3>

                                        <p class="lead">
                                            <strong>United Pharmaceuticals Inc.</strong> goes beyond standard clinical
                                            chemistry and lipid profiling
                                            typically used in metabolic and endocrine research. Our nonclinical capabilities
                                            include advanced metabolic
                                            assays that provide deeper insight into endocrine function, such as glycated
                                            hemoglobin (A1C) testing and
                                            specialized metabolic evaluations like glucose tolerance studies to better
                                            characterize compound performance
                                            in this therapeutic area.
                                        </p>

                                        <p>
                                            Within the clinical setting, we bring extensive experience supporting
                                            early-phase programs for metabolic
                                            therapies. Our work includes numerous initial-stage studies involving
                                            glucose-lowering and insulin-modulating
                                            treatments across diverse patient populations, including individuals with Type I
                                            and Type II diabetes,
                                            obesity, metabolic syndrome, and non-alcoholic steatohepatitis (NASH).
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Advanced metabolic research capabilities include:
                                            </h5>

                                            <ul class="listStyled">
                                                <li>Glycated hemoglobin (A1C) analysis and endocrine biomarkers</li>
                                                <li>Glucose tolerance and metabolic response studies</li>
                                                <li>Early-phase clinical programs for metabolic drug candidates</li>
                                                <li>Insulin modulation and glucose regulation assessments</li>
                                            </ul>

                                            <p class="mt-3">
                                                These programs have encompassed a broad range of proof-of-concept
                                                investigations focused on assessing
                                                glucose regulation through multiple methodologies. Advanced glucose clamp
                                                techniques are employed using
                                                high-precision analytical systems such as the <strong>YSI-2900</strong>,
                                                enabling rapid and accurate
                                                processing of multiple glucose samples within a single analytical run.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-ophthalmology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Ophthalmology</h3>

                                        <p class="lead">
                                            <strong>United Pharmaceuticals Inc.</strong> supports ophthalmology-focused
                                            programs through specialized
                                            manufacturing and technical capabilities designed for the unique requirements of
                                            ocular therapies. Our
                                            experience helps ophthalmic products advance efficiently while maintaining
                                            strict standards for quality,
                                            safety, and regulatory compliance.
                                        </p>

                                        <p>
                                            Our end-to-end development model allows ophthalmology programs to progress
                                            seamlessly from early formulation
                                            concepts through scalable manufacturing stages. We ensure that ophthalmic
                                            products are developed under
                                            controlled systems that support sterility, stability, and consistent
                                            performance.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Our ophthalmology support capabilities include:
                                            </h5>

                                            <ul class="listStyled">
                                                <li>Manufacturing support for ocular and ophthalmic therapies</li>
                                                <li>Formulation development for eye-specific dosage forms</li>
                                                <li>Readiness for preclinical and early clinical programs</li>
                                                <li>Precision-driven and scalable production processes</li>
                                                <li>Quality and compliance systems aligned with global regulatory markets
                                                </li>
                                            </ul>

                                            <p class="mt-3">
                                                By working with <strong>United Pharmaceuticals</strong> as a single,
                                                integrated manufacturing and supply
                                                partner, companies can simplify ophthalmology development pathways. Our
                                                coordinated approach reduces
                                                handoffs, improves efficiency, and supports a smoother transition from
                                                development to commercialization
                                                of ophthalmic products.
                                            </p>

                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-orthopedics">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Orthopedics</h3>

                                        <p class="lead">
                                            At <strong>United Pharmaceuticals Inc.</strong>, we support orthopedic and
                                            musculoskeletal development programs with specialized capabilities that help
                                            advance therapies targeting bone, joint, and connective tissue disorders. Our
                                            experience spans early development stages, enabling efficient progression while
                                            maintaining scientific rigor and regulatory readiness.
                                        </p>

                                        <p>
                                            Our integrated development approach supports a smooth transition from
                                            preclinical evaluation to early clinical validation.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Our orthopedic development capabilities include:
                                            </h5>

                                            <ul class="listStyled">
                                                <li>Support for musculoskeletal and orthopedic therapies</li>
                                                <li>Preclinical and early clinical program readiness</li>
                                                <li>Functional mobility and performance assessments</li>
                                                <li>Imaging support across multiple modalities</li>
                                                <li>Inflammatory and musculoskeletal biomarker analysis</li>
                                            </ul>

                                            <p class="mt-3">
                                                By partnering with <strong>United Pharmaceuticals Inc.</strong>, orthopedic
                                                programs benefit from a coordinated development model that reduces
                                                complexity and accelerates decision-making. Our streamlined processes help
                                                move musculoskeletal therapies forward with confidence from early research
                                                through proof-of-concept milestones.
                                            </p>

                                            <p>
                                                Support ophthalmic products with specialized manufacturing processes
                                                designed for regulatory acceptance.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-psychiatry">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Psychiatry</h3>

                                        <p class="lead">
                                            Psychiatric drug development demands a careful balance of safety evaluation,
                                            behavioral insight, and early clinical readiness. <strong>United Pharmaceuticals
                                                Inc.</strong> provides focused development support for compounds intended to
                                            address psychiatric and neurobehavioral conditions, helping sponsors move
                                            confidently through early stages of evaluation and validation.
                                        </p>

                                        <p>
                                            This therapeutic area is supported through a development framework designed to
                                            manage complexity while maintaining scientific and regulatory rigor.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Our psychiatry support capabilities include:</h5>

                                            <ul class="listStyled">
                                                <li>Development support for psychiatric and neurobehavioral therapies</li>
                                                <li>Safety and tolerability readiness across early phases</li>
                                                <li>Behavioral and functional assessment alignment</li>
                                                <li>Clinical supply and manufacturing coordination</li>
                                                <li>Quality-driven, compliance-focused development processes</li>
                                            </ul>

                                            <p class="mt-3">
                                                Through collaboration with <strong>United Pharmaceuticals Inc.</strong>,
                                                psychiatric programs gain access to an integrated development approach that
                                                minimizes fragmentation and supports efficient progression. Our teams remain
                                                closely aligned with program objectives to ensure continuity as compounds
                                                advance through critical milestones.
                                            </p>

                                            <p>
                                                Facilitate psychiatric therapies with compliant manufacturing solutions
                                                prepared for global markets.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-respirology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Respirology</h3>

                                        <p class="lead">
                                            Respiratory and pulmonary therapies demand manufacturing precision,
                                            contamination control, and strict adherence to regulatory standards. At
                                            <strong>United Pharmaceuticals Inc.</strong>, we support the production of
                                            respiratory products intended for both locally acting and systemically delivered
                                            therapies, with a focus on quality consistency and global regulatory compliance.
                                        </p>

                                        <p>
                                            Manufacturing support for pulmonary products is structured to address
                                            specialized formulation requirements, device compatibility, and tightly
                                            controlled processing environments essential for respiratory applications.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Manufacturing and quality capabilities include:
                                            </h5>

                                            <ul class="listStyled">
                                                <li>Controlled handling of materials intended for pulmonary and inhalation
                                                    use</li>
                                                <li>Support for formulations designed for local or systemic respiratory
                                                    delivery</li>
                                                <li>Manufacturing environments are designed to minimize cross-contamination
                                                    risks</li>
                                                <li>Process controls that help ensure dose uniformity for device-dependent
                                                    products</li>
                                                <li>Quality systems aligned with international regulatory expectations for
                                                    respiratory therapies</li>
                                            </ul>

                                            <p class="mt-3">
                                                Advance respiratory product manufacturing with <strong>United
                                                    Pharmaceuticals Inc.</strong> through compliant, scalable solutions
                                                designed to support regulatory confidence and long-term supply reliability.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-rheumatology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Rheumatology</h3>

                                        <p class="lead">
                                            Therapies addressing inflammatory and autoimmune disorders demand a high level
                                            of control across pharmaceutical sourcing and manufacturing. Consistency of
                                            materials, robust process validation, and adherence to regulatory expectations
                                            are essential to supporting products intended for long-term and often systemic
                                            use.
                                        </p>

                                        <p>
                                            <strong>United Pharmaceuticals Inc.</strong> supports rheumatology-focused
                                            programs through the supply of critical pharmaceutical inputs and the operation
                                            of controlled manufacturing systems designed for regulated markets. Emphasis is
                                            placed on traceability, batch-to-batch reliability, and documentation practices
                                            aligned with global compliance frameworks.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Manufacturing operations and capabilities include:
                                            </h5>

                                            <ul class="listStyled">
                                                <li>Support for immune-modulating products</li>
                                                <li>Traceable and consistent pharmaceutical inputs</li>
                                                <li>Robust process validation and batch-to-batch reliability</li>
                                                <li>Quality oversight ensuring stability and scalability</li>
                                                <li>Lifecycle management from early supply through ongoing commercial
                                                    production</li>
                                            </ul>

                                            <p class="mt-3">
                                                Advance rheumatology manufacturing through disciplined processes built to
                                                maintain product integrity, regulatory confidence, and continuity of supply
                                                across international markets.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-substance-abuse">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Substance Abuse</h3>

                                        <p class="lead">
                                            Products intended for the treatment of substance use disorders operate under
                                            heightened regulatory control and strict manufacturing expectations. At
                                            <strong>United Pharmaceuticals Inc.</strong>, operations in this area are
                                            structured around secure material handling, controlled processing environments,
                                            and documentation practices that support regulatory compliance across global
                                            markets.
                                        </p>

                                        <p>
                                            Manufacturing support extends across multiple dosage forms and delivery
                                            approaches, with systems designed to maintain consistency, traceability, and
                                            audit readiness throughout the product lifecycle.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Key manufacturing and compliance elements include:
                                            </h5>

                                            <ul class="listStyled">
                                                <li>Controlled handling of regulated pharmaceutical substances</li>
                                                <li>Support for oral, injectable, and implant-based products</li>
                                                <li>Quality systems emphasizing traceability and documentation</li>
                                                <li>Process controls aligned with enhanced regulatory oversight</li>
                                                <li>Infrastructure suited for sensitive product categories</li>
                                            </ul>

                                            <p class="mt-3">
                                                Advance substance abuse–related manufacturing through disciplined processes
                                                designed to sustain compliance, product integrity, and secure global supply.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-urology">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Urology</h3>

                                        <p class="lead">
                                            Urology-related products often involve long-term administration, sensitive
                                            indications, and strict quality requirements. At <strong>United Pharmaceuticals
                                                Inc.</strong>, support in this area focuses on the reliable supply of
                                            pharmaceutical substances and formulation components, along with controlled
                                            manufacturing processes designed to meet regulatory expectations.
                                        </p>

                                        <p>
                                            Manufacturing operations are structured to support a range of dosage forms
                                            commonly used in urology, with emphasis on material consistency, process
                                            validation, and documentation suitable for regulatory review.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Manufacturing and quality support includes:</h5>

                                            <ul class="listStyled">
                                                <li>Supply of pharmaceutical substances and formulation components</li>
                                                <li>Manufacturing support for oral, injectable, and specialty dosage forms
                                                </li>
                                                <li>Process controls supporting dose consistency and stability</li>
                                                <li>Quality systems aligned with regulatory documentation requirements</li>
                                                <li>Structured oversight for products intended for chronic use</li>
                                            </ul>

                                            <p class="mt-3">
                                                Advance urology manufacturing through disciplined production practices that
                                                support product integrity, compliance, and consistent performance.
                                            </p>
                                        </div>

                                    </div>
                                </div>


                                <div class="tab-pane fade" id="pane-womens-health">
                                    <div class="tabContentBlock">

                                        <h3 class="mb-3">Women’s Health</h3>

                                        <p class="lead">
                                            Products designed for women’s health often require specialized formulation
                                            approaches, sensitive handling, and heightened regulatory oversight due to
                                            long-term use and hormone-related considerations. At <strong>United
                                                Pharmaceuticals Inc.</strong>, support in this area focuses on the supply of
                                            pharmaceutical substances and formulation components, alongside controlled
                                            manufacturing processes structured to meet regulatory expectations for women’s
                                            health applications.
                                        </p>

                                        <p>
                                            Manufacturing operations are designed to accommodate diverse administration
                                            routes commonly associated with women’s health products, with emphasis on
                                            material consistency, validated processes, and documentation suitable for
                                            regulatory review and lifecycle management.
                                        </p>

                                        <div class="mt-4">
                                            <h5 class="text-primary mb-3">Manufacturing Capabilities for Women’s Health
                                                Include:</h5>

                                            <ul class="listStyled">
                                                <li>Supply of pharmaceutical substances and formulation components</li>
                                                <li>Support for oral, vaginal, transdermal, and implant-based dosage forms
                                                </li>
                                                <li>Manufacturing processes suited for hormone-based and specialty
                                                    formulations</li>
                                                <li>Quality systems supporting traceability, stability, and change control
                                                </li>
                                                <li>Documentation practices aligned with regulatory submission requirements
                                                </li>
                                            </ul>

                                            <p class="mt-3">
                                                Manufacturing solutions are structured to support reliability, regulatory
                                                confidence, and sustained product integrity across the full lifecycle of
                                                women’s health products. Advance women’s health manufacturing through
                                                disciplined production practices designed to maintain quality, compliance,
                                                and long-term formulation performance.
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
    <script>
        function activateTabFromHash() {

            let hash = window.location.hash;
            if (!hash) return;

            let paneId = "pane-" + hash.replace("#", "");
            let pane = document.getElementById(paneId);
            if (!pane) return;

            // reset
            document.querySelectorAll('.nav-link').forEach(el => {
                el.classList.remove('active');
            });
            document.querySelectorAll('.tab-pane').forEach(el => {
                el.classList.remove('show', 'active');
            });

            // activate
            let trigger = document.querySelector('[data-bs-target="#' + paneId + '"]');
            trigger.classList.add('active');
            pane.classList.add('show', 'active');

            pane.scrollIntoView({ behavior: "smooth", block: "start" });
        }

        // on first load
        document.addEventListener("DOMContentLoaded", activateTabFromHash);

        // on every hash change
        window.addEventListener("hashchange", activateTabFromHash);
    </script>
@endsection