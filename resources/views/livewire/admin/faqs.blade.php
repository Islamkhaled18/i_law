<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">FAQs</h4>
                </div>
                <div class="card-body">
                    
                    <button type="button" wire:click="OpenAddFAQModal()" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#xlarge">
                        Add new FAQ
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Question AR</th>
                            <th>Question EN</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($faqs as $faq)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$faq->question_ar}}</td>
                                    <td>{{$faq->question_en}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}
                                            
                                            <button
                                                wire:click="OpenEditFAQModal({{$faq->id}})"  data-bs-toggle="modal" data-bs-target="#updateOrCreate"
                                                type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                            >
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}
                                            
                                            
                                            {{--Begin: delete button --}}
                                           
                                            <button
                                            wire:click="deleteFAQConfirm({{$faq->id}})" type="button" 
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
                                <code>No FAQs Here ..!!</code>
                            @endforelse
                        </tbody>
                    </table>
                    
                    @include('admin.pages.faq.modals.add-modal')
                    @include('admin.pages.faq.modals.edit-model')
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>
