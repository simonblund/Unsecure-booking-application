@extends('page')
@section('title')
    Catlover members
@endsection
@section('content')
    <h1>Edit events</h1>
    <div class="container">
        <div class="row">
            @foreach ($events as $event)
            <div class="row">
                <div class="col-md-2">
                    <img src="https://static.pexels.com/photos/54632/cat-animal-eyes-grey-54632.jpeg" alt="cat" class="img-circle" height="120" width="120">
                </div>
                <div class="col-md-10">
                <h2 class="text-left">{!!$event->EName!!}<small>-{!!$event->ELocation!!}</small></h2>
                <p class="text-left">{!!$event->EDescription!!}</p>
                <p class="text-left">
                <a href="/admin/event/{{$event->id}}/edit"> edit this event </a>
                </p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    
@endsection