@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>Other manufacturing</h2>
                    <p class="mb-0">Our team has developed formulations, designed equipment trains, validated processes,
                        developed and validated analytical methods, and obtained regulatory approvals for nearly every
                        pharmaceutical dosage form, including:</p><br>
                    <ul class="listing01">
                        <li>Liquids and semi-solids</li>
                        <li><a href="">Tablets</a></li>
                        <li>Various capsule formulations, including <a href="">powders</a>, pellets, beads, and <a
                                href="">liquids</a></li>
                        <li>Proprietary dispersions</li>
                        <li>Creams/gels</li>
                        <li>Bottle packaging</li>
                        <li>Blister packaging</li>
                        <li>Turn-key solutions</li>
                    </ul>
                    <p>Bring us your challenge, and we will design a solution that exceeds your expectations for cost,
                        speed, and quality.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection