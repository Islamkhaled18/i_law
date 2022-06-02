@extends('layouts.dashboardMaster')

@section('content')


<!-- Default Breadcrumb Starts -->
<section id="default-breadcrumb">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ trans('sideBar.dashboard') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('settings.index')}}">{{ trans('sideBar.settings') }}</a></li>
               
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Default Breadcrumb Ends -->



@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('error') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


<!-- row -->
<div class="row">
<div class="col-md-12 mb-30">
<div class="card card-statistics h-100">
    <div class="card-body">
        <form enctype="multipart/form-data" method="post" action="{{route('settings.update','test')}}">
            @csrf @method('PUT')
            <div class="row">
                <div class="col-md-6 border-right-2 border-right-blue-400">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">{{ trans('admin.welcome_title') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="welcome_title" value="{{ $setting['welcome_title'] }}" required type="text" class="form-control" placeholder="Welcome Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">{{ trans('admin.welcome_subject') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="welcome_subject" value="{{ $setting['welcome_subject'] }}" required type="text" class="form-control" placeholder="Welcome subject">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">{{ trans('admin.content_question') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="content_question" value="{{ $setting['content_question'] }}" required type="text" class="form-control" placeholder="Content Question">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">{{ trans('admin.content_answer') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="content_answer" value="{{ $setting['content_answer'] }}" required type="text" class="form-control" placeholder="Content answer">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">{{ trans('admin.our_vision') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="our_vision" value="{{ $setting['our_vision'] }}" required type="text" class="form-control" placeholder="Our vision">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">{{ trans('admin.our_mission') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="our_mission" value="{{ $setting['our_mission'] }}" required type="text" class="form-control" placeholder="Our mission">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">{{ trans('admin.address') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="address" value="{{ $setting['address'] }}" required type="text" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">{{ trans('admin.map_address_link') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="map_addess_link" value="{{ $setting['map_addess_link'] }}" required type="text" class="form-control" placeholder="Map address link">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold"> {{ trans('admin.email') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="email" value="{{ $setting['email'] }}" required type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold"> {{ trans('admin.phone') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="phone" value="{{ $setting['phone'] }}" required type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold"> {{ trans('admin.instgram') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="instgram" value="{{ $setting['instgram'] }}" required type="text" class="form-control" placeholder="Instagram">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold"> {{ trans('admin.dacebook') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="facebook" value="{{ $setting['facebook'] }}" required type="text" class="form-control" placeholder="Facebook">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold"> {{ trans('admin.youtube') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="youtube" value="{{ $setting['youtube'] }}" required type="text" class="form-control" placeholder="Youtube">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold"> {{ trans('admin.twitter') }}<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input name="twitter" value="{{ $setting['twitter'] }}" required type="text" class="form-control" placeholder="Twiter">
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <hr>
            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{ trans('admin.submit') }}</button>
        </form>
    </div>
</div>
</div>
</div>
<!-- row closed -->

@endsection