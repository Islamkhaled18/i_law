<div>
    <br><br>
    <!-- Striped rows start -->
    @if(!$showGovenorateCountry)
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Countries</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddCountryModal()" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#default">
                        Add new Country
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name AR</th>
                            <th>Name EN</th>
                            <th>Currency</th>
                            <th>Country code</th>
                            <th>Country phone code</th>
                            <th>Govenorates</th>
                            
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($countries as $country)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$country->name_ar}}</td>
                                    <td>{{$country->name_en}}</td>
                                    <td>
                                        @foreach ($country->currencies as $item)
                                            {{ $item->name_ar }},
                                        @endforeach
                                    </td>
                                    <td>{{$country->country_code}}</td>
                                    <td>{{$country->country_phone_code}}</td>


                                    <td>
                                        <button
                                        wire:click="GovenorateCountry({{$country->id}})" data-bs-target="#GovenorateCountry"
                                        type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                    >
                                        <i class="fas fa-pen"></i>
                                    </button>
                                        
                                        
                                    </td>
                                    
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}
                                            
                                            <button
                                                wire:click="OpenEditCountryModal({{$country->id}})"  data-bs-toggle="modal" data-bs-target="#updateOrCreate"
                                                type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                            >
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}
                                            
                                            
                                            {{--Begin: delete button --}}
                                           
                                            <button
                                            wire:click="deleteCountryConfirm({{$country->id}})" type="button" 
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
                                <code>No countries Here ..!!</code>
                            @endforelse
                        </tbody>
                    </table>
                   
                    @include('admin.pages.country.modals.add-modal')
                    @include('admin.pages.country.modals.edit-model')
                    
                    
                </div>
            </div>
        </div>
    </div>
    @else
        @livewire('admin.governorates', ['country_id' => $selectedCountry])
    @endif
    <!-- Striped rows end -->
</div>
