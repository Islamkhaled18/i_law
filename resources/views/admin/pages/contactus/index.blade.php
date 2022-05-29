@extends('layouts.dashboardMaster')

@section('content')
    <div class="content-wrapper">


        <section class="content">

            <div class="box box-primary">

                <div class="box box-header with-border">

                    <h5 class="box-title">contactus</h5>
                </div><!-- end of header -->

                <div class="box-body">
                    @if ($contactuss->count() >= 0)
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>sender name</th>
                                    <th>sender email</th>
                                    <th>sender email</th>
                                    <th>sender message</th>
                                    <th>action</th>
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
                        </table><!-- end of table -->

                    @else
                        <h2>No data found</h2>
                    @endif

                </div><!-- end of box body -->

            </div><!-- end of box -->


        </section>

    </div>
@endsection
