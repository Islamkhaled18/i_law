<div>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title">{{ trans('admin.edit') }}</h4>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th>{{ trans('admin.name') }}</th>
                                <th>{{ trans('admin.email') }}</th>
                                <th>{{ trans('admin.user_name') }}</th>
                                <th>{{ trans('admin.password') }}</th>
                                <th>الدور</th>
                                <th>{{ trans('admin.status') }}</th>
                                <th>{{ trans('admin.default_language') }}</th>
                                <th>{{ trans('admin.country') }}</th>
                                <th>{{ trans('admin.governorate') }}</th>
                                <th>{{ trans('admin.city') }}</th>
                                <th>{{ trans('admin.address') }}</th>
                                <th>{{ trans('admin.land_line') }}</th>
                                <th>{{ trans('admin.phone') }}</th>
                                <th>{{ trans('admin.fax') }}</th>
                                <th>{{ trans('admin.whatsapp') }}</th>
                                <th>{{ trans('admin.company_name') }}</th>
                                <th>{{ trans('admin.image') }}</th>
                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $profile->vendor->name }}</td>
                                <td>{{ $profile->vendor->email }}</td>
                                <td>{{ $profile->vendor->user_name }}</td>
                                <td>**********************</td>
                                <td>{{ $profile->vendor->Role ?? '--' }}</td>
                                <td>{{ $profile->vendor->getActive() }}</td>
                                <td>{{ $profile->vendor->default_language }}</td>
                                <td>{{ $profile->vendor->country->name_ar }}</td>
                                <td>{{ $profile->vendor->governorate->name_ar }}</td>
                                <td>{{ $profile->vendor->city->name_ar }}</td>
                                <td>{{ $profile->vendor->address }}</td>
                                <td>{{ $profile->vendor->land_line }}</td>
                                <td>{{ $profile->vendor->phone }}</td>
                                <td>{{ $profile->vendor->fax }}</td>
                                <td>{{ $profile->vendor->whatsApp }}</td>
                                <td>{{ $profile->vendor->company_name }}</td>
                                <td>
                                    @if ($profile->vendor->image === null)
                                        <img src="{{ asset('assets/admin/images/avatars/2.png') }}" height="40"
                                            width="40" id="blah" alt="your image">
                                    @else
                                        <span class="avatar"><img class="round" <img
                                                src="{{ url('storage/photos/vendors') }}/{{ $profile->vendor->image }}"
                                                alt="avatar" height="40" width="40">
                                            <span class="avatar-status-online"></span>
                                        </span>
                                    @endif

                                </td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        {{-- Begin: Edit button --}}

                                        <button wire:click="OpenEditVendorProfileModal({{ $profile->vendor->id }})"
                                            data-bs-toggle="modal" data-bs-target="#OpenEditVendorProfileModal" type="button"
                                            class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                        {{-- End: Edit button --}}


                                    </div>



                                </td>
                            </tr>

                        </tbody>
                    </table>

                    @include('vendor.pages.vendor.modals.editProfile-model')


                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')
    <script>
      
        window.addEventListener('OpenEditVendorProfileModal', function(event) {
            $('.editProfileVendor').find('span').html('');
            $('.editProfileVendor').modal('show');
        });
        window.addEventListener('CloseEditVendorProfileModal', function(event) {
            $('.editProfileVendor').find('span').html('');
            $('.editProfileVendor').find('form')[0].reset();
            $('.editProfileVendor').modal('hide');
        });

    </script>
@endsection
