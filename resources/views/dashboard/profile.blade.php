@extends('layouts.dashboard')

@section('content')
    <div class="be-content">

        <div class="main-content container-fluid">
            <!--Basic Elements-->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">Request Vehicle Wash<span class="panel-subtitle">Be rest assured we will give you the best of services.</span></div>
                        <div class="panel-body">
                            <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Input Text</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Input Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Placeholder Input</label>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Placeholder text" class="form-control">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-lg center-block">Enter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection