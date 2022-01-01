
<!doctype html>
<html lang="en" class="minimal-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('dashboard_assets/theme1') }}/images/favicon-32x32.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('dashboard_assets/theme1') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('dashboard_assets/theme1') }}/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="{{ asset('dashboard_assets/theme1') }}/css/style.css" rel="stylesheet" />
  <link href="{{ asset('dashboard_assets/theme1') }}/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
  <link href="{{ asset('dashboard_assets/theme1') }}/css/pace.min.css" rel="stylesheet" />
  <title>{{ env('APP_NAME') }}</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">

       <!--start content-->
       <main class="authentication-content">
        <div class="container-fluid">
          <div class="authentication-card">
            <div class="card shadow rounded-0 overflow-hidden">
              <div class="row g-0">
                <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center d-none d-sm-block">
                  <img src="{{ asset('dashboard_assets/theme1') }}/images/error/login-img.jpg" class="img-fluid" alt="not found">
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center">
                        <hr>
                        <i class="bi bi-door-open"></i>
                        Login
                        <hr>
                    </h5>
                    <form class="form-body" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="email" class="@error('email') is-invalid @enderror form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email Address" name="email" value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="@error('password') is-invalid @enderror form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Enter Password" name="password">
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-6">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="remember" {{ old('remember') ? 'checked' : '' }}>
                              <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                            </div>
                          </div>
                          <div class="col-6 text-end">	<a href="{{ route('password.request') }}">Forgot Your Password?</a>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Login</button>
                            </div>
                          </div>
                        </div>
                    </form>
                    <button class="btn btn-sm btn-info mt-5" id="g_email_password">Generate Email & Password</button>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </main>
       <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <script src="{{ asset('dashboard_assets/theme1') }}/js/jquery.min.js"></script>
  <script src="{{ asset('dashboard_assets/theme1') }}/js/pace.min.js"></script>

  <script>
      $(document).ready(function(){
          $('#g_email_password').click(function(){
            $('#inputEmailAddress').val('admin@admin.com');
            $('#inputChoosePassword').val('123456789');
          });
      });
  </script>
</body>

</html>
