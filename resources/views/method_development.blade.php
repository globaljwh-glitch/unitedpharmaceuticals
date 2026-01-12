@extends('layout.app')

@section('content')
    <section class="innerBanner positionRelative">
        <img src="images/banner/banner-slider-02.jpg" alt="">
    </section>
    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2>Method Development, Qualification, and Validation</h2>
                    <p class="mb-0">Analytical method development, qualification, and validation are interrelated and play a
                        vital role in the <a href="">drug development and manufacturing</a> process. Proper method
                        development and validation ensures that a testing method meets all regulatory criteria, confirming
                        its consistent performance and suitability for the intended use.</p><br>
                    <p>United Pharmaceuticals’ scientists make certain all analytical methods are efficiently developed and
                        qualified/validated for a wide range of APIs, drug compounds, excipients, and finished drug
                        products, including cannabis and controlled substances―thereby reducing costs, complexity, and
                        overall timelines in the development process.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contentContainer ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Expertise</h2>
                    <h4>Method Development</h4>
                    <p>Analytical method development provides essential information on the product’s purity, physical
                        characteristics, potency, and stability. Our on-site analytical laboratories are equipped with
                        state-of-art instrumentation used by our team to develop robust methods that meet the objectives
                        required at each stage of drug development and can be rapidly validated.</p>
                    <p>We continually evaluate our findings throughout the entire development process to identify key
                        parameters that may need to be adjusted later on, and assess factors such as sensitivity, linearity,
                        extraction efficiency, and method reproducibility.</p>
                    <h4>Method Qualification and Validation</h4>
                    <p>All analytical methods applied to a pharmaceutical product under current Good Manufacturing Practices
                        (cGMP) need to be validated. Their data supports a drug’s characterization, quality, and
                        manufacturing batch records. Altasciences ensures that phase-appropriate validation protocols are
                        developed closely with your goals in mind. Our Standard Operating Procedures (SOPs) for validation
                        methods are modeled after the guidelines in the <a href="">USP chapter of Validation of Compendial
                            Procedures &lt;1225&gt;</a>.</p><br>
                    <p>The following criteria can be validated during this process, proving the method’s reliability,
                        performance, and suitability for its intended use:</p>
                    <ul class="listing01">
                        <li>Accuracy</li>
                        <li>Precision/reproducibility/repeatability</li>
                        <li>Specificity and selectivity</li>
                        <li>Limit of detection (LOD)</li>
                        <li>Limit of quantification (LOQ)</li>
                        <li>Linearity</li>
                        <li>Range</li>
                        <li>Robustness/ruggedness</li>
                        <li>Stability</li>
                        <li>Suitability</li>
                        <li>Forced degradation</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="customBtn01 mt-4">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>
@endsection