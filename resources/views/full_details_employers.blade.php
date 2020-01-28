@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="container">
            <p style="font-size:25px; color:darkred;"><b>{{$providers->job_title}}</b></p>
            <p style="font-size:20px; color:crimson;"><b>{{$providers->company_name}}</b></p>
            <b style="font-size:15px; color:royalblue;">Posted by {{$providers->name}}</b><br>
            <table class="table table-borderless table-hover">
                <tr>
                    <td style="width:130px;">Location</td>
                    <td>:{{$providers->location}}</td>
                </tr>
                <tr>
                    <td>Qualification</td>
                    <td>:{{$providers->qualification}}</td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td>:{{$providers->passedout_year}}</td>
                </tr>
                <tr>
                    <td>Skills</td>
                    <td>:{{$providers->skills}}</td>
                </tr>
                <tr>
                    <td>Last Date</td>
                    <td>:{{$providers->last_date}}</td>
                </tr>
                <tr>
                    <td>Posted Date</td>
                    <td>:{{$providers->posted_date}}</td>
                </tr>
            </table>

            <h3><b>Job Summary</b></h3>
            <table class="table table-borderless table-hover">
                <tr>
                    <td style="width:130px;">Job Type</td>
                    <td>:{{$providers->job_type}}</td>
                </tr>
                <tr>
                    <td>Job Role</td>
                    <td>:{{$providers->job_role}}</td>
                </tr>
                <tr>
                    <td>Job Category</td>
                    <td>:{{$providers->job_category}}</td>
                </tr>
                <tr>
                    <td>Hiring Process</td>
                    <td>:{{$providers->hiring_process}}</td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td>:{{$providers->experience}}</td>
                </tr>
                <tr>
                    <td>Job Description</td>
                    <td>:{{$providers->job_description}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
    <div class="container">
        <h3><b>Applied Users</b></h3>
    @foreach($edu as $user)
        <table class="table table-borderless table-hover">
            <tr>
                <td style="width:300px;">{{$user['data']['name']}} </td>
                <td><a href="{{url('applied_users',['id'=>$user['data']['encode_id']])}}" class="btn btn-primary">view details</a></td>
            </tr>
        </table>
    @endforeach
    </div>
    </div>

@endsection





