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
                            <form action="{{ url('comment') }}/{{$requests->id}}/{{ str_slug($requests->type_of_vehicle) }}" method="post" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Rate our service</label>
                                    <div class="col-sm-6">
                                        <select name="rating" class="form-control">
                                            <option value="">Choose Rating</option>
                                            <option value="Excellent">Excellent</option>
                                            <option value="Very Good">Very Good</option>
                                            <option value="Good">Good</option>
                                            <option value="Fair">Fair</option>
                                            <option value="Poor">Poor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Help us serve you better with your comment</label>
                                    <div class="col-sm-6">
                                        <textarea name="comment" rows="5" placeholder="Comment" class="form-control">
                                            {{ $requests->comment }}
                                        </textarea>
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