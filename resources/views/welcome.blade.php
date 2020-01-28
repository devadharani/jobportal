
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                        @foreach($row as $providers)
                            <div class="card">
                                <div class="card-body">
                                    <p><b>Job {{$providers->id}}</b></p>

                                        <a  class="btn btn-primary" style="float:right;" href="{{url('new_user_login')}}">Apply Now</a>
                                    <b style="font-size:25px; color:darkred;">{{$providers->job_title}}</b><br>
                                    <b  style="font-size:20px; color:crimson;">{{$providers->company_name}}</b><br>
                                    <b style="font-size:15px; color:royalblue;">Posted by {{$providers->name}}</b><br>
                                    <b>Location:{{$providers->location}}</b><br>
                                    <b>{{$providers->qualification}}</b><br>
                                    <b>{{$providers->skills}}   <a style="font-size:20px;" href="{{url('new_user_login')}}">view details</a> </b><br>
                                </div>
                            </div>
                            <div style="height:10px;"></div>
                        @endforeach
                    </div>
                </div>
    </body>
</html>

