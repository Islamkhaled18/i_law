<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddUsersModal()" type="button" class="btn btn-outline-primary"
                        data-bs-toggle="modal" data-bs-target="#default">
                        Add new User
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Shippng_address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->getActive() }}</td>
                                    <td>
                                        @foreach ($user->shippingAddresses as $item)
                                            {{ $item->address }}|
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}

                                            <button wire:click="OpenEditUserModal({{ $user->id }})"
                                                data-bs-toggle="modal" data-bs-target="#updateOrCreate" type="button"
                                                class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}


                                            {{-- Begin: delete button --}}

                                            <button wire:click="deleteUserConfirm({{ $user->id }})" type="button"
                                                class="btn btn-sm btn-icon btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>


                                    </td>
                                </tr>
                            @empty
                                <code>No Users Here ..!!</code>
                            @endforelse
                        </tbody>
                    </table>

                    @include('admin.pages.user.modals.add-modal')
                    @include('admin.pages.user.modals.edit-model')


                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')
    <script>
        window.addEventListener('OpenAddUsersModal', function() {
            $('.addUser').find('span').html('');
            $('.addUser').find('form')[0].reset();
            $('.addUser').modal('show');
        });
        window.addEventListener('CloseAddUserModal', function() {
            $('.addUser').find('span').html('');
            $('.addUser').find('form')[0].reset();
            $('.addUser').modal('hide');
            alert('New Users Has been Saved Successfully');
        });
        window.addEventListener('OpenEditUserModal', function(event) {
            $('.editUser').find('span').html('');
            $('.editUser').modal('show');
        });
        window.addEventListener('CloseEditUserModal', function(event) {
            $('.editUser').find('span').html('');
            $('.editUser').find('form')[0].reset();
            $('.editUser').modal('hide');
        });
        window.addEventListener('SwalUserConfirm', function(event) {
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
                    window.livewire.emit('uuu', event.detail.id);
                }
            })
        });
        window.addEventListener('uuud', function(event) {
            alert('This User has been deleted');
        });
    </script>
@endsection
