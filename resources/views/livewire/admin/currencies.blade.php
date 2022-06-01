<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('admin.currencies') }}</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddCurrencyModal()" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#default">
                        {{ trans('admin.add_new_currency') }}
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('admin.name_ar') }}</th>
                            <th>{{ trans('admin.name_en') }}</th>
                            <th>{{ trans('admin.code') }}</th>
                            <th>{{ trans('admin.status') }}</th>
                            <th>{{ trans('admin.excange_value') }}</th>
                            <th>{{ trans('admin.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($currencies as $currency)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$currency->name_ar}}</td>
                                    <td>{{$currency->name_en}}</td>
                                    
                                    <td>{{$currency->code}}</td>
                                    <td>{{$currency->getActive()}}</td>
                                    <td>{{$currency->excange_value}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}
                                            
                                            <button
                                                wire:click="OpenEditCurrencyModal({{$currency->id}})"  data-bs-toggle="modal" data-bs-target="#updateOrCreate"
                                                type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                            >
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}
                                            
                                            
                                            {{--Begin: delete button --}}
                                           
                                            <button
                                            wire:click="deleteCurrencyConfirm({{$currency->id}})" type="button" 
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
                                <p>{{ trans('admin.no_currencies_here') }} ..!!</p>
                            @endforelse
                        </tbody>
                    </table>
                    @include('admin.pages.currency.modals.add-modal')
                    @include('admin.pages.currency.modals.edit-model')
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>

@section('scripts')

<script>

window.addEventListener('OpenAddCurrencyModal', function() {
            $('.addCurrency').find('span').html('');
            $('.addCurrency').find('form')[0].reset();
            $('.addCurrency').modal('show');
        });
        window.addEventListener('CloseAddCurrencyModal', function() {
            $('.addCurrency').find('span').html('');
            $('.addCurrency').find('form')[0].reset();
            $('.addCurrency').modal('hide');
            alert('New Currency Has been Saved Successfully');
        });
        window.addEventListener('OpenEditCurrencyModal', function(event) {
            $('.editCurrency').find('span').html('');
            $('.editCurrency').modal('show');
        });
        window.addEventListener('CloseEditCurrencyModal', function(event) {
            $('.editCurrency').find('span').html('');
            $('.editCurrency').find('form')[0].reset();
            $('.editCurrency').modal('hide');
        });
        window.addEventListener('SwalCurrencyConfirm', function(event) {
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
                    window.livewire.emit('destroy', event.detail.id);
                }
            })
        });
        window.addEventListener('destroyed', function(event) {
            alert('This Currency has been deleted');
        });
</script>

@endsection