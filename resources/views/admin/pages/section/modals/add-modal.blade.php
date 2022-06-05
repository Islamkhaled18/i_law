<!-- Basic trigger modal -->
<div class="basic-modal">   
    <!-- Modal -->
    <div class="modal fade text-start addSection" wire:ignore.self id="default" tabindex="-1"
         aria-labelledby="myModalLabel1" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{ trans('admin.add_new_section') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>{{ trans('admin.add_new_section') }}</h5>
                    <form wire:submit.prevent="saveSection">
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
                            <label for="">{{ trans('admin.name_fr') }}</label>
                            <input type="text" class="form-control" placeholder="{{ trans('admin.name_fr') }}" wire:model="name_fr">
                            <span class="text-danger"> @error('name_fr') {{ $message }}@enderror</span>
                        </div>
                    
    
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>{{ trans('admin.select_main_section') }}*</label>
                                <select type="text" wire:model="parent_id" class="form-control">
                                    <option value="">-----</option>
                                    @if($sections)
                                        @foreach($sections as $section)
                                            <?php $dash=''; ?>
                                            <option value="{{$section->id}}">{{$section->name_ar}} ?? '--'</option>
                                            @if(count($section->subsection))
                                                @include('admin.pages.section.subsectionList-option',['subsections' => $section->subsection])
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Basic trigger modal end -->

