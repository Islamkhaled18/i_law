<!-- Basic trigger modal -->
<div class="basic-modal">
    <!-- Modal -->
    <div class="modal fade text-start editPage" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.edit_page') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form wire:submit.prevent="updatePage">
                        <input type="hidden" wire:model="page_id">
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_ar') }}" wire:model="upd_name_ar">
                            <span class="text-danger"> @error('upd_name_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_en') }}" wire:model="upd_name_en">
                            <span class="text-danger"> @error('upd_name_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_fr') }}" wire:model="upd_name_fr">
                            <span class="text-danger"> @error('upd_name_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.description_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.description_ar') }}" wire:model="upd_desc_ar">
                            <span class="text-danger"> @error('upd_desc_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.description_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.description_en') }}" wire:model="upd_desc_en">
                            <span class="text-danger"> @error('upd_desc_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.description_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.description_fr') }}" wire:model="upd_desc_fr">
                            <span class="text-danger"> @error('upd_desc_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.meta_desc') }}</label>
                            <input type="text" class="form-control" placeholder="Meta Desc" wire:model="upd_meta_desc">
                            <span class="text-danger"> @error('upd_meta_desc') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.meta_keywords') }}</label>
                            <input type="text" class="form-control" placeholder="Meta Keywords" wire:model="upd_meta_keywords">
                            <span class="text-danger"> @error('upd_meta_keywords') {{ $message }}@enderror</span>
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
