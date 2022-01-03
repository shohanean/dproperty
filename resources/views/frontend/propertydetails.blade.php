@extends('layouts.app_frontend')

@section('content')
<!-- ============================ Hero Banner  Start================================== -->
<div class="featured_slick_gallery gray">
    <div class="featured_slick_gallery-slide">
        <div class="featured_slick_padd"><a href="{{ asset('frontend_assets') }}/img/p-1.jpg" class="mfp-gallery"><img src="{{ asset('frontend_assets') }}/img/p-1.jpg" class="img-fluid mx-auto" alt="" /></a></div>
        <div class="featured_slick_padd"><a href="{{ asset('frontend_assets') }}/img/p-2.jpg" class="mfp-gallery"><img src="{{ asset('frontend_assets') }}/img/p-2.jpg" class="img-fluid mx-auto" alt="" /></a></div>
        <div class="featured_slick_padd"><a href="{{ asset('frontend_assets') }}/img/p-3.jpg" class="mfp-gallery"><img src="{{ asset('frontend_assets') }}/img/p-3.jpg" class="img-fluid mx-auto" alt="" /></a></div>
        <div class="featured_slick_padd"><a href="{{ asset('frontend_assets') }}/img/p-4.jpg" class="mfp-gallery"><img src="{{ asset('frontend_assets') }}/img/p-4.jpg" class="img-fluid mx-auto" alt="" /></a></div>
    </div>
    <a href="JavaScript:Void(0);" class="btn-view-pic">View photos</a>
</div>
<!-- ============================ Hero Banner End ================================== -->

<!-- ============================ Property Detail Start ================================== -->
<section class="gray-simple">
    <div class="container">
        <div class="row">

            <!-- property main detail -->
            <div class="col-lg-8 col-md-12 col-sm-12">

                <div class="property_block_wrap style-2 p-4">
                    <div class="prt-detail-title-desc">
                        <span class="prt-types sale">For Boys</span>
                        <h3>Dhanmondi Student Hostel, Dhaka</h3>
                        <span><i class="lni-map-marker"></i> 5/A Dhanmondi. Dhaka, Bangladesh</span>
                    </div>
                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2 meal-check">

                    <div class="property_block_wrap_header">
                    <h3 class="property_block_title">Room Type & Rent
                        <span class="float-end d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    With Meal
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Without Meal
                                </label>
                                </div>
                        </span>
                    </h3>
                    </div>
                    <div>
                        <div class="block-body">
                            <ul class="deatil_features d-block">
                                <li><h5>Single Bed Room: <span class="prt-price-fix"> BDT 8500</span></h5></li>
                                <li><h5>Double Bed Room: <span class="prt-price-fix"> BDT 7500</span></h5></li>
                                <li><h5>Tripple Bed Room: <span class="prt-price-fix"> BDT 5500</span></h5></li>
                                <li><h5>Quarter Bed Room: <span class="prt-price-fix"> BDT 4000</span></h5></li>
                            </ul>
                        </div>
                        <div class="block-body">
                            <div class="map-container">
                                <img src="{{ asset('frontend_assets') }}/img/meal.png" alt="" class="img-fluid ">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false"><h4 class="property_block_title">Detail & Features</h4></a>
                    </div>
                    <div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
                        <div class="block-body">
                            <ul class="deatil_features">
                                <li><strong>Bed Type:</strong>Double Beds</li>
                                <li><strong>Bathrooms:</strong>1 Bath</li>
                                <li><strong>Hostel Type:</strong>Boys</li>
                                <li><strong>Kitchen Features:</strong>Kitchen Facilities</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Description</h4></a>
                    </div>
                    <div id="clTwo" class="panel-collapse collapse show">
                        <div class="block-body">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#amen"  data-bs-target="#clThree" aria-controls="clThree" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Ameneties</h4></a>
                    </div>

                    <div id="clThree" class="panel-collapse collapse show">
                        <div class="block-body">
                            <ul class="avl-features third color">
                                <li>Air Conditioning</li>
                                <li>Laundry Room</li>
                                <li>Gym</li>
                                <li>Alarm</li>
                                <li>Window Covering</li>
                                <li>Internet</li>
                                <li>Pets Allow</li>
                                <li>Free WiFi</li>
                                <li>Car Parking</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Single Block Wrap -->


                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#loca"  data-bs-target="#clSix" aria-controls="clSix" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Location Map</h4></a>
                    </div>

                    <div id="clSix" class="panel-collapse collapse">
                        <div class="block-body">
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58451.735664658634!2d90.34054381500091!3d23.70335496448681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sDhanmondi%20Student%20Hostel%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1641107541808!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#loca"  data-bs-target="#meal" aria-controls="clSix" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Meal Chart</h4></a>
                    </div>

                    <div id="meal" class="panel-collapse collapse">
                        <div class="block-body">
                            <div class="map-container">
                                <img src="{{ asset('frontend_assets') }}/img/meal.png" alt="" class="img-fluid ">
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Single Block Wrap -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#clSev"  data-bs-target="#clSev" aria-controls="clOne" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Gallery</h4></a>
                    </div>

                    <div id="clSev" class="panel-collapse collapse">
                        <div class="block-body">
                            <ul class="list-gallery-inline">
                                <li>
                                    <a href="{{ asset('frontend_assets') }}/img/p-1.jpg" class="mfp-gallery"><img src="{{ asset('frontend_assets') }}/img/p-1.jpg" class="img-fluid mx-auto" alt="" /></a>
                                </li>
                                <li>
                                    <a href="{{ asset('frontend_assets') }}/img/p-2.jpg" class="mfp-gallery"><img src="{{ asset('frontend_assets') }}/img/p-2.jpg" class="img-fluid mx-auto" alt="" /></a>
                                </li>
                                <li>
                                    <a href="{{ asset('frontend_assets') }}/img/p-3.jpg" class="mfp-gallery"><img src="{{ asset('frontend_assets') }}/img/p-3.jpg" class="img-fluid mx-auto" alt="" /></a>
                                </li>
                                <li>
                                    <a href="{{ asset('frontend_assets') }}/img/p-4.jpg" class="mfp-gallery"><img src="{{ asset('frontend_assets') }}/img/p-4.jpg" class="img-fluid mx-auto" alt="" /></a>
                                </li>
                                <li>
                                    <a href="{{ asset('frontend_assets') }}/img/p-5.jpg" class="mfp-gallery"><img src="{{ asset('frontend_assets') }}/img/p-5.jpg" class="img-fluid mx-auto" alt="" /></a>
                                </li>
                                <li>
                                    <a href="{{ asset('frontend_assets') }}/img/p-6.jpg" class="mfp-gallery"><img src="{{ asset('frontend_assets') }}/img/p-6.jpg" class="img-fluid mx-auto" alt="" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- All over Review -->
                <div class="rating-overview">
                    <div class="rating-overview-box">
                        <span class="rating-overview-box-total">4.2</span>
                        <span class="rating-overview-box-percent">out of 5.0</span>
                        <div class="star-rating" data-rating="5"><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i><i class="ti-star"></i>
                        </div>
                    </div>

                    <div class="rating-bars">
                            <div class="rating-bars-item">
                                <span class="rating-bars-name">Service</span>
                                <span class="rating-bars-inner">
                                    <span class="rating-bars-rating high" data-rating="4.7">
                                        <span class="rating-bars-rating-inner" style="width: 85%;"></span>
                                    </span>
                                    <strong>4.7</strong>
                                </span>
                            </div>
                            <div class="rating-bars-item">
                                <span class="rating-bars-name">Value for Money</span>
                                <span class="rating-bars-inner">
                                    <span class="rating-bars-rating good" data-rating="3.9">
                                        <span class="rating-bars-rating-inner" style="width: 75%;"></span>
                                    </span>
                                    <strong>3.9</strong>
                                </span>
                            </div>
                            <div class="rating-bars-item">
                                <span class="rating-bars-name">Location</span>
                                <span class="rating-bars-inner">
                                    <span class="rating-bars-rating mid" data-rating="3.2">
                                        <span class="rating-bars-rating-inner" style="width: 52.2%;"></span>
                                    </span>
                                    <strong>3.2</strong>
                                </span>
                            </div>
                            <div class="rating-bars-item">
                                <span class="rating-bars-name">Cleanliness</span>
                                <span class="rating-bars-inner">
                                    <span class="rating-bars-rating poor" data-rating="2.0">
                                        <span class="rating-bars-rating-inner" style="width:20%;"></span>
                                    </span>
                                    <strong>2.0</strong>
                                </span>
                            </div>
                    </div>
                </div>
                <!-- All over Review -->

                <!-- Single Reviews Block -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#rev"  data-bs-target="#clEight" aria-controls="clEight" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">15 Reviews</h4></a>
                    </div>

                    <div id="clEight" class="panel-collapse collapse show">
                        <div class="block-body">
                            <div class="author-review">
                                <div class="comment-list">
                                    <ul>
                                        <li class="article_comments_wrap">
                                            <article>
                                                <div class="article_comments_thumb">
                                                    <img src="{{ asset('frontend_assets') }}/img/user-1.jpg" alt="">
                                                </div>
                                                <div class="comment-details">
                                                    <div class="comment-meta">
                                                        <div class="comment-left-meta">
                                                            <h4 class="author-name">Rosalina Kelian</h4>
                                                            <div class="comment-date">19th May 2018</div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
                                                            perspiciatis unde omnis iste natus error.</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                        <li class="article_comments_wrap">
                                            <article>
                                                <div class="article_comments_thumb">
                                                    <img src="{{ asset('frontend_assets') }}/img/user-5.jpg" alt="">
                                                </div>
                                                <div class="comment-details">
                                                    <div class="comment-meta">
                                                        <div class="comment-left-meta">
                                                            <h4 class="author-name">Rosalina Kelian</h4>
                                                            <div class="comment-date">19th May 2018</div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
                                                            perspiciatis unde omnis iste natus error.</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#" class="reviews-checked theme-cl"><i class="fas fa-arrow-alt-circle-down mr-2"></i>See More Reviews</a>
                        </div>
                    </div>

                </div>

                <!-- Single Write a Review -->
                <div class="property_block_wrap style-2">

                    <div class="property_block_wrap_header">
                        <a data-bs-toggle="collapse" data-parent="#comment" data-bs-target="#clTen" aria-controls="clTen" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Write a Review</h4></a>
                    </div>

                    <div id="clTen" class="panel-collapse collapse show">
                        <div class="block-body">
                            <form class="simple-form">
                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control ht-80" placeholder="Messages"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <button class="btn btn-theme-light-2 rounded" type="submit">Submit Review</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <!-- property Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="details-sidebar">
                    <!-- Agent Detail -->
                    <div class="sides-widget">
                        <div class="sides-widget-header">
                            <div class="agent-photo"><img src="{{ asset('frontend_assets') }}/img/user-6.jpg" alt=""></div>
                            <div class="sides-widget-details">
                                <h4><a href="#">Mr. Hostel Manager</a></h4>
                                <span><i class="lni-phone-handset"></i>+880 1853569875</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="sides-widget-body simple-form">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Phone No.</label>
                                <input type="text" class="form-control" placeholder="Your Phone">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control">I'm interested in this Hostel.</textarea>
                            </div>
                            <button class="btn btn-black btn-md rounded full-width">Send Message</button>
                        </div>
                    </div>
                    <!-- Featured Property -->
                    <div class="sidebar-widgets">
                        <h4>Featured Hostel</h4>
                        <div class="sidebar_featured_property">
                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="{{ asset('frontend_assets') }}/img/p-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Azimpur Student Hostel</a></h4>
                                    <span><i class="ti-location-pin"></i>Chapra Masjid, Azimpur</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix sale">For Rent</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>BDT 3500</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="{{ asset('frontend_assets') }}/img/p-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Azimpur Student Hostel</a></h4>
                                    <span><i class="ti-location-pin"></i>Chapra Masjid, Azimpur</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix sale">For Rent</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>BDT 3500</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="{{ asset('frontend_assets') }}/img/p-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Azimpur Student Hostel</a></h4>
                                    <span><i class="ti-location-pin"></i>Chapra Masjid, Azimpur</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix sale">For Rent</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>BDT 3500</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="{{ asset('frontend_assets') }}/img/p-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Azimpur Student Hostel</a></h4>
                                    <span><i class="ti-location-pin"></i>Chapra Masjid, Azimpur</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix sale">For Rent</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>BDT 3500</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- List Sibar Property -->
                            <div class="sides_list_property">
                                <div class="sides_list_property_thumb">
                                    <img src="{{ asset('frontend_assets') }}/img/p-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="sides_list_property_detail">
                                    <h4><a href="single-property-1.html">Azimpur Student Hostel</a></h4>
                                    <span><i class="ti-location-pin"></i>Chapra Masjid, Azimpur</span>
                                    <div class="lists_property_price">
                                        <div class="lists_property_types">
                                            <div class="property_types_vlix sale">For Rent</div>
                                        </div>
                                        <div class="lists_property_price_value">
                                            <h4>BDT 3500</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ============================ Property Detail End ================================== -->
@endsection
