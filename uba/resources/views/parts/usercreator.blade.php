@extends('page')
@section('title')
    Create an account
@endsection
@section('content')
    <h1>Create a new account <small> catlover</small></h1>
    <div class="container">
        <div class="row">
            <form class="form-horizontal" action="/user/save" method="POST">
            <div class="col-md-6">
                
                    <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                        <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone">
                        </div>
                </div>

                <div class="form-group">
                    <label for="addressStreet" class="col-sm-2 control-label">Street address</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="addressStreet" id="addressStreet" placeholder="Street address">
                        </div>
                </div>

                <div class="form-group">
                    <label for="addressCity" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="addressCity" id="addressCity" placeholder="City">
                        </div>
                </div>

                <div class="form-group">
                    <label for="addressCountry" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="addressCountry" id="addressCountry" placeholder="Country">
                        </div>
                </div>
                
            </div>
            <div class="col-md-6">
                
                    <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                </div>

                <div class="form-group">
                    <label for="cardNumber" class="col-sm-2 control-label">Credit Card No</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="cardNumber" id="cardNumber" placeholder="8710 XXXX XXXX XXXX">
                        </div>
                </div>

                <div class="form-group">
                    <label for="CVC" class="col-sm-2 control-label">CVC</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" name="CVC" id="CVC" placeholder="CVC">
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>
    
@endsection