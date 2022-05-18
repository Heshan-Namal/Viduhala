@extends('layouts.teacher')

@section('content')


    <div class="login__hero">
      
    @foreach($teacher as $key=> $t)
<div class="container rounded bg-white mt-5 mb-5">
    
    <div class="row">
        
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{ URL::to('/assets/front/images')}}/{{$t->img}}"><span class="font-weight-bold mt-3">{{$t->name}}</span><span class="text-black-50 my-1">{{$t->email}}</span><span> </span></div>
        </div>
        
        <div class="col-md-8 border-right">
        <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <hr>
                    <div class="card-block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Name :-</p>
                                    <h6 class="text-muted f-w-400 mx-5">{{$t->name}}</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Mobile Number :-</p>
                                    <h6 class="text-muted f-w-400 mx-5">{{$t->contact}}</h6>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Email :-</p>
                                    <h6 class="text-muted f-w-400 mx-5">{{$t->email}}</h6>
                                </div>
                            </div>
                            <div class="text-end mt-5">
                                <a href="{{route('profile.edit',$t->id)}}"><button class="btn btn-info profile-button mx-1" type="button">Edit Profile</button></a>
                                <a href="{{route('profile.pdf')}}"><button class="btn btn-danger profile-button mx-2" type="button" >Convert PDF</button></a>
                            </div>
            
            
        </div> 
        
    </div>
    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
</div>
    </div>
@endforeach
</div>
</div>

    </div>
@endsection





