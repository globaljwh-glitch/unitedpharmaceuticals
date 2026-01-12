@extends('layout.app')
@section ('content')
    <section class="innerBanner positionRelative">
        <img src="images/banner/contact-us.jpg" alt="">
    </section>
    <section class="contentContainer">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto text-center">
                    <h2>Send Request</h2>
                    <p class="mb-0">We are grateful for the opportunity to show you why United Pharmaceuticals Inc. is the
                        superior choice for your business.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11 m-auto">
                    <div class="formBlockOuter mt-5">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name <span>*</span></label>
                                        <input type="text" name="" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name <span>*</span></label>
                                        <input type="text" name="" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Address <span>*</span></label>
                                        <input type="email" name="" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number <span>*</span></label>
                                        <input type="email" name="" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company Name <span>*</span></label>
                                        <input type="email" name="" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Our Solutions and Services <span>*</span></label>
                                    <select name="" class="form-control" style="height:50px !important;">
                                        <option value="" selected="">--Select--</option>
                                        <option value="Preclinical Services">Preclinical Services</option>
                                        <option value="Clinical Services">Clinical Services</option>
                                        <option value="Manufacturing and Analytical Services">Manufacturing and Analytical
                                            Services</option>
                                        <option value="Bioanalytical Services">Bioanalytical Services</option>
                                        <option value="Research Support Services">Research Support Services</option>
                                        <option value="Development Programs">Development Programs</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City <span>*</span></label>
                                        <input type="email" name="" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State <span>*</span></label>
                                        <input type="email" name="" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip Code <span>*</span></label>
                                        <input type="email" name="" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country <span>*</span></label>
                                        <input type="email" name="" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Your Message <span>*</span></label>
                                        <textarea name="" rows="9" class="form-control" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="text-end"><input type="submit" value="SUBMIT"
                                                class="btn btn-primary btn-lg btn-block customBtn01 d-inline-block"
                                                style="width:200px;"></div>
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