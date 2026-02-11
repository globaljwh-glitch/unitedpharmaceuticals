@extends('layout.app')

@section('content')

    <section class="innerBanner positionRelative">
        <img src="{{ asset('images/banner/preclinical-services.jpg') }}" alt="Events Banner">
    </section>

    <section class="contentContainer background01">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2 class="mb-3">Global Events and Industry Outreach
                    </h2>
                    <p class="mb-3">
                        United Pharmaceuticals Inc. engages in international conferences, expert panels, and strategic
                        events to exchange insights, present advancements, and build meaningful industry partnerships
                        worldwide.

                    </p>
                    <p class="mb-3">
                        Discover upcoming and previous events where our specialists engage with scientists, collaborators,
                        and global regulatory authorities worldwide.

                    </p>
                    <a href="{{ route('contact') }}" class="customBtn01">
                        Connect With Our Team
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="contentContainer ourUniqueApproach">
        <div class="container">

            <!-- FUTURE EVENTS -->
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">
                                <i class="fas fa-calendar-alt text-primary me-2"></i> Upcoming Events
                            </h4>
                            <span class="badge badge-success">Scheduled</span>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table eventTable table-hover mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Event</th>
                                            <th>Schedule</th>
                                            <th>Location</th>
                                            <th width="120">Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($futureEvents as $event)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('events.show', $event->id) }}"
                                                        class="fw-bold text-primary">
                                                        {{ $event->title }}
                                                    </a>
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($event->from_date)->format('d M Y') }}
                                                    @if($event->to_date)
                                                        - {{ \Carbon\Carbon::parse($event->to_date)->format('d M Y') }}
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $event->location }}
                                                </td>
                                                <td>
                                                    <span>Conference</span>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center text-muted p-4">
                                                    No upcoming events announced at this time.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAST EVENTS -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">
                                <i class="fas fa-history text-secondary me-2"></i> Past Events
                            </h4>
                            <span class="badge badge-secondary">Archive</span>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table eventTable table-hover mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Event</th>
                                            <th>Date</th>
                                            <th>Location</th>
                                            <th width="120">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($otherEvents as $event)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('events.show', $event->id) }}" class="fw-bold text-dark">
                                                        {{ $event->title }}
                                                    </a>
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($event->from_date)->format('d M Y') }}
                                                </td>
                                                <td>
                                                    {{ $event->location }}
                                                </td>
                                                <td>
                                                    <span>Completed</span>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center text-muted p-4">
                                                    No historical events available.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="contentContainer greyBg ourUniqueApproach">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <img src="{{ asset('images/preclinical-research-facilities.jpg') }}"
                        class="imgResponsive thumbImageLeft">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Driving Progress Through Collaboration
                            </h2>
                            <p>
                                This event initiative supports continuous professional development, regulatory insight, and
                                meaningful global engagement across the pharmaceutical sector.
                            </p>
                            <p>
                                We work alongside industry leaders and partners to exchange knowledge that advances
                                healthcare innovation and strengthens operational excellence.

                            </p>
                            <a href="{{ route('contact') }}" class="customBtn01 customBtn01Small">
                                Partner With Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection