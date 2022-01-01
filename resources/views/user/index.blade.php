@extends('layouts.app_theme1')

@section('breadcrumb')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">User Manager</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">User Manager</li>
        </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Add User</h6>
        <hr>
        <div class="card">
            <div class="card-body">
                @if (Session::has('user_success'))
                    @component('includes.alert-success')
                        {{ Session::get('user_success') }}
                    @endcomponent
                @endif
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="border p-4 rounded">
                        <div class="row">
                            @include('parts.form.input.text', [
                                'fields' => ['name', 'email#email', 'password#password', 'password_confirmation#password'],
                                'col' => 6,
                                'validation' => true
                            ])
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Role</label>
                                <select class="form-select" name="role_name">
                                    <option value="">-Select One Role-</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }} | Permission Amount: {{ $role->permissions->count() }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary px-5">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">User List With Role</h6>
        <p class="mt-3">Below is the list of available roles. You can edit existing one, delete a role if your want to but before you have assign another role to the role holder.</p>
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="role-list-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Avatar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $serial => $user)
                            <tr>
                                <td>{{ $serial + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->timezone('Asia/Dhaka')->format('d/m/Y h:i:s A') }}<br>({{ $user->created_at->timezone('Asia/Dhaka')->diffForHumans() }})</td>
                                <td>{{ $user->getRoleNames()->first() }}</td>
                                <td>
                                @foreach ($user->getAllPermissions() as $permission)
                                    <li>{{ $permission->name }}</li>
                                @endforeach
                                </td>
                                <td>
                                <img src="{{ asset('uploads/avatars').'/'.$user->avatar }}" alt="{{ $user->avatar }}" width="70">
                                </td>
                                <td>-</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="50" class="text-center">Nothing to show</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_scripts')
<script>
    $(document).ready(function() {
        $('#role-list-table').DataTable();
    });
</script>
@endsection
