<div>
    <br><br>
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Books</h4>
                </div>
                <div class="card-body">
                    <button wire:click="OpenAddBooksModal()" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#default">
                        Add new Book
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
                            <th>Decription AR</th>
                            <th>Decription EN</th>
                            <th>Decription FR</th>
                            <th>Index AR</th>
                            <th>Index en</th>
                            <th>Index FR</th>
                            <th>Writer</th>
                            <th>Vendor</th>
                            <th>Section</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Offer</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$book->name_ar}}</td>
                                    <td>{{$book->name_en}}</td>
                                    <td>{{$book->name_fr}}</td>
                                    <td>{{$book->desc_ar}}</td>
                                    <td>{{$book->desc_en}}</td>
                                    <td>{{$book->desc_fr}}</td>
                                    <td>{{$book->index_ar}}</td>
                                    <td>{{$book->index_en}}</td>
                                    <td>{{$book->index_fr}}</td>
                                    <td>{{$book->writer->name_ar}}</td>
                                    <td>{{$book->vendor->name}}</td>
                                    <td>{{$book->section->name_ar ?? '--'}}</td>
                                    <td>{{$book->stock}}</td>
                                    <td>{{$book->price}}</td>
                                    <td>{{$book->offer}}</td>
                                    <td>{{$book->type}}</td>
                                    <td>{{$book->getActive()}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            {{-- Begin: Edit button --}}
                                            
                                            <button
                                                wire:click="OpenEditBookModal({{$book->id}})"  data-bs-toggle="modal" data-bs-target="#updateOrCreate"
                                                type="button" class="btn btn-sm btn-icon btn-info" style="margin-inline: .2rem"
                                            >
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            {{-- End: Edit button --}}
                                            
                                            
                                            {{--Begin: delete button --}}
                                           
                                            <button
                                            wire:click="deleteBookConfirm({{$book->id}})" type="button" 
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
                                <code>No Books Here ..!!</code>
                            @endforelse
                        </tbody>
                    </table>
                    
                    @include('admin.pages.book.modals.add-modal')
                    @include('admin.pages.book.modals.edit-model')
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
</div>
