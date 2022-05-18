@foreach($detail as $key=>$d)
@extends('layouts.teacher_matirial')
@endforeach

@section('content')
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Question</div>
                    <!-- @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                        @endforeach
                    @endif -->
                    <form action="{{route('question.store',[$classid,$subjectid])}}" method="POST" >@csrf
                    <div class="card-body">
                       <div class="form-group mb-2">
                           <label for="name">Question</label>
                           <textarea class="form-control @error('question') is-invalid @enderror" name="question"></textarea>
                           @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <div class="form-group mb-2">
                           <label for="name">Answer 1 :</label>
                           <input type="text" class="form-control @error('answer1') is-invalid @enderror" name="answer1">
                           
                           @error('answer1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <div class="form-group mb-2">
                        <label for="name">Answer 2 :</label>
                        <input type="text" class="form-control @error('answer2') is-invalid @enderror" name="answer2">
                           
                           @error('answer2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <div class="form-group mb-2">
                            <label for="name">Answer 3 :</label>
                           <input type="text" class="form-control @error('answer3') is-invalid @enderror" name="answer3">
                           
                           @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <div class="form-group mb-2">
                            <label for="name">Answer 4 :</label>
                           <input type="text" class="form-control @error('answer4') is-invalid @enderror" name="answer4">
                           
                           @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                       </div>
                       <div class="form-group mb-4">
                       <label for="correct_answer">Select Correct Answer <span class="text-danger">*</span></label>
                            <select name="correct_answer" id="correct_answer" class="form-control" required>
                                <option ></option>
                                <option  value="answer1">Answer 1</option>
                                <option  value="answer2">Answer 2</option>
                                <option  value="answer3">Answer 3</option>
                                <option  value="answer4">Answer 4</option>
                            </select>
                          
                       </div>
                       <div class="form-group mb-4">
                           <!-- <label for="name">Quiz_id</label> -->
                           <input type="hidden" class="form-control " name="quiz_id" value="{{$quizid}}">
                          
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