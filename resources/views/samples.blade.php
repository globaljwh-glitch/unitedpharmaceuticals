@extends('layout.app')

@section('content')
<section class="innerBanner positionRelative">
    <img src="{{ asset('images/banner/contact-us.jpg') }}" alt="">
</section>

<section class="contentContainer">
    <div class="container">

        <div class="row">
            <div class="col-md-11 m-auto text-center">
                <h2>Request Sample</h2>
                <p class="mb-0">
                    We are grateful for the opportunity to show you why United Pharmaceuticals Inc. is the
                    superior choice for your business.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-11 m-auto">
                <div class="formBlockOuter mt-5">

                    {{-- Success Message --}}
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('request.sample.store') }}">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name <span>*</span></label>
                                    <input type="text" name="f_name" class="form-control"
                                           value="{{ old('f_name') }}">
                                    @error('f_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name <span>*</span></label>
                                    <input type="text" name="l_name" class="form-control"
                                           value="{{ old('l_name') }}">
                                    @error('l_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address <span>*</span></label>
                                    <input type="email" name="email" class="form-control"
                                           value="{{ old('email') }}">
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number <span>*</span></label>
                                    <input type="text" name="phone" class="form-control"
                                           value="{{ old('phone') }}">
                                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Name <span>*</span></label>
                                    <input type="text" name="company_name" class="form-control"
                                           value="{{ old('company_name') }}">
                                    @error('company_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>Our Solutions and Services <span>*</span></label>
                                <select name="solutions" class="form-control" style="height:50px !important;">
                                    <option value="">--Select--</option>
                                    @foreach([
                                        'Preclinical Services',
                                        'Clinical Services',
                                        'Manufacturing and Analytical Services',
                                        'Bioanalytical Services',
                                        'Research Support Services',
                                        'Development Programs'
                                    ] as $solution)
                                        <option value="{{ $solution }}" {{ old('solutions') == $solution ? 'selected' : '' }}>
                                            {{ $solution }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('solutions') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City <span>*</span></label>
                                    <input type="text" name="city" class="form-control"
                                           value="{{ old('city') }}">
                                    @error('city') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State <span>*</span></label>
                                    <input type="text" name="state" class="form-control"
                                           value="{{ old('state') }}">
                                    @error('state') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Zip Code <span>*</span></label>
                                    <input type="text" name="zip" class="form-control"
                                           value="{{ old('zip') }}">
                                    @error('zip') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country <span>*</span></label>
                                    <input type="text" name="country" class="form-control"
                                           value="{{ old('country') }}">
                                    @error('country') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Your Message <span>*</span></label>
                                    <textarea name="message" rows="9" class="form-control">{{ old('message') }}</textarea>
                                    @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <input type="hidden" name="type" value="1">
                            

                            <div class="col-md-12">
                                <div class="form-group text-end">
                                    <input type="submit" value="SUBMIT"
                                           class="btn btn-primary btn-lg customBtn01"
                                           style="width:200px;">
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>
@endsection
