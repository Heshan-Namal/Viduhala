@foreach($detail as $key=> $d)
@extends('layouts.teacher_matirial')
@endforeach
@section('content')
<div class="container">
  <main class="py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quizes
                <div class="text-end">
                <button class="btn-sm "><a href="{{route('quiz.create',[$classid,$subjectid])}}">Add a Quiz</a></button>
                </div>
                </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Period StartTime</th>
      <th scope="col">Period EndTime</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">AddQuestions</th>
      <th scope="col">View</th>
      <th scope="col">Published</th>
      
    </tr>
  </thead>
  <tbody>
    @if(count($quizes)>0)
      @foreach($quizes as $key=> $quiz)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$quiz->title}}</td>
      <td>{{$quiz->date}}</td> 
      <td>{{$quiz->period_starttime}}</td>
      <td>{{$quiz->period_endtime}}</td>
      <td>{{$quiz->status}}</td>
      <td><a href="{{route('quiz.edit',[$classid,$subjectid,$quiz->id])}}"><button class="btn btn-primary btn-sm">Edit</button></a> </td>
      <td><button class="btn btn-danger btn-sm" onclick="document.getElementById('id01').style.display='block'">Delete</button></></td>
      <td><a href="{{route('question.create',[$classid,$subjectid,$quiz->id])}}"><button class="btn btn-warning btn-sm">AddQuestions</button></a></td> 
      <td><a href="{{route('quiz.show',[$classid,$subjectid,$quiz->id])}}"><button class="btn btn-info btn-sm">View</button></a></td>
      <form action="{{route('quiz.status',$quiz->id)}}" method="POST">@csrf
        <td>
          @if($quiz->status=='draft')
            <input type="submit" name="status" value="Published" class="btn btn-success btn-sm ">  
          @else
            <input type="submit" name="status" value="Published" class="btn btn-success btn-sm disabled "> 
          @endif
        </td>

      </form>
       
      

      <!-- <div id="id01" class="modal">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
          <form class="modal-content" action="/action_page.php">
            <div class="container">
              <h1>Delete Account</h1>
              <p>Are you sure you want to delete your account?</p>
            
              <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
              </div>
            </div>
        </form>
        </div> -->
    </tr>
    @endforeach


    @else  
    <p>No Quizes assign yet</p>
    @endif
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
