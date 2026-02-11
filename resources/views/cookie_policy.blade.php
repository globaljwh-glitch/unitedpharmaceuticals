@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/preclinical-services.jpg') }}" alt="Cookie Policy">
    </section>

    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto">

                    <h2 class="mb-4 text-center">Cookie Policy</h2>

                    <div class="card shadow-sm border-0 p-4">

                        <p>
                            This Cookie Policy explains how United Pharmaceuticals Inc. ("we", "our", "us") uses cookies and
                            similar technologies when you visit our website.
                        </p>

                        <h3>What Are Cookies?</h3>
                        <p>
                            Cookies are small text files that are stored on your device when you visit a website.
                            They help improve website functionality, enhance user experience, and provide analytical
                            insights.
                        </p>

                        <h3>How We Use Cookies</h3>
                        <ul>
                            <li>To ensure website functionality and security</li>
                            <li>To analyze traffic and user behavior</li>
                            <li>To improve performance and content relevance</li>
                            <li>To remember your preferences</li>
                        </ul>

                        <h3>Types of Cookies We Use</h3>
                        <ul>
                            <li><strong>Essential Cookies:</strong> Required for core website functionality</li>
                            <li><strong>Analytics Cookies:</strong> Help us understand usage patterns</li>
                            <li><strong>Preference Cookies:</strong> Remember user settings</li>
                        </ul>

                        <h3>Managing Cookies</h3>
                        <p>
                            You can control or disable cookies through your browser settings.
                            However, disabling cookies may affect some features of the website.
                        </p>

                        <h3>Updates to This Policy</h3>
                        <p>
                            We may update this Cookie Policy periodically. Any changes will be posted on this page.
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