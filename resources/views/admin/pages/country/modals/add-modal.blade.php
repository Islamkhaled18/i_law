<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start addCountry" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Add new Country</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Add new Country</h5>
                    <form wire:submit.prevent="saveCountry">
                        <div class="form-group">
                            <label for="">Name AR</label>
                            <input type="text" class="form-control" placeholder="Name AR" wire:model="name_ar">
                            <span class="text-danger"> @error('name_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Name EN</label>
                            <input type="text" class="form-control" placeholder="Name EN" wire:model="name_en">
                            <span class="text-danger"> @error('name_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Name FR</label>
                            <input type="text" class="form-control" placeholder="Name FR" wire:model="name_fr">
                            <span class="text-danger"> @error('name_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">country code</label>
                            <input type="text" class="form-control" placeholder="country code" wire:model="country_code">
                            <span class="text-danger"> @error('country_code') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Country phone code</label>
                            <input type="text" class="form-control" placeholder="Country phone code" wire:model="country_phone_code">
                            <span class="text-danger"> @error('country_phone_code') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">currencies</label>
                            <select class="form-control" multiple wire:model="currency">
                                <option value="">No selected</option>
                                @foreach ($currencies as $currency)
                                    <option value="{{ $currency->id }}">{{ $currency->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('currency') {{ $message }}@enderror</span>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
