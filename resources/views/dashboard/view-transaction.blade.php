@extends('layouts.dashboard')

@section('content')
    <div class="be-content">

        <div class="main-content container-fluid">
            <!--Basic Elements-->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">Detailed Description Of Request For Vehicle Wash With Tag #LB01{{ $requests->id }}89<span class="panel-subtitle">Be rest assured we will give you the best of services.</span></div>
                        <div class="panel-body">
                            <form style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Vehicle Type</label>
                                    <div class="col-sm-6">
                                        <input  value="{{ $requests->type_of_vehicle }}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Number of Selected Vehicle Type</label>
                                    <div class="col-sm-6">
                                        <input  value="{{ $requests->number_of_vehicle }}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Service Type</label>
                                    <div class="col-sm-6">
                                        <input  value="{{ $requests->service_type }}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Water Availability</label>
                                    <div class="col-sm-6">
                                        <input  value="{{ $requests->water_availability }}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Wash Schedule</label>
                                    <div class="col-md-3 col-xs-7">
                                        <input  value="{{ $requests->wash_schedule }}" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Your Location For the Wash</label>
                                    <div class="col-sm-6">
                                        <textarea rows="5" placeholder="Your Location" class="form-control" disabled>{{ Auth::User()->your_location }}</textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection