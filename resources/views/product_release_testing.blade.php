@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>Pharmaceutical Drug Product Release Testing</h2>
                    <p class="mb-0">Pharmaceutical product/batch release testing is required before any drug is made
                        available for clinical trials or market consumption. The product’s purity, concentration,
                        consistency, safety, and integrity are just some of the factors evaluated during drug product
                        release testing.</p>
                    <p>Avoid production delays by choosing an analytical partner with extensive experience and the required
                        instrumentation to ensure your drug products are of the highest quality before their release.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Expertise</h2>
                    <p>Altasciences’ scientists apply a wide range of analytical techniques to evaluate your raw materials,
                        APIs, and finished or in-process drug products (including Schedule I-V controlled drugs) to ensure
                        they meet regulatory requirements. Our cGMP-compliant laboratory and manufacturing suites are
                        located in the same facility, optimizing time between production and product release.</p>
                    <p>Our wide range of capabilities includes:</p>
                    <ul class="listing01">
                        <li>Ultra-high performance liquid chromatography (HPLC/UPLC)</li>
                        <li>Dissolution and disintegration testing</li>
                        <li>Moisture analysis (gravimetric and Karl Fisher titration)</li>
                        <li>Spectroscopy (UV/VIS/IR)</li>
                        <li>Total organic carbon analyzer (TOC)</li>
                        <li>Viscosity</li>
                        <li>Particle size analysis</li>
                        <li>Fourier-transform infrared spectroscopy (FTIR)</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection