<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Roles</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddRolesModal()" type="button" class="btn btn-outline-primary"
                        data-bs-toggle="modal" data-bs-target="#default">
                        Add new Roles
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @foreach ($role->permissions as $item)
                                            {{ $item->name }}|
                                        @endforeach
                                    </td>
                                    <td>

                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}

                                            <button wire:click="OpenEditRoleModal({{ $role->id }})"
                                                data-bs-toggle="modal" data-bs-target="#updateOrCreate" type="button"
                                                class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}


                                            {{-- Begin: delete button --}}

                                            <button wire:click="deleteRoleConfirm({{ $role->id }})" type="button"
                                                class="btn btn-sm btn-icon btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>



                                    </td>
                                </tr>
                            @empty
                                <code>No Roles Here ..!!</code>
                            @endforelse
                        </tbody>
                    </table>

                    @include('admin.pages.role.modals.add-modal')
                    @include('admin.pages.role.modals.edit-model')


                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')
    <script>
        window.addEventListener('OpenAddRolesModal', function() {
            $('.addRole').find('span').html('');
            $('.addRole').find('form')[0].reset();
            $('.addRole').modal('show');
        });
        window.addEventListener('CloseAddRoleModal', function() {
            $('.addRole').find('span').html('');
            $('.addRole').find('form')[0].reset();
            $('.addRole').modal('hide');
            alert('New Sections Has been Saved Successfully');
        });
        window.addEventListener('OpenEditRoleModal', function(event) {
            $('.editRole').find('span').html('');
            $('.editRole').modal('show');
        });
        window.addEventListener('CloseEditRoleModal', function(event) {
            $('.editRole').find('span').html('');
            $('.editRole').find('form')[0].reset();
            $('.editRole').modal('hide');
        });
        window.addEventListener('SwalRoleConfirm', function(event) {
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
                    window.livewire.emit('rrr', event.detail.id);
                }
            })
        });
        window.addEventListener('rrrd', function(event) {
            alert('This Role has been deleted');
        });
    </script>
@endsection
