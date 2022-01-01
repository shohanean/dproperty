@extends('layouts.app_theme1')

@section('breadcrumb')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
            </li>
        </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
        <button type="button" class="btn btn-primary">Settings</button>
        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-lg-12 col-xl-6 d-flex">
    <div class="card radius-10 w-100">
        <div class="card-body">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-3 row-cols-xxl-3 g-3">
            <div class="col">
            <div class="card radius-10 bg-tiffany mb-0">
                <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                    <i class="bi bi-ui-radios"></i>
                </div>
                    <h3 class="text-white">{{ $roles }}</h3>
                    <p class="mb-0 text-white">
                        @if ($roles > 1)
                            {{ Str::plural('Role') }}
                        @else
                            Role
                        @endif
                    </p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card radius-10 bg-danger mb-0">
                <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                    <i class="bi bi-ui-checks-grid"></i>
                </div>
                <h3 class="text-white">{{ $permissions }}</h3>
                    <p class="mb-0 text-white">
                        @if ($permissions > 1)
                            {{ Str::plural('Permission') }}
                        @else
                            Permission
                        @endif
                    </p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card radius-10 bg-success mb-0">
                <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h3 class="text-white">{{ $users }}</h3>
                    <p class="mb-0 text-white">
                        @if ($users > 1)
                            {{ Str::plural('User') }}
                        @else
                            User
                        @endif
                    </p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card radius-10 bg-dark mb-0">
                <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                    <i class="bi bi-file-earmark-check-fill"></i>
                </div>
                <h3 class="text-white">18</h3>
                    <p class="mb-0 text-white">Files</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card radius-10 bg-purple mb-0">
                <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                    <i class="bi bi-tags-fill"></i>
                </div>
                <h3 class="text-white">22</h3>
                    <p class="mb-0 text-white">Categories</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card radius-10 bg-orange mb-0">
                <div class="card-body text-center">
                <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                    <i class="bi bi-chat-left-quote-fill"></i>
                </div>
                    <h3 class="text-white">45</h3>
                    <p class="mb-0 text-white">Comments</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-6 d-flex">
    <div class="card radius-10 w-100">
        <div class="card-header bg-transparent">
        <div class="row g-3 align-items-center">
                <div class="col">
                    <h5 class="mb-0">User Status</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="chart1"></div>
        </div>
    </div>
    </div>
</div><!--end row-->

<div class="row">
    <div class="col-12 col-lg-12 col-xl-12 col-xxl-6 d-flex">
    <div class="card radius-10 w-100">
        <div class="card-header bg-transparent">
        <div class="row g-3 align-items-center">
            <div class="col">
            <h5 class="mb-0">Statistics</h5>
            </div>
            <div class="col">
            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                <div class="dropdown">
                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                    </li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="card-body">
        <div class="d-lg-flex align-items-center justify-content-center gap-4">
            <div id="chart3"></div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-circle-fill text-primary me-1"></i> Visitors: <span class="me-1">89</span></li>
            <li class="list-group-item"><i class="bi bi-circle-fill text-danger me-1"></i> Subscribers: <span class="me-1">45</span></li>
            <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i> Contributor: <span class="me-1">35</span></li>
            <li class="list-group-item"><i class="bi bi-circle-fill text-orange me-1"></i> Author: <span class="me-1">62</span></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-12 col-xxl-6 d-flex">
    <div class="card radius-10 w-100">
        <div class="card-header bg-transparent">
        <div class="row g-3 align-items-center">
            <div class="col">
            <h5 class="mb-0">Site Speed</h5>
            </div>
            <div class="col">
            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                <div class="dropdown">
                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                    </li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-6 col-xl-6">
                <div id="chart4"></div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 g-3">
                    <div class="col">
                        <div class="card radius-10 mb-0 shadow-none bg-light-purple">
                        <div class="card-body p-4">
                            <div class="text-center">
                            <h5 class="mb-0 text-purple">75</h5>
                            <p class="mb-0 text-purple">Grade</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card radius-10 mb-0 shadow-none bg-light-orange">
                        <div class="card-body p-4">
                            <div class="text-center">
                            <h5 class="mb-0 text-orange">1.9mb</h5>
                            <p class="mb-0 text-orange">Page Size</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card radius-10 mb-0 shadow-none bg-light-success">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="mb-0 text-success">634 mc</h5>
                            <p class="mb-0 text-success">Load Time</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                <div class="card radius-10 mb-0 shadow-none bg-light-primary">
                    <div class="card-body p-4">
                        <div class="text-center">
                        <h5 class="mb-0 text-primary">48</h5>
                        <p class="mb-0 text-primary">Requests</p>
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
</div><!--end row-->

<div class="row">
    <div class="col-12 col-lg-12 col-xl-6 d-flex">
    <div class="card radius-10 w-100">
        <div class="card-header bg-transparent p-3">
            <div class="row row-cols-1 row-cols-lg-2 g-3 align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Posts vs Comments</h5>
                    </div>
            </div>
        </div>
        <div class="card-body">
            <div id="chart5"></div>
        </div>
    </div>
    </div>
    <div class="col-12 col-lg-12 col-xl-6 d-flex">
        <div class="card radius-10 w-100">
        <div class="card-header bg-transparent">
            <div class="row g-3 align-items-center">
            <div class="col">
                <h5 class="mb-0">Statistics</h5>
            </div>
            <div class="col">
                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                <div class="dropdown">
                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="card-body">
            <div id="chart2"></div>
        </div>
        </div>
    </div>
</div><!--end row-->
@endsection

@section('footer_scripts')
<script>
    // chart 1
    var options = {
        series: [{
            name: "Role wise users",
            data: [450, 650, 440, 160, 350, 414, 555, 257, 400, 555, 257]
        }],
        chart: {
            foreColor: '#9a9797',
            type: "bar",
            //width: 130,
            height: 270,
            toolbar: {
                show: !1
            },
            zoom: {
                enabled: !1
            },
            dropShadow: {
                enabled: 0,
                top: 3,
                left: 14,
                blur: 4,
                opacity: .12,
                color: "#3461ff"
            },
            sparkline: {
                enabled: !1
            }
        },
        markers: {
            size: 0,
            colors: ["#3461ff", "#12bf24"],
            strokeColors: "#fff",
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "40%",
                endingShape: "rounded"
            }
        },
        legend: {
            show: false,
            position: 'top',
            horizontalAlign: 'left',
            offsetX: -20
        },
        dataLabels: {
            enabled: !1
        },
        grid: {
            show: false,
            // borderColor: '#eee',
            // strokeDashArray: 4,
        },
        stroke: {
            show: !0,
        // width: 3,
            curve: "smooth"
        },
        colors: ["#12bf24"],
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        tooltip: {
            theme: 'dark',
            y: {
                formatter: function (val) {
                    return "" + val + ""
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
</script>
@endsection
