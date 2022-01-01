@extends('layouts.app_theme1')

@section('breadcrumb')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Database Setting</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Database Setting</li>
        </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Database Setting</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                @if (session('database_setting_success'))
                    @component('includes.alert-success')
                        {{ session('database_setting_success') }}
                    @endcomponent
                @endif
                <form action="{{ route('setting.database.update') }}" method="POST">
                    @csrf
                    <div class="border p-4 rounded">
                        <div class="row">
                            @include('parts.form.input.text', [
                                'fields' => ['db_connection', 'db_host', 'db_port', 'db_database', 'db_username', 'db_password#password'],
                                'col' => 4,
                                'values' => [env('DB_CONNECTION'), env('DB_HOST'), env('DB_PORT'), env('DB_DATABASE'), env('DB_USERNAME'), env('DB_PASSWORD')]
                            ])
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary px-5">Edit Database Setting</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
