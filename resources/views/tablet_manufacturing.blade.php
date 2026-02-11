@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>Tablet Manufacturing</h2>
                    <h4>TABLETS</h4>
                    <p class="mb-0">The development and manufacturing of tablets for preclinical and clinical studies
                        require a multidisciplinary approach and a series of rigorous processes to ensure the safety,
                        efficacy, and quality of the medication being tested. Using advanced instrumentation, our
                        formulation scientists, regulatory experts, clinicians, and manufacturing specialists work together
                        to make certain that stringent quality control measures are enforced, from raw material testing to
                        final product inspection, ensuring that each tablet meets strict regulatory standards for
                        pharmaceutical quality and safety.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Speak With Our Experts</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>TAILORED TABLET MANUFACTURING SERVICES</h2>
                    <p>At United Pharmaceutical’ 64,000 square-foot GMP manufacturing facility, we develop and manufacture a
                        wide range of pharmaceutical dosage forms in support of preclinical and clinical trials, including
                        tablets, the preferred oral solid dosage form. The intricate process of tablet manufacturing
                        transforms active pharmaceutical ingredients (APIs) and excipients into compact, solid forms that
                        are convenient for distribution, dosing, and consumption. Using cutting-edge equipment and
                        methodologies to enhance product quality and process reliability, we produce small- to
                        commercial-scale batches.</p>
                    <p>Our capabilities include:</p>
                    <ul class="listing01">
                        <li>Chewable tablets</li>
                        <li>Film-coated tablets</li>
                        <li>Enteric-coated tablets</li>
                        <li>Buccal tablets</li>
                        <li>Fast dissolvable tablets (ODT)</li>
                        <li>Extended-release tablets</li>
                        <li>Immediate-release tablets</li>
                        <li>Controlled/modified-release tablets</li>
                        <li> Clinical trial supplies</li>
                        <li>Controlled substances (drug Schedules I-V)</li>
                        <li>Mini tablets</li>
                        <li>Taste masking</li>
                    </ul>
                    <p>Our fully customizable manufacturing processes and techniques ensure we adhere to quality standards,
                        meet regulatory compliance, and assure each tablet is safe, effective, and consistent in delivering
                        therapeutic benefits to patients worldwide.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>LEADING THE WAY TO MARKET</h2>
                    <p>At United Pharmaceutical, we stay abreast of the latest advances in drug manufacturing to ensure
                        efficiency and cost-effectiveness, and fast-track your most promising drug candidates from
                        formulation development through full-scale commercial production.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>

@endsection