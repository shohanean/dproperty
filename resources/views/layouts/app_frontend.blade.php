<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>{{ env('APP_NAME') }} - {{ env('APP_TITLE') }}</title>
		<!-- Custom CSS -->
		<link href="{{ asset('frontend_assets') }}/css/styles.css" rel="stylesheet">
	</head>

    <body class="blue-skin">

		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        {{-- <div id="preloader"><div class="preloader"><span></span><span></span></div></div> --}}

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light head-shadow">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="{{ route('index') }}">
								<img src="{{ asset('frontend_assets') }}/img/logo.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
								<li><a href="{{ route('index') }}">Home<span class="submenu-indicator"></span></a>
								</li>
								<li><a href="">About<span class="submenu-indicator"></span></a>
								</li>
								</li>
								<li class="nav-item dropdown">
								  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Accomodation
								  </a>
								  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#">Boys accommodation</a></li>
									<li><a class="dropdown-item" href="#">Girls accommodation</a></li>
								  </ul>
								</li>
								<li><a href="#">Contact us<span class="submenu-indicator"></span></a>
								</li>
							</ul>

							<ul class="nav-menu nav-menu-social align-to-right">
								<li>
									<a href="{{ route('add.property') }}" class="text-success"><img src="{{ asset('frontend_assets') }}/img/submit.svg" width="20" alt="" class="mr-2" />Submit Property</a>
								</li>
                                @guest
								<li class="add-listing">
									<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><img src="{{ asset('frontend_assets') }}/img/user-light.svg" width="12" alt="" class="mr-2" />Sign In</a>
								</li>
                                @endguest
                                @guest
								    <li class="add-listing"><a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</a></li>
                                @else
								    <li class="add-listing"><a href="{{ url('add/property') }}">Go To Dashboard</a></li>
                                @endguest
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->

            @yield('content')

            <!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer">
				<div>
					<div class="container">
						<div class="row">

							<div class="col-lg-3 col-md-4">
								<div class="footer-widget">
									<img src="{{ asset('frontend_assets') }}/img/logo.png" class="img-footer" alt="" />
									<div class="footer-add">
										<p>Dhanmondi 10/A, Dhaka, Bangladesh</p>
										<p>+880 199449963</p>
										<p>info@example.com</p>
									</div>

								</div>
							</div>
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Navigations</h4>
									<ul class="footer-menu">
										<li><a href="#">Home</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Hostel</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">The Highlights</h4>
									<ul class="footer-menu">
										<li><a href="#">Boyes Hostel</a></li>
										<li><a href="#">Girls Hostel</a></li>
										<li><a href="#">Hostel</a></li>
										<li><a href="#">Villas</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-2 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">My Account</h4>
									<ul class="footer-menu">
										<li><a href="#">My Profile</a></li>
										<li><a href="#">My account</a></li>
										<li><a href="#">My Hostel</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">Follow us</h4>
									<ul class="footer-bottom-social">
										<li><a href="#"><i class="ti-facebook"></i></a></li>
										<li><a href="#"><i class="ti-twitter"></i></a></li>
										<li><a href="#"><i class="ti-instagram"></i></a></li>
										<li><a href="#"><i class="ti-linkedin"></i></a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12">
                                @if ($errors->any())
                                    @php
                                        alert()->error('Error!',$errors->all())->autoClose(false);
                                    @endphp
                                @endif
								<p class="mb-0 text-center">© {{ now()->year }} {{ env('APP_NAME') }} All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->

			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log In</h4>
							<div class="login-form">
								<form action="{{ route('login') }}" method="POST">
                                    @csrf
									<div class="form-group">
										<label>Email</label>
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Email" name="email">
											<i class="ti-email"></i>
										</div>
									</div>

									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="*******" name="password">
											<i class="ti-unlock"></i>
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Login</button>
									</div>

								</form>
							</div>
							<div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
									<li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->

			<!-- Sign Up Modal -->
			<div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="sign-up">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Sign Up</h4>
							<div class="login-form">
								<form action="{{ route('register') }}" method="POST">
                                    @csrf
									<div class="row">

										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Full Name" name="name">
													<i class="ti-user"></i>
												</div>
											</div>
										</div>

										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="email" class="form-control" placeholder="Email" name="email">
													<i class="ti-email"></i>
												</div>
											</div>
										</div>

										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="password" class="form-control" placeholder="*******" name="password">
													<i class="ti-unlock"></i>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="password" class="form-control" placeholder="*******" name="password_confirmation">
													<i class="ti-unlock"></i>
												</div>
											</div>
										</div>

										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="017xxxxxxxx" name="phone_number">
													<i class="lni-phone-handset"></i>
												</div>
											</div>
										</div>

										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<select class="form-control" name="role">
														<option value="">-Choose One-</option>
														<option value="2">I want to rent my hostel</option>
														<option value="3">I am looking for renting hostel</option>
													</select>
													<i class="ti-briefcase"></i>
												</div>
											</div>
										</div>

									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Sign Up</button>
									</div>

								</form>
							</div>
							<div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
									<li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{ asset('frontend_assets') }}/js/jquery.min.js"></script>
		<script src="{{ asset('frontend_assets') }}/js/popper.min.js"></script>
		<script src="{{ asset('frontend_assets') }}/js/bootstrap.min.js"></script>
		<script src="{{ asset('frontend_assets') }}/js/rangeslider.js"></script>
		<script src="{{ asset('frontend_assets') }}/js/select2.min.js"></script>
		<script src="{{ asset('frontend_assets') }}/js/jquery.magnific-popup.min.js"></script>
		<script src="{{ asset('frontend_assets') }}/js/slick.js"></script>
		<script src="{{ asset('frontend_assets') }}/js/slider-bg.js"></script>
		<script src="{{ asset('frontend_assets') }}/js/lightbox.js"></script>
		<script src="{{ asset('frontend_assets') }}/js/imagesloaded.js"></script>

		<script src="{{ asset('frontend_assets') }}/js/custom.js"></script>

        @include('sweetalert::alert')
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
	</body>
</html>

