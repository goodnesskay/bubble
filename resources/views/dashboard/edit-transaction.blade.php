@extends('layouts.dashboard')

@section('content')
    <div class="be-content">

        <div class="main-content container-fluid">
            <!--Basic Elements-->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">Edit Request For Vehicle Wash With Tag #LB01{{ $requests->id }}89<span class="panel-subtitle">Be rest assured we will give you the best of services.</span></div>
                        <div class="panel-body">
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
                            <form action="{{ url('edit-request') }}/{{$requests->id}}" method="post" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Vehicle Type</label>
                                    <div class="col-sm-6">
                                        <select name="type_of_vehicle" class="form-control">
                                            <option value="">Select Vehicle type</option>
                                            <option value="Small Cars">Small Cars</option>
                                            <option value="Suvs">SUVs</option>
                                            <option value="Trucks">Trucks</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Number of Selected Vehicle Type</label>
                                    <div class="col-sm-6">
                                        <select name="number_of_vehicle" class="form-control">
                                            <option value="">Select Number of Vehicles</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Service Type</label>
                                    <div class="col-sm-6">
                                        <select name="service_type" class="form-control">
                                            <option value="">Select Service type</option>
                                            <option value="Engine">Engine </option>
                                            <option value="Interior">Interior</option>
                                            <option value="Exterior">Exterior</option>
                                         </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Water Availability</label>
                                    <div class="col-sm-6">
                                        <select name="water_availability" class="form-control">
                                            <option value="">Select Water Availability</option>
                                            <option value="Yes! Water is available">Yes! Water is available</option>
                                            <option value="No! Water is available">No! Water is not available</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Hour View</label>
                                    <div class="col-md-3 col-xs-7">
                                        <div data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker">
                                            <input name="wash_schedule" size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Your Location For the Wash</label>
                                    <div class="col-sm-6">
                                        <textarea name="location_for_the_wash" rows="5" placeholder="Your Location" class="form-control">{{ Auth::User()->your_location }}</textarea>
                                        @if ($errors->has('your_location'))
                                            <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('your_location') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-lg center-block">Request Wash</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection