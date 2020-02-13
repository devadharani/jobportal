
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
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
                integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <!-- Fonts -->

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
             .animation {
                 animation-duration: 3s;
                 animation-name: slidein;
             }

            @keyframes slidein {
                from {
                    margin-left: 100%;
                    width: 300%;
                }

                to {
                    margin-left: 0%;
                    width: 100%;
                }
            }
            .grad{
                background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            }
            .background_image{
                background-image: url({{ asset('img/images.jpg') }});
                background-repeat: no-repeat;
                background-size:100% 100%;
            }
    </style>
    </head>
    <body class="animation grad background_image">
        <div class="flex-center position-ref full-height" style="height:50px;">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="color:mediumblue;" href="{{ url('/') }}">Jobs</a>
                        <a style="color:mediumblue;" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a style="color:mediumblue;" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
        </div>
            @endif
        <br>
                <div class="row">
                    <div class="container" style="width:800px;">
                        @foreach($row as $providers)
                            @if($providers->delete_status!=1)
                                @auth

                                    @if(in_array($providers->id,$applied_lists))
                                    <a class="btn btn-primary" style="float:right;" href="#">Applied</a>
                                        @else
                                        <a class="btn btn-primary" style="float:right;"   @if(Auth::user()->user_type!=4) href="#" @endif href="{{url('apply',['id'=>$providers->encoded_id])}}">Apply Now</a>
                                @endif

                                @endauth
                                   @guest
                                    <a class="btn btn-primary" style="float:right;" href="{{url('new_user_login')}}">Apply Now</a>
                                       @endguest
                                    <b style="font-size:25px; color:darkred;">{{$providers->job_title}}</b><br>
                                    <b  style="font-size:20px; color:crimson;">{{$providers->company_name}}</b><br>
                                    <b style="font-size:15px; color:royalblue;">Posted by {{$providers->name}}</b><br>
                                    <b>Location:{{$providers->location}}</b><br>
                                    <b>{{$providers->qualification}}</b><br>
                                    <b>{{$providers->skills}}
                                        <a style="font-size:20px;"
                                           @auth
                                           @if(Auth::user()->id == $providers->user_id or Auth::user()->user_type==1)
                                           href="{{url('full_job_details_employers',['id'=>$providers->encoded_id])}}"
                                           @else
                                           href="{{url('full_job_details_users',['id'=>$providers->encoded_id])}}"
                                           @endif
                                           @endauth
                                               @guest
                                        href="{{url('full_job_details_users',['id'=>$providers->encoded_id])}}"
                                        @endguest
                                         >view details</a> </b><br>
                            <div style="height:10px;"></div>
                                <br>
                        @endif
                        @endforeach
                    </div>
                </div>
    </body>
</html>

