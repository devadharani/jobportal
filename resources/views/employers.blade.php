
@extends('layouts.app')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<br>
<body class="animation bg-light background_image_job">
<div class="row">
    <div class="container">
        <a style="float:right;" href="{{url('/home')}}" class="btn btn-primary">back</a>
</div>
</div>
<br>
 <div class="row">
     <div class="container">
            <div class="card" style="border-radius:20px 50px;">
                <div class="card-header">
                    <h4>Posted Employers</h4>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                    @foreach($posted_employers as $posted_employer)
                        @if($posted_employer->delete_status!=1)
                        <tr>
                            <td style="width:300px;"> {{$posted_employer->name}}</td>
                            <td style="width:200px;"> <a href="{{route('admin.show',$posted_employer->encode_id)}}"
                                                         class="btn btn-primary">Posted Jobs</a> </td>
                            <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                         data-employer="{{$posted_employer->name}}" data-id="{{$posted_employer->encode_id}}">Delete</button></td>
                        </tr>
                            @endif
                    @endforeach
                    </table>
                </div>

            </div>
     </div>
 </div>
 <br>
 <div class="row">
     <div class="container">
         <div class="card" style="border-radius:20px 50px;">
             <div class="card-header">
                 <h4>Employers</h4>
             </div>
             <div class="card-body">
                 <table class="table table-borderless">
                 @foreach($employers as $employer)
                     <tr>
                             <td style="width:300px;"> {{$employer->name}} </td>
                         <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                      data-employer="{{$employer->name}}" data-id="{{$employer->encode_id}}">Delete</button></td>
                     </tr>
                 @endforeach
                 </table>
             </div>
         </div>
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
        var name = button.data('employer')
        var id=button.data('id')
        var url = '{{ route("admin.destroy", "user_id") }}';
        url = url.replace('user_id',id);
        var modal = $(this)
        modal.find('.modal-title').text('Delete Employer ' + name)
       // modal.find('.modal-footer a').attr('href', url)
        $('#user_id').val(id)
        document.getElementById("delete-modal").action = url;
       // modal.find('.modal-body input').val(recipient)
    })
</script>

@endsection

