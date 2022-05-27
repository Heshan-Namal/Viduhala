@foreach($detail as $key=> $d)
@extends('layouts.MasterDashboard')
@endforeach
@section('content')
<div class="content">
  <main class="py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card quiz-card">
                <div class="card-header">Assesments
                <div class="text-end">
                <button class="btn-sm "><a href="{{route('ass.create',[$classid,$subjectid])}}">Add a Assesment</a></button>
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
      <th scope="col">Description</th>
      <th scope="col">Uploarded PDF</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">Published</th>
    </tr>
  </thead>
  <tbody>
  @if($assments->count()>0)
      
      @foreach($assments as $key=> $ass)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$ass->title}}</td>
      <td>{{$ass->description}}</></td> 
      <td><a class="Link" href="http://127.0.0.1:8000/Ass/{{$ass->assignments}}">{{$ass->assignments}}</a></td>
      <td>{{$ass->status}}</></td>
      <td><a href="{{route('ass.edit',[$classid,$subjectid,$ass->id])}}"><button class="btn btn-primary btn-sm">Edit</button></a> </td>
      <td><button class="btn btn-danger btn-sm" onclick="document.getElementById('id01').style.display='block'">Delete</button></></td> 
      
      <form action="{{route('ass.status',$ass->id)}}" method="POST">@csrf
        <td>
          @if($ass->status=='Pending')
            <input type="submit" name="status" value="Published" class="btn btn-success btn-sm ">  
          @else
            <input type="submit" name="status" value="Published" class="btn btn-success btn-sm disabled "> 
          @endif
        </td>

      </form>
    </tr>
  
    @endforeach
    @else  
    <p>No Assesments assign yet</p>
    @endif
    
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
  </main>
</div>
@endsection
