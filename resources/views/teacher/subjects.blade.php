@extends('layouts.MasterDashboard')

@section('content')


    <div class="login__hero">
      
    <main class="py-4">
    <div class="container">
        <div class="row">
            @foreach($data as $key=>$sub)
            <div class="col-md-4">
                <div class="card my-4" style="width: 18rem;background-color:#ebaff5">
                    <a href="{{route('ass.index',[$sub->classid,$sub->subjectid])}}" style="text-decoration:none;">
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
<script>
    $color=['F3C8EF','E1A4F0','EF9696','D6FED6','FFECC7','CFE8FF'];
</script>
</main>

    </div>
@endsection





