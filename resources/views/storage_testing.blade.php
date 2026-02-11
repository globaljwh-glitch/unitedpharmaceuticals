@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>ICH Stability Storage and Testing</h2>
                    <p class="mb-0">Stability testing is performed to determine how a drug substance (active pharmaceutical
                        ingredient or finished product) is altered over a given period of time, under the influence of
                        various environmental factors, such as humidity, temperature, light, and typical storage conditions.
                        The results determine the product’s shelf life, as well as optimal storage and shipment conditions.
                    </p><br>
                    <p>Avoid drug development delays and accelerate FDA approval by partnering with Altasciences, a contract
                        development and manufacturing organization (CDMO), that can overcome any analytical hurdles that may
                        arise during this critical milestone.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Expertise</h2>
                    <p>Equipped with state-of-the-art analytical laboratories and on-site, ICH-compliant stability chambers
                        that meet all cGMP requirements, United Pharmaceuticals’ laboratory is ready to handle all your
                        needs and help gain regulatory approval for your product. Our experts provide a wide range of
                        analytical testing services, including <a href="">method development and validation</a>, ICH
                        stability testing and storage (in real-time and long-term), pharmaceutical product degradation
                        testing, and much more.</p>
                    <p>Our facility offers standard ICH conditions, as well as custom storage conditions, to ensure the most
                        stable and uniform environments for your materials. United Pharmaceuticals’ environmental chambers
                        are continuously monitored by Rees Scientific, a centralized monitoring system that provides our
                        team with 24/7/365 data and real-time alerts to ensure your products or samples remain within the
                        desired specifications.</p><br>
                    <p>Our cGMP stability testing and storage services include:</p>
                    <ul class="listing01">
                        <li>cGMP registration stability programs</li>
                        <li>Protocol design and program management</li>
                        <li>Development and validation of stability-indicating methods</li>
                        <li>Stability testing of APIs, finished pharmaceutical products, clinical trial materials, and
                            formulated products</li>
                        <li>Tailored reporting (timepoint and final reports)</li>
                        <li>Temperature cycling, freeze-thaw study, and shipping studies</li>
                        <li>Forced degradation testing</li>
                        <li>Real-time stability testing</li>
                        <li>Long-term stability testing</li>
                        <li>Intermediate stability testing</li>
                        <li>Accelerated stability testing</li>
                        <li>In-use stability testing</li>
                        <li>Follow-up stability trials</li>
                        <li>Formulation stability testing</li>
                        <li>Extractables/leachables</li>
                    </ul><br>
                    <p>All of United Pharmaceuticals’ stability chambers are on our backup generator and include the
                        following conditions:</p>
                    <ul class="listing01">
                        <li>-80 °C</li>
                        <li>-20 °C</li>
                        <li>5 °C (walk-in chamber)</li>
                        <li>25 °C/60% relative humidity (RH), walk-in chamber</li>
                        <li>30 °C/65% RH</li>
                        <li>30 °C/75% RH</li>
                        <li>40 °C/75% RH</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection