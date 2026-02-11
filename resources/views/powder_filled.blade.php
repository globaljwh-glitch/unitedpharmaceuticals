@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>Powder-Filled Capsules</h2>
                    <p class="mb-0">Two-piece, powder-filled capsules are a popular solid dosage form for several reasons.
                        They:</p><br>
                    <ul class="listing01">
                        <li>Simplify the delivery of medication and are easier to swallow than tablets.</li>
                        <li>Mask the smell or taste that often accompanies tablets or powders needing to be mixed into
                            beverages.</li>
                        <li>Use fewer excipients than many tablet formulations.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Expertise</h2>
                    <p>From formulation development to clinical studies and commercialization, we ensure a successful path
                        to market using various techniques for manufacturing powder-filled capsules. From a manual process
                        of hand-filling capsules all the way through to high-speed automatic equipment, we are ready to meet
                        your project needs.</p>
                    <p>Our powder-filling and packaging equipment is engineered to be versatile, accurately dispensing and
                        filling a wide range of products, while offering precision and speed. Thorough sanitary,
                        verification, and maintenance programs are also in place to ensure cleanliness and accuracy.</p>
                    <p>Two-piece, powder-filled capsules can be band-sealed, a preferred option at Altasciences. Band seals
                        provide tamper evidence for over-the-counter drugs and unique marketing/brand differentiation
                        options through choice of band color. One method of sealing involves banding the cap-body joint with
                        a layer of gelatin, while another uses a hydro-alcoholic fusion process.</p>
                    <p>Advanced equipment we use for band sealing powder-filled capsules includes:</p>
                    <ul class="listing01">
                        <li>Qualicaps HICAPSEAL 40 Machine</li>
                        <li>Qualicaps S-125 Capsule Banding Machine</li>
                        <li>Schaefer Technologies Benchtop Bander Machine</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Speak With Our Experts</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Benefits of Two-Piece, Powder-Filled Capsules</h2>
                    <p><b>Fast-Acting ―</b> Capsules tend to break down more quickly than tablets, which may offer faster
                        relief from symptoms.</p>
                    <p><b>Tasteless ―</b> Capsules are less likely than tablets and powders to have an unpleasant taste or
                        odor.</p>
                    <p><b>Tamper-Resistant ―</b> Capsules are more difficult to split in half or crush than tablets. As a
                        result, they are more likely to be taken as intended.</p>
                    <p><b>Higher Drug Absorption ―</b> Capsules have higher bioavailability than tablets, making it likely
                        that more of the drug will enter the bloodstream. As a result, capsules tend to be the more
                        effective option.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Types Of Powder-Filled Capsules</h2>
                    <p><b>Gelatin Capsules: The Market Standard for Many Years</b></p>
                    <ul class="listing01">
                        <li>High-quality product that meets the stringent requirements of the pharmaceutical industry</li>
                        <li>Excellent performance on high-speed capsule filling and sealing machines</li>
                    </ul>
                    <p><b>Quali-V® Capsules: Hypromellose Capsules Made From Plant-Derived Materials</b></p>
                    <ul class="listing01">
                        <li>Proven pharmaceutical performance</li>
                        <li>Compliant with all compendia dissolution requirements</li>
                        <li>Compatible with a wider range of excipients than gelatin</li>
                        <li>Preferred for hygroscopic fills</li>
                        <li>Exceptional for low-humidity applications, with no brittleness</li>
                        <li>Maintenance of shell mechanical strength at low moisture contents</li>
                    </ul>
                    <p><b>Enteric Capsules</b></p>
                    <ul class="listing01">
                        <li>Provide API protection against degradation in the gastric environment</li>
                        <li>Achieve delayed or targeted release in small intestine</li>
                        <li>Eliminate the need to enteric coat capsules</li>
                        <li>Increase the speed and optimization of enteric performance</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection