<?php $dash.='-- '; ?>
@foreach($subsections as $subsection)
    <option value="{{$subsection->id}}">{{$dash}}{{$subsection->name_ar}}</option>
    @if(count($subsection->subsection))
        @include('admin.pages.section.subsectionList-option',['subsections' => $subsection->subsection])
    @endif
@endforeach