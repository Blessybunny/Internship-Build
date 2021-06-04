@extends('layouts.master')

@section('title')
    {{ $apparel->name }}
@endsection

@section('content')

    <!-- MAIN CONTENT -->
    <div class = "main section">
        <div class = "container">
            
            <!-- Header -->
            <div class = "row">
                <div class = "col">
                    <h3>APPARELS</h3>
                    <hr/>
                </div>
            </div>
            
            <!-- Properties -->
            <div class = "properties row">
                <div class = "col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <img src = "{{ asset($apparel->img_url) }}"/>
                </div>
                <div class = "col-8 col-sm-8 col-md-8 col-lg-8">
                    <p>Site directory > up to shirt category</p>
                    <h3>{{ $apparel->name }}</h3>
                    <hr/>
                    <p>No Ratings | 0 sold</p>
                    <hr/>
                    <h4>PHP {{ $apparel->price }}</h4>
                </div>
            </div>
                                    
        </div>
    </div>

@endsection