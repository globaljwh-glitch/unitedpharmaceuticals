@extends('layout.app')
@section ('content')
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Who We Are</h2>
                    <p class="mb-0">United Pharmaceuticals Inc. is a science-driven organization focused on supporting the
                        pharmaceutical ecosystem through reliable manufacturing, sourcing, and supply solutions. Built on
                        technical expertise and disciplined processes, we work closely with partners across the healthcare
                        value chain to deliver materials and solutions that meet stringent quality, regulatory, and
                        performance expectations. Our approach combines operational rigor with long-term collaboration,
                        enabling us to support both established programs and evolving development needs across global
                        markets. We emphasize transparency, accountability, and continuous improvement to ensure confidence
                        at every stage of engagement.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <img src="{{ asset('images/our-unique-approach.jpg') }}" alt="Our Unique Approach"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Our Capabilities</h2>

                            <p class="highlightText">Our operations are structured to support a wide spectrum of
                                pharmaceutical requirements, including</p>
                            <ul class="listing01">
                                <li>Contract manufacturing and supply support
                                </li>
                                <li>Pharmaceutical ingredients and excipient solutions</li>
                                <li>Machinery, equipment, and packaging material sourcing</li>
                                <li>Quality oversight and regulatory-aligned processes</li>
                                <li>Scalable solutions for domestic and international markets</li>
                            </ul>
                            <p class="highlightText">Each capability is backed by defined controls, technical evaluation,
                                and consistent performance monitoring.
                            </p>
                        </div>
                    </div>
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
                            <h2>OUR CORE VALUES</h2>
                            <p>At United Pharmaceuticals Inc., quality is driven by disciplined systems rather than isolated
                                controls. Our operating philosophy emphasizes proactive risk evaluation, controlled
                                documentation, and process validation to ensure compliance with relevant regulatory
                                standards. This structured foundation supports consistency, accountability, and continuous
                                improvement across all operations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contentContainer">
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
    <!-- <section class="contentContainer greyBg signUpNewsletterBlock text-center">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h2>Sign up for exclusive content</h2>
                                                    <p>Join our list of 30,000+ VIP members and have access to our exclusive content.</p>
                                                    <div class="signUpNewsletter">
                                                        <form>
                                                            <input type="text" value="" placeholder="Enter your email address here">
                                                            <input type="submit" value="Subscribe Now!" class="btn customBtn01" name="">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section> -->
@endsection