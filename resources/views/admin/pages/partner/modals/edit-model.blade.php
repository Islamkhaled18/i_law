<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start editPartner" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit Partner</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Edit Partner</h5>
                    <form wire:submit.prevent="updatePartner">
                        <input type="hidden" wire:model="writer_id">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" placeholder="Name" wire:model="upd_name">
                            <span class="text-danger"> @error('upd_name') {{ $message }}@enderror</span>
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
