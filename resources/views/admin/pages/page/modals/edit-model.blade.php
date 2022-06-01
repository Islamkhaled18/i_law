<!-- Basic trigger modal -->
<div class="basic-modal">
    <!-- Modal -->
    <div class="modal fade text-start editPage" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit Page</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form wire:submit.prevent="updatePage">
                        <input type="hidden" wire:model="page_id">
                        <div class="form-group">
                            <label for="">Name AR</label>
                            <input type="text" class="form-control" placeholder="Name AR" wire:model="upd_name_ar">
                            <span class="text-danger"> @error('upd_name_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Name EN</label>
                            <input type="text" class="form-control" placeholder="Name EN" wire:model="upd_name_en">
                            <span class="text-danger"> @error('upd_name_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Name FR</label>
                            <input type="text" class="form-control" placeholder="Name FR" wire:model="upd_name_fr">
                            <span class="text-danger"> @error('upd_name_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Desc AR</label>
                            <input type="text" class="form-control" placeholder="Desc AR" wire:model="upd_desc_ar">
                            <span class="text-danger"> @error('upd_desc_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Desc EN</label>
                            <input type="text" class="form-control" placeholder="Desc EN" wire:model="upd_desc_en">
                            <span class="text-danger"> @error('upd_desc_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Desc FR</label>
                            <input type="text" class="form-control" placeholder="Name FR" wire:model="upd_desc_fr">
                            <span class="text-danger"> @error('upd_desc_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Meta Desc</label>
                            <input type="text" class="form-control" placeholder="Meta Desc" wire:model="upd_meta_desc">
                            <span class="text-danger"> @error('upd_meta_desc') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Meta Keywords</label>
                            <input type="text" class="form-control" placeholder="Meta Keywords" wire:model="upd_meta_keywords">
                            <span class="text-danger"> @error('upd_meta_keywords') {{ $message }}@enderror</span>
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
