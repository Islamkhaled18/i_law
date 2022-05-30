<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Writers</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddWritersModal()" type="button" class="btn btn-outline-primary"
                        data-bs-toggle="modal" data-bs-target="#default">
                        Add new Writer
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name AR</th>
                                <th>Name EN</th>
                                <th>Photo</th>

                                <th>Actions</th>
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
                                <code>No Wtiters Here ..!!</code>
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
