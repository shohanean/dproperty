<button class="btn btn-outline-success" data-target=".bd-example-modal-lg{{ $role_id }}" data-toggle="modal">Edit</button>
{{-- Modal Example --}}
<div aria-hidden="true" aria-labelledby="myLargeModalLabel" class="modal fade bd-example-modal-lg{{ $role_id }}" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Role - {{ $role_name }}</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> ×</span></button>
            </div>
            <form method="post" action="{{ route('role.update', $role_id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label> Role Name</label>
                        <input class="form-control" placeholder="Enter Role Name" type="text" value="{{ $role_name }}" name="role_name">
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            @foreach ($permissions as $serial => $permission)
                            <div class="checkbox col-md-4">
                                <label class="custom-control custom-checkbox">
                                    <input {{ ($assigned_permissions->pluck('id')->contains($permission->id)) ? 'checked':'' }} type="checkbox" class="custom-control-input" name="permission[]" value="{{ $permission->id }}">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">{{ $permission->name }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button"> Close</button>
                    <button class="btn btn-primary" type="submit"> Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
