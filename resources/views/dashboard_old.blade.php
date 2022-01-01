@extends('layouts.app')

@section('dashboard')
  active
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="section-title">
            <h4>Overview</h4>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-12 col-sm-6 col-md-3 col-lg-3">
      <div class="block counter-block up mb-4">
          <div class="value">{{ $users }}</div>
          <p class="label">Total Users</p>
      </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-lg-3">
      <div class="block counter-block up mb-4">
          <div class="value">{{ $roles }}</div>
          <p class="label">Total Roles</p>
      </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-lg-3">
      <div class="block counter-block up mb-4">
          <div class="value">{{ $permissions }}</div>
          <p class="label">Total Permissions</p>
      </div>
  </div>
  <div class="col-12 col-sm-6 col-md-3 col-lg-3">
    <div class="block counter-block counter-bg-img mb-4" style="background: url({{ asset('dashboard_assets/images/counter-bg-img.jpg') }});">
        <div class="fade-color">
            <div class="value text-white">{{ $permissions }}</div>
            <p class="label text-white">Permissions</p>
        </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
      <div class="block counter-block mb-4">
          {{ $chart1->container() }}
          {{ $chart1->script() }}
      </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6 col-lg-6">
      <div class="block counter-block mb-4">
          {{ $chart2->container() }}
          {{ $chart2->script() }}
      </div>
  </div>
</div>
@endsection
