<!-- Basic trigger modal -->
<div class="basic-modal">

    <!-- Modal -->
    <div class="modal fade text-start editAdmin" wire:ignore.self id="default" tabindex="-1"
        aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.edit') }} {{ trans('admin.admin') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.edit') }} {{ trans('admin.admin') }}</h5>
                    <form wire:submit.prevent="update">
                        <input type="hidden" wire:model="admin_id">
                        <div class="form-group">
                            <label for="">{{ trans('admin.name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name') }}" wire:model="upd_name">
                            <span class="text-danger"> @error('upd_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.email') }}</label>
                            <input type="email" class="form-control" placeholder="{{ trans('admin.email') }}" wire:model="upd_email">
                            <span class="text-danger"> @error('upd_email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.user_name') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.user_name') }}"
                                wire:model="upd_user_name">
                            <span class="text-danger"> @error('upd_user_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.phone') }}</label>
                            <input type="mobile" class="form-control" placeholder="{{ trans('admin.phone') }}" wire:model="upd_phone">
                            <span class="text-danger"> @error('upd_phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="">{{ trans('admin.default_language') }}</label>
                            <select class="form-control" wire:model="upd_default_language" >
                                <option disabled>{{ trans('admin.choose_your_default_language') }}</option>
                                <option value="Arabic">Arabic</option>
                                <option value="English">English</option>
                            </select>
                            <span class="text-danger"> @error('upd_default_language') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>

                            <input type="checkbox" value="1"
                            wire:model="upd_is_active"
                            id="switcheryColor4"
                            class="switchery" data-color="success"
                            @if($admin-> is_active == 1)checked @endif/>

                            <span class="text-danger"> @error('upd_is_active') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.password') }}</label>
                            <input type="Password" class="form-control" placeholder="{{ trans('admin.password') }}"
                                wire:model="upd_password">
                            <span class="text-danger"> @error('upd_password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
