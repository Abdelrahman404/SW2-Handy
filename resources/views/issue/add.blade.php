@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('issue.save') }}">
             {{ csrf_field() }}
            <div class="form-group">
                <h1>Report an issue</h1>
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter issue title" required>
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="desc">Description</label>
              <textarea type="text" class="form-control" name="description" id="desc" placeholder="Enter issue description" required ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>    
    </div>
@endsection