<div>
    <br><br>
    <!-- Striped rows start -->
    @if(!$showCityGovenorate)
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Governorates</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddGovernoratesModal()" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#default">
                        Add new Governorate
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name AR</th>
                            <th>Name EN</th>
                            <th>Name FR</th>
                            <th>Governorate code</th>
                            <th>City</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($governorates as $governorate)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$governorate->name_ar}}</td>
                                    <td>{{$governorate->name_en}}</td>
                                    <td>{{$governorate->name_fr}}</td>
                                    <td>{{$governorate->governorate_code}}</td>
                                    <td>
                                        <button
                                        wire:click="CityGovenorate({{$governorate->id}})" data-bs-target="#CityGovenorate"
                                        type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                    >
                                        <i class="fas fa-pen"></i>
                                    </button>
                                        
                                        
                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}
                                            
                                            <button
                                                wire:click="OpenEditGovernorateModal({{$governorate->id}})"  data-bs-toggle="modal" data-bs-target="#updateOrCreate"
                                                type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                            >
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}
                                            
                                            
                                            {{--Begin: delete button --}}
                                           
                                            <button
                                            wire:click="deleteGovernorateConfirm({{$governorate->id}})" type="button" 
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
                                <code>No Governorates Here ..!!</code>
                            @endforelse
                        </tbody>
                    </table>
                    
                    @include('admin.pages.governorate.modals.add-modal')
                    @include('admin.pages.governorate.modals.edit-model')
                    
                    
                </div>
            </div>
        </div>
    </div>
    @else
        @livewire('admin.cities', ['governorate_id' => $selectedGovernorate])
    @endif
    <!-- Striped rows end -->
</div>
