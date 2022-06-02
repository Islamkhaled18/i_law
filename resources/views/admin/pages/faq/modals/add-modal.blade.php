<!-- Basic trigger modal -->
<div class="basic-modal">
    
    <!-- Modal -->
          <div class="modal fade text-start addFAQ" id="default" tabindex="-1" aria-labelledby="myModalLabel16" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h5>{{ trans('admin.add_new_faq') }}</h5>
                    <form wire:submit.prevent="saveFAQ">
                        <div class="form-group">
                            <label for="">{{ trans('admin.question_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.question_ar') }}" wire:model="question_ar">
                            <span class="text-danger"> @error('question_ar') {{ $message }}@enderror</span>
                        </div>
                         <div class="form-group">
                            <label for="">{{ trans('admin.answer_ar') }}</label>
                            <textarea class="form-control" id="answer_ar" name="answer_ar" wire:model="answer_ar"></textarea>
                            <span class="text-danger"> @error('answer_ar') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">{{ trans('admin.question_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.question_en') }}" wire:model="question_en">
                            <span class="text-danger"> @error('question_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.answer_en') }}</label>
                            <textarea class="form-control" id="answer_en"  wire:model="answer_en"></textarea>
                            <span class="text-danger"> @error('answer_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.question_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.question_fr') }}" wire:model="question_fr">
                            <span class="text-danger"> @error('question_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.answer_fr') }}</label>
                            <textarea class="form-control" id="answer_fr"  wire:model="answer_fr"></textarea>                            
                            <span class="text-danger"> @error('answer_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->

