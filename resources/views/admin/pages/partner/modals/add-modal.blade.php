<!-- Basic trigger modal -->
<div class="basic-modal">   
    <!-- Modal -->
    <div class="modal fade text-start addPartner" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.add_new_parner') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.add_new_parner') }}</h5>
                    <form enctype="multipart/form-data" wire:submit.prevent="savePartner">
                        <div class="form-group">
                            <label for="">{{ trans('admin.name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name') }}" wire:model="name">
                            <span class="text-danger"> @error('name') {{ $message }}@enderror</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="">{{ trans('admin.image') }}</label>
                            <input type="file" id="image" accept="image" class="form-control" wire:model="image">
                            <span class="text-danger"> @error('image') {{ $message }}@enderror</span>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">{{ trans('admin.submit') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
