@extends('layouts.app_frontend')

@section('content')
<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2 class="ipt-title">Contact Us</h2>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Agency List Start ================================== -->
<section>
    <div class="container">
        <!-- row Start -->
        <div class="row">

            <div class="col-lg-7 col-md-7">

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control simple">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control simple">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control simple">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control simple"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-theme-light-2 rounded" type="submit">Submit Request</button>
                </div>

            </div>

            <div class="col-lg-5 col-md-5">
                <div class="contact-info">

                    <h2>Get In Touch</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                    <div class="cn-info-detail d-block">
                        <div class="cn-info-icon">
                            <i class="ti-home"></i>
                        </div>
                        <div class="cn-info-content">
                            <h4 class="cn-info-title">Reach Us</h4>
                            2512, New Market,<br>Dhanmondi<br>Dhaka, Bangladesh
                        </div>
                    </div>

                    <div class="cn-info-detail d-block">
                        <div class="cn-info-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="cn-info-content">
                            <h4 class="cn-info-title">Drop A Mail</h4>
                            support@bdhostel.com<br>info@bdhostel.com
                        </div>
                    </div>

                    <div class="cn-info-detail d-block">
                        <div class="cn-info-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="cn-info-content">
                            <h4 class="cn-info-title">Call Us</h4>
                            +880 19632469<br>+880 1366398726
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
</section>
<!-- ============================ Agency List End ================================== -->
@endsection
