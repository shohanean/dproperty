@extends('layouts.app_theme1')

@section('breadcrumb')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Role Manager</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Role Manager</li>
        </ol>
        </nav>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-8 mx-auto">
        <h6 class="mb-0 text-uppercase">Role List</h6>
        <p class="mt-3">Below is the list of available roles. You can edit existing one, delete a role if your want to but before you have assign another role to the role holder.</p>
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    @if (Session::has('role_update_success'))
                        @component('includes.alert-success')
                        {{ Session::get('role_update_success') }}
                        @endcomponent
                    @endif
                    <table id="role-list-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Serial No.</th>
                                <th>Role Name</th>
                                <th class="text-center">Permissions</th>
                                <th class="text-center">Users in this role</th>
                                @canany(['can edit role', 'can delete role'])
                                    <th>Action</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tbody>
                            @can ('can see role list')
                                @forelse ($roles as $serial => $role)
                                <tr>
                                    <td>{{ $serial + 1 }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @forelse ($role->getAllPermissions() as $permission)
                                        <span  class="badge bg-light text-dark mb-1">
                                            {{ Str::ucfirst($permission->name) }}
                                        </span>
                                        @empty
                                        <span  class="badge badge-danger">
                                            No Permission Assigned
                                        </span>
                                        @endforelse
                                    </td>
                                    <td class="text-center">
                                        {{ $role->users->count() }}
                                    </td>
                                    @canany(['can edit role', 'can delete role'])
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                        <div class="btn-group">
                                            @can('can edit role')
                                            @include('includes.role-list-modal', [
                                                'role_id' => $role->id,
                                                'role_name' => $role->name,
                                                'permissions' => $permissions,
                                                'assigned_permissions' => $role->getAllPermissions()
                                            ])
                                            @endcan
                                            @can('can delete role')
                                            <form method="post" action="{{ route('role.destroy', $role->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger">Delete</button>
                                            </form>
                                            @endcan
                                        </div>
                                    </td>
                                    @endcanany
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="50" class="text-center">Nothing to show</td>
                                </tr>
                                @endforelse
                            @else
                                <tr>
                                <td colspan="50" class="text-center bg-danger text-white">You do not have the permission to see the list.</td>
                                </tr>
                            @endcan
                        </tbody>
                    </table>
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 mx-auto">
        <h6 class="mb-0 text-uppercase">Add New Role</h6>
        <hr>
        <div class="card shadow-sm border-0 overflow-hidden">
            <div class="card-body">
                @if (Session::has('role_success'))
                    @component('includes.alert-success')
                    <strong>{{ Session::get('role_success') }},</strong> Role Added Successfully!
                    With <strong>{{ Session::get('total_permissions') }}</strong> {{ (Session::get('total_permissions') > 1) ? 'Permissions':'Permission' }}.
                    @endcomponent
                @endif
                <form action="{{ route("role.store") }}" method="POST">
                    @csrf
                    <div class="border p-4 rounded">
                        <div class="row">
                            @include('parts.form.input.text', [
                                'fields' => ['role_title'],
                                'col' => 12,
                                'validation' => true
                            ])
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>
                                    Permissions <i id="select_all_toggle_button" class="fs-2 bi bi-toggle-off"></i>
                                </h5>
                            </div>
                            @foreach ($permissions as $serial => $permission)
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input permission_checkbox" type="checkbox"name="permission[]" value="{{ $permission->id }}" id="permission_{{ $serial }}">
                                        <label class="form-check-label" for="permission_{{ $serial }}">{{ Str::title($permission->name) }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary px-4">Add New Role</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_scripts')
<script>
    $(document).ready(function() {
        // $('#role-list-table').DataTable();

        $('#select_all_toggle_button').click(function(){
            $(this).toggleClass('fs-2 bi bi-toggle-off fs-2 bi bi-toggle-on');
            $('.permission_checkbox').attr('checked') ?
            $('.permission_checkbox').removeAttr('checked', 'checked') : $('.permission_checkbox').attr('checked', 'checked');
        });
    });
</script>
@endsection
