<!-- Basic trigger modal -->
<div class="basic-modal">   
    <!-- Modal -->
    <div class="modal fade text-start addUser" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Add new User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Add new User</h5>
                    <form wire:submit.prevent="saveUser">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" placeholder="Name" wire:model="name">
                            <span class="text-danger"> @error('name') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Email" wire:model="email">
                            <span class="text-danger"> @error('email') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">User name</label>
                            <input type="text" class="form-control" placeholder="Email" wire:model="user_name">
                            <span class="text-danger"> @error('user_name') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" placeholder="password" wire:model="password">
                            <span class="text-danger"> @error('password') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                             <input type="checkbox" value="1" wire:model="is_active" class="switchery" data-color="success" checked />
                            <span class="text-danger"> @error('is_active') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Country</label>
                            <select class="form-control" wire:model="country">
                                <option disabled value="">Choose the country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('country') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Governorate</label>
                            <select class="form-control" wire:model="governorate">
                                <option dusabled value="">Choose the Governorate</option>
                                @foreach ($governorates as $governorate)
                                    <option value="{{ $governorate->id }}">{{ $governorate->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('governorate') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <select class="form-control" wire:model="city">
                                <option disabled value="">Choose the City</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('city') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" placeholder="Address" wire:model="address">
                            <span class="text-danger"> @error('address') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Default Language</label>
                            <input type="text" class="form-control" placeholder="Default Language" wire:model="default_language">
                            <span class="text-danger"> @error('default_language') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Land line</label>
                            <input type="text" class="form-control" placeholder="Land line" wire:model="land_line">
                            <span class="text-danger"> @error('land_line') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" placeholder="Phone" wire:model="phone">
                            <span class="text-danger"> @error('phone') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Fax</label>
                            <input type="text" class="form-control" placeholder="Fax" wire:model="fax">
                            <span class="text-danger"> @error('fax') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">WhatsApp</label>
                            <input type="text" class="form-control" placeholder="WhatsApp" wire:model="whatsApp">
                            <span class="text-danger"> @error('whatsApp') {{ $message }}@enderror</span>
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
