@extends('layouts.dashboard')

@section('content')
    <div class="be-content">
        <div class="page-head">
            <h2 class="page-head-title">Customers</h2>
            <ol class="breadcrumb page-head-nav">
                <li>Customers on this platform till {{ date('D/M/Y') }}</li>
            </ol>
        </div>
        <div class="main-content container-fluid">
            <div class="row">
                <!--Responsive table-->
                <div class="col-sm-12">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive noSwipe">
                                @if (session('alert'))
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <p class="text-center">{{ session('alert') }}</p>
                                    </div>
                                @endif

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        @foreach ($errors->all() as $error)
                                            <p class="text-center">{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                @if(!$users->count())
                                    <div class="text-center alert alert-danger">
                                        <p>No user has registered on this platform yet</p>
                                    </div>
                                @else
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th style="width:10%;">
                                                User ID
                                            </th>
                                            <th style="width:20%;">Customer Name</th>
                                            <th style="width:15%;">Email</th>
                                            <th style="width:10%;">Mobile Number</th>
                                            <th style="width:10%;">Location</th>
                                            <th style="width:17%;">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>LBC{{ $user->id }}</td>
                                                <td class="user-avatar cell-detail user-info">{{ $user->full_name }}</td>
                                                <td class="cell-detail">{{ $user->email }}</td>
                                                <td class="text-bold">{{ $user->mobile_number }}</td>
                                                <td class="cell-detail">{{ $user->your_location }}</td>
                                                <td>
                                                    @if($user->status == 2)
                                                        <button class="btn btn-info">Client</button>
                                                    @endif
                                                </td>
                                            </tr>

                                            {{--<!--Modal Alerts-->--}}
                                            {{--<div id="mod-danger{{$user->id}}" tabindex="-1" role="dialog" style="" class="modal fade">--}}
                                                {{--<div class="modal-dialog">--}}
                                                    {{--<div class="modal-content">--}}
                                                        {{--<div class="modal-header">--}}
                                                            {{--<button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="modal-body">--}}
                                                            {{--<div class="text-center">--}}
                                                                {{--<div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>--}}
                                                                {{--<h3>Warning!</h3>--}}
                                                                {{--<p>You are about to delete this request to wash a vehicle.</p>--}}
                                                                {{--<div class="xs-mt-50">--}}
                                                                    {{--<button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>--}}
                                                                    {{--<a href="{{ url('delete-request') }}/{{$user->id}}" class="btn btn-space btn-danger">Delete</a>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="modal-footer"></div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif

                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection