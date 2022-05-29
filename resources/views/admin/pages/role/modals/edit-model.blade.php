<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start editRole" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit Role</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Edit Role</h5>
                    <form wire:submit.prevent="updateRole">
                        <input type="hidden" wire:model="role_id">
                        <div class="form-group">
                            <label for="">Name AR</label>
                            <input type="text" class="form-control" placeholder="Name AR" wire:model="upd_name">
                            <span class="text-danger"> @error('upd_name') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Permissions</label>
                            <select class="form-control" wire:model="upd_permission">
                                <option disabled multiple value="">Choose the Permission</option>
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('upd_permission') {{ $message }}@enderror</span>
                        </div> 

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
