@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>LIQUID-FILLED CAPSULES</h2>
                    <p class="mb-0">Liquid-filled, two-piece capsules offer several advantages over other solid dosage
                        forms, such as ease of scalability and manufacturing, faster absorption, simpler packaging, and
                        higher product stability. Liquid filling also offers the ability to control R&D compounds, which are
                        expensive and in limited supply. They are also known to accelerate product development because they
                        can be made with fewer excipients than other solid dosage forms, such as tablets.</p>
                    <p>Drug profiles for which liquid-filled, hard-shell capsules would be suitable include compounds with
                        complex or difficult formulations, as well as low-dose, poorly soluble, and/or highly potent active
                        pharmaceutical ingredients (APIs).</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>OUR EXPERTISE</h2>
                    <p>United Pharmaceuticals integrated CDMO/CRO solutions can take your molecule from formulation to early
                        phase clinical trials, and all the way through to commercialization.</p>
                    <ul class="listing01">
                        <li><b>State-of-the-art contract development and manufacturing facility</b> with formulation and
                            analytical laboratories, cGMP manufacturing suites, high-potency area with segregated C/D
                            cleanrooms, and warehouse</li>
                        <li><b>DEA License for Schedules I-V</b>, and a dedicated narcotic storage area</li>
                        <li><b>Advanced liquid-filled capsule manufacturing processes and equipment</b>, including
                            banding/sealing technology</li>
                        <li><b>97%</b> first-time batch release success rate</li>
                        <li><b>On-site</b> stability storage and testing, controlled substance testing, and drug product
                            release testing</li>
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
                    <h2>BENEFITS OF TWO-PIECE, LIQUID-FILLED CAPSULES AS A DOSAGE FORM</h2>
                    <p><b>Water Solubility/Bioavailability ―</b> The bioavailability of compounds with poor water solubility
                        can be significantly enhanced with a liquid formulation in a hard-shell capsule, since your API is
                        already in solution or dispersed suspension.</p>
                    <p><b>Low Melting Point ―</b> The manufacturing process of APIs with a low melting point can be greatly
                        simplified by producing them in liquid form used to fill hard-shell capsules.</p>
                    <p><b>Low Dose/High Potency ―</b> Studies have shown that the incorporation of potent drugs into
                        liquid-filled capsules during formulation and processing significantly reduces the risk of
                        cross-contamination and airborne powder exposure to operators.</p>
                    <p><b>Critical Stability ―</b> Liquid-filled, hard-shell capsules protect the drugs from moisture and
                        produce a stable dosage form.</p>
                    <p><b>Sustained Release ―</b> With liquid-filled, hard-shell capsules, drug formulation and polymer
                        composition of the capsule can be customized to accommodate APIs with different properties and
                        desired dissolution profiles.</p>
                    <p><b>Simple And Cost Effective Formulation ―</b> Liquid capsules require no binders, lubricants, or
                        plasticizers commonly found in traditional solid-dosage forms and soft gels. Aqueous and non-aqueous
                        liquids to semi-solids can be filled and banded.</p>
                    <p><b>Combination Filling ―</b> Unlike softgels, hard-shell gelatin capsules offer the possibility of
                        combination filling. Drugs can be encapsulated in the form of beads, micro tablets, or pellets, in
                        combination with the liquid formulation.</p>
                    <p><b>Integrated Tamper Proofing ―</b> Banded and sealed capsules provide a non-permeable barrier.</p>
                    <p><b>Abuse-Deterrence ―</b> They offer abuse-deterrent benefits because they make it harder to
                        insufflate, inject, or alter the extended-release properties of potent drugs.</p>
                    <p><b>Better Than Softgel Capsules ―</b> Thinner wall construction allows for smaller capsule sizes and
                        more efficient and complete dissolution over soft gels.</p>
                    <p><b>Unique Branding Opportunities ―</b> Infinite choices of capsule and banding colors provide a
                        wealth of visually appealing product differentiation options, from clear capsules and clear bands to
                        two-color capsules and contrasting band color ― the combinations are endless.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>TYPES OF Liquid-filled CAPSULES</h2>
                    <p><b>Gelatin Capsules: the Market Standard for Many Years</b></p>
                    <ul class="listing01">
                        <li>High-quality product matches the stringent requirements of the pharmaceutical industry</li>
                        <li>Excellent performance in high-speed capsule filling and sealing machines</li>
                        <li>Can be filled with SSM formulations up to 70 °C</li>
                        <li>Compatible with a range of excipients for improving bioavailability of poorly soluble drugs</li>
                    </ul>
                    <p><b>Quali-V® HPMC Capsules: Hypromellose Capsules Made From Plant-Derived Materials</b></p>
                    <ul class="listing01">
                        <li>Proven pharmaceutical performance</li>
                        <li>Meets all compendia dissolution requirements</li>
                        <li>Compatible with a wider range of excipients than gelatin</li>
                        <li>Preferred for hygroscopic fills</li>
                        <li>Exceptional for low-humidity applications, no brittleness</li>
                        <li>Maintains shell mechanical strength at low moisture contents</li>
                        <li>Can be filled with SSM formulations up to 80 °C</li>
                        <li>Ideal for new drug development</li>
                    </ul>
                    <p><b>Enteric Capsules</b></p>
                    <ul class="listing01">
                        <li>API protection against degradation in the gastric environment</li>
                        <li>Achieve delayed or targeted release in small intestine</li>
                        <li>Eliminates need to enteric coat capsules</li>
                        <li>Increases speed and optimization of enteric performance</li>
                    </ul>
                    <p>For additional information on liquid-filled capsule manufacturing, <a href="#">download</a> our
                        e-book.</p>
                </div>
            </div>
        </div>
    </section>
@endsection