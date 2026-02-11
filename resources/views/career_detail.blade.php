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
                            {{ \Carbon\Carbon::parse($job->posted_date)->format('D M d, Y') }}
                        </span>

                        <h2 class="jobTitle mt-3">{{ $job->title }}</h2>

                        <hr>

                        <div class="jobDescription">
                            {!! $job->description !!}
                        </div>

                        <div class="applyBox mt-5">

                            <h3 class="text-center mb-4">Apply for this position</h3>

                            @if(session('success'))
                                <div class="alert alert-success text-center mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form id="careerForm" action="#" method="POST">
                                @csrf

                                <div class="row">

                                    <!-- Name -->
                                    <div class="col-md-6 mb-3">
                                        <label>Name *</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Enter Name" value="{{ old('name') }}">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6 mb-3">
                                        <label>Email *</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Enter Email" value="{{ old('email') }}">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-md-6 mb-3">
                                        <label>Phone *</label>
                                        <input type="text" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Enter Phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Subject -->
                                    <div class="col-md-6 mb-3">
                                        <label>Subject *</label>
                                        <input type="text" name="subject"
                                            class="form-control @error('subject') is-invalid @enderror"
                                            value="{{ old('subject', 'Application for ' . $job->title) }}">
                                        @error('subject')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <!-- Resume -->
                                    <div class="col-12 mb-4">
                                        <label>Copy and paste your resume here *</label>
                                        <textarea name="resume" rows="6"
                                            class="form-control @error('resume') is-invalid @enderror"
                                            placeholder="Paste your resume details...">{{ old('resume') }}</textarea>
                                        @error('resume')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <input type="hidden" name="job_id" value="{{ $job->id }}">

                                    <div class="col-12 text-center">
                                        <button type="submit" class="customBtn01 px-5">
                                            Submit Application
                                        </button>
                                    </div>

                                </div>
                            </form>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        .jobDetailCard {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.08);
        }

        .jobDate {
            color: #777;
            font-size: 14px;
        }

        .jobTitle {
            font-weight: 700;
            color: #1d2b4f;
        }

        .jobDescription {
            font-size: 16px;
            line-height: 1.8;
            color: #444;
        }

        .applyBox {
            background: #f8f9fb;
            padding: 40px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        .applyBox h5 {
            font-weight: 700;
            color: #1d2b4f;
        }

        .form-control {
            height: 50px;
            border-radius: 8px;
        }

        textarea.form-control {
            height: auto;
            min-height: 120px;
        }

        .customBtn01 {
            background: #0d6efd;
            color: #fff;
            font-weight: 600;
            border-radius: 8px;
            padding: 12px 30px;
            transition: 0.3s;
            border: none;
        }

        .customBtn01:hover {
            background: #0b5ed7;
        }
    </style>
    <div class="modal fade" id="otpModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0 shadow-lg">

                <div class="modal-body p-4 text-center">

                    <!-- Icon -->
                    <div class="mb-3">
                        <div style="
                            width:70px;
                            height:70px;
                            border-radius:50%;
                            background:#e9f2ff;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            margin:auto;">
                            <i class="fas fa-shield-alt text-primary" style="font-size:32px;"></i>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-1">Email Verification</h5>
                    <p class="text-muted mb-3" style="font-size:14px;">
                        Enter the 6-digit code sent to your email
                    </p>

                    <!-- OTP Input -->
                    <input type="text" id="otpInput" class="form-control text-center mb-3" style="
                               letter-spacing:12px;
                               font-size:24px;
                               font-weight:600;
                               border-radius:8px;" maxlength="6" placeholder="● ● ● ● ● ●">

                    <!-- Verify Button -->
                    <button class="btn btn-primary w-100 py-2" id="verifyOtpBtn" disabled>
                        Verify & Submit
                    </button>

                    <!-- Info -->
                    <small class="text-muted d-block mt-3">
                        Didn’t receive the code? Check spam folder
                    </small>

                    <!-- Resend -->
                    <!-- <small class="d-block mt-2">
                        <a href="javascript:void(0)" id="resendOtp" class="text-primary">
                            Resend OTP
                        </a>
                    </small> -->

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $('#careerForm').submit(function (e) {
            e.preventDefault();

            let formData = $(this).serialize();

            Swal.fire({
                title: 'Sending OTP...',
                text: 'Please wait while we verify your email',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.post("{{ route('career_sendOtp') }}", formData, function () {
                Swal.close();
                $('#otpModal').modal('show');
            }).fail(function () {
                Swal.fire('Error', 'Failed to send OTP. Try again.', 'error');
            });
        });

        $('#verifyOtpBtn').click(function () {

            let otp = $('#otpInput').val();

            if (otp.length !== 6) {
                Swal.fire('Invalid OTP', 'Please enter 6 digit OTP', 'warning');
                return;
            }

            let formData = $('#careerForm').serialize() + '&otp=' + otp;

            Swal.fire({
                title: 'Verifying...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.post("{{ route('career_apply') }}", formData, function (res) {

                if (res.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Application Submitted!',
                        text: 'Thank you. We will contact you soon.',
                        confirmButtonColor: '#0d6efd'
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire('Error', res.message, 'error');
                }

            }).fail(function () {
                Swal.fire('Error', 'Server error. Try again.', 'error');
            });
        });

        $('#otpInput').on('input', function () {
            if ($(this).val().length === 6) {
                $('#verifyOtpBtn').prop('disabled', false);
            } else {
                $('#verifyOtpBtn').prop('disabled', true);
            }
        });
    </script>

@endsection