
@extends('layouts.MasterDashboard')

@section('content')
<main class="content">
    <div class="row row-col-2">
        <div class="col justify-content-center">
            <div class="row-md-12">
                <div class="card wide-card">
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

                       <div class="form-group mb-2">
                           <label for="name">term</label>
                           <input type="text" class="form-control @error('period_starttime') is-invalid @enderror" name="term">
                       </div>

                       <div class="form-group mb-2">
                           <label for="name">week</label>
                           <input type="text" class="form-control @error('period_starttime') is-invalid @enderror" name="week">
                       </div>

                       <div class="form-group mb-2">
                           <label for="name">day</label>
                           <input type="text" class="form-control @error('period_starttime') is-invalid @enderror" name="day">
                       </div>
                       
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