    @extends('layouts.app')
    @section('content')

        <style type="text/css">
            body{
                background-color:#D5D8DC;
            }
            .register{
                background: -webkit-linear-gradient(left, #3931af, #00c6ff);
                margin-top: 3%;
                padding: 3%;
            }
            .register-left{
                text-align: center;
                color: #fff;
                margin-top: 4%;
            }
            .register-left input{
                border: none;
                border-radius: 1.5rem;
                padding: 2%;
                width: 60%;
                background: #f8f9fa;
                font-weight: bold;
                color: #383d41;
                margin-top: 30%;
                margin-bottom: 3%;
                cursor: pointer;
            }
            .register-right{
                background: #f8f9fa;
                border-top-left-radius: 10% 50%;
                border-bottom-left-radius: 10% 50%;
            }
            .register-left img{
                margin-top: 15%;
                margin-bottom: 5%;
                width: 25%;
                -webkit-animation: mover 2s infinite  alternate;
                animation: mover 1s infinite  alternate;
            }
            @-webkit-keyframes mover {
                0% { transform: translateY(0); }
                100% { transform: translateY(-20px); }
            }
            @keyframes mover {
                0% { transform: translateY(0); }
                100% { transform: translateY(-50px); }
            }
            .register-left p{
                font-weight: lighter;
                padding: 12%;
                margin-top: -9%;
            }
            .register .register-form{
                padding: 10%;
                margin-top: 10%;
            }
            .btnRegister{
                float: right;
                margin-top: 10%;
                border: none;
                border-radius: 1.5rem;
                padding: 2%;
                background: #0062cc;
                color: #fff;
                font-weight: 600;
                width: 50%;
                cursor: pointer;
            }
            .register .nav-tabs{
                margin-top: 3%;
                border: none;
                background: #0062cc;
                border-radius: 1.5rem;
                width: 28%;
                float: right;
            }
            .register .nav-tabs .nav-link{
                padding: 2%;
                height: 34px;
                font-weight: 600;
                color: #fff;
                border-top-right-radius: 1.5rem;
                border-bottom-right-radius: 1.5rem;
            }
            .register .nav-tabs .nav-link:hover{
                border: none;
            }
            .register .nav-tabs .nav-link.active{
                width: 100px;
                color: #0062cc;
                border: 2px solid #0062cc;
                border-top-left-radius: 1.5rem;
                border-bottom-left-radius: 1.5rem;
            }
            .register-heading{
                text-align: center;
                margin-top: 8%;
                margin-bottom: -15%;
                color: #495057;
            }    </style>

        <script type="text/javascript">
            window.alert = function(){};
            var defaultCSS = document.getElementById('bootstrap-css');
            function changeCSS(css){
                if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
                else $('head > link').filter(':first').replaceWith(defaultCSS);
            }
            $( document ).ready(function() {
                var iframe_height = parseInt($('html').height());
                window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
            });
        </script>
        </head>

        <body>
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left" >
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>

                </div>
                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Register</h3>
                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf

                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="first_name"required autocomplete="first_name" autofocus>
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="last_name" type="text" class="form-control" name="last_name" placeholder="last_name" required>
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" placeholder="confirm_password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                        </div>
                                        <div class="form-group">
                                            <input id="mobile_no" type="text" class="form-control" placeholder="mobile_no" name="mobile_no" required>
                                        </div>

                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        </body>

    @endsection

