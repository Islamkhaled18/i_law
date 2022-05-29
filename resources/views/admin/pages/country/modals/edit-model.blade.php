<!-- Basic trigger modal -->
<div class="basic-modal">
    <!-- Modal -->
    <div class="modal fade text-start editCountry" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit Country</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form wire:submit.prevent="updateCountry">
                        <input type="hidden" wire:model="country_id">
                        <div class="form-group">
                            <label for="">Name AR</label>
                            <input type="text" class="form-control" placeholder="Name AR" wire:model="upd_name_ar">
                            <span class="text-danger"> @error('upd_name_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Name EN</label>
                            <input type="text" class="form-control" placeholder="Name EN" wire:model="upd_name_en">
                            <span class="text-danger"> @error('upd_name_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Name FR</label>
                            <input type="text" class="form-control" placeholder="Name FR" wire:model="upd_name_fr">
                            <span class="text-danger"> @error('upd_name_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">country code</label>
                            <input type="text" class="form-control" placeholder="country code" wire:model="upd_country_code">
                            <span class="text-danger"> @error('upd_country_code') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Country phone code</label>
                            <input type="text" class="form-control" placeholder="Country phone code" wire:model="upd_country_phone_code">
                            <span class="text-danger"> @error('upd_country_phone_code') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">currencies</label>
                            <select class="form-control" multiple wire:model="upd_currency">
                                  <option value="">No selected</option>
                                  @foreach ($currencies as $currency)
                                    <option value="{{ $currency->id }}">
                                        {{ $currency->name_ar }}
                                    </option>
                                  @endforeach
                            </select>
                            <span class="text-danger"> @error('upd_currency') {{ $message }}@enderror</span>
                        </div>




                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
