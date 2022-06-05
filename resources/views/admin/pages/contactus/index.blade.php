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
                                <li class="breadcrumb-item"><a href="{{route('ContactUs.index')}}">{{ trans('sideBar.user_messages') }}</a></li>
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
                    <h4 class="card-title">{{ trans('admin.messages') }}</h4>
                    
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('admin.sender_name') }}</th>
                            <th>{{ trans('admin.sender_email') }}</th>
                            <th>{{ trans('admin.sender_subject') }}</th>
                            <th>{{ trans('admin.sender_message') }}</th>
                            <th>{{ trans('admin.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($contactuss as $contact)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $contact->name }}</th>
                                <th>{{ $contact->email }}</th>
                                <th>{{ $contact->subject }}</th>
                                <th>{{ $contact->message }}</th>

                                <th>
                                    <form action="{{ route('ContactUs.delete', $contact->id) }}"
                                        method="post" style="display: inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}

                                        <button type="submit" class="btn btn-danger delete "><i
                                                class="fa fa-trash"></i>Delete</button>

                                    </form><!-- end of form -->

                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->

@endsection