<div>
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title">{{ trans('admin.books') }}</h4>
                    <button wire:click="OpenAddBooksModal()" style="margin-right: 1%" type="button" class="btn btn-outline-primary"
                        data-bs-toggle="modal" data-bs-target="#default">
                        {{ trans('admin.add_new_book') }}
                    </button>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('admin.name_ar') }}</th>
                                <th>{{ trans('admin.name_en') }}</th>
                                <th>{{ trans('admin.name_fr') }}</th>
                                <th>{{ trans('admin.description_ar') }}</th>
                                <th>{{ trans('admin.description_en') }}</th>
                                <th>{{ trans('admin.description_fr') }}</th>
                                <th>{{ trans('admin.index_ar') }}</th>
                                <th>{{ trans('admin.index_ar') }}</th>
                                <th>{{ trans('admin.index_ar') }}</th>
                                <th>{{ trans('sideBar.writers') }}</th>
                                <th>{{ trans('admin.vendor') }}</th>
                                <th>{{ trans('admin.section') }}</th>
                                <th>{{ trans('admin.section') }}</th>
                                <th>{{ trans('admin.price') }}</th>
                                <th>{{ trans('admin.offer') }}</th>
                                <th>{{ trans('admin.type') }}</th>
                                <th>{{ trans('admin.status') }}</th>
                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $book->name_ar }}</td>
                                    <td>{{ $book->name_en }}</td>
                                    <td>{{ $book->name_fr }}</td>
                                    <td>{{ $book->desc_ar }}</td>
                                    <td>{{ $book->desc_en }}</td>
                                    <td>{{ $book->desc_fr }}</td>
                                    <td>{{ $book->index_ar }}</td>
                                    <td>{{ $book->index_en }}</td>
                                    <td>{{ $book->index_fr }}</td>
                                    <td>{{ $book->writer->name_ar }}</td>
                                    <td>{{ $book->vendor->name }}</td>
                                    <td>{{ $book->section->name_ar ?? '--' }}</td>
                                    <td>{{ $book->stock }}</td>
                                    <td>{{ $book->price }}</td>
                                    <td>{{ $book->offer }}</td>
                                    <td>{{ $book->type }}</td>
                                    <td>{{ $book->getActive() }}</td>
                                   
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}

                                            <button wire:click="OpenEditBookModal({{ $book->id }})"
                                                data-bs-toggle="modal" data-bs-target="#updateOrCreate" type="button"
                                                class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}


                                            {{-- Begin: delete button --}}

                                            <button wire:click="deleteBookConfirm({{ $book->id }})" type="button"
                                                class="btn btn-sm btn-icon btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>


                                    </td>
                                </tr>
                            @empty
                                <p>{{ trans('admin.no_books_here') }} ..!!</p>
                            @endforelse
                        </tbody>
                    </table>

                    @include('admin.pages.book.modals.add-modal')
                    @include('admin.pages.book.modals.edit-model')


                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')
    <script>
        window.addEventListener('OpenAddBooksModal', function() {
            $('.addBook').find('span').html('');
            $('.addBook').find('form')[0].reset();
            $('.addBook').modal('show');
        });
        window.addEventListener('CloseAddBooksModal', function() {
            $('.addBook').find('span').html('');
            $('.addBook').find('form')[0].reset();
            $('.addBook').modal('hide');
            alert('New Books Has been Saved Successfully');
        });
        window.addEventListener('OpenEditBookModal', function(event) {
            $('.editBook').find('span').html('');
            $('.editBook').modal('show');
        });
        window.addEventListener('CloseEditBookModal', function(event) {
            $('.editBook').find('span').html('');
            $('.editBook').find('form')[0].reset();
            $('.editBook').modal('hide');
        });
        window.addEventListener('SwalBookConfirm', function(event) {
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
                    window.livewire.emit('sss', event.detail.id);
                }
            })
        });
        window.addEventListener('sssd', function(event) {
            alert('This Book has been deleted');
        });
    </script>
@endsection
