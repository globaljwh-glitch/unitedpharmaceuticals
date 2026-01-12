@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="images/banner/banner-slider-02.jpg" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>Over-Encapsulation/Blinded Study Materials</h2>
                    <p class="mb-0">Over-encapsulation is a popular, cost-effective technique that involves the blinding of
                        a solid dosage form into a capsule shell in order to eliminate bias from comparative clinical
                        trials, while maintaining study integrity and efficacy. If the blinding of the material is not
                        adequately done, clinical trial participants may be able to tell the difference between the real
                        drug and the placebo, resulting in a biased trial and a loss on your investment.</p><br>
                    <p>You need a partner that understands the intricacies of over-encapsulation and blinded study
                        materials, and has the manufacturing capabilities to implement the technique efficiently. Our
                        experts have decades of experience with innovative approaches to blinding study materials,
                        consistently providing the most cost-effective and compliant solutions.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Expertise</h2>
                    <p>Several factors are involved in properly over-encapsulating a solid oral dosage form to maintain
                        product performance and the integrity of the study:</p>
                    <p><b>Visual Appearance ―</b> The exterior appearance of the actual drug and the over-encapsulate
                        placebo must be exactly the same.</p>
                    <p><b>Selection of Capsule Shell —</b> The capsule shell should be specifically designed for the
                        process, which includes double-locking the body and cap and using opaque coloring so the dosage form
                        is not visible through the shell of the capsule. The design and size of the capsule are also
                        important factors to consider to simplify the delivery of the dosage form (by making it easy to
                        swallow for example) and ensure overall patient compliance, especially for pediatric trials.</p>
                    <p><b>Back-fill component —</b> To ensure the drug products cannot be differentiated by weight or the
                        sensation of the dosage form inside the capsule when shaken, it is important that a backfill be
                        present in the over-encapsulated capsule, with minimal use of additional lubricants, so that all
                        products have the same weight and effect when shaken. Using a backfill can also prevent the patient
                        from feeling a difference between the actual drug and the over-encapsulated product when squeezing
                        them to feel the dosage form inside.</p>
                    <p><b>Over-Encapsulation Method —</b> Based on the characteristics of the drug product, there are many
                        manual, semi-automatic, and fully automatic options to choose from.</p>
                    <p>We are also equipped to use less common blinding methods, such as the removal of commercial logo
                        and/or identifier from the tablet or capsule, and over-printing with confusion print.</p>
                    <p>We utilize the Qualicaps Model 10, semi-automatic capsule filler for the majority of
                        over-encapsulation projects which can also be used for the straight fill of powders. To accommodate
                        smaller scale projects (&lt;10,000 units), we have bench-top capsule filling equipment.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Speak With Our Experts</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Benefits of Over-Encapsulation/Blinded Studies</h2>
                    <p><b>Eliminating Bias ―</b> A properly over-encapsulated drug can effectively blind the study and
                        eliminate any bias from both the investigator and the study participant by removing any elements
                        that could reveal the drug’s source and potentially impact the placebo effect.</p>
                    <p><b>Tamper-Resistant ―</b> With the use of advanced technology, tamper-resistant capsules are
                        developed that prevent patients from breaking open the capsule to see if they are being dosed with
                        the real drug or a placebo.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection