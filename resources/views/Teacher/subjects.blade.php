@extends('app')

@section('content')
<main class="py-4">
    <div class="container">
        <div class="row">
            @foreach($data as $key=>$sub)
            <div class="col-md-4">
                <div class="card my-4" style="width: 18rem;">
                    <a href="{{route('teacher.matirial',[$sub->classid,$sub->subjectid])}}">
                    <div class="card-body text-center">
                        <p>{{$sub->class}}</p>
                        <p>{{$sub->subject}}</p>
                        <!-- <p>{{$sub->classid}}</p> -->
                    </div>
                </a>
                </div>
                </div>
                @endforeach
            
        </div>
    </div>
</main>
@endsection