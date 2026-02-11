@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>Highly Potent API (HPAPI) Handling</h2>
                    <p class="mb-0">Oncology research, cancer treatments, and other targeted therapies, have made highly
                        potent active pharmaceutical ingredients (HPAPIs) a rapidly growing segment in the pharmaceutical
                        industry worldwide. There are currently thousands of HPAPIs in development that promise lower dose
                        requirements and/or fewer side effects. Handling of these compounds requires expertise and
                        specialized equipment to take them from formulation to manufacturing for clinical supply and
                        eventually, to market.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Expertise</h2>
                    <p>We have decades of experience formulating, developing, and manufacturing drug products containing
                        HPAPIs, within our facility’s high-potency/Grade C and D manufacturing and handling areas. Our
                        highly trained experts have handled countless projects, including analytical testing and method
                        development, qualification, and validation. We provide cost-effective process scale-up for your
                        projects, from prototype formulations to commercial scale batches, using a range of formulation
                        techniques and dosage forms, including microparticle formulations and nanomilling.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Speak With Our Experts</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>API Classification</h2>
                    <p>New APIs undergo robust evaluation to determine their classification level for safe handling
                        procedures and clearance limits. Performance-based exposure control limit (PB-ECL) is then used to
                        correctly classify the compound (Class 1 to Class 4).</p><br>
                    <div class="col-md-12 d-flex">
                        <img src="{{ asset('images/Graph_Potent-Compound-Classification.png') }}" alt=""
                            class="imgResponsive thumbImageLeft">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><sub>c</sub>GMP Facility</h2>
                    <p>Our 64,000-square-foot cGMP facility is designed and equipped to meet the challenges associated with
                        the complex handling of HPAPIs and other controlled substances with high toxicity levels, including:
                    </p>
                    <ul class="listing01">
                        <li>Dedicated high-potency/Grade C and D manufacturing and handling areas</li>
                        <li>Registrations and licenses: FDA drug establishment registration, manufacturer DEA license
                            (Schedules I-V and List 1), FDA food facility registration</li>
                        <li>State-of-the-art equipment used for HPAPI handling and manufacturing , including:</li>
                        <p>- Kettles</p>
                        <p>- Mills</p>
                        <p>- Peristalic pumps</p>
                        <p>- Heater/chillers</p>
                        <p>- Vibroscreens</p>
                        <p>- Vial crimpers</p>
                    </ul>
                    <p>We have strict safety and security processes in place for the containment of potent compounds to
                        minimize risk of exposure, and ensure our facility and personnel are adequately protected at all
                        times:</p>
                    <ul class="listing01">
                        <li>Stringent safety and cleaning protocols for HPAPI containment, with 100% analytical verification
                            for room clearances</li>
                        <li>Total enclosure processes to reduce employee exposure</li>
                        <li>Rooms designed with one-way traffic flow to minimize and/or eliminate compound transfer</li>
                        <li>Personal protective equipment (PPE), as well as respirators or powered air-purified respirators
                            (PAPRs)</li>
                        <li>Engineering controls for potent compound control, including:</li>
                        <p>- HEPA filters for superior air filtration</p>
                        <p>- Magnehelic® gauges</p>
                        <p>- Rees building monitoring system</p>
                    </ul>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection