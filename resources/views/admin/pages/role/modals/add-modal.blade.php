<!-- Basic trigger modal -->
<div class="basic-modal">   
    <!-- Modal -->
    <div class="modal fade text-start addRole" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Add new Role</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Add new Role</h5>
                    <form wire:submit.prevent="saveRole">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" placeholder="Name" wire:model="name">
                            <span class="text-danger"> @error('name') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Permissions</label>
                            <select multiple class="form-control" wire:model="permission">
                                <option disabled  value="">Choose the Permission</option>
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('Permission') {{ $message }}@enderror</span>
                        </div>    
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
