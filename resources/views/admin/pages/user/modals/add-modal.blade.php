<!-- Basic trigger modal -->
<div class="basic-modal">   
    <!-- Modal -->
    <div class="modal fade text-start addUser" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.add_new_user') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.add_new_user') }}</h5>
                    <form wire:submit.prevent="saveUser">
                        <div class="form-group">
                            <label for="">{{ trans('admin.name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name') }}" wire:model="name">
                            <span class="text-danger"> @error('name') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.email') }}</label>
                            <input type="email" class="form-control" placeholder="{{ trans('admin.email') }}" wire:model="email">
                            <span class="text-danger"> @error('email') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.user_name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.user_name') }}" wire:model="user_name">
                            <span class="text-danger"> @error('user_name') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.password') }}</label>
                            <input type="password" class="form-control" placeholder="{{ trans('admin.password') }}" wire:model="password">
                            <span class="text-danger"> @error('password') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.status') }}</label>
                             <input type="checkbox" value="1" wire:model="is_active" class="switchery" data-color="success" checked />
                            <span class="text-danger"> @error('is_active') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.country') }}</label>
                            <select class="form-control" wire:model="country">
                                <option disabled value="">{{ trans('admin.choose_the_country') }}</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('country') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.governorate') }}</label>
                            <select class="form-control" wire:model="governorate">
                                <option dusabled value="">{{ trans('admin.choose_the_governorate') }}</option>
                                @foreach ($governorates as $governorate)
                                    <option value="{{ $governorate->id }}">{{ $governorate->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('governorate') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.city') }}</label>
                            <select class="form-control" wire:model="city">
                                <option disabled value="">{{ trans('dmin.choose_the_city') }}</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('city') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.address') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.address') }}" wire:model="address">
                            <span class="text-danger"> @error('address') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.default_language') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.default_language') }}" wire:model="default_language">
                            <span class="text-danger"> @error('default_language') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.land_line') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.land_line') }}" wire:model="land_line">
                            <span class="text-danger"> @error('land_line') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.phone') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.phone') }}" wire:model="phone">
                            <span class="text-danger"> @error('phone') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.fax') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.fax') }}" wire:model="fax">
                            <span class="text-danger"> @error('fax') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.whatsapp') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.whatsapp') }}" wire:model="whatsApp">
                            <span class="text-danger"> @error('whatsApp') {{ $message }}@enderror</span>
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
