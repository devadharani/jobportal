@extends('layouts.app')
@section('content')
    <div class="container">
        <h2><b>Fill the Details</b></h2>
        <form method="POST" action="{{url('form_data',['id'=>$encoded_id])}}" id="applied_form" name="applied_form">
            @csrf
            <div class="card">
                <div class="card-header">{{ __('Personal Info') }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>
                        <div class="col-md-6">
                            <input id="company_name" type="text" class="form-control" name="company_name" value="{{$providers->company_name}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="job_title" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>
                        <div class="col-md-6">
                            <input id="job_title" type="text" class="form-control" name="job_title" value="{{$providers->job_title}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>
                        <div class="col-md-6">
                            <input id="mobile_no" type="text" class="form-control" name="mobile_no" value="{{$user->mobile_no}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="addressline1" class="col-md-4 col-form-label text-md-right">{{ __('Addressline1') }}</label>
                        <div class="col-md-6">
                            <input id="addressline1" type="text" class="form-control" name="addressline1" value="{{$user->addressline1}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="addressline2" class="col-md-4 col-form-label text-md-right">{{ __('Addressline2') }}</label>
                        <div class="col-md-6">
                            <input id="addressline2" type="text" class="form-control" name="addressline2" value="{{$user->addressline2}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control" name="city" value="{{$user->city}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
                        <div class="col-md-6">
                            <input id="state" type="text" class="form-control" name="state" value="{{$user->state}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
                        <div class="col-md-6">
                            <input id="country" type="text" class="form-control" name="country" value="{{$user->country}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input id="job_id" type="hidden" class="form-control" name="job_id" value="{{$providers->id}}" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0" >
                        <div class="col-md-6 offset-md-4" >
                            <input type="submit" name="submit" class="btn btn-primary" value="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endsection
