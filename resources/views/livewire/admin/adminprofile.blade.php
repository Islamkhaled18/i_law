<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('admin.admins') }}</h4>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th>{{ trans('admin.name') }}</th>
                                <th>{{ trans('admin.email') }}</th>
                                <th>{{ trans('admin.user_name') }}</th>
                                <th>{{ trans('admin.password') }}</th>
                                <th>{{ trans('admin.phone') }}</th>
                                <th>{{ trans('admin.status') }}</th>
                                <th>{{ trans('admin.photo') }}</th>
                                <th>{{ trans('admin.default_language') }}</th>
                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td>{{ $profile->admin->name }}</td>
                                <td>{{ $profile->admin->email }}</td>
                                <td>{{ $profile->admin->user_name }}</td>
                                <td>*********************</td>
                                <td>{{ $profile->admin->phone }}</td>
                                <td><span
                                        class="badge rounded-pill badge-light-primary me-1">{{ $profile->admin->getActive() }}</span>
                                </td>
                                <td>
                                    @if ($profile->admin->image === null)
                                        <img src="https://ui-avatars.com/api/?background=random&name={{ $profile->admin->name ?? '--' }}"
                                            id="blah" alt="your image">
                                    @else
                                        <span class="avatar"><img class="round" <img
                                                src="{{ url('storage/photos/admins') }}/{{ $profile->admin->image }}"
                                                alt="avatar" height="40" width="40">
                                            <span class="avatar-status-online"></span>
                                        </span>
                                    @endif

                                </td>
                                <td>{{ $profile->admin->default_language }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        {{-- Begin: Edit button --}}

                                        <button wire:click="OpenEditAdminProfileModal({{ $profile->admin->id}})"
                                            data-bs-toggle="modal" data-bs-target="#updateOrCreate" type="button"
                                            class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                        {{-- End: Edit button --}}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @include('admin.pages.admins.modals.edit-profile-modal')
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')
    <script>
        window.addEventListener('OpenEditAdminProfileModal', function(event) {
            $('.editProfileAdmin').find('span').html('');
            $('.editProfileAdmin').modal('show');
        });
        window.addEventListener('CloseEditAdminProfileModal', function(event) {
            $('.editProfileAdmin').find('span').html('');
            $('.editProfileAdmin').find('form')[0].reset();
            $('.editProfileAdmin').modal('hide');
        });
    </script>
@endsection
