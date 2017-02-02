@extends('page')
@section('title')
    Catlover event participant list
@endsection
@section('content')
    <h1>Event participants</h1>
    <div class="container">
        @foreach($event as $event)
        <div class="row">
            <h2>{{ $event->EName}}</h2>
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Street</td>
                    <td>City</td>
                    <td>Country</td>
                    <td>CardNumber</td>
                    <td>Events</td>
                    <td>Admin?</td>
                </tr>
                @foreach($event->visitors as $user)
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->addressStreet}}</td>
                <td>{{$user->addressCity}}</td>
                <td>{{$user->addressCountry}}</td>
                <td>{{$user->cardNumber}}</td>
                <td>NotFixed</td>
                <td>{{$user->admin}}</td>
                @endforeach
            </table>
        </div>
        @endforeach

    </div>
    
@endsection