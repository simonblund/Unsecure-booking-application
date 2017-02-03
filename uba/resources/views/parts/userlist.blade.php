@extends('page')
@section('title')
    Catlover members
@endsection
@section('content')
    <h1>Members <small> catlovers</small></h1>
    <div class="container">
        <div class="row">
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
                    <td>Make Admin</td>
                </tr>
                @foreach($users as $user)
                <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->addressStreet}}</td>
                <td>{{$user->addressCity}}</td>
                <td>{{$user->addressCountry}}</td>
                <td>{{$user->cardNumber}}</td>
                <td>NotFixed</td>
                <td>{{$user->admin}}</td>
                <td><a href="/admin/user/{{$user->id}}/makeadmin">Make admin!</a></td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
    
@endsection