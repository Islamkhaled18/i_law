<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
    <div class="modal fade text-start addCurrency" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Add new Currency</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Add new Currency</h5>
                    <form wire:submit.prevent="saveCurrency">
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
                            <label for="">code</label>
                            <input type="text" class="form-control" placeholder="code" wire:model="code">
                            <span class="text-danger"> @error('code') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Status</label>
                             <input type="checkbox" value="1" wire:model="is_active" class="switchery" data-color="success" checked />
                            <span class="text-danger"> @error('is_active') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Excange Value</label>
                            <input type="decimal" class="form-control" placeholder="Excange Value" wire:model="excange_value">
                            <span class="text-danger"> @error('excange_value') {{ $message }}@enderror</span>
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
