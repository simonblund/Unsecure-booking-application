@extends('page')
@section('title')
    event
@endsection
@section('content')
    <h1>{!!$event->EName!!}-<small>{!!$event->ELocation!!}</small></h1>
    <p>{!!$event->EDescription!!}</p>
@endsection