@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/preclinical-services.jpg') }}" alt="Privacy Policy">
    </section>

    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto">

                    <h2 class="mb-4 text-center">Privacy Policy</h2>

                    <div class="card shadow-sm border-0 p-4">

                        <p>
                            United Pharmaceuticals Inc. ("we", "our", "us") is committed to protecting your privacy.
                            This Privacy Policy outlines how we collect, use, and safeguard your personal information.
                        </p>

                        <h3>Information We Collect</h3>
                        <ul>
                            <li>Name, email, phone number</li>
                            <li>Company information</li>
                            <li>Messages submitted via forms</li>
                            <li>Technical data such as IP address and browser type</li>
                        </ul>

                        <h3>How We Use Your Information</h3>
                        <ul>
                            <li>To respond to inquiries</li>
                            <li>To improve services</li>
                            <li>For internal analytics</li>
                            <li>For regulatory and compliance purposes</li>
                        </ul>

                        <h3>Data Security</h3>
                        <p>
                            We implement appropriate security measures to protect your personal data
                            from unauthorized access, disclosure, or misuse.
                        </p>

                        <h3>Third Party Sharing</h3>
                        <p>
                            We do not sell, trade, or rent personal information to third parties.
                            Data may only be shared with trusted partners for operational purposes.
                        </p>

                        <h3>Your Rights</h3>
                        <ul>
                            <li>Request access to your data</li>
                            <li>Request correction or deletion</li>
                            <li>Withdraw consent at any time</li>
                        </ul>

                        <h3>Policy Updates</h3>
                        <p>
                            This policy may be updated periodically. Continued use of the website
                            constitutes acceptance of the updated policy.
                        </p>

                        <p class="mt-4 text-muted">
                            Last updated: {{ date('F Y') }}
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection