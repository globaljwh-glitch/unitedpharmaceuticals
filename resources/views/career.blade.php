@extends('layout.app')
@section ('content')
    <style>
        .noJobsBox {
            background: #fafafa;
        }

        .noJobsBox i {
            opacity: 0.6;
        }

        .noJobsBox h4 {
            font-weight: 600;
        }
    </style>
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/career.jpg') }}" alt="">
    </section>
    <section class="contentContainer">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Build Your Career with United Pharmaceutical Inc.
                    </h2>
                    <p class="mb-0">United Pharmaceutical Inc. is committed to maintaining an equal opportunity work
                        environment and operates as an affirmative action employer. We recognize that diverse perspectives
                        strengthen innovation and decision-making, and we actively cultivate an inclusive, dynamic culture
                        within our organization and throughout the industry. Maintaining balance between professional
                        responsibilities and personal well-being is essential to sustained performance. To support this
                        balance, we offer multiple programs designed to help our team perform at their best.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11 m-auto">
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg ourPurposeBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="productImgThumbOuter d-flex justify-content-end align-items-center positionRelative">
                        <div class="ourPurposeImgThumb ourPurposeImgThumb01 order-sm-1 order-0">
                            <img src="{{ asset('images/purpose-thumb-01.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeImgThumb ourPurposeImgThumb02 order-sm-2 order-0">
                            <img src="{{ asset('images/purpose-thumb-02.jpg') }}" class="imgResponsive">
                        </div>
                        <div class="ourPurposeContentBox order-sm-0 order-1">
                            <h2>Employee Benefits
                            </h2>
                            <ul>
                                <li>Dynamic working environment</li>
                                <li>Adaptable group insurance benefits offerings
                                </li>
                                <li>Employee referral incentive program</li>
                                <li>Ongoing training, learning, and professional growth opportunities
                                </li>
                                <li>Access to growth opportunities
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Join Our Team
                    </h2>
                    <p class="paddingLR150">We are seeking motivated and skilled professionals who are eager to contribute
                        to a growing organization. Our mission is centered on advancing high-quality medicines to patients
                        efficiently and responsibly.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11 m-auto">
                    <div class="jobListing mt-3">
                        <div class="row">

                            @forelse($jobs as $job)
                                <div class="col-lg-6 col-md-6 d-flex mb-4">
                                    <div class="jobList w-100 p-3 border rounded">
                                        <p class="highlightText">
                                            {{ \Carbon\Carbon::parse($job->created_at)->format('D M d, Y') }}
                                        </p>
                                        <h4>{{ $job->title }}</h4>
                                        <a href="{{ route('jobs.show', $job->slug) }}" class="customBtn01 customBtn01Small">
                                            Read more
                                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                </div>

                            @empty
                                <div class="col-12">
                                    <div class="noJobsBox text-center p-5 border rounded">
                                        <i class="fa fa-briefcase fa-3x text-muted mb-3"></i>
                                        <h4 class="mb-2">No Current Openings</h4>
                                        <p class="text-muted mb-3">
                                            There are no open roles available at this time. however, we remain interested in
                                            connecting with qualified professionals for future opportunities.


                                        </p>
                                        <p class="mb-0">
                                            Please visit again soon
                                        </p>
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection