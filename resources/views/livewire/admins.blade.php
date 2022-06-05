<div>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title">{{ trans('admin.admins') }}  </h4>
                    <button wire:click="OpenAddAdminModal()" type="button" style="margin-right: 1%" class="btn btn-outline-primary"
                        data-bs-toggle="modal" data-bs-target="#default">
                        {{ trans('admin.add_new_admin') }}
                    </button>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('admin.name') }}</th>
                                <th>{{ trans('admin.email') }}</th>
                                <th>{{ trans('admin.phone') }}</th>
                                <th>{{ trans('admin.status') }}</th>
                                <th>{{ trans('admin.photo') }}</th>
                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($admins as $admin)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->phone }}</td>
                                    <td><span
                                            class="badge rounded-pill badge-light-primary me-1">{{ $admin->getActive() }}</span>
                                    </td>
                                    <td>
                                        @if ($admin->image === null)
                                            <img src="{{asset('assets/admin/images/avatars/2.png')}}"
                                                id="blah" height="40" width="40" alt="your image">
                                        @else
                                            <span class="avatar"><img class="round" <img
                                                    src="{{ url('storage/photos/admins') }}/{{ $admin->image }}"
                                                    alt="avatar" height="40" width="40">
                                                <span class="avatar-status-online"></span>
                                            </span>
                                        @endif

                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}

                                            <button wire:click= "OpenEditAdminModal({{ $admin->id }})"
                                                data-bs-toggle="modal" data-bs-target="#updateOrCreate" type="button"
                                                class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}


                                            {{-- Begin: delete button --}}

                                            <button wire:click="deleteConfirm({{ $admin->id }})"
                                                type="button" class="btn btn-sm btn-icon btn-danger"
                                                data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>
                                    </td>
                                </tr>

                            @empty
                                <code>{{ trans('admin.no_admins_Here') }} ..!!</code>
                            @endforelse
                        </tbody>
                    </table>
                    @include('admin.pages.admins.modals.add-modal')
                    @include('admin.pages.admins.modals.edit-modal')
                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')
    <script>
        
        window.addEventListener('OpenAddAdminModal', function() {
            $('.addAdmin').find('span').html('');
            $('.addAdmin').find('form')[0].reset();
            $('.addAdmin').modal('show');
        });

        window.addEventListener('CloseAddAdminModal', function() {
            alert('gfg');
            $('.addAdmin').find('span').html('');
            $('.addAdmin').find('form')[0].reset();
            $('#default').modal('hide');
            toastr()->success('Data has been saved successfully!');
        });

        window.addEventListener('OpenEditAdminModal', function(event) {
            $('.editAdmin').find('span').html('');
            $('.editAdmin').modal('show');
        });
        window.addEventListener('CloseEditAdminModal', function(event) {
            $('.editAdmin').find('span').html('');
            $('.editAdmin').find('form')[0].reset();
            $('.editAdmin').modal('hide');
        });
        window.addEventListener('SwalConfirm', function(event) {
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
                    window.livewire.emit('delete', event.detail.id);
                }
            })
        });
        window.addEventListener('deleted', function(event) {
            alert('This Admin has been deleted');
        });
    </script>
@endsection
