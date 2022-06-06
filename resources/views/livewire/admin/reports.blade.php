<div>

    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title">{{ trans('sideBar.reports') }}</h4>
                    <div class="col-md-3" style="margin-right: 2%" > 
                        <input type="text" class="form-control" placeholder="Search..." wire:model.debounce.350ms="search">

                    </div>

                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('admin.order_no') }}</th>
                                <th>{{ trans('admin.created_at') }}</th>
                                <th>{{ trans('admin.total') }}</th>
                                <th>{{ trans('sideBar.users') }}</th>
                                <th>{{ trans('sideBar.writers') }}</th>
                                <th>{{ trans('sideBar.vendors') }}</th>
                                <th>{{ trans('sideBar.books') }}</th>
                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orderItems as $orderItem)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $orderItem->order->order_no ?? '--' }}</td>
                                    <td>{{ $orderItem->order->created_at ?? '--' }}</td>
                                    <td>{{ $orderItem->order->total ?? '--' }}</td>
                                    <td>{{ $orderItem->user->user_name ?? '--' }}</td>
                                    <td>{{ $orderItem->books->writer->name_ar ?? '--' }}</td>

                                    <td>{{ optional(optional($orderItem->order)->vendor)->user_name ?? '--' }}</td>

                                    <td>

                                        {{ $orderItem->books->name_ar }}


                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">

                                            {{-- Begin: delete button --}}

                                            <button wire:click="deleteReportConfirm({{$orderItem->id }})" type="button" class="btn btn-sm btn-icon btn-danger"
                                                data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>


                                    </td>
                                </tr>
                            @empty
                                <p>{{ trans('admin.no_reports_here') }} ..!!</p>
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
        window.addEventListener('SwalReportConfirm', function(event) {
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
                    window.livewire.emit('report', event.detail.id);
                }
            })
        });
        window.addEventListener('reportd', function(event) {
            alert('This Report has been deleted');
        });
    </script>
@endsection
