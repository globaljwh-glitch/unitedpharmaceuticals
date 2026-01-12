@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="images/banner/banner-slider-02.jpg" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>Terminal Sterilization</h2>
                    <p class="mb-0">There is a growing demand for the sterilization of small-molecule parenteral products,
                        including heart medications, eye drops, analgesics, and antibiotics, as well as intravenous
                        solutions, such as glucose, potassium, and saline. To ensure patient safety, these drug products and
                        related instruments commonly used in hospitals must be thoroughly sterilized after being
                        manufactured. Known as "terminal sterilization," this highly efficient process ensures that no
                        microbial contaminants like fungi or bacteria are present when the product is used.</p>
                    <p>If you have a product that needs to be terminally sterilized, we can help.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Expertise in pharmaceutical sterilization</h2>
                    <p>Altasciences’ team of experts can guide you in choosing the most appropriate method of sterilization
                        for your material, and ensure the final delivery of your fully sterilized product.</p><br>
                    <p>Our cGMP manufacturing facility, inspected by both the FDA and the European Union Quality Personnel,
                        is equipped with Grade C and D clean rooms in which we develop injectable drug products and topical
                        ophthalmic preparations that can be terminally sterilized after manufacture. The rooms are
                        specifically designed to handle highly potent compounds and products sensitive to contamination on a
                        large scale.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Speak With Our Experts</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>METHOD SELECTION―TERMINAL STERILIZATION versus ASEPTIC MANUFACTURING</h2>
                    <p>Regulatory agencies, such as the FDA and EMA, prefer terminal sterilization over aseptic
                        manufacturing, as it provides a higher level of sterility assurance.</p><br>
                    <p>Terminal sterilization is less complex, less costly, and more easily reproducible than aseptic
                        processing. It is the preferred method for sterilizing drug products because sterilization takes
                        place after formulation, and once the product has been filled into the primary packaging. As a
                        result, these initial manufacturing processes can occur in a less rigidly structured environment,
                        which lowers the complexity and accelerates the process, thereby positively impacting the cost of
                        manufacturing. It also limits opportunities for contamination due to human intervention. The process
                        is reliable, repeatable, and delivers a quality product.</p><br>
                    <p>The sterility assurance level (SAL) also plays a critical role in method selection. The SAL describes
                        the probability that a viable unit or colony-forming unit (CFU) survives sterilization. If a product
                        is terminally sterilized, it has a SAL of 10<sup>-6</sup> (1 in 1,000,000 chance of a CFU surviving
                        the sterilization process), while an aseptically processed product has a higher risk SAL of
                        10<sup>-3</sup> (1 in 1,000 chance of a CFU surviving the sterilization process).</p>
                    <p>Because the aseptic manufacturing process cannot provide the same quantitative level of sterility
                        assurance as terminal sterilization, it should only be used when terminal sterilization is not an
                        option.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection