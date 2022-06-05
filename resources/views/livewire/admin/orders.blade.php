<div>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title">{{ trans('admin.orders') }} </h4>
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
                                <th>{{ trans('admin.order_date') }}</th>
                                <th>{{ trans('admin.total') }}</th>
                                <th>{{ trans('admin.payment_method') }}</th>
                                <th>{{ trans('admin.shipping_method') }}</th>
                                <th>{{ trans('admin.status') }}</th>
                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->order_no }}</td>
                                    <td>{{ $order->order_date }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->payment_method }}</td>
                                    <td>{{ $order->shipping_method }}</td>
                                    <td>{{ $order->status }}</td>

                                    <td>
                                        <div class="d-flex justify-content-center">

                                            {{-- Begin: delete button --}}
                                            <button wire:click="deleteOrderConfirm({{ $order->id }})"
                                                type="button" class="btn btn-sm btn-icon btn-danger"
                                                data-bs-toggle="modal" data-bs-target="#delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                            {{-- End: delete button --}}
                                        </div>
                                    </td>
                                </tr>

                            @empty
                                <p>{{ trans('admin.no_orders_Here') }} ..!!</p>
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
        window.addEventListener('SwalOrderConfirm', function(event) {
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
                    window.livewire.emit('order', event.detail.id);
                }
            })
        });
        window.addEventListener('orderd', function(event) {
            alert('This Order has been deleted');
        });
    </script>
@endsection
