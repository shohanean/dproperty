
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
                <div class="col-lg-6 d-flex align-items-center justify-content-center border-end d-none d-sm-block">
                  <img src="{{ asset('dashboard_assets/theme1') }}/images/error/forgot-password-frent-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center">
                        <hr>
                        <i class="bi bi-key"></i>
                        Forgot Your Password?
                        <hr>
                    </h5>
                    {{-- <p class="card-text mb-3">Enter your registered email to reset the password</p> --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-body" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailid" class="form-label">Email</label>
                            <input type="email" class="@error('email') is-invalid @enderror form-control radius-30" id="inputEmailid" placeholder="Enter Email" name="email">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-12">
                            <div class="d-grid gap-3">
                              <button type="submit" class="btn btn-primary radius-30">Send</button>
                            </div>
                          </div>
                          <div class="col-12 text-center">
                            <p class="mb-0">Remember Now? <a href="{{ route('login') }}">Go back to login</a></p>
                          </div>
                        </div>
                    </form>
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


</body>

</html>
