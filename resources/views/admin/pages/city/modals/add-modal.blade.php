<!-- Basic trigger modal -->
<div class="basic-modal">
    <!-- Modal -->
    <div class="modal fade text-start addCity" wire:ignore.self id="default" tabindex="-1"
        aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.add_new_city') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.add_new_city') }}</h5>
                    <form wire:submit.prevent="saveCity">
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_ar') }}"
                                wire:model="name_ar">
                            <span class="text-danger"> @error('name_ar')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_en') }}"
                                wire:model="name_en">
                            <span class="text-danger"> @error('name_en')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_fr') }}"
                                wire:model="name_fr">
                            <span class="text-danger"> @error('name_fr')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.city_code') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.city_code') }}"
                                wire:model="city_code">
                            <span class="text-danger"> @error('city_code')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.governorate') }}</label>
                            <select class="form-control" wire:model="governorate">
                                <option dusabled value="">{{ trans('admin.choose_the_governorate') }}</option>
                                @foreach ($governorates as $governorate)
                                    <option value="{{ $governorate->id }}">{{ $governorate->name_ar }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger"> @error('governorate')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"
                                data-bs-dismiss="modal">{{ trans('admin.submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
