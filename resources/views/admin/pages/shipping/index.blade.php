@extends('layouts.dashboardMaster')

@section('content')

    <section id="default-breadcrumb">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ trans('sideBar.dashboard') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{route('admin.shipping')}}">{{ trans('sideBar.shipping') }}</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Striped rows start -->
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-start">
                    <h4 class="card-title">{{ trans('admin.activity') }}</h4>
                    
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('admin.address') }}</th>
                                <th>{{ trans('admin.country') }}</th>
                                <th>{{ trans('admin.governorate') }}</th>
                                <th>{{ trans('admin.city') }}</th>
                                <th>{{ trans('admin.postal_code') }}</th>
                                <th>{{ trans('admin.phone') }}</th>
                            
                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($shippings as $shipping)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $shipping->address }}</td>
                                    <td>{{ $shipping->country }}</td>
                                    <td>{{ $shipping->governorate }}</td>
                                    <td>{{ $shipping->city }}</td>
                                    
                                    <td>{{ $shipping->postal_code ?? '--' }}</td>
                                  
                                    <td>{{ $shipping->phone_number ?? '--' }}</td>
                                    <td>
                                        <a href="{{route('admin.shipping.delete',$shipping ->id)}}"
                                            class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"><i
                                            class="fa fa-trash"></i></a>
    
                                    </td>

                                </tr>

                            @empty
                                <code>{{ trans('admin.no_activity_here') }} ..!!</code>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->

@endsection



