@extends('layout.app')
@section('content')

<section class="innerBanner positionRelative">
    <img src="{{ asset('images/banner/career.jpg') }}" alt="">
    <div class="bannerOverlay text-center">
        <h1 class="text-white">Career Opportunity</h1>
    </div>
</section>

<section class="contentContainer py-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">

                <div class="jobDetailCard p-4 p-md-5">

                    <span class="jobDate">
                        <i class="fa fa-calendar"></i>
                        {{ \Carbon\Carbon::parse($event->from_date)->format('D M d, Y') }}
                    </span>

                    <h2 class="jobTitle mt-3">{{ $event->title }}</h2>

                    <hr>

                    <div class="jobDescription">
                        {!! $event->description !!}
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection('content')