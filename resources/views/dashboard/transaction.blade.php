@extends('layouts.dashboard')

@section('content')
    <div class="be-content">
        <div class="page-head">
            <h2 class="page-head-title">Transactions</h2>
            <ol class="breadcrumb page-head-nav">
                <li>Requests made till {{ date('D/M/Y') }}</li>
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
                                @if(!$requests->count())
                                    <div class="text-center alert alert-danger">
                                        <p>No Transactions have been made yet</p>
                                    </div>
                                @else
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th style="width:10%;">
                                                Request ID
                                            </th>
                                            <th style="width:20%;">Request From</th>
                                            <th style="width:15%;">Vehicle Type</th>
                                            <th style="width:10%;">Service Type</th>
                                            <th style="width:10%;">Wash Schedule</th>
                                            <th style="width:12%;">Request Status</th>
                                            <th style="width:5%;">Approve</th>
                                            <th style="width:15%;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($requests as $request)
                                            <tr>
                                                <td>LB01{{ $request->id }}89</td>
                                                <td class="user-avatar cell-detail user-info"><span>{{ $request->created_by }}</span></td>
                                                <td class="cell-detail">{{ $request->type_of_vehicle }}</td>
                                                <td class="text-bold">{{ $request->service_type }}</td>
                                                <td class="cell-detail"><i class="icon mdi mdi-time "></i> {{ $request->wash_schedule }}</td>
                                                <td>
                                                    @if($request->status == 1)
                                                        <button class="btn btn-info">Completed</button>
                                                    @elseif($request->status == 1 && isset($request->rating) && isset($request->comment))
                                                        <button class="btn btn-danger">Comment Required</button>
                                                    @else
                                                        <button class="btn btn-warning">In Progress</button>
                                                    @endif
                                                </td>
                                                <td><a class="btn btn-success" data-toggle="modal" data-target="#mod-success{{$request->id}}" type="button">Approve</a></td>
                                                <td class="">
                                                    <a href="{{ url('view-request') }}/{{$request->id}}" class="btn btn-primary"><i class="icon mdi mdi-edit"></i></a>
                                                    <a href="{{ url('view-charges') }}/{{$request->id}}/{{ str_slug($request->type_of_vehicle) }}" class="btn btn-success"><i class="icon mdi mdi-eye"></i></a>
                                                    <a data-toggle="modal" data-target="#mod-danger{{$request->id}}" type="button" class="btn btn-danger" href=""><i class="icon mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            <!--Modal Alerts-->
                                            <div id="mod-success{{$request->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center">
                                                                <div class="text-success"><span class="modal-main-icon mdi mdi-check"></span></div>
                                                                <h3>Awesome!</h3>
                                                                <p>You want to approve that this request has been attended to. Nice job</p>
                                                                <div class="xs-mt-50">
                                                                    <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                                                                    <a href="{{ url('approve-request') }}/{{$request->id}}" class="btn btn-space btn-success">Approve</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Modal Alerts-->
                                            <div id="mod-danger{{$request->id}}" tabindex="-1" role="dialog" style="" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center">
                                                                <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                                                                <h3>Warning!</h3>
                                                                <p>You are about to delete this request to wash a vehicle.</p>
                                                                <div class="xs-mt-50">
                                                                    <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                                                                    <a href="{{ url('delete-request') }}/{{$request->id}}" class="btn btn-space btn-danger">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @endif

                                {{ $requests->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection