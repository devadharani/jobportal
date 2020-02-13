@extends('layouts.app')
@section('content')

    <body class="animation bg-light background_image">
    <div class="row">
        <div class="container">
            <a style="float:right;" href="{{url('/employers')}}" class="btn btn-primary">back</a>
        </div>
    </div>
    <br>
<div class="row">
    <div class="container">
               <div class="container">
                    @foreach($jobs as $posted_job)
                        @if($posted_job->delete_status!=1)
                    <b style="font-size:25px; color:darkred;">{{$posted_job->job_title}}</b><br>
                    <b  style="font-size:20px; color:crimson;">{{$posted_job->company_name}}</b><br>
                    <b>Location:{{$posted_job->location}}</b><br>
                    <b>{{$posted_job->qualification}}</b><br>
                    <b>{{$posted_job->skills}}   <a style="font-size:20px;" href="{{url('full_job_details_employers',['id'=>$posted_job->encoded_id])}}">view details</a> </b><br>
                <div style="height:10px;"></div>

                        @endif
        @endforeach

               </div>
    </div>
</div>
    </body>

    @endsection
