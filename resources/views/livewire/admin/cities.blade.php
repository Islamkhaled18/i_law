<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Cities</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddCitiesModal()" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#default">
                        Add new City
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
                            <th>City code</th>
                            <th>Governorate</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($cities as $city)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$city->name_ar}}</td>
                                    <td>{{$city->name_en}}</td>
                                    <td>{{$city->name_fr}}</td>
                                    <td>{{$city->city_code}}</td>
                                    <td>{{$city->governorate->name_ar ?? '--'}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}
                                            
                                            <button
                                                wire:click="OpenEditCityModal({{$city->id}})"  data-bs-toggle="modal" data-bs-target="#updateOrCreate"
                                                type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                            >
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}
                                            
                                            
                                            {{--Begin: delete button --}}
                                           
                                            <button
                                            wire:click="deleteCityConfirm({{$city->id}})" type="button" 
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
                                <code>No Cities Here ..!!</code>
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
