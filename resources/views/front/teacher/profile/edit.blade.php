@extends('layouts.teacher')

@section('content')


    <div class="login__hero">
      
    
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                @if($teacher->img)
                <img class="rounded-circle mt-5" width="150px" src="{{ URL::to('/assets/front/images')}}/{{$teacher->img}} ">
                @else
                <img class="rounded-circle mt-5" width="150px" src="{{ URL::to('/assets/front/images/defualt.jpg') }}">
                @endif
                <input type="file" class="form-control" name="newimg">
                <span class="font-weight-bold mt-3">{{$teacher->name}}</span><span class="text-black-50 my-1">{{$teacher->email}}</span><span> </span></div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Profile</h4>
                </div>
                <form action="{{route('profile.update',$teacher->id)}}" method="POST" > @method('PUT') @csrf
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$teacher->name}}" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label>
                    <input type="text" class="form-control" name="contact" value="{{$teacher->contact}}" ></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label>
                    <input type="text" class="form-control"  name="email" value="{{$teacher->email}}"></div>
                </div>
                <div class="form-group mt-4 text-end">
                <button class="btn btn-info profile-button mx-1" type="submit">Save Profile</button>
                <a href="#"><button class="btn btn-danger profile-button mx-2" type="button" >Cancel</button>
                </div>
            </form>
            </div>
            
        </div>
    </div>
</div>
</div>
@endsection





