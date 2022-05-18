@foreach($detail as $key=> $d)
@extends('layouts.teacher_matirial')
@endforeach

@section('content')
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Quiz</div>
                    <!-- @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                        @endforeach
                    @endif -->
                    <form action="{{route('quiz.store',[$classid,$subjectid])}}" method="POST" >@csrf
                    <div class="card-body">
                       <div class="form-group mb-2">
                           <label for="name">Title</label>
                           <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                           @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <div class="form-group mb-2">
                           <label for="name">Date</label>
                           <input type="date" class="form-control @error('date') is-invalid @enderror" name="date">
                           @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <div class="form-group mb-2">
                           <label for="name">Validity</label>
                           <input type="text" class="form-control @error('period_starttime') is-invalid @enderror" name="validity">
                           @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <!-- <div class="form-group mb-2">
                           <label for="name">Period End time</label>
                           <input type="time" class="form-control @error('period_endtime') is-invalid @enderror" name="period_endtime">
                           @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div> -->
                       <div class="form-group mb-4">
                           <!-- <label for="name">Class_id</label> -->
                           <input type="number" class="form-control " name="class_id" value="{{$classid}}">
                          
                       </div>
                       <div class="form-group mb-4">
                           <!-- <label for="name">Subject_id</label> -->
                           <input type="hidden" class="form-control" name="subject_id" value="{{$subjectid}}">
            
            
                       </div>
                       <div class="form-group mb-4">
                           <label for="name">Teacher_id</label>
                           <input type="number" class="form-control" name="teacher_id">
            
                       </div>
                       <div class="form-group text-center ">
                           <button class="btn btn-primary" type="submit">Save</button>
                       </div>
                        
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection