@extends('layouts.MasterDashboard')

@section('content')

    <div class="login__hero">
      
    <main class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="width: 50rem;height:10rem">
            </div>
            <div class="col-md-4">
                <div class="card my-4" style="width: 30rem;height:20rem">
                    <a href="{{route('ass.index',[$classid,$subjectid])}}">
                    <div class="card-body text-center">
                        <h1>Assesments</h1>
                    </div>
                </a>
                </div>
                <div class="card my-4" style="width: 20rem;">
                    <a href="#">
                    <div class="card-body text-center">
                        <h1>LINKS</h1>
                    </div>
                </a>
                </div>
                </div>
               
            
        </div>
    </div>
</main>


    </div>
@endsection





