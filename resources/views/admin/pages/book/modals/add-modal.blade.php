<!-- Basic trigger modal -->
<div class="basic-modal">   
    <!-- Modal -->
    <div class="modal fade text-start addBook" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Add new Book</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Add new Book</h5>
                    <form wire:submit.prevent="saveBook">
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
                            <label for="">Description AR</label>
                            <input type="text" class="form-control" placeholder="Description AR" wire:model="desc_ar">
                            <span class="text-danger"> @error('desc_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Description EN</label>
                            <input type="text" class="form-control" placeholder="Description EN" wire:model="desc_en">
                            <span class="text-danger"> @error('desc_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Description FR</label>
                            <input type="text" class="form-control" placeholder="Description FR" wire:model="desc_fr">
                            <span class="text-danger"> @error('desc_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Index AR</label>
                            <input type="text" class="form-control" placeholder="Index AR" wire:model="index_ar">
                            <span class="text-danger"> @error('index_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Index EN</label>
                            <input type="text" class="form-control" placeholder="Index EN" wire:model="index_en">
                            <span class="text-danger"> @error('index_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Index FR</label>
                            <input type="text" class="form-control" placeholder="Index FR" wire:model="index_fr">
                            <span class="text-danger"> @error('index_fr') {{ $message }}@enderror</span>
                        </div>
                           
                        <div class="form-group">
                            <label for="">Writer</label>
                            <select class="form-control" wire:model="writer">
                                <option disabled value="">Choose the Writer</option>
                                @foreach ($writers as $writer)
                                    <option value="{{ $writer->id }}">{{ $writer->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('writer') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Vendor</label>
                            <select class="form-control" wire:model="vendor">
                                <option disabled value="">Choose the Vendor</option>
                                @foreach ($vendors as $vendor)
                                    <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('vendor') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">stock</label>
                            <input type="text" class="form-control" placeholder="stock" wire:model="stock">
                            <span class="text-danger"> @error('stock') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">price</label>
                            <input type="text" class="form-control" placeholder="price" wire:model="price">
                            <span class="text-danger"> @error('price') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">offer</label>
                            <input type="text" class="form-control" placeholder="offer" wire:model="offer">
                            <span class="text-danger"> @error('offer') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Type</label>
                            <input type="text" class="form-control" placeholder="Type" wire:model="type">
                            <span class="text-danger"> @error('type') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                             <input type="checkbox" value="1" wire:model="is_active" class="switchery" data-color="success" checked />
                            <span class="text-danger"> @error('is_active') {{ $message }}@enderror</span>
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
