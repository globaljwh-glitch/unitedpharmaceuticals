@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/banner-slider-02.jpg') }}" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>Active Pharmaceutical Ingredients, Excipients, and Packaging Components</h2>
                    <p class="mb-0">A drug product’s success relies largely on the quality and effectiveness of the raw
                        materials used in the manufacturing process, mainly the active pharmaceutical ingredients (APIs) and
                        the associated excipients used in the formulation.</p><br>
                    <p>While the APIs are responsible for generating the desired pharmacological effect, it is the
                        excipients that play a central role in the drug development process. Used in a wide range of drug
                        products such as capsules, tablets, oral liquids, and injectables, they facilitate absorption,
                        provide drug stability, and help overcome challenges with poorly soluble APIs, allowing them to be
                        formulated and developed.</p>
                    <p>We can help source, purchase, and test APIs and excipients to ensure your drug product’s
                        effectiveness and timely delivery to market.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Expertise</h2>
                    <p>Our raw material services are low cost, and delivered in a timely manner to meet your budget and
                        timelines. Our scientists work with state-of-the-art equipment and strict procedures for method
                        development and validation, and provide quick-release testing for all necessary components. We also
                        manage all necessary United States Pharmacopeia/National Formulary (USP/NF) and European
                        Pharmacopeia (EP) testing for materials received, with a rapid release from our on-site analytical
                        laboratories, or our industry-known laboratory partners.</p><br>
                    <p>Our full range of raw material services include:</p>
                    <ul class="listing01">
                        <li>Sourcing</li>
                        <li>Purchasing</li>
                        <li>Logistics</li>
                        <li>Receipt</li>
                        <li>Transfer</li>
                        <li>Sampling</li>
                        <li>Testing</li>
                        <li>Release</li>
                        <li>Packaging</li>
                        <li>QA approval</li>
                        <li>Disposal</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer greyBg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Packaging Components</h2>
                    <p>The packaging of a pharmaceutical product ensures the safe delivery of the drug to the end user, from
                        manufacturing through commercialization.</p>
                    <p>United Pharmaceuticals’ scientists work with the latest technology to ensure the packaging used for
                        your drug product adheres to FDA and EU regulatory requirements, and fulfills its primary goals:</p>
                    <ul class="listing01">
                        <li>Maintain the effectiveness and quality of the active pharmaceutical ingredients (API) in order
                            to produce the highest quality drug product (e.g., tablets, liquid-filled capsules, injectables)
                        </li>
                        <li>Preserve and/or improve the drug product’s shelf life</li>
                        <li>Protect the product from external factors such as transit hazards, moisture, gases, insects,
                            etc.</li>
                        <li>Ensure its convenience and safety as a dosage form for the end user</li>
                    </ul>
                    <p>Our manufacturing team can help you decide which packaging components are best suited for your
                        pharmaceutical product based on different criteria, such as its chemical components, stability, and
                        level of required sterilization. Types of packaging commonly used include glass, plastic, and metal
                        containers, bottles, vials, as well as paper board, rubber, cotton, adhesives, closures, and various
                        type of films, foils and laminates.</p>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection