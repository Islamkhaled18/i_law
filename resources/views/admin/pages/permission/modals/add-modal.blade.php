<!-- Basic trigger modal -->
<div class="basic-modal">
    <!-- Modal -->
    <div class="modal fade text-start addPermission" wire:ignore.self id="default" tabindex="-1"
        aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Add new Permission</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Add new Permission</h5>
                    <form wire:submit.prevent="savePermission">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" placeholder="Name" wire:model="name">
                            <span class="text-danger"> @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">Guard</label>
                            <input type="text" class="form-control" placeholder="Guard" wire:model="guard">
                            <span class="text-danger"> @error('guard')
                                    {{ $message }}
                                @enderror
                            </span>
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
