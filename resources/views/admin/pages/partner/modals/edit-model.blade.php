<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start editPartner" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.edit_partner') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.edit_partner') }}</h5>
                    <form wire:submit.prevent="updatePartner">
                        <input type="hidden" wire:model="writer_id">
                        <div class="form-group">
                            <label for="">{{ trans('admin.name') }}</label>
                            <input type="text" class="form-control" placeholder="Name" wire:model="upd_name">
                            <span class="text-danger"> @error('upd_name') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.image') }}</label>
                            <input type="file" id="image" name="image" accept="image" class="form-control" wire:model="image">
                            <span class="text-danger"> @error('image') {{ $message }}@enderror</span>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">{{ trans('admin.update') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
