@extends('app')

@section('content')
<main class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card my-4" style="width: 30rem;">
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
@endsection