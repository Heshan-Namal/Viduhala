<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">dashboard</div>
            <div class="card-body">
                <form action="/store" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control">
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html> -->
@foreach($detail as $key=> $d)
@extends('layouts.teacher_matirial')
@endforeach

@section('content')
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Assesments</div>
                    <!-- @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                        @endforeach
                    @endif -->
                    <form action="{{route('ass.update',$ass->id)}}" method="POST" enctype="multipart/form-data">@method('PUT')
                        @csrf
                    <div class="card-body">
                       <div class="form-group mb-2">
                           <label for="name">Title</label>
                           <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title of assesment" value="{{$ass->title}}">
                           @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <div class="form-group mb-2">
                           <label for="description">Description</label>
                           <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{$ass->description}}</textarea>
                           @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <div class="form-group mb-4">
                           <!-- <label for="class_id">Class_id</label> -->
                           <input type="hidden" class="form-control" name="class_id" value="{{$ass->class_id}}">
                         
                       </div>
                       <div class="form-group mb-4">
                           <!-- <label for="subject_id">Subject_id</label> -->
                           <input type="hidden" class="form-control " name="subject_id" value="{{$ass->subject_id}}">
                          
                       </div>
                    
                       <div class="form-group mb-4">
                           <label for="assignments">Upload the Assignment</label>
                           <input type="file" class="form-control @error('assignments') is-invalid @enderror" id="assignments" name="assignments">
                           <p>{{$ass->assignments}}</p>
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