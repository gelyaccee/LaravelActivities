@extends('layouts.master')

@section('content')
    <br><br><br><br>
    <div class="container">
    
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Login your Account</h2>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="/login" class="btn btn-primary">Login</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Create New Account</h2>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="/register" class="btn btn-primary">Sign up</a>
                </div>
              </div>
            </div>
          </div>


    </div>
@endsection