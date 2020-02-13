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
        <a class="btn btn-primary" style="float:right;" href="{{url('add_jobs')}}">Add Jobs</a>
    </div>
 </div>
 <br>
 <div class="row">
 <div class="container">
        @foreach($row as $providers)
                    @if($providers->delete_status!=1)
                    <b style="font-size:25px; color:darkred;">{{$providers->job_title}}</b><br>
                    <b  style="font-size:20px; color:crimson;">{{$providers->company_name}}</b><br>
                    <b>Location:{{$providers->location}}</b><br>
                    <b>{{$providers->qualification}}</b><br>
                    <b>{{$providers->skills}}   <a class="btn btn-primary" href="{{url('full_job_details_employers',['id'=>$providers->encoded_id])}}">view details</a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                data-job_title="{{$providers->job_title}}" data-id="{{$providers->encoded_id}}">Delete</button></b><br>
            <div style="height:10px;"></div>
                        <hr>
                        @endif
            @endforeach
    </div>
 </div>
 <form action="" name="delete_modal" id="delete-modal" method="POST">
     @csrf
     @method('DELETE')
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel"></h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     Do you really want to delete
                 </div>
                 <div class="modal-footer">
                     <input type="submit" class="btn btn-primary" value="submit">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                 </div>
             </div>
         </div>
     </div>
 </form>
    </body>
 <script>
     $('#exampleModal').on('show.bs.modal', function (event) {
         var button = $(event.relatedTarget)
         var name = button.data('job_title')
         var id=button.data('id')
         var url = '{{ route("user.destroy", "user_id") }}';
         url = url.replace('user_id',id);
         var modal = $(this)
         modal.find('.modal-title').text('Delete Employer ' + name)
         // modal.find('.modal-footer a').attr('href', url)
         document.getElementById("delete-modal").action = url;
         // modal.find('.modal-body input').val(recipient)
     })
 </script>
    @endsection




