@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Portfolio</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($projects)
                        <div class="row">
                            @foreach ($projects as $project)
                            <div class="col-6">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="/storage/portfolio/{{ $project->image }}" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">{{ $project->title}}</h5>
                                      <p class="card-text">{{ $project->description}}</p>
                                      <a href="{{ route('portofolio.edit', $project->id)}}">edit</a>
                                    </div>
                                  </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                            <p>
                            You have no projects yet, <a href="{{ route('portofolio.add')}}">add one?</a>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection