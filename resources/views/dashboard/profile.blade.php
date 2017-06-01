@extends('layouts.dashboard')

@section('content')
    <div class="be-content">

        <div class="main-content container-fluid">
            <!--Basic Elements-->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">Hello {{Auth::User()->full_name}},<span class="panel-subtitle">Update your profile for us to serve you better.</span></div>
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
                            <form action="{{ url('profile') }}/{{ Auth::User()->id }}/{{ str_slug(Auth::User()->username) }}" method="post" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Full Name</label>
                                    <div class="col-sm-6">
                                        <input value="{{ Auth::User()->full_name }}" id="username" type="text" placeholder="Full Name" name="full_name" autocomplete="off" class="form-control">
                                        @if ($errors->has('full_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('full_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Username</label>
                                    <div class="col-sm-6">
                                        <input value="{{ Auth::User()->username }}" id="username" type="text" placeholder="Username" name="username" autocomplete="off" class="form-control">
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('username') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-6">
                                        <input value="{{ Auth::User()->email }}" id="username" type="email" placeholder="E-mail Address" name="email" autocomplete="off" class="form-control">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Mobile Number</label>
                                    <div class="col-sm-6">
                                        <input value="{{ Auth::User()->mobile_number }}" name="mobile_number" placeholder="Mobile Number" class="form-control">
                                        @if ($errors->has('mobile_number'))
                                            <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Date of Birth</label>
                                    <div class="col-sm-6">
                                        <input value="{{ Auth::User()->date_of_birth }}" type="date" name="date_of_birth" placeholder="Mobile Number" class="form-control">
                                        @if ($errors->has('date_of_birth'))
                                            <span class="help-block">
                                                <strong style="color: red;">{{ $errors->first('date_of_birth') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Your Location</label>
                                    <div class="col-sm-6">
                                        <textarea name="your_location" rows="5" placeholder="Your Location" class="form-control">{{ Auth::User()->your_location }}</textarea>
                                        @if ($errors->has('your_location'))
                                            <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('your_location') }}</strong>
                                    </span>
                                        @endif
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