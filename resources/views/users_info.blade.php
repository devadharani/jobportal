
@extends('layouts.app')
@section('content')

<body class="animation bg-light background_image_job">

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="row">
        <div class="container">
            <h2><b>Profile:</b></h2>
            <ul style="list-style-type: none">
                <li style="float:right;"> &nbsp; &nbsp;<a class="btn btn-primary" href="{{url('users')}}">Back</a></li>
                <li style="float:right;"> &nbsp; &nbsp;<a class="btn btn-primary" href="{{route('admin.edit',$user->encode_id)}}">Edit</a></li>
                <li style="float:right;"> <a class="btn btn-primary"  href="{{url('users_applied_jobs',$user->encode_id)}}">Applied Jobs</a> </li>
            </ul>
            </div>
    </div>
    <br>
    <div class="row">
        <div class="container">
            <table class="table table-striped table-hover">
                <tr>
                    <td style="width:500px;">Name:</td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td> {{$user->email}}</td>
                </tr>
            </table>
            <h3><b>Address:</b></h3>
            <table class="table table-striped table-hover">
                <tr>
                    <td style="width:500px;">Addressline1</td>
                    <td> {{$user->addressline1}}</td>
                </tr>
                <tr>
                    <td>Addressline2</td>
                    <td> {{$user->addressline2}}</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td> {{$user->city}}</td>
                </tr>
                <tr>
                    <td>State</td>
                    <td> {{$user->state}}</td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td> {{$user->country}}</td>
                </tr>
                <tr>
                    <td>Zip</td>
                    <td> {{$user->zip}}</td>
                </tr>
                <tr>
                    <td >Mobile_no:</td>
                    <td> {{$user->mobile_no}}</td>
                </tr>
            </table>
            <table class="table table-striped table-hover">
                <h3><b>Education Details</b></h3>
                <tr>
                    <td class="" style="width:500px;">SSLC-School</td>
                    <td>{{$education->sslc_school}}</td>
                </tr>
                <tr>
                    <td>Place</td>
                    <td>{{$education->sslc_place}}</td>
                </tr>
                <tr>
                    <td>Percentage/CGPA</td>
                    <td>{{$education->sslc_percentage}}</td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td>{{$education->sslc_year}}</td>
                </tr>
                <tr>
                    <td class=""><b>HSC-School</b></td>
                    <td>{{$education->hsc_school}}</td>
                </tr>
                <tr>
                    <td>Place</td>
                    <td>{{$education->hsc_place}}</td>
                </tr>
                <tr>
                    <td>Percentage/CGPA</td>
                    <td>{{$education->hsc_percentage}}</td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td>{{$education->hsc_year}}</td>
                <tr>
                    <td class=""><b>UG-College</b></td>
                    <td>{{$education->ug_college}}</td>
                </tr>
                <tr>
                    <td>Place</td>
                    <td>{{$education->ug_place}}</td>
                </tr>
                <tr>
                    <td>Percentage/CGPA</td>
                    <td>{{$education->ug_percentage}}</td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td>{{$education->ug_year}}</td>
                <tr>
                    <td class=""><b>PG-College</b></td>
                    <td>{{$education->pg_college}}</td>
                </tr>
                <tr>
                    <td>Place</td>
                    <td>{{$education->pg_place}}</td>
                </tr>
                <tr>
                    <td>Percentage/CGPA</td>
                    <td>{{$education->pg_percentage}}</td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td>{{$education->pg_year}}</td>

                </tr>
            </table>
            <table class="table table-striped table-hover">
                <tr>
                    <td style="width:500px;">Skills</td>
                    <td>{{$user->skills}}</td>
                </tr>
                <tr>
                    <td>Project</td>
                    <td>{{$user->projects}}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
@endsection


