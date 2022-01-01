<!--Page Container-->
<section class="page-container">
    <div class="page-content-wrapper">
        <!--Header Fixed-->
        <div class="header fixed-header">
            <div class="container-fluid" style="padding: 10px 25px">
                <div class="row">
                    <div class="col-9 col-md-6 d-lg-none">
                        <a id="toggle-navigation" href="javascript:void(0);" class="icon-btn mr-3"><i class="fa fa-bars"></i></a>
                        <span class="logo">{{ config('app.name') }}</span>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        @yield('breadcrumb')
                    </div>
                    <div class="col-3 col-md-6 col-lg-4">
                        <a href="{{ route('logout') }}" class="btn btn-danger btn-round pull-right d-none d-md-block" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Main Content-->
        <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                @yield('content')
            </div>
        </div>
    </div>
</section>
