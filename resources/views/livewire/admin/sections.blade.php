<div>
    <br><br>
    <!-- Striped rows start -->
    @if(!$showSubSection)
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sections</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddSectionsModal()" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#default">
                        Add new Section
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
                            <th>Sub Sections</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($sections as $section)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$section->name_ar}}</td>
                                    <td>{{$section->name_en}}</td>
                                    <td>{{$section->name_fr}}</td>
                                    <td>
                                        <button
                                        wire:click="SubSection({{$section->id}})" data-bs-target="#SubSection"
                                        type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                    >
                                        <i class="fas fa-pen"></i>
                                    </button>
                                        
                                        
                                    </td>

                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}
                                            
                                            <button
                                                wire:click="OpenEditSectionModal({{$section->id}})"  data-bs-toggle="modal" data-bs-target="#updateOrCreate"
                                                type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                            >
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}
                                            
                                            
                                            {{--Begin: delete button --}}
                                           
                                            <button
                                            wire:click="deleteSectionConfirm({{$section->id}})" type="button" 
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
                                <code>No Sections Here ..!!</code>
                            @endforelse
                        </tbody>
                    </table>
                    
                    @include('admin.pages.section.modals.add-modal')
                    @include('admin.pages.section.modals.edit-model')
                    
                    
                </div>
            </div>
        </div>
    </div>
    @else
        @livewire('admin.sub-sections', ['section_id' => $selectedSection])
    @endif
    <!-- Striped rows end -->
</div>
