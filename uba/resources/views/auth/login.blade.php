@extends('page')

@section('content')
<div class="container-fluid indigo lighten-3 welcomepage">
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card login-card">
                <div class="card-title">LOGGA IN</div>
                <div class="card-content">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' invalid' : '' }}">

                            <div class="field">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                <label for="email" class="col-md-4 control-label">Epost</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' invalid' : '' }}">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                                <label for="password" class="col-md-4 control-label">Lösenord</label>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-field">
                        </br>
                            <div>
                                    <input id="remember" type="checkbox" name="remember">
                                    <label for="remember">Kom ihåg mig</label>
                            </div>
                        </div>
                        </br>



                        <div class="card-action">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary deep-purple darken-1">
                                    <i class="fa fa-btn fa-sign-in"></i> Logga in
                                </button>

                                <a class="btn btn-link deep-purple darken-1" href="{{ url('/password/reset') }}">Glömt lösenordet?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection