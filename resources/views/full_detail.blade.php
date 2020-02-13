@extends('layouts.app')
@section('content')
    <body class="animation bg-light background_image_job">
    <div class="row">
        <div class="container">
            <ul style="list-style-type: none">
                <li style="float:right;"> &nbsp; &nbsp;<a class="btn btn-primary"  href="{{url('home')}}" >Back</a></li>
                @guest
                <li style="float:right;"><a class="btn btn-primary" href="{{route('login')}}">Apply Now</a></li>
                @endguest
                @auth
                @if(Auth::user()->user_type==4)
             @if(in_array($providers->id,$applied_lists))
                    <li><a  class="btn btn-primary" style="float:right;" href="#">Applied</a></li>
            @else
                    <li style="float:right;"> <a class="btn btn-primary"  href="{{url('apply',$providers->encoded_id)}}">Apply Now</a> </li>
            @endif
                    @endif
              @endauth
            </ul>
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
    </body>
@endsection





