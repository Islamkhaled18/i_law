<!-- Basic trigger modal -->
<div class="basic-modal">   
    <!-- Modal -->
    <div class="modal fade text-start editVendor" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.edit_vendor') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.edit_vendor') }}</h5>
                    <form wire:submit.prevent="updateVendor">
                        <input type="hidden" wire:model="vendor_id">
                        <div class="form-group">
                            <label for="">{{ trans('admin.name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name') }}" wire:model="upd_name">
                            <span class="text-danger"> @error('upd_name') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.email') }}</label>
                            <input type="email" class="form-control" placeholder="{{ trans('admin.email') }}" wire:model="upd_email">
                            <span class="text-danger"> @error('upd_email') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.user_name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.user_name') }}" wire:model="upd_user_name">
                            <span class="text-danger"> @error('user_name') {{ $upd_user_name }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.password') }}</label>
                            <input type="password" class="form-control" placeholder="{{ trans('admin.password') }}" wire:model="upd_password">
                            <span class="text-danger"> @error('upd_password') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.status') }}</label>
                             <input type="checkbox" value="1" wire:model="upd_is_active" class="switchery" data-color="success" checked />
                            <span class="text-danger"> @error('upd_is_active') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.country') }}</label>
                            <select class="form-control" wire:model="upd_country">
                                <option disabled value="">{{ trans('admin.choose_the_country') }}</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('upd_country') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.governorate') }}</label>
                            <select class="form-control" wire:model="upd_governorate">
                                <option dusabled value="">{{ trans('admin.choose_the_governorte') }}</option>
                                @foreach ($governorates as $governorate)
                                    <option value="{{ $governorate->id }}">{{ $governorate->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('upd_governorate') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.city') }}</label>
                            <select class="form-control" wire:model="upd_city">
                                <option disabled value="">{{ trans('admin.choose_the_city') }}</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('upd_city') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.address') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.address') }}" wire:model="upd_address">
                            <span class="text-danger"> @error('upd_address') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.default_language') }}</label>
                            <select class="form-control" wire:model="upd_default_language" >
                                <option disabled>{{ trans('admin.admin.choose_your_default_language') }}</option>
                                <option value="Arabic">{{ trans('admin.arabic') }}</option>
                                <option value="English">{{ trans('admin.english') }}</option>
                                <option value="Frensh">{{ trans('admin.frensh') }}</option>
                            </select>
                            <span class="text-danger"> @error('upd_default_language') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.land_line') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.land_line') }}" wire:model="upd_land_line">
                            <span class="text-danger"> @error('upd_land_line') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.phone') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.phone') }}" wire:model="upd_phone">
                            <span class="text-danger"> @error('upd_phone') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.fax') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.fax') }}" wire:model="upd_fax">
                            <span class="text-danger"> @error('upd_fax') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.whatsapp') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.whatsapp') }}" wire:model="upd_whatsApp">
                            <span class="text-danger"> @error('upd_whatsApp') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.company_name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.company_name') }}" wire:model="upd_company_name">
                            <span class="text-danger"> @error('upd_company_name') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.bio') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.bio') }}" wire:model="upd_bio">
                            <span class="text-danger"> @error('upd_bio') {{ $message }}@enderror</span>
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
