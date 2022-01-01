@extends('layouts.app_theme1')

@section('breadcrumb')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Email Setting</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Email Setting</li>
        </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Email Setting</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                @if (session('email_setting_success'))
                    @component('includes.alert-success')
                        {{ session('email_setting_success') }}
                    @endcomponent
                @endif
                <form action="{{ route('setting.email.update') }}" method="POST">
                    @csrf
                    <div class="border p-4 rounded">
                        <div class="row">
                            @include('parts.form.input.text', [
                                'fields' => ['MAIL_MAILER', 'MAIL_HOST', 'MAIL_PORT', 'MAIL_USERNAME', 'MAIL_PASSWORD#password', 'MAIL_ENCRYPTION', 'MAIL_FROM_ADDRESS'],
                                'col' => 6,
                                'values' => [env('MAIL_MAILER'), env('MAIL_HOST'), env('MAIL_PORT'), env('MAIL_USERNAME'), env('MAIL_PASSWORD'), env('MAIL_ENCRYPTION'), env('MAIL_FROM_ADDRESS')]
                            ])
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary px-5">Edit Email Setting</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
