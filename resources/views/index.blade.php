@extends('layouts.MasterDashboard')


@section('content')
    <div class="">
        <p>Today is {{ Carbon\Carbon::now('Asia/Colombo') }} </p>
    </div>
    <div class="container-fluid pt-4 pb-4">
        <div>
        	<span>Today Links</span>
        </div>          
    </div>

@endsection