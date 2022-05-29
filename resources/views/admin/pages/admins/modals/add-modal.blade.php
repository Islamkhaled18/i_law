<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start addAdmin" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Add new admin</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Add new admin</h5>
                    <form enctype="multipart/form-data" wire:submit.prevent="save">
                        <div class="form-group">
                            <label for="">Admin Name</label>
                            <input type="text" class="form-control" placeholder="Name" wire:model="name">
                            <span class="text-danger"> @error('name') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Admin Email</label>
                            <input type="email" class="form-control" placeholder="Email" wire:model="email">
                            <span class="text-danger"> @error('email') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">User name</label>
                            <input type="text" class="form-control" placeholder="User name" wire:model="user_name">
                            <span class="text-danger"> @error('user_name') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="mobile" class="form-control" placeholder="Phone" wire:model="phone">
                            <span class="text-danger"> @error('phone') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Default language</label>
                            <select class="form-control" wire:model="default_language" >
                                <option disabled>Choose Your Default Language</option>
                                <option value="Arabic">Arabic</option>
                                <option value="English">English</option>
                            </select>
                            <span class="text-danger"> @error('default_language') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                             <input type="checkbox" value="1" wire:model="is_active" class="switchery" data-color="success" checked />
                            <span class="text-danger"> @error('is_active') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Admin Password</label>
                            <input type="Password" class="form-control" placeholder="Password" wire:model="password">
                            <span class="text-danger"> @error('password') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Admin Image</label>
                            <input type="file" id="image" accept="image" class="form-control" placeholder="Image" wire:model="image">
                            <span class="text-danger"> @error('image') {{ $message }}@enderror</span>
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
