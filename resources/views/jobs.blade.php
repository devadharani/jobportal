@extends('layouts.app')
@section('content')

    <body class="animation bg-light background_image">
    <div class="row">
        <div class="container">
            <a href="{{url('home')}}" class="btn btn-primary" style="float:right;">Back</a>
        </div>
    </div>
    <br>
    <div class="row">
    <div class="container">

        @foreach($row as $providers)
                    @if($providers->delete_status!=1)
                    @if(in_array($providers->id,$applied_lists))
                        <a  class="btn btn-primary" style="float:right;" href="#">Applied</a>
                    @else
                        <a  class="btn btn-primary" style="float:right;" href="{{url('apply',$providers->encoded_id)}}">Apply Now</a>
                    @endif
            <b style="font-size:25px; color:darkred;">{{$providers->job_title}}</b><br>
            <b  style="font-size:20px; color:crimson;">{{$providers->company_name}}</b><br>
            <b style="font-size:15px; color:royalblue;">Posted by {{$providers->name}}</b><br>
                    <b>Location:{{$providers->location}}</b><br>
                    <b>{{$providers->qualification}}</b><br>
                    <b>{{$providers->skills}}   <a style="font-size:20px;" href="{{url('full_job_details_users',['id'=>$providers->encoded_id])}}">view details</a> </b><br>

            <div style="height:10px;"></div>
                        <hr>
            @endif
@endforeach
    </div>
    </div>
    </body>
    @endsection
