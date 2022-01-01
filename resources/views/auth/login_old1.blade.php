@extends('layouts.app')

@section('login')
<section style="background: url(http://via.placeholder.com/1920x1080));background-size: cover">
    <div class="height-100-vh bg-primary-trans">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="login-div">
                        <p class="logo mb-1">{{ env('APP_NAME') }}</p>
                        <p class="mb-4" style="color: #a5b5c5">Sign into your account</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="form-control input-lg" placeholder="Email Address" type="email" name="email" value="admin@admin.com">
                                @error ('email')
                                  <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control input-lg" placeholder="Password" type="password" name="password" value="123456789">
                                @error ('password')
                                  <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="checkbox">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Remember me</span>
                                </label>
                            </div>
                            <button class="btn btn-primary mt-2">Sign In</button>
                        </form>
                        <div class="card mt-3">
                            <div class="card-header">
                                Click To Login (Roles)
                            </div>
                            <div class="card-body">
                                @foreach (Spatie\Permission\Models\Role::all() as $role)
                                    <button type="button" class="btn btn-dark m-1">{{ Str::substr($role->name, 0, 2) }}</button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
