@extends('layout.app')
@section ('content')
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/preclinical-services.jpg') }}" alt="Privacy Policy">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>OUR GLOBAL LOCATIONS</h2>
                    <p class="mb-0">
                        United Pharmaceuticals Inc. operates across a strong international footprint, supporting clients
                        through strategic manufacturing partnerships and global distribution capabilities. Our presence
                        spans key pharmaceutical markets, enabling efficient supply of APIs, excipients, packaging
                        materials,
                        and technical solutions to healthcare organizations worldwide. Through our integrated network, we
                        ensure timely delivery, regulatory compliance, and consistent quality across all regions we serve.
                    </p>
                    <a href="{{ route('contact') }}" class="customBtn01">Contact Our Global Team</a>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2>Countries We Serve</h2>
                        <p>We proudly serve over 1,000 customers in multiple countries through our international
                            distribution network.</p>
                    </div>
                    <div class="mapSection">
                        <div class="row">
                            <div class="col-lg-6 mapBg flexCol p-0"><img src="{{ asset('images/ufc-map.png') }}" alt=""
                                    class="imgResponsive"></div>
                            <div class="col-lg-6 flexCol">
                                <ul class="countryListWedoBussiness">
                                    <li>USA</li>
                                    <li>Argentina</li>
                                    <li>Australia</li>
                                    <li>Belgium</li>
                                    <li>Brazil</li>
                                    <li>Cambodia</li>
                                    <li>Canada</li>
                                    <li>Chile</li>
                                    <li>China</li>
                                    <li>Colombia</li>
                                    <li>Czech Republic</li>
                                    <li>Egypt</li>
                                    <li>Estonia</li>
                                    <li>France</li>
                                    <li>French Guiana</li>
                                    <li>Germany</li>
                                    <li>Guyana</li>
                                    <li>Hong Kong</li>
                                    <li>India</li>
                                    <li>Indonesia</li>
                                    <li>Israel</li>
                                    <li>Italy</li>
                                    <li>Japan</li>
                                    <li>Malaysia</li>
                                    <li>Mexico</li>
                                    <li>Myanmar</li>
                                    <li>Netherlands</li>
                                    <li>New Zealand</li>
                                    <li>Norway</li>
                                    <li>Pakistan</li>
                                    <li>Peru</li>
                                    <li>Philippines</li>
                                    <li>Russia</li>
                                    <li>Saudi Arabia</li>
                                    <li>Singapore</li>
                                    <li>South Africa</li>
                                    <li>South Korea</li>
                                    <li>Spain</li>
                                    <li>Swiss</li>
                                    <li>Taiwan of China</li>
                                    <li>Thailand</li>
                                    <li>Turkey</li>
                                    <li>UAE</li>
                                    <li>UK</li>
                                    <li>Ukraine</li>
                                    <li>Uruguay</li>
                                    <li>Venezuela</li>
                                    <li>Vietnam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection('content')