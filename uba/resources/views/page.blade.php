<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Catshow International - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            a:link, a:visited, a:hover, a:active {
                color: #B0BEC5;
            }

            .container {
                text-align: center;
                margin-top: 10vh;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }
            .footer {
                position: fixed;
                padding-top: 100vh;
                font-size: 49px;
            }
            .login {
                padding-top: 1rem;
            }
            .navbar-name{
                color: white;
                font-size: 2rem;
                padding-top: 1rem;
                padding-left: 2rem;
            }
            .navbar-default {
  background-color: white;
  border-color: rgba(34, 34, 34, 0.05);
  font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  transition: all 0.35s;
}
.navbar-default .navbar-header .navbar-brand {
  color: #F05F40;
  font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
  font-weight: 700;
  text-transform: uppercase;
}
.navbar-default .navbar-header .navbar-brand:hover,
.navbar-default .navbar-header .navbar-brand:focus {
  color: #eb3812;
}
.navbar-default .navbar-header .navbar-toggle {
  font-weight: 700;
  font-size: 12px;
  color: #222222;
  text-transform: uppercase;
}
.navbar-default .nav > li > a,
.navbar-default .nav > li > a:focus {
  text-transform: uppercase;
  font-weight: 700;
  font-size: 13px;
  color: #222222;
}
.navbar-default .nav > li > a:hover,
.navbar-default .nav > li > a:focus:hover {
  color: #F05F40;
}
.navbar-default .nav > li.active > a,
.navbar-default .nav > li.active > a:focus {
  color: #F05F40 !important;
  background-color: transparent;
}
.navbar-default .nav > li.active > a:hover,
.navbar-default .nav > li.active > a:focus:hover {
  background-color: transparent;
}
        @media (min-width: 768px) {
        .navbar-default {
            background-color: #9FA8DA;
            border-color: rgba(255, 255, 255, 0.3);
        }
        .navbar-default .navbar-header .navbar-brand {
            color: white;
        }
        .navbar-default .navbar-header .navbar-brand:hover,
        .navbar-default .navbar-header .navbar-brand:focus {
            color: #B0BEC5;
        }
        .navbar-default .nav > li > a,
        .navbar-default .nav > li > a:focus {
            color: rgba(255, 255, 255, 0.7);
        }
        .navbar-default .nav > li > a:hover,
        .navbar-default .nav > li > a:focus:hover {
            color: #B0BEC5;
        }
        .navbar-default.affix {
            background-color: #B0BEC5;
            border-color: rgba(34, 34, 34, 0.05);
        }
        .navbar-default.affix .navbar-header .navbar-brand {
            color: #F05F40;
            font-size: 14px;
        }
        .navbar-default.affix .navbar-header .navbar-brand:hover,
        .navbar-default.affix .navbar-header .navbar-brand:focus {
            color: #eb3812;
        }
        .navbar-default.affix .nav > li > a,
        .navbar-default.affix .nav > li > a:focus {
            color: #222222;
        }
        .navbar-default.affix .nav > li > a:hover,
        .navbar-default.affix .nav > li > a:focus:hover {
            color: #F05F40;
        }
        }
        </style>
    </head>
        <body>
                <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="/">Catshow</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-center">
                                @if (Auth::guest())
                                     <form class="form-inline login" action="/auth/login" method="POST">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="_method" value="POST">
                                                <div class="form-group">
                                                    <label class="sr-only" for="email">Email address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-default">Sign in</button>
                                    </form>
                                @else
                                        
                                        <li class="navbar-name">{{ Auth::user()->name }}</li>
                                        <li><a href="{{ url('auth/logout') }}">Logga ut</a></li>
                                                
                                        </ul>
                                @endif
                                
                                
                            </ul>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="bg-primary"><a href="/admin/event/create">New event</a></li>
                                <li class="bg-primary"><a href="/admin/events">Edit events</a></li>
                                <li class="bg-primary"><a href="/admin/participants">Participants</a></li>
                                <li class="bg-primary"><a href="/admin/users">Users</a></li>
                                
                                <li><a href="/">Events</a></li>
                                
                               
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
        <header>
            
        </header>
        <div class="container">
            @yield('content')
        </div>
        <div class="container footer">
            <div >
                Cats are funny inc. All wrongs reserved.
            </div>
        </div>
        </body>
</html>