@extends('layouts.app')
@section('content')

    <body class="animation bg-light background_image_job">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius:20px 50px;">
                <div class="card-header">{{ __('Complete the details') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('provider_profile') }}">
                        @csrf

                        <p style="margin-left:170px;"> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->name}}</p>


                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>
                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control" name="company_name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="company_email" class="col-md-4 col-form-label text-md-right">{{ __('Company Email') }}</label>
                            <div class="col-md-6">
                                <input id="company_email" type="text" class="form-control" name="company_email" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('submit') }}
                                </button>
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
