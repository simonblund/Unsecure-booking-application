<html>
    <head>
        <title>Laravel</title>

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

            .container {
                text-align: center;
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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Catshow international</div>
                <div class="quote">Find Catshow events close to you and get tickets.</div>
            </div>
            
            @foreach ($events as $event)
            <div class="row">
                <div class="col-md-2">
                    <img src="https://static.pexels.com/photos/54632/cat-animal-eyes-grey-54632.jpeg" alt="cat" class="img-circle" height="120" width="120">
                </div>
                <div class="col-md-10">
                <h2 class="text-left">{!!$event->EName!!}<small>-{!!$event->ELocation!!}</small></h2>
                <p class="text-left">{!!$event->EDescription!!}</p>
                <p class="text-left">
                <a href="/event/{{$event->Eid}}"> Read more & Get tickets </a>
                </p>
                </div>
            </div>
            @endforeach
        <div class="quote">{{ Inspiring::quote() }}</div>
        </div>
                
        
    </body>
</html>
