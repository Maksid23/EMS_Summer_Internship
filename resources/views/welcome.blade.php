
@extends('index')
@section('content')
<div class="container-fluid">
            <div id="info-display">
                <h2>Welcome to the {{Auth::user()->name}} Dashboard</h2>
                <p>Select an option from the sidebar to view information.</p>
            </div>
        </div>
@endsection
