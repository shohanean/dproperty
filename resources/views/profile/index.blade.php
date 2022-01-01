@extends('layouts.app_theme1')

@section('content')
<div class="row">
    <div class="col-xl-8 mx-auto">
        <h6 class="mb-0 text-uppercase">Personal Information</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form class="row g-3" method="POST" action="{{ route('profile.update', auth()->id()) }}">
                        @csrf
                        @method('PATCH')
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Full Name</label>
                            <input type="text" class="{{ (session('name_status')) ? 'is-valid':'' }} @error('name') is-invalid @enderror form-control" id="validationCustom01" value="{{ auth()->user()->name }}" name="name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            @if (session('name_status'))
                                <small class="text-success">{{ session('name_status') }}</small>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">
                                Email Address
                                <small>(if available)</small>
                            </label>
                            <input type="text" class="{{ (session('email_status')) ? 'is-valid':'' }} @error('email') is-invalid @enderror form-control" id="validationCustom02" value="{{ auth()->user()->email }}" name="email">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            @if (session('email_status'))
                                <small class="text-success">{{ session('email_status') }}</small>
                            @endif
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <h6 class="mb-0 text-uppercase">Change Password</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    @if (session('old_password_not_match'))
                        @component('includes.alert-danger')
                            {{ session('old_password_not_match') }}
                        @endcomponent
                    @endif
                    @if (session('password_change_success'))
                        @component('includes.alert-success')
                            {{ session('password_change_success') }}
                        @endcomponent
                    @endif
                    <form action="{{ route("profile.password.update") }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="old_password" class="col-sm-3 col-form-label">Old Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" placeholder="Enter your old password" name="old_password">
                                @error('old_password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" name="password">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password_confirmation" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Enter your password again" name="password_confirmation">
                                @error('password_confirmation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary px-5">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 mx-auto">
        <h6 class="mb-0 text-uppercase">Profile</h6>
        <hr>
        <div class="card shadow-sm border-0 overflow-hidden">
            <div class="card-body">
                <div class="profile-avatar text-center">
                    <img src="{{ asset('uploads/avatars') }}/{{ auth()->user()->avatar }}" class="rounded-circle shadow" width="120" height="120" alt="">
                    <form action="{{ route("profile.avatar.update") }}" enctype="multipart/form-data" method="POST" class="mt-4">
                        @csrf
                        <div class="row g-0">
                            <div class="col-8">
                                <div class="form-group">
                                    <input type="file" class="@if (session('avatar_status')) is-valid @endif @error('avatar') is-invalid @enderror form-control form-control-sm" name="avatar">
                                    @if (session('avatar_status'))
                                        <span class="text-success">{{ session('avatar_status') }}</span>
                                    @endif
                                    @error('avatar')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                             <div class="col-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-success form-control">Change Photo</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center mt-4">
                    <h4 class="mb-1">{{ auth()->user()->name }}, 27</h4>
                    <p class="mb-0 text-secondary">Account Created: {{ auth()->user()->created_at->diffforhumans() }}</p>
                    <p class="mb-0 text-secondary">
                        Account Last Updated:
                        @if (is_null(auth()->user()->updated_at))
                        Not Yet
                        @else
                        {{ auth()->user()->updated_at->diffforhumans() }}
                        @endif
                    </p>
                </div>
                {{-- <hr>
                <div class="text-start">
                    <h5 class="">About</h5>
                    <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem.</p>
                </div> --}}
            </div>

            {{-- <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                    Followers
                    <span class="badge bg-primary rounded-pill">95</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    Following
                    <span class="badge bg-primary rounded-pill">75</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                    Templates
                    <span class="badge bg-primary rounded-pill">14</span>
                </li>
            </ul> --}}
        </div>
    </div>
</div>
@endsection
