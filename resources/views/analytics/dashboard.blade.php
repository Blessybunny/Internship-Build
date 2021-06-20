@extends('layouts.dashboard')

@section('link-1')
    active
@endsection

@section('title')
    Statistics
@endsection

@section('content')        

    <!-- MAIN CONTENT -->
    <div class = "content">
        <div class = "container-fluid">

            <!-- Warnings -->
            <div class = "row">

                <div class = "col-lg-6 col-md-6 col-sm-6">
                    <p>Add warnings where each stock of apparels on different sizes are low on numbers.</p>
                    <p>Add warnings where each stock of materials are low on numbers.</p>
                    <p>Add warnings where shipping is long overdue.</p>
                    <p>Add warnings where an apparel is overproduces (this warning is dismissable).</p>
                </div>
            </div>
            
        </div>
    </div>

@endsection