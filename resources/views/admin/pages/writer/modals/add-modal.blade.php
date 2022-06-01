<!-- Basic trigger modal -->
<div class="basic-modal">   
    <!-- Modal -->
    <div class="modal fade text-start addWriter" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Add new Writer</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Add new Writer</h5>
                    <form enctype="multipart/form-data" wire:submit.prevent="saveWriter">
                        <div class="form-group">
                            <label for="">Name AR</label>
                            <input type="text" class="form-control" placeholder="Name AR" wire:model="name_ar">
                            <span class="text-danger"> @error('name_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Name EN</label>
                            <input type="text" class="form-control" placeholder="Name EN" wire:model="name_en">
                            <span class="text-danger"> @error('name_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Bio</label>
                            <input type="text" class="form-control" placeholder="Bio" wire:model="bio">
                            <span class="text-danger"> @error('bio') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Writer Image</label>
                            <input type="file" id="image" name="image" accept="image" class="form-control" placeholder="Image" wire:model="image">
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
