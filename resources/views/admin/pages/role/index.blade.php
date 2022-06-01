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
                            <li class="breadcrumb-item"><a href="{{route('admin.roles')}}">{{ trans('sideBar.roles') }}</a></li>
               
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Default Breadcrumb Ends -->

@livewire('admin.roles')

@endsection
