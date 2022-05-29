<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Currencies</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddCurrencyModal()" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#default">
                        Add new Currency
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name AR</th>
                            <th>Name EN</th>
                            
                            <th>code</th>
                            <th>Status</th>
                            <th>Excange value</th>
                            <th>Actions</th>
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
                                @include('admin.pages.currency.modals.edit-model')
                            @empty
                                <code>No currencies Here ..!!</code>
                            @endforelse
                        </tbody>
                    </table>
                    @include('admin.pages.currency.modals.add-modal')
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>
