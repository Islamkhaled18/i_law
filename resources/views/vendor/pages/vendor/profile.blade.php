@extends('vendor.layouts.dashboardMaster')

@section('contentVendor')

<!-- Default Breadcrumb Starts -->
<section id="default-breadcrumb">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('vendor.dashboard')}}">{{ trans('sideBar.dashboard') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{route('vendor.profileVendor')}}">{{ trans('admin.profile') }}</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Default Breadcrumb Ends -->



@livewire('vendor.vendor-profile')


@endsection