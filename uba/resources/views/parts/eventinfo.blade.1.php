@extends('page')
@section('title')
    event
@endsection
@section('content')
    <img src="https://static.pexels.com/photos/20787/pexels-photo.jpg" width="600px"/>
    <h1>{!!$event->EName!!}-<small>{!!$event->ELocation!!}</small></h1>
    <p>{!!$event->EDescription!!}</p>
    <a href="/user/add" class="btn btn-primary">Create an account and order tickets</a>
@endsection