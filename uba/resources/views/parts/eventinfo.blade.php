@extends('page')
@section('title')
    event
@endsection
@section('content')
    <img src="https://static.pexels.com/photos/20787/pexels-photo.jpg" width="600px"/>
    <h1>{!!$event->EName!!}-<small>{!!$event->ELocation!!}</small></h1>
    <p>{!!$event->EDescription!!}</p>
    <h3>
        <span class="label 
        @if($particount < $event->EMaxParticipants)
        label-success"
        @else
        label-warning"
        @endif>
            {{$particount}} out of {{$event->EMaxParticipants}} seats taken
            </span>
    </h3>
    <a href="/user/add" class="btn btn-primary">Create an account and order tickets</a>
    @if (Auth::guest() | $particount >= $event->EMaxParticipants)
    @else
    <a href="/event/{{$event->id}}/participate/{{Auth::user()->id}}" class="btn btn-success">Order tickets!</a>
    @endif
@endsection