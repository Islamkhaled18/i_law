<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start editWriter" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.edit_writer') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.edit_writer') }}</h5>
                    <form wire:submit.prevent="updateWriter">
                        <input type="hidden" wire:model="writer_id">
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_ar') }}" wire:model="upd_name_ar">
                            <span class="text-danger"> @error('upd_name_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{trans('admin.name_en')}}" wire:model="upd_name_en">
                            <span class="text-danger"> @error('upd_name_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.bio') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.bio') }}" wire:model="upd_bio">
                            <span class="text-danger"> @error('upd_bio') {{ $message }}@enderror</span>
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
