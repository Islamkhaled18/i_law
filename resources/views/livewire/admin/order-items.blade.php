<div>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title">{{ trans('admin.orederItems') }}  </h4>
                   
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('admin.name') }}</th>
                                <th>{{ trans('admin.email') }}</th>
                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ as $)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td> </td>
                                    <td>
                                     

                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}

                                            <button wire:click= "#"
                                                data-bs-toggle="modal" data-bs-target="#updateOrCreate" type="button"
                                                class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}


                                            {{-- Begin: delete button --}}

                                            <button wire:click="#"
                                                type="button" class="btn btn-sm btn-icon btn-danger"
                                                data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>
                                    </td>
                                </tr>

                            @empty
                                <p>{{ trans('admin.no_admins_Here') }} ..!!</p>
                            @endforelse
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')
    <script>
    

    //     window.addEventListener('OpenEditAdminModal', function(event) {
    //         $('.editAdmin').find('span').html('');
    //         $('.editAdmin').modal('show');
    //     });
    //     window.addEventListener('CloseEditAdminModal', function(event) {
    //         $('.editAdmin').find('span').html('');
    //         $('.editAdmin').find('form')[0].reset();
    //         $('.editAdmin').modal('hide');
    //     });
    //     window.addEventListener('SwalConfirm', function(event) {
    //         swal.fire({
    //             title: event.detail.title,
    //             imageWidth: 48,
    //             imageHeight: 48,
    //             html: event.detail.html,
    //             showCloseButton: true,
    //             showCancelButton: true,
    //             cancelButtonText: 'Cancel',
    //             confirmButtonText: 'Yes, Delete',
    //             cancelButtonColor: '#d33',
    //             confirmButtonColor: '#3085d6',
    //             width: 300,
    //             allowOutsideClick: false
    //         }).then(function(result) {
    //             if (result.value) {
    //                 window.livewire.emit('delete', event.detail.id);
    //             }
    //         })
    //     });
    //     window.addEventListener('deleted', function(event) {
    //         alert('This Admin has been deleted');
    //     });
    
    </script>
@endsection
