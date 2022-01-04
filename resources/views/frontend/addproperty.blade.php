@extends('layouts.app_frontend')

@section('content')
<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2 class="ipt-title">Welcome!</h2>
                <span class="ipn-subtitle">Welcome To Your Account</span>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ User Dashboard ================================== -->
<section class="gray-simple">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="filter_search_opt">
                    <a href="javascript:void(0);" onclick="openFilterSearch()">Dashboard Navigation<i class="ml-2 ti-menu"></i></a>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-12">

                <div class="simple-sidebar sm-sidebar" id="filter_search">

                    <div class="search-sidebar_header">
                        <h4 class="ssh_heading">Close Filter</h4>
                        <button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
                    </div>

                    <div class="sidebar-widgets">
                        <div class="dashboard-navbar">

                            <div class="d-user-avater">
                                <img src="{{ asset('uploads/avatars') }}/{{ auth()->user()->avatar }}" class="img-fluid avater" alt="">
                                <h4>{{ auth()->user()->name }}</h4>
                                <span>
                                    @if (auth()->user()->role == 2)
                                        I want to rent my hostel
                                    @else
                                        I am looking for renting hostel
                                    @endif
                                </span>
                            </div>

                            <div class="d-navigation">
                                <ul>
                                    <li><a href="dashboard.html"><i class="ti-dashboard"></i>Profile</a></li>
                                    <li><a href="my-property.html"><i class="ti-layers"></i>My Properties</a></li>
                                    <li class="active"><a href="submit-property-dashboard.html"><i class="ti-pencil-alt"></i>Submit New Property</a></li>
                                    <li><a href="change-password.html"><i class="ti-unlock"></i>Change Password</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="ti-power-off"></i>Log Out</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="dashboard-wraper">
                    <div class="row">
                        <!-- Submit Form -->
                        <div class="col-lg-12 col-md-12">

                            <div class="submit-page">
                                <form action="{{ route('add.property.post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Basic Information -->
                                    <div class="form-submit">
                                        <h3>Basic Information</h3>
                                        <div class="submit-section">
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label>Title<span class="tip-topdata" data-tip="Hostel Title"><i class="ti-help"></i></span></label>
                                                    <input type="text" class="form-control" name="title">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Hostel Type</label>
                                                    <select id="ptypes" class="form-control" name="type">
                                                        <option value="">-Choose One-</option>
                                                        <option value="1">For Boys</option>
                                                        <option value="2">For Girls</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Rent Amount</label>
                                                    <input type="text" class="form-control" placeholder="BDT" name="rent_amount">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Meal Cost</label>
                                                    <input type="text" class="form-control" placeholder="BDT" name="meal_cost">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Bed type</label>
                                                    <input type="text" class="form-control" placeholder="Single Bed, Double Bed" name="bed_type">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>Bathrooms</label>
                                                    <input type="text" class="form-control" placeholder="1,2" name="bathroom">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gallery -->
                                    <div class="form-submit">
                                        <h3>Gallery</h3>
                                        <div class="submit-section">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Upload Hostel Room Images</label>
                                                    <input type="file" class="form-control" name="property_photo">
                                                </div>

                                                {{-- <div class="form-group col-md-12">
                                                    <label>Upload Meal Chart (image,doc,pdf)</label>
                                                    <input type="file" class="form-control">
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Location -->
                                    <div class="form-submit">
                                        <h3>Location</h3>
                                        <div class="submit-section">
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="address">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label>City</label>
                                                    <select class="form-control" name="location_id">
                                                        <option value="">-Choose One-</option>
                                                        @foreach ($locations as $location)
                                                            <option value="{{ $location->id }}">{{ $location->name }}, {{ App\District::find($location->district_id)->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Google Map Location</label>
                                                    <input type="text" class="form-control" name="google_map">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Detailed Information -->
                                    <div class="form-submit">
                                        <h3>Detailed Information</h3>
                                        <div class="submit-section">
                                            <div class="row">

                                                <div class="form-group col-md-12">
                                                    <label>Description</label>
                                                    <textarea name="description" class="form-control h-120"></textarea>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Other Features (optional)</label>
                                                    <div class="o-features">
                                                        <ul class="no-ul-list third-row">
                                                            <li>
                                                                <input id="a-1" class="checkbox-custom" name="features[Air Condition]" type="checkbox">
                                                                <label for="a-1" class="checkbox-custom-label">Air Condition</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-2" class="checkbox-custom" name="features[Bedding]" type="checkbox">
                                                                <label for="a-2" class="checkbox-custom-label">Bedding</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-3" class="checkbox-custom" name="features[Heating]" type="checkbox">
                                                                <label for="a-3" class="checkbox-custom-label">Heating</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-4" class="checkbox-custom" name="features[Internet]" type="checkbox">
                                                                <label for="a-4" class="checkbox-custom-label">Internet</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-5" class="checkbox-custom" name="features[Microwave]" type="checkbox">
                                                                <label for="a-5" class="checkbox-custom-label">Microwave</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-6" class="checkbox-custom" name="features[Smoking Allow]" type="checkbox">
                                                                <label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-7" class="checkbox-custom" name="features[Terrace]" type="checkbox">
                                                                <label for="a-7" class="checkbox-custom-label">Terrace</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-8" class="checkbox-custom" name="features[Balcony]" type="checkbox">
                                                                <label for="a-8" class="checkbox-custom-label">Balcony</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-9" class="checkbox-custom" name="features[Guest Room]" type="checkbox">
                                                                <label for="a-9" class="checkbox-custom-label">Guest Room</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-10" class="checkbox-custom" name="features[WiFi]" type="checkbox">
                                                                <label for="a-10" class="checkbox-custom-label">WiFi</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Contact Information -->
                                    <div class="form-submit">
                                        <h3>Contact Information</h3>
                                        <div class="submit-section">
                                            <div class="row">

                                                <div class="form-group col-md-4">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" value="{{ auth()->user()->name }}" name="c_name">
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" value="{{ auth()->user()->email }}" name="c_email">
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" value="{{ auth()->user()->phone_number }}" name="c_phone_number">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Terms and Conditions Agreement *</label>
                                        <ul class="no-ul-list">
                                            <li>
                                                <input id="aj-1" class="checkbox-custom" name="aj-1" type="checkbox" checked>
                                                <label for="aj-1" class="checkbox-custom-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="btn btn-theme-light-2 rounded" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->
@endsection
