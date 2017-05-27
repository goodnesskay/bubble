@extends('layouts.dashboard')

@section('content')
    <div class="be-content">
        <div class="page-head">
            <h2 class="page-head-title">Transactions</h2>
            <ol class="breadcrumb page-head-nav">
                <li>Your transactions till {{ date('M/Y') }}</li>
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
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th style="width:5%;">
                                            <div class="be-checkbox be-checkbox-sm">
                                                <input id="check1" type="checkbox">
                                                <label for="check1"></label>
                                            </div>
                                        </th>
                                        <th style="width:20%;">User</th>
                                        <th style="width:17%;">Last Commit</th>
                                        <th style="width:15%;">Milestone</th>
                                        <th style="width:10%;">Branch</th>
                                        <th style="width:10%;">Date</th>
                                        <th style="width:10%;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="be-checkbox be-checkbox-sm">
                                                <input id="check2" type="checkbox">
                                                <label for="check2"></label>
                                            </div>
                                        </td>
                                        <td class="user-avatar cell-detail user-info"><img src="assets/img/avatar6.png" alt="Avatar"><span>Penelope Thornton</span><span class="cell-detail-description">Developer</span></td>
                                        <td class="cell-detail"> <span>Initial commit</span><span class="cell-detail-description">Bootstrap Admin</span></td>
                                        <td class="milestone"><span class="completed">8 / 15</span><span class="version">v1.2.0</span>
                                            <div class="progress">
                                                <div style="width: 45%" class="progress-bar progress-bar-primary"></div>
                                            </div>
                                        </td>
                                        <td class="cell-detail"><span>master</span><span class="cell-detail-description">63e8ec3</span></td>
                                        <td class="cell-detail"><span>May 6, 2016</span><span class="cell-detail-description">8:30</span></td>
                                        <td class="text-right">
                                            <div class="btn-group btn-hspace">
                                                <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Open <span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                                                <ul role="menu" class="dropdown-menu pull-right">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection