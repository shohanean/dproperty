@extends('layouts.app_frontend')

@section('content')
<!-- ============================ Hero Banner  Start================================== -->
<div class="image-cover hero-banner" style="background:url({{ asset('frontend_assets') }}/img/banner-3.jpg) no-repeat;">
    <div class="container">
        <div class="hero-search-wrap">
            <div class="hero-search">
                <h1>Find accessible Hostel to rent</h1>
            </div>
            <div class="hero-search-content side-form">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <div class="input-with-icon">
                                <input type="text" class="form-control" placeholder="Search for a location">
                                <img src="{{ asset('frontend_assets') }}/img/pin.svg" width="18" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Min Price</label>
                            <select id="minprice" class="form-control">
                                <option value="">&nbsp;</option>
                                <option value="1">500</option>
                                <option value="2">1000</option>
                                <option value="3">1500</option>
                                <option value="4">2000</option>
                                <option value="5">3000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Max Price</label>
                            <select id="maxprice" class="form-control">
                                <option value="">&nbsp;</option>
                                <option value="1">1000</option>
                                <option value="2">1500</option>
                                <option value="3">2000</option>
                                <option value="4">3000</option>
                                <option value="5">5000</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Hostel Type</label>
                            <select id="ptypes" class="form-control">
                                <option value="">&nbsp;</option>
                                <option value="1">Student</option>
                                <option value="2">Bachelor</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label>Bed Rooms</label>
                            <select id="bedrooms" class="form-control">
                                <option value="">&nbsp;</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Property Location</label>
                            <select id="cities" class="form-control">
                                <option value="">&nbsp;</option>
                                <option value="1">Dhanmondi</option>
                                <option value="2">Banani</option>
                                <option value="3">Mirpur</option>
                                <option value="4">Mohammadpur</option>
                                <option value="5">Gulshan</option>
                                <option value="6">Uttara</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="hero-search-action">
                <a href="#" class="btn search-btn">Search Result</a>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Hero Banner End ================================== -->

<!-- ============================ Step How To Use Start ================================== -->
<section>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>How It Works?</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="middle-icon-features-item">
                    <div class="icon-features-wrap"><div class="middle-icon-large-features-box f-light-success"><i class="ti-receipt text-success"></i></div></div>
                    <div class="middle-icon-features-content">
                        <h4>Evaluate Property</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="middle-icon-features-item">
                    <div class="icon-features-wrap"><div class="middle-icon-large-features-box f-light-warning"><i class="ti-user text-warning"></i></div></div>
                    <div class="middle-icon-features-content">
                        <h4>Meet Your Manager</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="middle-icon-features-item remove">
                    <div class="icon-features-wrap"><div class="middle-icon-large-features-box f-light-blue"><i class="ti-shield text-blue"></i></div></div>
                    <div class="middle-icon-features-content">
                        <h4>Close The Deal</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have Ipsum available.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ Step How To Use End ====================== -->

<!-- ================= Explore Property ================= -->
<section class="bg-light">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>Explore Good places</h2>
                    <p>There are total <b>{{ $properties->count() }}</b> properties that you might like</p>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse ($properties->take(6) as $property)
            <!-- Single Property -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="property-listing property-2">

                        <div class="listing-img-wrapper">
                            <div class="list-img-slide">
                                <div class="click">
                                    <div><a href="#"><img src="{{ asset('uploads/property_photos') }}/{{ $property->property_photo }}" class="img-fluid mx-auto" alt="" /></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-wrapper">
                            <div class="listing-short-detail-wrap">
                                <div class="listing-short-detail">
                                    <span class="property-type">
                                        @if ($property->type == 1)
                                            For Boys
                                        @else
                                            For Girls
                                        @endif
                                    </span>
                                    <h4 class="listing-name verified"><a href="#" class="prt-link-detail">{{ $property->title }}</a></h4>
                                </div>
                                <div class="listing-short-detail-flex">
                                    <h6 class="listing-card-info-price">৳{{ $property->rent_amount }}</h6>
                                </div>
                            </div>
                        </div>

                        <div class="price-features-wrapper">
                            <div class="list-fx-features">
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="{{ asset('frontend_assets') }}/img/bed.svg" width="13" alt="" /></div>{{ $property->bed_type }}
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="{{ asset('frontend_assets') }}/img/bathtub.svg" width="13" alt="" /></div>{{ $property->bathroom }} Bath
                                </div>
                                {{-- <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="{{ asset('frontend_assets') }}/img/move.svg" width="13" alt="" /></div>650 sqft
                                </div> --}}
                            </div>
                        </div>

                        <div class="listing-detail-footer">
                            <div class="footer-first">
                                <div class="foot-location"><img src="{{ asset('frontend_assets') }}/img/pin.svg" width="18" alt="" />{{ $property->address }}</div>
                            </div>
                            <div class="footer-flex">
                                <a href="{{ route('property.details', $property->id) }}" class="prt-view">View</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Property -->
            @empty
            <div class="alert alert-danger">
                No Property Added Yet!
            </div>
            @endforelse
        </div>

        @if ($properties->count() > 6)
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <a href="listings-list-with-sidebar.html" class="btn btn-theme-light-2 rounded">Browse More Property</a>
            </div>
        </div>
        @endif

    </div>
</section>
<!-- ================================= Explore Property =============================== -->

<!-- ============================ Property Location Start ================================== -->
<section>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>Find By Locations</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($locations as $location)
                <div class="col-lg-4 col-md-4">
                    <div class="location-property-wrap">
                        <div class="location-property-thumb">
                            <a href="#"><img src="{{ asset('frontend_assets') }}/img/c-1.png" class="img-fluid" alt="" /></a>
                        </div>
                        <div class="location-property-content">
                            <div class="lp-content-flex">
                                <h4 class="lp-content-title">{{ $location->name }}, {{ App\District::find($location->district_id)->name }}</h4>
                                <span>01 Property For Rent</span>
                            </div>
                            <div class="lp-content-right">
                                <a href="#" class="lp-property-view"><i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <a href="#" class="btn btn-theme-light-2 rounded">Browse More Locations</a>
            </div>
        </div>

    </div>
</section>
<!-- ============================ Property Location End ================================== -->

<!-- ============================ Smart Testimonials ================================== -->
<section class="bg-orange">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <h2>Good Reviews by Customers</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-lg-12 col-md-12">

                <div class="smart-textimonials smart-center" id="smart-textimonials">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="item-box">
                            <div class="smart-tes-author">
                                <div class="st-author-box">
                                    <div class="st-author-thumb">
                                        <div class="quotes bg-blue"><i class="ti-quote-right"></i></div>
                                        <img src="{{ asset('frontend_assets') }}/img/user-3.jpg" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>

                            <div class="smart-tes-content">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
                            </div>

                            <div class="st-author-info">
                                <h4 class="st-author-title">James Tahsan</h4>
                                <span class="st-author-subtitle">Software Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ============================ Smart Testimonials End ================================== -->

<!-- ============================ Call To Action ================================== -->
<section class="theme-bg call-to-act-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="call-to-act">
                    <div class="call-to-act-head">
                        <h3>Want to rent your Property?</h3>
                        <span>We'll help you to rent your Properties</span>
                    </div>
                    <a href="#" class="btn btn-call-to-act">SignUp Today</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ============================ Call To Action End ================================== -->
@endsection
