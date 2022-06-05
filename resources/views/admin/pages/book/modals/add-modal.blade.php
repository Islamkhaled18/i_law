<!-- Basic trigger modal -->
<div class="basic-modal">   
    <!-- Modal -->
    <div class="modal fade text-start addBook" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.add_new_book') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.add_new_book') }}</h5>
                    <form wire:submit.prevent="saveBook">
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_ar') }}" wire:model="name_ar">
                            <span class="text-danger"> @error('name_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_en') }}" wire:model="name_en">
                            <span class="text-danger"> @error('name_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.name_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_en') }}" wire:model="name_fr">
                            <span class="text-danger"> @error('name_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.description_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.description_ar') }}" wire:model="desc_ar">
                            <span class="text-danger"> @error('desc_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.description_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.description_en') }}" wire:model="desc_en">
                            <span class="text-danger"> @error('desc_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.description_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.description_fr') }}" wire:model="desc_fr">
                            <span class="text-danger"> @error('desc_fr') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.index_ar') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.index_ar') }}" wire:model="index_ar">
                            <span class="text-danger"> @error('index_ar') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.index_en') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.index_en') }}" wire:model="index_en">
                            <span class="text-danger"> @error('index_en') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.index_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.index_fr') }}" wire:model="index_fr">
                            <span class="text-danger"> @error('index_fr') {{ $message }}@enderror</span>
                        </div>
                           
                        <div class="form-group">
                            <label for="">{{ trans('admin.writer') }}</label>
                            <select class="form-control" wire:model="writer">
                                <option disabled value="">{{ trans('admin.choose_the_writer') }}</option>
                                @foreach ($writers as $writer)
                                    <option value="{{ $writer->id }}">{{ $writer->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('writer') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.vendor') }}</label>
                            <select class="form-control" wire:model="vendor">
                                <option disabled value="">{{ trans('admin.choose_the_vendor') }}</option>
                                @foreach ($vendors as $vendor)
                                    <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('vendor') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.section') }}</label>
                            <select class="form-control" wire:model="section">
                                <option disabled value="">{{ trans('admin.choose_the_section') }}</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->name_ar }}</option>
                                @endforeach
                          </select>
                          <span class="text-danger"> @error('section') {{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">{{ trans('admin.stock') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.stock') }}" wire:model="stock">
                            <span class="text-danger"> @error('stock') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.price') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.price') }}" wire:model="price">
                            <span class="text-danger"> @error('price') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.offer') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.offer') }}" wire:model="offer">
                            <span class="text-danger"> @error('offer') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.type') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.type') }}" wire:model="type">
                            <span class="text-danger"> @error('type') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.status') }}</label>
                             <input type="checkbox" value="1" wire:model="is_active" class="switchery" data-color="success" checked />
                            <span class="text-danger"> @error('is_active') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="">{{ trans('admin.image') }}</label>
                            <input type="file" id="image" name="image" accept="image" class="form-control" wire:model="image">
                            <span class="text-danger"> @error('image') {{ $message }}@enderror</span>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">{{ trans('admin.status') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->
