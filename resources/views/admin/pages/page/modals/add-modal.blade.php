<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start addPage" id="xlarge" tabindex="-1" aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Add new Page</h5>
                    <form wire:submit.prevent="savePage">
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
                            <label for="">Desc AR</label>
                            <input type="text" class="form-control" placeholder="Desc AR" wire:model="desc_ar">
                            <span class="text-danger"> @error('desc_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Desc EN</label>
                            <input type="text" class="form-control" placeholder="Desc EN" wire:model="desc_en">
                            <span class="text-danger"> @error('desc_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Desc FR</label>
                            <input type="text" class="form-control" placeholder="Name FR" wire:model="desc_fr">
                            <span class="text-danger"> @error('desc_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Meta Desc</label>
                            {{-- <input type="text" class="form-control" placeholder="Meta Desc" wire:model="meta_desc"> --}}
                            <textarea class="ckeditor form-control" id="summary-ckeditor" wire:model="meta_desc"></textarea>

                            <span class="text-danger"> @error('meta_desc') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Meta Keywords</label>
                            {{-- <input type="text" class="form-control" placeholder="Meta Keywords" wire:model="meta_keywords"> --}}
                            <textarea class="ckeditor form-control" id="summary-ckeditor" wire:model="meta_keywords"></textarea>
                            <span class="text-danger"> @error('meta_keywords') {{ $message }}@enderror</span>
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
