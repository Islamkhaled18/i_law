<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start editBook" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit Book</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Edit Book</h5>
                    <form wire:submit.prevent="updateBook">
                        <input type="hidden" wire:model="book_id">
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
                            <label for="">Description AR</label>
                            <input type="text" class="form-control" placeholder="Description AR" wire:model="upd_desc_ar">
                            <span class="text-danger"> @error('upd_desc_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Description EN</label>
                            <input type="text" class="form-control" placeholder="Description EN" wire:model="upd_desc_en">
                            <span class="text-danger"> @error('upd_desc_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Description FR</label>
                            <input type="text" class="form-control" placeholder="Description FR" wire:model="upd_desc_fr">
                            <span class="text-danger"> @error('upd_desc_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Index AR</label>
                            <input type="text" class="form-control" placeholder="Index AR" wire:model="upd_index_ar">
                            <span class="text-danger"> @error('upd_index_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Index EN</label>
                            <input type="text" class="form-control" placeholder="Index EN" wire:model="upd_index_en">
                            <span class="text-danger"> @error('upd_index_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Index FR</label>
                            <input type="text" class="form-control" placeholder="Index FR" wire:model="upd_index_fr">
                            <span class="text-danger"> @error('upd_index_fr') {{ $message }}@enderror</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Writer</label>
                            <select class="form-control" wire:model="upd_writer">
                                <option disabled value="">Choose the Writer</option>
                                @foreach ($writers as $writer)
                                    <option value="{{ $writer->id }}">{{ $writer->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('upd_writer') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Vendor</label>
                            <select class="form-control" wire:model="upd_vendor">
                                <option disabled value="">Choose the Vendor</option>
                                @foreach ($vendors as $vendor)
                                    <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('upd_vendor') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Section</label>
                            <select class="form-control" wire:model="upd_section">
                                <option disabled value="">Choose the section</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('upd_section') {{ $message }}@enderror</span>
                        </div>


                        <div class="form-group">
                            <label for="">stock</label>
                            <input type="text" class="form-control" placeholder="stock" wire:model="upd_stock">
                            <span class="text-danger"> @error('upd_stock') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">price</label>
                            <input type="text" class="form-control" placeholder="price" wire:model="upd_price">
                            <span class="text-danger"> @error('upd_price') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">offer</label>
                            <input type="text" class="form-control" placeholder="offer" wire:model="upd_offer">
                            <span class="text-danger"> @error('upd_offer') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Type</label>
                            <input type="text" class="form-control" placeholder="Type" wire:model="upd_type">
                            <span class="text-danger"> @error('upd_type') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Status</label>

                            <input type="checkbox" value="1"
                            wire:model="upd_is_active"
                            id="switcheryColor4"
                            class="switchery" data-color="success"
                            @if($book-> is_active == 1)checked @endif/>

                            <span class="text-danger"> @error('upd_is_active') {{ $message }}@enderror</span>
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
