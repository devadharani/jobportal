@extends('layouts.app')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row">
        <div class="container">
            <ul style="list-style-type: none">
                <li style="float:right" > &nbsp;&nbsp;<a class="btn btn-primary" href="{{route('admin.show',$providers->enc_id)}}">back</a> </li>
                <li style="float:right" > <a class="btn btn-primary" href="{{url('jobs_edit',$providers->encoded_id)}}">edit</a></li>
            </ul>
        </div>
    </div>
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
                <td style="width:200px;"><a href="{{url('applied_users',['id'=>$user['data']['encode_id']])}}"
                                            class="btn btn-primary">view details</a></td>
                <td><button type="button" class="btn btn-primary" data-username="{{$user['data']['name']}}"
                            data-applied_message="{{$user['appliers']['message']}}" data-user_id="{{$user['data']['id']}}"
                            data-toggle="modal" data-target="#exampleModal" data-whatever="Message">Message</button></td>
            </tr>
        </table>
    @endforeach
    </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="edit_form">
                    <form method="POST" action="{{url('message',['id'=>$providers->encoded_id])}}" name="message_form" id="message_form">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="">
                        </div>

                        <div class="form-group">
                            <label for="company_name" class="col-form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{$providers->company_name}}">
                        </div>
                        <div class="form-group">
                            <label for="job_title" class="col-form-label">Job Title</label>
                            <input type="text" class="form-control" id="job_title" name="job_title" value="{{$providers->job_title}}">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text" name="message" ></textarea>
                        </div>
                            <input type="hidden" class="form-control" id="job_id" name="job_id" value="{{$providers->id}}">
                            <input type="hidden" class="form-control" id="user_id" name="user_id" value="">
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="save">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <div class="modal-body" id="view_form">

                        <div class="form-group">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name1" name="name" value="" readonly/>
                        </div>

                        <div class="form-group">
                            <label for="company_name" class="col-form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name1" name="company_name" value="{{$providers->company_name}}" readonly/>
                        </div>
                        <div class="form-group">
                            <label for="job_title" class="col-form-label">Job Title</label>
                            <input type="text" class="form-control" id="job_title1" name="job_title" value="{{$providers->job_title}}" readonly/>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text1" name="message" readonly></textarea>
                        </div>
                        <input type="hidden" class="form-control" id="job_id" name="job_id" value="{{$providers->id}}" readonly/>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="">
                    <div class="modal-footer">
                        <input type="submit" id="edit_btn" class="btn btn-primary" value="Edit">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            $('#edit_form').hide();
            $('#view_form').hide();
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('whatever'); // Extract info from data-* attributes
            var username = button.data('username'); // Extract info from data-* attributes
            var user_id = button.data('user_id'); // Extract info from data-* attributes
            var message = button.data('applied_message'); // Extract info from data-* attributes
            if(message == ""){
               editForm();
            }else{
                $('#view_form').show();
                var modal = $(this)
                modal.find('.modal-title').text(recipient+' '+'about'+' '+username)
                $('#name1').val(username);
                $('#user_id').val(user_id);
                $('#message-text1').text(message);
                $('#edit_btn').on('click',function () {
                   editForm();
                    $('#view_form').hide();
                });
            }

            function editForm() {
                $('#edit_form').show();
                var modal = $(this)
                modal.find('.modal-title').text(recipient+' '+'about'+' '+username)
                $('#name').val(username);
                $('#user_id').val(user_id);
            }


        })

    </script>
@endsection







