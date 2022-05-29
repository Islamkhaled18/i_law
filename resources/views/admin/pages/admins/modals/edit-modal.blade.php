<!-- Basic trigger modal -->
<div class="basic-modal">

    <!-- Modal -->
    <div class="modal fade text-start editAdmin" wire:ignore.self id="default" tabindex="-1"
        aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit admin</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Edit Admin</h5>
                    <form wire:submit.prevent="update">
                        <input type="hidden" wire:model="admin_id">
                        <div class="form-group">
                            <label for="">Admin Name</label>
                            <input type="text" class="form-control" placeholder="Name" wire:model="upd_name">
                            <span class="text-danger"> @error('upd_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">Admin Email</label>
                            <input type="email" class="form-control" placeholder="Email" wire:model="upd_email">
                            <span class="text-danger"> @error('upd_email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">User name</label>
                            <input type="text" class="form-control" placeholder="User name"
                                wire:model="upd_user_name">
                            <span class="text-danger"> @error('upd_user_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="mobile" class="form-control" placeholder="Phone" wire:model="upd_phone">
                            <span class="text-danger"> @error('upd_phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>



                        <div class="form-group">
                            <label for="">Default language</label>
                            <select class="form-control" wire:model="upd_default_language" >
                                <option disabled>Choose Your Default Language</option>
                                <option value="Arabic">Arabic</option>
                                <option value="English">English</option>
                            </select>
                            <span class="text-danger"> @error('upd_default_language') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>

                            <input type="checkbox" value="1"
                            wire:model="upd_is_active"
                            id="switcheryColor4"
                            class="switchery" data-color="success"
                            @if($admin-> is_active == 1)checked @endif/>

                            <span class="text-danger"> @error('upd_is_active') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Admin Password</label>
                            <input type="Password" class="form-control" placeholder="Password"
                                wire:model="upd_password">
                            <span class="text-danger"> @error('upd_password')
                                    {{ $message }}
                                @enderror
                            </span>
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
