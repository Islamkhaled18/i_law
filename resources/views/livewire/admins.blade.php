<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Admins</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddAdminModal()" type="button" class="btn btn-outline-primary"
                        data-bs-toggle="modal" data-bs-target="#default">
                        Add new admin
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>status</th>
                                <th>Photo</th>
                                <th>Actions</th>
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
                                        <img src="https://ui-avatars.com/api/?background=random&name={{ $admin->name ?? '--' }}"
                                        id="blah" alt="your image">

                                        @else
                                            <span class="avatar"><img class="round"

                                                <img src="{{ url('storage/photos/admins') }}/{{ $admin->image }}"
                                                    alt="avatar" height="40" width="40">
                                                <span class="avatar-status-online"></span>
                                            </span>
                                        @endif

                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}

                                            <button wire:click="OpenEditAdminModal({{ $admin->id }})"
                                                data-bs-toggle="modal" data-bs-target="#updateOrCreate" type="button"
                                                class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}


                                            {{-- Begin: delete button --}}

                                            <button wire:click="wire:click=" deleteConfirm({{ $admin->id }})""
                                                type="button" class="btn btn-sm btn-icon btn-danger"
                                                data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>
                                    </td>
                                </tr>

                            @empty
                                <code>No Admins Here ..!!</code>
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
