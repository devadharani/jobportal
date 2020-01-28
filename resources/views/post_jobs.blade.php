@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Post Jobs Here</h3>
                <form method="POST" action="{{url('post_jobs',['id'=>$encoded_id])}}">
                    @csrf
                <div class="card">
                    <div class="card-header">{{ __('Complete the details') }}</div>
                    <div class="card-body">
                            <div class="form-group row">
                                <label for="job_title" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>
                                <div class="col-md-6">
                                    <input id="job_title" type="text" class="form-control" name="job_title" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>
                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control" name="company_name" value="{{$providers->company_name}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                                <div class="col-md-6">
                                    <input id="location" type="text" class="form-control" name="location" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="qualification" class="col-md-4 col-form-label text-md-right">{{ __('Qualification') }}</label>
                                <div class="col-md-6">
                                    <input id="qualification" type="text" class="form-control" name="qualification" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="passedout_year" class="col-md-4 col-form-label text-md-right">{{ __('PassedOut Year') }}</label>
                                <div class="col-md-6">
                                    <input id="passedout_year" type="text" class="form-control" name="passedout_year" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="skills" class="col-md-4 col-form-label text-md-right">{{ __('Skills') }}</label>
                                <div class="col-md-6">
                                    <input id="skills" type="text" class="form-control" name="skills" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_date" class="col-md-4 col-form-label text-md-right">{{ __('Last Date') }}</label>
                                <div class="col-md-6">
                                    <input id="last_date" type="text" class="form-control" name="last_date" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="posted_date" class="col-md-4 col-form-label text-md-right">{{ __('Posted Date') }}</label>
                                <div class="col-md-6">
                                    <input id="posted_date" type="text" class="form-control" name="posted_date" value="" required>
                                </div>
                            </div>
                    </div>
                </div>
                <br>
                    <div class="card">
                        <div class="card-header">{{ __('Job Summary') }}</div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="job_type" class="col-md-4 col-form-label text-md-right">{{ __('Job Type') }}</label>
                                <div class="col-md-6">
                                    <input id="job_type" type="text" class="form-control" name="job_type" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="job_role" class="col-md-4 col-form-label text-md-right">{{ __('Job Role') }}</label>
                                <div class="col-md-6">
                                    <input id="job_role" type="text" class="form-control" name="job_role" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="job_category" class="col-md-4 col-form-label text-md-right">{{ __('Job Category') }}</label>
                                <div class="col-md-6">
                                    <input id="job_category" type="text" class="form-control" name="job_category" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hiring_process" class="col-md-4 col-form-label text-md-right">{{ __('Hiring Process') }}</label>
                                <div class="col-md-6">
                                    <input id="hiring_process" type="text" class="form-control" name="hiring_process" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>
                                <div class="col-md-6">
                                    <input id="experience" type="text" class="form-control" name="experience" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="job_description" class="col-md-4 col-form-label text-md-right">{{ __('Job Description') }}</label>
                                <div class="col-md-6">
                                    <input id="job_description" type="text" class="form-control" name="job_description" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>
                                <div class="col-md-6">
                                    <input id="website" type="text" class="form-control" name="website" value="" required>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

