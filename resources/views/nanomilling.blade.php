@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>Wet Nanomilling and Vial Filling</h2>
                    <p class="mb-0">A crucial feature of drug development is bioavailability, defined as the rate and
                        ability of a drug to be absorbed and circulated within the body. For a drug to be bioavailable, it
                        must first be soluble, meaning able to be dissolved, especially in water.</p><br>
                    <p>Currently, 40% of marketed drugs and 90% of active pharmaceutical ingredients (APIs) are poorly
                        water-soluble. Nanomilling is one of the most effective techniques used to overcome these solubility
                        challenges.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Expertise</h2>
                    <p>Nanomilling is a highly complex process requiring a unique level of drug manufacturing expertise that
                        can only be gained through extensive experience with developing a broad range of APIs.</p><br>
                    <p>Our experts work with simple, complex, and highly potent APIs, and have the necessary procedures and
                        equipment to work with any formulation. Using the state-of-the-art Netzsch DeltaVita 15 300 mill, we
                        can reduce particles to nanometer size with our wet milling options, fill vials in a range of sizes
                        (from 0.3 ml to 500 ml), and package them.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Speak With Our Experts</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Benefits of Nanomilling</h2>
                    <p><b>Particle Size Reduction ―</b> Advantages for the parenteral route are small dose volumes
                        (resulting from high drug loading) and avoidance of harsh solvents and/or extreme pH conditions. For
                        the pulmonary route, benefits include the ability to use inhalers intended for solutions, as well as
                        the ability to produce spray-dried powders whose particle sizes are optimized for deep lung
                        delivery.</p>
                    <p><b>Scalability ―</b> The process and equipment are easy to scale. Once the formulation and the
                        process are optimized, very little batch-to-batch variation is observed in the quality of the
                        dispersion.</p>
                    <p><b>Reduced Exposure to Potent Compounds ―</b> The closed system allows for control of the milling
                        environment as well as protection of the operators from exposure to potent drugs.</p>
                    <p>Other advantages include reduced fed/fasted variability in both liquid and solid dosage forms, faster
                        onset of therapeutic action, low excipient side effects, and the ability to run continuously.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>How Nanomilling Works</h2>
                    <p>Human pharmaceuticals are classified according to the following four Biopharmaceutics Classification
                        System (BCS) categories. This guide is provided by the FDA to help predict a drug’s intestinal
                        absorption, using the parameters of solubility and intestinal permeability.</p><br>
                    <p>Nanomilling is a universal technique that can be applied to almost any API with water solubility
                        below 200 μg/mL. It is a very adaptable drug delivery platform suitable for oral, injectable,
                        inhalable, and buccal applications, for which fine drug particulates are especially desired in
                        formulations. APIs that fall into BCS Class II are optimal candidates for particle size reduction,
                        as their dissolution is the rate-determining factor in drug absorption.</p><br>
                    <p>During the course of nanomilling, mechanical energy is applied to physically break down coarse
                        particles to finer ones. Decreasing the size of the API molecule increases the size of the specific
                        surface area: the larger surface area allows for greater contact with water, increasing the API’s
                        dissolution rate and bioavailability.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection