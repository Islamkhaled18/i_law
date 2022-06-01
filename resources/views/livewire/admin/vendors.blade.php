<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vendors</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddVendorsModal()" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#default">
                        Add new Vendor
                    </button>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Vendor Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($vendors as $vendor)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$vendor->name}}</td>
                                    <td>{{$vendor->phone}}</td>
                                    <td>{{$vendor->email}}</td>
                                    <td>{{$vendor->getActive()}}</td>
                                    <td>
                                        @if ($vendor->image === null)
                                        <img src="https://ui-avatars.com/api/?background=random&name={{ $vendor->name ?? '--' }}"
                                        id="blah" alt="your image">

                                        @else
                                            <span class="avatar"><img class="round"
                                                <img src="{{ url('storage/photos/vendors') }}/{{ $vendor->image }}"
                                                    alt="avatar" height="40" width="40">
                                                <span class="avatar-status-online"></span>
                                            </span>
                                        @endif

                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}
                                            
                                            <button
                                                wire:click="OpenEditVendorModal({{$vendor->id}})"  data-bs-toggle="modal" data-bs-target="#updateOrCreate"
                                                type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                            >
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}
                                            
                                            
                                            {{--Begin: delete button --}}
                                           
                                            <button
                                            wire:click="deleteVendorConfirm({{$vendor->id}})" type="button" 
                                                class="btn btn-sm btn-icon btn-danger" 
                                                data-bs-toggle="modal" data-bs-target="#delete"
                                            >
                                                <i class="fas fa-trash-alt"></i>
                                            </button> 
                                            
                                            {{--End: delete button --}}
                                        </div>


                                       
                                    </td>
                                </tr>
                            @empty
                                <code>No Vendors Here ..!!</code>
                            @endforelse
                        </tbody>
                    </table>
                    
                    @include('admin.pages.vendor.modals.add-modal')
                    @include('admin.pages.vendor.modals.edit-model')
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')
<script>

window.addEventListener('OpenAddVendorsModal', function() {
            $('.addVendor').find('span').html('');
            $('.addVendor').find('form')[0].reset();
            $('.addVendor').modal('show');
        });
        window.addEventListener('CloseAddVendorModal', function() {
            $('.addVendor').find('span').html('');
            $('.addVendor').find('form')[0].reset();
            $('.addVendor').modal('hide');
            alert('New Vendors Has been Saved Successfully');
        });
        window.addEventListener('OpenEditVendorModal', function(event) {
            $('.editVendor').find('span').html('');
            $('.editVendor').modal('show');
        });
        window.addEventListener('CloseEditVendorModal', function(event) {
            $('.editVendor').find('span').html('');
            $('.editVendor').find('form')[0].reset();
            $('.editVendor').modal('hide');
        });
        window.addEventListener('SwalVendorConfirm', function(event) {
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
                    window.livewire.emit('zzz', event.detail.id);
                }
            })
        });
        window.addEventListener('zzzd', function(event) {
            alert('This Vendor has been deleted');
        });

</script>
@endsection

