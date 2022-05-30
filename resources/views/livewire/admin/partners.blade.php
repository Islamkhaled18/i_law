<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Partners</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddPartnersModal()" type="button" class="btn btn-outline-primary"
                        data-bs-toggle="modal" data-bs-target="#default">
                        Add new partner
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($partners as $partner)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $partner->name}}</td>
                                    <td>
                                        @if ($partner->image === null)
                                        <img src="https://ui-avatars.com/api/?background=random&name={{ $partner->name ?? '--' }}"
                                        id="blah" alt="your image">

                                        @else
                                            <span class="avatar"><img class="round"

                                                <img src="{{ url('storage/photos/partners') }}/{{ $partner->image }}"
                                                    alt="avatar" height="40" width="40">
                                                <span class="avatar-status-online"></span>
                                            </span>
                                        @endif

                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}
                                            <button wire:click="OpenEditPartnerModal({{ $partner->id }})"
                                                data-bs-toggle="modal" data-bs-target="#updateOrCreate" type="button"
                                                class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}
                                            {{-- Begin: delete button --}}

                                            <button wire:click="deletePartnerConfirm({{ $partner->id }})" type="button"
                                                class="btn btn-sm btn-icon btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>

                                    </td>
                                </tr>
                            @empty
                                <code>No Wtiters Here ..!!</code>
                            @endforelse
                        </tbody>
                    </table>

                    @include('admin.pages.partner.modals.add-modal')
                    @include('admin.pages.partner.modals.edit-model')


                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>
