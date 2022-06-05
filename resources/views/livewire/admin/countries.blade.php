<div>
    <!-- Striped rows start -->
    @if(!$showGovenorateCountry)
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title">{{ trans('admin.countries') }}</h4>
                    <button wire:click="OpenAddCountryModal()" style="margin-right: 1%" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#default">
                        {{ trans('admin.add_new_country') }}
                    </button>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('admin.name_ar') }}</th>
                            <th>{{ trans('admin.name_en') }}</th>
                            <th>{{ trans('admin.currency') }}</th>
                            <th>{{ trans('admin.country_code') }}</th>
                            <th>{{ trans('admin.country_phone_code') }}</th>
                            <th>{{ trans('admin.governorates') }}</th>
                            
                            <th>{{ trans('admin.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($countries as $country)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$country->name_ar}}</td>
                                    <td>{{$country->name_en}}</td>
                                    <td>
                                        @php
                                            $Cuurency = \App\Models\Cuurency::where('id', $country->currency_id)->first();
                                        @endphp
                                
                                            {{ $Cuurency->name_ar }},
                                       

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
                                <p>{{ trans('admin.no_countries_here') }} ..!!</p>
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

@section('scripts')
<script>
     window.addEventListener('OpenAddCountryModal', function() {
            $('.addCountry').find('span').html('');
            $('.addCountry').find('form')[0].reset();
            $('.addCountry').modal('show');
        });
        window.addEventListener('CloseAddCountryModal', function() {
            $('.addCountry').find('span').html('');
            $('.addCountry').find('form')[0].reset();
            $('.addCountry').modal('hide');
            alert('New Country Has been Saved Successfully');
        });
        window.addEventListener('OpenEditCountryModal', function(event) {
            $('.editCountry').find('span').html('');
            $('.editCountry').modal('show');
        });
        window.addEventListener('CloseEditCountryModal', function(event) {
            $('.editCountry').find('span').html('');
            $('.editCountry').find('form')[0].reset();
            $('.editCountry').modal('hide');
        });

        window.addEventListener('SwalCountryConfirm', function(event) {
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
                    window.livewire.emit('damage', event.detail.id);
                }
            })
        });

        window.addEventListener('damaged', function(event) {
            alert('This Country has been deleted');
        });


        window.addEventListener('OpenAddGovernoratesModal', function() {
            $('.addGovernorate').find('span').html('');
            $('.addGovernorate').find('form')[0].reset();
            $('.addGovernorate').modal('show');
        });
        window.addEventListener('CloseAddGovernoratesModal', function() {
            $('.addGovernorate').find('span').html('');
            $('.addGovernorate').find('form')[0].reset();
            $('.addGovernorate').modal('hide');
            alert('New Governorates Has been Saved Successfully');
        });
        window.addEventListener('OpenEditGovernorateModal', function(event) {
            $('.editGovernorate').find('span').html('');
            $('.editGovernorate').modal('show');
        });
        window.addEventListener('CloseeditGovernorateModal', function(event) {
            $('.editGovernorate').find('span').html('');
            $('.editGovernorate').find('form')[0].reset();
            $('.editGovernorate').modal('hide');
        });
        window.addEventListener('SwalGovernorateConfirm', function(event) {
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
                    window.livewire.emit('enhaa', event.detail.id);
                }
            })
        });
        window.addEventListener('enhaad', function(event) {
            alert('This Governorates has been deleted');
        });

        window.addEventListener('OpenAddCitiesModal', function() {
            $('.addCity').find('span').html('');
            $('.addCity').find('form')[0].reset();
            $('.addCity').modal('show');
        });
        window.addEventListener('CloseAddCitiesModal', function() {
            $('.addCity').find('span').html('');
            $('.addCity').find('form')[0].reset();
            $('.addCity').modal('hide');
            alert('New Cities Has been Saved Successfully');
        });
        window.addEventListener('OpenEditCityModal', function(event) {
            $('.editCity').find('span').html('');
            $('.editCity').modal('show');
        });
        window.addEventListener('CloseeditCityModal', function(event) {
            $('.editCity').find('span').html('');
            $('.editCity').find('form')[0].reset();
            $('.editCity').modal('hide');
        });
        window.addEventListener('SwalCityConfirm', function(event) {
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
                    window.livewire.emit('hazf', event.detail.id);
                }
            })
        });
        window.addEventListener('hazfd', function(event) {
            alert('This Citys has been deleted');
        });

</script>

@endsection