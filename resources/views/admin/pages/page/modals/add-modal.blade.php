<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start addPage" id="xlarge" tabindex="-1" aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.add_new_page') }}</h5>
                    <form wire:submit.prevent="savePage">
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_ar') }}" wire:model="name_ar">
                            <span class="text-danger"> @error('name_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_en') }}" wire:model="name_en">
                            <span class="text-danger"> @error('name_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_fr') }}" wire:model="name_fr">
                            <span class="text-danger"> @error('name_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.description_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.description_ar') }}" wire:model="desc_ar">
                            <span class="text-danger"> @error('desc_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.description_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.description_en') }}" wire:model="desc_en">
                            <span class="text-danger"> @error('desc_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.description_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.description_fr') }}" wire:model="desc_fr">
                            <span class="text-danger"> @error('desc_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.meta_desc') }}</label>
                            <textarea class="form-control" id="Meta_Desc" wire:model="meta_desc"></textarea>
                            <span class="text-danger"> @error('meta_desc') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.meta_keywords') }}</label>
                            <textarea class="form-control" id="Meta_Keywords" wire:model="meta_keywords"></textarea>
                            <span class="text-danger"> @error('meta_keywords') {{ $message }}@enderror</span>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
