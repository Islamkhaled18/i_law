<div>
   
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title ">{{ trans('sideBar.writers') }}</h4>
                    <button wire:click="OpenAddWritersModal()" style="margin-right: 1%" type="button" class="btn btn-outline-primary"
                    data-bs-toggle="modal" data-bs-target="#default">
                    {{ trans('admin.add_new_writer') }}
                </button>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('admin.name_ar') }}</th>
                                <th>{{ trans('admin.name_en') }}</th>
                                <th>{{ trans('admin.image') }}</th>

                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($writers as $writer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $writer->name_ar }}</td>
                                    <td>{{ $writer->name_en }}</td>

                                    <td>
                                        @if ($writer->image === null)
                                        <img src="https://ui-avatars.com/api/?background=random&name={{ $writer->name_ar ?? '--' }}"
                                        id="blah" alt="your image">

                                        @else
                                            <span class="avatar"><img class="round"

                                                <img src="{{ url('storage/photos/writers') }}/{{ $writer->image }}"
                                                    alt="avatar" height="40" width="40">
                                                <span class="avatar-status-online"></span>
                                            </span>
                                        @endif

                                    </td>


                                    <td>

                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}

                                            <button wire:click="OpenEditWriterModal({{ $writer->id }})"
                                                data-bs-toggle="modal" data-bs-target="#updateOrCreate" type="button"
                                                class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}


                                            {{-- Begin: delete button --}}

                                            <button wire:click="deleteWriterConfirm({{ $writer->id }})" type="button"
                                                class="btn btn-sm btn-icon btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>





                                    </td>
                                </tr>
                            @empty
                                <p>{{ trans('admin.no_writers_here') }} ..!!</p>
                            @endforelse
                        </tbody>
                    </table>

                    @include('admin.pages.writer.modals.add-modal')
                    @include('admin.pages.writer.modals.edit-model')


                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')
<script>

window.addEventListener('OpenAddWritersModal', function() {
            $('.addWriter').find('span').html('');
            $('.addWriter').find('form')[0].reset();
            $('.addWriter').modal('show');
        });
        window.addEventListener('CloseAddWriterModal', function() {
            $('.addWriter').find('span').html('');
            $('.addWriter').find('form')[0].reset();
            $('.addWriter').modal('hide');
            alert('New Writers Has been Saved Successfully');
        });
        window.addEventListener('OpenEditWriterModal', function(event) {
            $('.editWriter').find('span').html('');
            $('.editWriter').modal('show');
        });
        window.addEventListener('CloseEditWriterModal', function(event) {
            $('.editWriter').find('span').html('');
            $('.editWriter').find('form')[0].reset();
            $('.editWriter').modal('hide');
        });
        window.addEventListener('SwalWriterConfirm', function(event) {
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
            alert('This Writer has been deleted');
        });

</script>

@endsection