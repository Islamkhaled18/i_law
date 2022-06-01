<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{trans(admin.cities)}}</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddCitiesModal()" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#default">
                        {{trans(admin.add_new_city)}}
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{trans('admin.name_ar')}}</th>
                            <th>{{trans('admin.name_en')}}</th>
                            <th>{{trans('admin.name_fr')}}</th>
                            <th>{{trans('admin.city_code')}}</th>
                            <th>{{trans('admin.govenorate')}}</th>
                            <th>{{trans('admin.actions')}}</th>
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
                                <p>{{trans(admin.no_cities_here)}} ..!!</p>
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
