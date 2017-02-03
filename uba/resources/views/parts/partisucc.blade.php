@extends('page')
@section('title')
    You were added to the eventholder's participation list
@endsection
@section('content')
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Welcome {{ $user -> name}}</h3>
  </div>
  <div class="panel-body">
    You have successfully been added to the participation list and the payment has been done using your registered credit card.<br>
    <hr>
    {!! $event->EName !!} in {!! $event->ELocation !!} starting {!! $event->EStartdate !!} at {!! $event->EStartTime !!}
  </div>
</div>

@endsection