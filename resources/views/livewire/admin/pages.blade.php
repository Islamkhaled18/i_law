<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title">{{ trans('admin.pages') }}</h4>
                    <button type="button" wire:click="OpenAddPageModal()" style="margin-right: 1%" class="btn btn-outline-primary"
                        data-bs-toggle="modal" data-bs-target="#xlarge">
                        {{ trans('admin.add_new_page') }}
                    </button>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('admin.name_ar') }}</th>
                                <th>{{ trans('admin.name_en') }}</th>
                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pages as $page)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $page->name_ar }}</td>
                                    <td>{{ $page->name_en }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}

                                            <button wire:click="OpenEditPageModal({{ $page->id }})"
                                                data-bs-toggle="modal" data-bs-target="#updateOrCreate" type="button"
                                                class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}


                                            {{-- Begin: delete button --}}

                                            <button wire:click="deletePageConfirm({{ $page->id }})" type="button"
                                                class="btn btn-sm btn-icon btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>



                                    </td>
                                </tr>
                            @empty
                                <p>{{ trans('admin.no_pages_here') }} ..!!</p>
                            @endforelse
                        </tbody>
                    </table>

                    @include('admin.pages.page.modals.add-modal')
                    @include('admin.pages.page.modals.edit-model')


                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#Meta_Desc'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#Meta_Keywords'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        window.addEventListener('OpenAddPagesModal', function() {
            $('.addPage').find('span').html('');
            $('.addPage').find('form')[0].reset();
            $('.addPage').modal('show');
        });
        window.addEventListener('CloseAddPageModal', function() {
            $('.addPage').find('span').html('');
            $('.addPage').find('form')[0].reset();
            $('.addPage').modal('hide');
            alert('New Pages Has been Saved Successfully');
        });
        window.addEventListener('OpenEditPageModal', function(event) {
            $('.editPage').find('span').html('');
            $('.editPage').modal('show');
        });
        window.addEventListener('CloseEditPageModal', function(event) {
            $('.editPage').find('span').html('');
            $('.editPage').find('form')[0].reset();
            $('.editPage').modal('hide');
        });
        window.addEventListener('SwalPageConfirm', function(event) {
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
                    window.livewire.emit('ppp', event.detail.id);
                }
            })
        });
        window.addEventListener('pppd', function(event) {
            alert('This Page has been deleted');
        });
    </script>
@endsection
