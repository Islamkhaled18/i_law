<!-- Basic trigger modal -->
<div class="basic-modal">
    <!-- Modal -->
    <div class="modal fade text-start editFAQ" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit FAQ</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form wire:submit.prevent="updateFAQ">
                        <input type="hidden" wire:model="faq_id">
                        <div class="form-group">
                            <label for="">Question AR</label>
                            <input type="text" class="form-control" placeholder="Question AR" wire:model="upd_question_ar">
                            <span class="text-danger"> @error('upd_question_ar') {{ $message }}@enderror</span>
                        </div>
                         <div class="form-group">
                            <label for="">Answer AR</label>
                            <input type="text" class="form-control" placeholder="Answer AR" wire:model="upd_answer_ar">
                            <span class="text-danger"> @error('upd_answer_ar') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Question EN</label>
                            <input type="text" class="form-control" placeholder="Question EN" wire:model="upd_question_en">
                            <span class="text-danger"> @error('upd_question_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Answer EN</label>
                            <input type="text" class="form-control" placeholder="Answer EN" wire:model="upd_answer_en">
                            <span class="text-danger"> @error('upd_answer_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Question FR</label>
                            <input type="text" class="form-control" placeholder="Question FR" wire:model="upd_question_fr">
                            <span class="text-danger"> @error('upd_question_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Answer FR</label>
                            <input type="text" class="form-control" placeholder="Answer FR" wire:model="upd_answer_fr">
                            <span class="text-danger"> @error('upd_answer_fr') {{ $message }}@enderror</span>
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
