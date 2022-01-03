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

                                <!-- Basic Information -->
                                <div class="form-submit">
                                    <h3>Basic Information</h3>
                                    <div class="submit-section">
                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label>Hostel Title<span class="tip-topdata" data-tip="Hostel Title"><i class="ti-help"></i></span></label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Status</label>
                                                <select id="status" class="form-control">
                                                    <option value="">&nbsp;</option>
                                                    <option value="1">For Rent</option>
                                                    <option value="2">For Sale</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Hostel Type</label>
                                                <select id="ptypes" class="form-control">
                                                    <option value="">&nbsp;</option>
                                                    <option value="1">Student</option>
                                                    <option value="2">Bachelor</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Area</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Rent Amount</label>
                                                <input type="text" class="form-control" placeholder="BDT">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Meal Cost</label>
                                                <input type="text" class="form-control" placeholder="BDT">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Bed type</label>
                                                <select id="bedrooms" class="form-control">
                                                    <option value="">&nbsp;</option>
                                                    <option value="1">Single Bed</option>
                                                    <option value="2">Double Bed</option>
                                                    <option value="3">Triple Bed</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Bathrooms</label>
                                                <select id="bathrooms" class="form-control">
                                                    <option value="">&nbsp;</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
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
                                                <input type="file" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Upload Meal Chart (image,doc,pdf)</label>
                                                <input type="file" class="form-control">
                                            </div>
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
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>State</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Zip Code</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Google Map Location</label>
                                                <input type="text" class="form-control">
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
                                                <textarea class="form-control h-120"></textarea>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Other Features (optional)</label>
                                                <div class="o-features">
                                                    <ul class="no-ul-list third-row">
                                                        <li>
                                                            <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                                            <label for="a-1" class="checkbox-custom-label">Air Condition</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                                            <label for="a-2" class="checkbox-custom-label">Bedding</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
                                                            <label for="a-3" class="checkbox-custom-label">Heating</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                                            <label for="a-4" class="checkbox-custom-label">Internet</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
                                                            <label for="a-5" class="checkbox-custom-label">Microwave</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                                            <label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                                            <label for="a-7" class="checkbox-custom-label">Terrace</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                                            <label for="a-8" class="checkbox-custom-label">Balcony</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                                            <label for="a-9" class="checkbox-custom-label">Icon</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
                                                            <label for="a-10" class="checkbox-custom-label">Wi-Fi</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
                                                            <label for="a-11" class="checkbox-custom-label">Beach</label>
                                                        </li>
                                                        <li>
                                                            <input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
                                                            <label for="a-12" class="checkbox-custom-label">Parking</label>
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
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Phone</label>
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Terms and Conditions Agreement *</label>
                                    <ul class="no-ul-list">
                                        <li>
                                            <input id="aj-1" class="checkbox-custom" name="aj-1" type="checkbox">
                                            <label for="aj-1" class="checkbox-custom-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="form-group col-lg-12 col-md-12">
                                    <button class="btn btn-theme-light-2 rounded" type="submit">Submit & Preview</button>
                                </div>

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
