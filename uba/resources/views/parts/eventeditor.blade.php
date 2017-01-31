@extends('page')
@section('title')
    Edit event
@endsection
@section('content')
    <img src="https://static.pexels.com/photos/20787/pexels-photo.jpg" width="600px"/>
    <h1>Edit <small> {{$event->EName}}</small></h1>
    <div class="container">
        <div class="row">
            <form class="form-horizontal" action="/admin/event/{{$event->id}}" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            <div class="col-md-6">
                
                    <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name*</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="EName" id="name" value="{{$event->EName}}">
                        </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Location</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="ELocation" id="email" value="{{$event->ELocation}}">
                        </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Start date</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control" name="EStartDate" id="phone" value="{{$event->EStartDate}}">
                        </div>
                </div>

                <div class="form-group">
                    <label for="addressStreet" class="col-sm-2 control-label">Stop date</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control" name="EStopDate" id="addressStreet" value="{{$event->EStopDate}}">
                        </div>
                </div>

                <div class="form-group">
                    <label for="addressCity" class="col-sm-2 control-label">Start time</label>
                        <div class="col-sm-10">
                        <input type="time" class="form-control" name="EStartTime" id="addressCity" value="{{$event->EStartTime}}">
                        </div>
                </div>

                <div class="form-group">
                    <label for="addressCountry" class="col-sm-2 control-label">Stop time</label>
                        <div class="col-sm-10">
                        <input type="time" class="form-control" name="EStopTime" id="addressCountry" value="{{$event->EStopTime}}">
                        </div>
                </div>
                
            </div>
            <div class="col-md-6">
                
                    <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Max participants</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="EMaxParticipants" id="password" value="{{$event->EMaxParticipants}}">
                        </div>
                </div>

                <div class="form-group">
                    <label for="cardNumber" class="col-sm-2 control-label">Event description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="EDescription" id="cardNumber" >{{$event->EDescription}}</textarea>
                        
                        </div>
                </div>

               
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Save Changes</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>
@endsection