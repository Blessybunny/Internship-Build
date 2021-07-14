@extends('layouts.master')

@section('title')
    Administrator Login
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "main section kit">
        <div class = "container">
            
            <!-- Header -->
            <div class = "row">
                <div class = "col">
                    <h3>Administrator Login</h3>
                    <hr/>
                </div>
            </div>
            
            <!-- Login -->
            <div class = "row tabs">
                <div class = "col-md-3"></div>
                <div class = "col-md-6">
                    <form action = "{{ url('/login') }}" method = "POST">
                        @csrf
                        <div class = "form-group">
                            <input class = "form-control" name = "email" type = "email" required/>
                            <small class = "form-text text-muted">Email address</small>
                        </div>
                        <div class = "form-group">
                            <input class = "form-control" name = "password" type = "password" required/>
                            <small class = "form-text text-muted">Password</small>
                        </div>
                        <button type = "submit" class = "btn btn-primary">Log In</button>
                    </form>
                </div>
                <div class = "col-md-3"></div>
            </div>
            
        </div>
    </div>

@endsection