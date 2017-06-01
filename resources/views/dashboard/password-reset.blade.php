@extends('layouts.dashboard')

@section('content')
    <div class="be-content">

        <div class="main-content container-fluid">
            <!--Basic Elements-->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading panel-heading-divider">Password Reset<span class="panel-subtitle">We are conscious of security. If your password security is compromised, do change it.</span></div>
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
                            <form action="{{ url('password-reset') }}/{{ Auth::User()->id }}/{{ str_slug(Auth::User()->username) }}" method="post" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Confirm Password</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-lg center-block">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection