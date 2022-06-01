<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start editCity" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.edit_city') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.edit_city') }}</h5>
                    <form wire:submit.prevent="updateCity">
                        <input type="hidden" wire:model="city_id">
                        <div class="form-group">
                            <label for="">{{trans('admin.name_ar')}}</label>
                            <input type="text" class="form-control" placeholder="{{trans('admin.name_ar')}}" wire:model="upd_name_ar">
                            <span class="text-danger"> @error('upd_name_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_en') }}" wire:model="upd_name_en">
                            <span class="text-danger"> @error('upd_name_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('name_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('name_fr') }}" wire:model="upd_name_fr">
                            <span class="text-danger"> @error('upd_name_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.city_code') }}</label>
                            <input type="text" class="form-control" placeholder="code" wire:model="upd_city_code">
                            <span class="text-danger"> @error('upd_city_code') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.governorate') }}</label>
                            <select class="form-control" wire:model="upd_governorate">
                                <option dusabled value="">{{ trans('admin.choose_the_governorate') }}</option>
                                @foreach ($governorates as $governorate)
                                    <option value="{{ $governorate->id }}">{{ $governorate->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('upd_governorate') {{ $message }}@enderror</span>
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
