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
                            <h4 class="m-y-2">Edit Project</h4>
                            <form role="form" method="POST" action="{{ route('portofolio.update') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $project->id }}">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Project title</label>
                                    <div class="col-lg-9">
                                    <input class="form-control" type="text" value="{{ $project->title }}" name="title" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Describe your project</label>
                                    <div class="col-lg-9">
                                    <input class="form-control" type="text" value="{{ $project->description }}" name="description" required>
                                    </div>
                                </div>
                                <p>Current image</p>
                                <img class="card-img-top" src="/storage/portfolio/{{ $project->image }}" alt="Card image cap">
                                <label class="custom-file">
                                    Upload image
                                    <input type="file" name="image" class="form-control" >
                                    <span class="custom-file-control"></span>
                                </label>
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