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
                                            <th style="width:17%;">Request Time</th>
                                            <th style="width:15%;">Vehicle Type</th>
                                            <th style="width:10%;">Service Type</th>
                                            <th style="width:10%;">Wash Schedule</th>
                                            <th style="width:10%;"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($requests as $request)
                                            <tr>
                                                <td>LB01{{ $request->id }}89</td>
                                                <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar6.png" alt="Avatar"><span>{{ $request->user->created_by }}</span><span class="cell-detail-description">Developer</span></td>
                                                <td class="cell-detail">{{ $request->type_of_vehicle }}</td>
                                                <td class="text-bold">{{ $request->type_of_vehicle }}</td>
                                                <td class="text-bold">{{ $request->service_type }}</td>
                                                <td class="cell-detail"><i class="icon mdi mdi-time "></i> {{ $request->wash_schedule }}</td>
                                                <td class="">
                                                    <a class="btn btn-primary" href=""><i class="icon mdi mdi-edit"></i></a>
                                                    <a class="btn btn-danger" href=""><i class="icon mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
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