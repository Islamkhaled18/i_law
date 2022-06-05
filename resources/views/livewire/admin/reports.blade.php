<div>
    
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title">{{trans('admin.reports')}}</h4>
                   
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{trans('admin.order_no')}}</th>
                            <th>{{trans('admin.created_at')}}</th>
                            <th>{{trans('admin.total')}}</th>
                            <th>{{trans('admin.user')}}</th>
                            <th>{{trans('admin.writer')}}</th>
                            <th>{{trans('admin.vendor')}}</th>
                            <th>{{trans('admin.book')}}</th>
                            <th>{{trans('admin.actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($orderItems as $orderItem)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$orderItem->order->order_no ?? '--'}}</td>
                                    <td>{{$orderItem->order->created_at ?? '--'}}</td>
                                    <td>{{$orderItem->order->total ?? '--'}}</td>
                                    <td>{{$orderItem->user->user_name ?? '--'}}</td>
                                    <td>{{$orderItem->writer->name_ar ?? '--'}}</td>
                                    <td>{{$orderItem->vendor->user_name ?? '--'}}</td>
                                    <td>{{$orderItem->book->name_ar ?? '--'}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                       
                                            {{--Begin: delete button --}}
                                           
                                            <button
                                            wire:click="#" type="button" 
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
                                <p>{{trans('admin.no_cities_here')}} ..!!</p>
                            @endforelse
                        </tbody>
                    </table>
                    
                    @include('admin.pages.city.modals.add-modal')
                    @include('admin.pages.city.modals.edit-model')
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>
