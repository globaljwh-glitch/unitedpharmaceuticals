@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer py-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">

                    <div class="jobDetailCard p-4 p-md-5">

                        <span class="jobDate">
                            <i class="fa fa-calendar"></i>
                            {{ \Carbon\Carbon::parse($blog->created_at)->format('D M d, Y') }}
                        </span>



                        <hr>

                        <div class="jobDescription">
                            {!! $blog->content !!}
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection