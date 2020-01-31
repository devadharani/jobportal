@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="container">
        <a href="{{url('users')}}" style="float:right;" class="btn btn-primary">Back</a>
    </div>
    </div>
    <div class="row">
        <div class="container">
            <p style="font-size:25px; color:darkred;"><b>{{$jobs->job_title}}</b></p>
            <p style="font-size:20px; color:crimson;"><b>{{$jobs->company_name}}</b></p>
            <b style="font-size:15px; color:royalblue;">Posted by {{$jobs->name}}</b><br>
            <table class="table table-borderless table-hover">
                <tr>
                    <td style="width:130px;">Location</td>
                    <td>:{{$jobs->location}}</td>
                </tr>
                <tr>
                    <td>Qualification</td>
                    <td>:{{$jobs->qualification}}</td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td>:{{$jobs->passedout_year}}</td>
                </tr>
                <tr>
                    <td>Skills</td>
                    <td>:{{$jobs->skills}}</td>
                </tr>
                <tr>
                    <td>Last Date</td>
                    <td>:{{$jobs->last_date}}</td>
                </tr>
                <tr>
                    <td>Posted Date</td>
                    <td>:{{$jobs->posted_date}}</td>
                </tr>
            </table>

            <h3><b>Job Summary</b></h3>
            <table class="table table-borderless table-hover">
                <tr>
                    <td style="width:130px;">Job Type</td>
                    <td>:{{$jobs->job_type}}</td>
                </tr>
                <tr>
                    <td>Job Role</td>
                    <td>:{{$jobs->job_role}}</td>
                </tr>
                <tr>
                    <td>Job Category</td>
                    <td>:{{$jobs->job_category}}</td>
                </tr>
                <tr>
                    <td>Hiring Process</td>
                    <td>:{{$jobs->hiring_process}}</td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td>:{{$jobs->experience}}</td>
                </tr>
                <tr>
                    <td>Job Description</td>
                    <td>:{{$jobs->job_description}}</td>
                </tr>
            </table>
        </div>
    </div>

@endsection





