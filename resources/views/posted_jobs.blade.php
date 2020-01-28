@extends('layouts.app')
@section('content')
 <div class="row">
    <div class="container">
        <a class="btn btn-primary" style="float:right;" href="{{url('add_jobs')}}">Add Jobs</a>
    </div>
 </div>
 <br>
 <div class="row">
 <div class="container">
        @foreach($row as $providers)
            <div class="card">
                <div class="card-body">
                    <p><b>Job {{$providers->id}}</b></p>
                    <b style="font-size:25px; color:darkred;">{{$providers->job_title}}</b><br>
                    <b  style="font-size:20px; color:crimson;">{{$providers->company_name}}</b><br>
                    <b>Location:{{$providers->location}}</b><br>
                    <b>{{$providers->qualification}}</b><br>
                    <b>{{$providers->skills}}   <a style="font-size:20px;" href="{{url('full_job_details_employers',['id'=>$providers->encoded_id])}}">view details</a> </b><br>
                </div>
            </div>
            <div style="height:10px;"></div>
            @endforeach
    </div>
 </div>
    @endsection





