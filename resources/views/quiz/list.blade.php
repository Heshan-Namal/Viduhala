@extends('layouts.MasterDashboard')


@section('content')

    <div class="content">
        <div class="row">
            <div class="col">
                <div class="card wide-card">
                <div class="card-header">{{$quiz->title}}
                <div class="text-end">
                        <p>{{$quiz->date}}</p>
                </div>

                </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                @foreach($questions as $key=>$q)
                <div class="card mb-4">
                <div class="card-header">
                    <h3>{{$key+1}}.{{$q->question}}</h3>
                </div>
                <div class="card-body">
                <ol   class="ul-list"  style="list-style-type: lower-alpha;" >
                    <li>&nbsp;<input type="radio" {{$q->correct_answer=='answer1' ? 'checked' : ''}}  /> {{$q->answer1}}   </li>
                    <li>&nbsp;<input type="radio"  {{$q->correct_answer=='answer2' ? 'checked' : ''}}  /> {{$q->answer2}}   </li>
                    <li>&nbsp;<input type="radio"  {{$q->correct_answer=='answer3' ? 'checked' : ''}}  /> {{$q->answer3}}   </li>
                    <li>&nbsp;<input type="radio"  {{$q->correct_answer=='answer4' ? 'checked' : ''}}  /> {{$q->answer4}}   </li>
                    
                    </ol>
                    <div class="card-header"><p>Correct Answer :- {{$q->correct_answer}}</p></div>
                    <div class="text-end">
                    <a href="{{route('question.edit',[$classid,$subjectid,$q->id])}}"><button class="btn btn-primary btn-sm">Edit</button></a>
                    </div>
                    

                </div>
                </div>
                @endforeach

                </div>
                </div>
            </div>
        </div>
    </div>

@endsection