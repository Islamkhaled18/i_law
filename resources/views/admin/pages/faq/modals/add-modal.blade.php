<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
          <div class="modal fade text-start addFAQ" id="xlarge" tabindex="-1" aria-labelledby="myModalLabel16" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h5>Add new FAQ</h5>
                    <form wire:submit.prevent="saveFAQ">
                        <div class="form-group">
                            <label for="">Question AR</label>
                            <input type="text" class="form-control" placeholder="Question AR" wire:model="question_ar">
                            <span class="text-danger"> @error('question_ar') {{ $message }}@enderror</span>
                        </div>
                         <div class="form-group">
                            <label for="">Answer AR</label>
                            <textarea class="ckeditor form-control" id="summary-ckeditor" wire:model="answer_ar"></textarea>
                            {{-- <input type="text" class="form-control" placeholder="Answer AR" wire:model="answer_ar"> --}}
                            <span class="text-danger"> @error('answer_ar') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Question EN</label>
                            <input type="text" class="form-control" placeholder="Question EN" wire:model="question_en">
                            <span class="text-danger"> @error('question_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Answer EN</label>
                            {{-- <input type="text" class="form-control" placeholder="Answer EN" wire:model="answer_en"> --}}
                            <textarea class="ckeditor form-control" id="summary-ckeditor" wire:model="answer_en"></textarea>
                            <span class="text-danger"> @error('answer_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Question FR</label>
                            <input type="text" class="form-control" placeholder="Question FR" wire:model="question_fr">
                            <span class="text-danger"> @error('question_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">Answer FR</label>
                            {{-- <input type="text" class="form-control" placeholder="Answer FR" wire:model="answer_fr"> --}}
                            <textarea class="ckeditor form-control" id="summary-ckeditor" wire:model="answer_fr"></textarea>                            
                            <span class="text-danger"> @error('answer_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
