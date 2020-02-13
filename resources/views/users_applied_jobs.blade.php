@extends('layouts.app')
@section('content')

    <body class="animation bg-light background_image">
    <div class="row">
        <div class="container">
            <a href="{{url('users')}}" class="btn btn-primary" style="float:right;">Back</a>
        </div>
    </div>
    <br>
<div class="row">
    <div class="container">
        <h3>Users Applied Jobs:</h3>
                @foreach($job_details as $job_detail)
                    <b style="font-size:25px; color:darkred;">{{$job_detail->job_title}}</b><br>
                    <b  style="font-size:20px; color:crimson;">{{$job_detail->company_name}}</b><br>
                    <b style="font-size:15px; color:royalblue;">Posted by {{$job_detail->name}}</b><br>
                    <b>Location:{{$job_detail->location}}</b><br>
                    <b>{{$job_detail->qualification}}</b><br>
                        <b>{{$job_detail->skills}}   <a style="font-size:20px;" href="{{url('users_full_job_details',['id'=>$job_detail->encoded_id])}}">view details</a> </b><br>
            <div style="height:10px;"></div>
                    <hr>
        @endforeach
    </div>
</div>
    </body>
    @endsection
