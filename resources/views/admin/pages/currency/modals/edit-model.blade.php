<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start editCurrency" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.edit_currency') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.edit_currency') }}</h5>
                    <form wire:submit.prevent="updateCurrency">
                        <input type="hidden" wire:model="currency_id">
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
                            <label for="">{{ trans('admin.code') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.code') }}" wire:model="upd_code">
                            <span class="text-danger"> @error('upd_code') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">{{ trans('admin.status') }}</label>

                            <input type="checkbox" value="1"
                            wire:model="upd_is_active"
                            id="switcheryColor4"
                            class="switchery" data-color="success"
                            @if($currency-> is_active == 1)checked @endif/>

                            <span class="text-danger"> @error('upd_is_active') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.excange_value') }}</label>
                            <input type="decimal" class="form-control" placeholder="{{ trans('admin.excange_value') }}" wire:model="upd_excange_value">
                            <span class="text-danger"> @error('upd_excange_value') {{ $message }}@enderror</span>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">{{ trans('admin.update') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
