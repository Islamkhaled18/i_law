<!-- Basic trigger modal -->
<div class="basic-modal">
    <!-- Modal -->
    <div class="modal fade text-start editFAQ" id="default" tabindex="-1" aria-labelledby="myModalLabel17"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">{{ trans('admin.edit_faq') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form wire:submit.prevent="updateFAQ">
                        <input type="hidden" wire:model="faq_id">
                        <div class="form-group">
                            <label for="">{{ trans('admin.question_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.question_ar') }}"
                                wire:model="upd_question_ar">
                            <span class="text-danger"> @error('upd_question_ar')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.answer_ar') }}</label>
                            <textarea class="form-control" id="edit_answer_ar" name="answer_ar" wire:model="upd_answer_ar"></textarea>
                            <span class="text-danger"> @error('upd_answer_ar')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="">{{ trans('admin.question_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.question_en') }}"
                                wire:model="upd_question_en">
                            <span class="text-danger"> @error('upd_question_en')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.answer_en') }}</label>
                            <textarea class="form-control" id="edit_answer_en" name="answer_ar" wire:model="upd_answer_en"></textarea>
                            <span class="text-danger"> @error('upd_answer_en')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.question_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.question_fr') }}"
                                wire:model="upd_question_fr">
                            <span class="text-danger"> @error('upd_question_fr')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.answer_fr') }}</label>
                            <textarea class="form-control" id="edit_answer_fr" name="answer_ar" wire:model="upd_answer_fr"></textarea>
                            <span class="text-danger"> @error('upd_answer_fr')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">{{ trans('admin.update') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
