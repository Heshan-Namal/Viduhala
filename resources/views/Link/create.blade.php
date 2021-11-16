@foreach($detail as $key=> $d)
@extends('layouts.teacher_matirial')
@endforeach

@section('content')
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menu</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <a href="{{route('ass.index',[$classid,$subjectid])}}" class="list-group-item list-group-item-action">View</a>
                            <a href="{{route('ass.create',[$classid,$subjectid])}}" class="list-group-item list-group-item-action">Create</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add a Assesments</div>
                    <!-- @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                        @endforeach
                    @endif -->
                    <form action="{{route('ass.store',[$classid,$subjectid])}}" method="POST" enctype="multipart/form-data">@csrf
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
                           <label for="name">Description</label>
                           <textarea class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
                           @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <div class="form-group mb-4">
                           <!-- <label for="name">Class_id</label> -->
                           <input type="hidden" class="form-control " name="class_id" value="{{$classid}}">
                          
                       </div>
                       <div class="form-group mb-4">
                           <!-- <label for="name">Subject_id</label> -->
                           <input type="hidden" class="form-control" name="subject_id" value="{{$subjectid}}">
            
                       </div>
                       
                       <div class="form-group mb-4">
                           <label for="name">Upload the Assignment</label>
                           <input type="file" class="form-control @error('assignments') is-invalid @enderror" id="assignments" name="assignments">
                           @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
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