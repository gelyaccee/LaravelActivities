@extends('layouts.master')

@section('content')

<br><br>
<div class="card">
    <div class="card-header">
      Timeline
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Hello, {{ $name }}</p>
        <div class="form-floating">
            <textarea class="form-control" placeholder="What's on your mind?" id="floatingTextarea"></textarea>
          </div><br>
        <footer><button type="button" class="btn btn-info">Post</button></footer>
      </blockquote>
    </div>
  </div>

@endsection