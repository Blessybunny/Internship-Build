@extends('layouts.dashboard')

@section('link-1')
    active
@endsection

@section('title')
    Dashboard
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content dashboard">
        <div class = "container-fluid">

            <!-- Warnings -->
            <div class = "row">
                <h3>One last thing to do...</h3>
                <p>Add warnings where each stock of apparels on different sizes are low on numbers.</p>
                <p>Add warnings where each stock of materials are low on numbers.</p>
                <p>Add warnings where shipping is long overdue.</p>
                <p>Add warnings where an apparel is overproduces (this warning is dismissable).</p>
            </div>
            
        </div>
    </div>

@endsection