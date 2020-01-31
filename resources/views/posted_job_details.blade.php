@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="container">
            <a style="float:right;" href="{{url('/employers')}}" class="btn btn-primary">back</a>
        </div>
    </div>
    <br>
<div class="row">
    <div class="container">
        @foreach($jobs as $posted_job)
            <div class="card">
                <div class="card-body">
                    <b style="font-size:25px; color:darkred;">{{$posted_job->job_title}}</b><br>
                    <b  style="font-size:20px; color:crimson;">{{$posted_job->company_name}}</b><br>
                    <b>Location:{{$posted_job->location}}</b><br>
                    <b>{{$posted_job->qualification}}</b><br>
                    <b>{{$posted_job->skills}}   <a style="font-size:20px;" href="{{url('full_job_details_employers',['id'=>$posted_job->encoded_id])}}">view details</a> </b><br>
                </div>
            </div>
            <div style="height:10px;"></div>
        @endforeach
    </div>
</div>
    @endsection
