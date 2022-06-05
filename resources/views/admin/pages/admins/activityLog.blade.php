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
                                <li class="breadcrumb-item"><a href="{{route('admin.activity')}}">{{ trans('admin.activity') }}</a></li>
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
                                <th>{{ trans('admin.name') }}</th>
                                <th>{{ trans('admin.user_name') }}</th>
                                <th>{{ trans('admin.email') }}</th>
                                <th>{{ trans('admin.password') }}</th>
                                <th>{{ trans('admin.phone') }}</th>
                                <th>{{ trans('admin.status') }}</th>
                                <th>{{ trans('admin.default_language') }}</th>
                                <th>{{ trans('admin.photo') }}</th>
                                <th>{{ trans('admin.date') }}</th>
                                <th>{{ trans('admin.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($activities as $activity)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $activity->name }}</td>
                                    <td>{{ $activity->user_name }}</td>
                                    <td>{{ $activity->email }}</td>
                                    <td>**********************</td>
                                    <td>{{ $activity->phone }}</td>
                                    <td><span
                                            class="badge rounded-pill badge-light-primary me-1">{{ $activity->getActive() }}</span>
                                    </td>
                                    <td>{{ $activity->default_language ?? '--' }}</td>
                                    <td>
                                        @if ($activity->image === null)
                                            <img src="{{asset('assets/admin/images/avatars/2.png')}}"
                                                id="blah" height="40" width="40" alt="your image">
                                        @else
                                            <span class="avatar"><img class="round" <img
                                                    src="{{ url('storage/photos/admins') }}/{{ $activity->image }}"
                                                    alt="avatar" height="40" width="40">
                                                <span class="avatar-status-online"></span>
                                            </span>
                                        @endif

                                    </td>
                                    <td>{{ $activity->date_time ?? '--' }}</td>
                                    <td>
                                        <a href="{{route('admin.activity.delete',$activity ->id)}}"
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



