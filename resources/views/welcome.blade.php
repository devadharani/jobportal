
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Scripts -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->

        <!-- Fonts -->

    </head>
        <style>

            .full-height {
                height: 100px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/') }}">Jobs</a>
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
        </div>
            @endif
                <div class="row">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                        @foreach($row as $providers)
                            @if($providers->delete_status!=1)
                                        <a  class="btn btn-primary" style="float:right;" href="{{url('new_user_login')}}">Apply Now</a>
                                    <b style="font-size:25px; color:darkred;">{{$providers->job_title}}</b><br>
                                    <b  style="font-size:20px; color:crimson;">{{$providers->company_name}}</b><br>
                                    <b style="font-size:15px; color:royalblue;">Posted by {{$providers->name}}</b><br>
                                    <b>Location:{{$providers->location}}</b><br>
                                    <b>{{$providers->qualification}}</b><br>
                                    <b>{{$providers->skills}}   <a style="font-size:20px;" href="{{url('new_user_login')}}">view details</a> </b><br>
                            <div style="height:10px;"></div>
                                <hr>
                        @endif
                        @endforeach
                            </div>
                        </div>
                    </div>
                </div>
    </body>
</html>

