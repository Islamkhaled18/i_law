<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('admin.faqs') }}</h4>
                </div>
                <div class="card-body">
                    
                    <button type="button" wire:click="OpenAddFAQModal()" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#xlarge">
                        {{ trans('admin.add_new_faq') }}
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('admin.question_ar') }}</th>
                            <th>{{ trans('admin.question_en') }}</th>
                            <th>{{ trans('admin.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($faqs as $faq)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$faq->question_ar}}</td>
                                    <td>{{$faq->question_en}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}
                                            
                                            <button
                                                wire:click="OpenEditFAQModal({{$faq->id}})"  data-bs-toggle="modal" data-bs-target="#updateOrCreate"
                                                type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                            >
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}
                                            
                                            
                                            {{--Begin: delete button --}}
                                           
                                            <button
                                            wire:click="deleteFAQConfirm({{$faq->id}})" type="button" 
                                                class="btn btn-sm btn-icon btn-danger" 
                                                data-bs-toggle="modal" data-bs-target="#delete"
                                            >
                                                <i class="fas fa-trash-alt"></i>
                                            </button> 
                                            
                                            {{--End: delete button --}}
                                        </div>  

                                    </td>
                                </tr>
                            @empty
                                <code>{{ trans('admin.no_faqs_here') }} ..!!</code>
                            @endforelse
                        </tbody>
                    </table>
                    
                    @include('admin.pages.faq.modals.add-modal')
                    @include('admin.pages.faq.modals.edit-model')
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>
@section('scripts')

<script>
    ClassicEditor
        .create(document.querySelector('#answer_ar'))
        
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#answer_en'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#answer_fr'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#edit_answer_ar'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#edit_answer_en'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#edit_answer_fr'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    window.addEventListener('OpenAddFAQModal', function() {
            $('.addFAQ').find('span').html('');
            $('.addFAQ').find('form')[0].reset();
            $('.addFAQ').modal('show');
        });
        window.addEventListener('CloseAddFAQModal', function() {
            $('.addFAQ').find('span').html('');
            $('.addFAQ').find('form')[0].reset();
            $('.addFAQ').modal('hide');
            alert('New FAQs Has been Saved Successfully');
        });
        window.addEventListener('OpenEditFAQModal', function(event) {
            $('.editFAQ').find('span').html('');
            $('.editFAQ').modal('show');
        });
        window.addEventListener('CloseEditFAQModal', function(event) {
            $('.editFAQ').find('span').html('');
            $('.editFAQ').find('form')[0].reset();
            $('.editFAQ').modal('hide');
        });
        window.addEventListener('SwalFAQConfirm', function(event) {
            swal.fire({
                title: event.detail.title,
                imageWidth: 48,
                imageHeight: 48,
                html: event.detail.html,
                showCloseButton: true,
                showCancelButton: true,
                cancelButtonText: 'Cancel',
                confirmButtonText: 'Yes, Delete',
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                width: 300,
                allowOutsideClick: false
            }).then(function(result) {
                if (result.value) {
                    window.livewire.emit('fff', event.detail.id);
                }
            })
        });
        window.addEventListener('fffd', function(event) {
            alert('This FAQ has been deleted');
        });

</script>

@endsection