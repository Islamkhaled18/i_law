 <!-- Delete modal -->
 <div wire:ignore class="basic-modal">
    <!-- Modal -->
    <div class="modal fade modal-danger text-start" id="delete" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ __('Are you sure you want to delete?') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                {!! Form::open() !!}
                    <div class="modal-body">
                        {!! Form::text('name', null, ['wire:model' => 'name', 'class' => ['form-control'], 'disabled']) !!}
                    </div>
                    <div class="modal-footer">
                        {!! Form::submit( __('Confirm') , ['wire:click.prevent' => 'delete', 'data-bs-dismiss' => 'modal', 'class' => 'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
<!-- Delete modal end -->