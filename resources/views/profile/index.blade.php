@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Profile</div>

                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                         @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <div class="tab-pane" id="edit">
                                <h4 class="m-y-2">Edit Profile</h4>
                                <form role="form" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="col-lg-4 pull-lg-8 text-xs-center">
                                    <img src="/storage/profiles/{{ $user->profile->image }}" class="m-x-auto img-fluid img-circle" alt="avatar">
                                        <h6 class="m-t-2">Upload Profile Photo</h6>
                                        <label class="custom-file">
                                            <input type="file" name="image" class="form-control">
                                            <span class="custom-file-control">Choose file</span>
                                        </label>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Name</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{ $user->name }}" name="name" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">About</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{ $user->profile->about }}" name="about" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{ $user->profile->phone_number }}" name="phone_number" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Skills</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{ $user->profile->skills}}" name="skills" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" type="email" value="{{ $user->profile->email }}" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Area</label>
                                        <div class="col-lg-6">
                                        <input class="form-control" type="text" value="{{ $user->profile->area }}" placeholder="" name="area">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
                                        <div class="col-lg-9">
                                            <select id="user_time_zone" class="form-control" size="0">
                                                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                                <option value="Alaska">(GMT-09:00) Alaska</option>
                                                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                <option value="Arizona">(GMT-07:00) Arizona</option>
                                                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" type="text" value="{{ $user->name }}">
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" type="password" value="{{  }}">
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="11111122333">
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="submit" class="btn btn-primary" value="Save Changes">
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
        
    </div>
@endsection