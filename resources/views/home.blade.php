
@extends('layouts.app')
@section('content')
  @if($user->user_type==1)
      Welcome Admin

                              @elseif($user->user_type==3)
      <div class="container">
          <h2><b>Complete Your Profile</b></h2>
          <form method="POST" action="{{url('complete_profile')}}">
              @csrf
              <div class="card">
                  <div class="card-header">{{ __('Personal Info') }}</div>
                  <div class="card-body">
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}"required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>
                          <div class="col-md-6">
                              <input id="mobile_no" type="text" class="form-control" name="mobile_no" value="{{$user->mobile_no}}" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="addressline1" class="col-md-4 col-form-label text-md-right">{{ __('Addressline1') }}</label>
                          <div class="col-md-6">
                              <input id="addressline1" type="text" class="form-control" name="addressline1" value="" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="addressline2" class="col-md-4 col-form-label text-md-right">{{ __('Addressline2') }}</label>
                          <div class="col-md-6">
                              <input id="addressline2" type="text" class="form-control" name="addressline2" value="" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                          <div class="col-md-6">
                              <input id="city" type="text" class="form-control" name="city" value="" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
                          <div class="col-md-6">
                              <input id="state" type="text" class="form-control" name="state" value="" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
                          <div class="col-md-6">
                              <input id="country" type="text" class="form-control" name="country" value="" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="zip" class="col-md-4 col-form-label text-md-right">{{ __('Zip') }}</label>
                          <div class="col-md-6">
                              <input id="zip" type="text" class="form-control" name="zip" value="" required>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div style="float:left;margin:10px;">
                  <div class="card" style="width:530px;">
                      <div class="card-header">{{__('Education')}}/SSLC</div>
                      <div class="card-body">
                          <div class="form-group row">
                              <label for="sslc_school" class="col-md-4 col-form-label text-md-right">{{ __('School Name') }}</label>

                              <div class="col-md-6">
                                  <input id="sslc_school" type="text" class="form-control" name="sslc_school" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="sslc_place" class="col-md-4 col-form-label text-md-right">{{ __('Place') }}</label>
                              <div class="col-md-6">
                                  <input id="sslc_place" type="text" class="form-control" name="sslc_place" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="sslc_percentage" class="col-md-4 col-form-label text-md-right">{{ __('Percentage/CGPA') }}</label>
                              <div class="col-md-6">
                                  <input id="sslc_percentage" type="text" class="form-control" name="sslc_percentage" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="sslc_year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>
                              <div class="col-md-6">
                                  <input id="sslc_year" type="text" class="form-control" name="sslc_year" required>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div style="float:left;margin:10px;">
                  <div class="card" style="width:530px;">
                      <div class="card-header">{{__('Education')}}/HSC</div>
                      <div class="card-body">
                          <div class="form-group row">
                              <label for="hsc_school" class="col-md-4 col-form-label text-md-right">{{ __('School Name') }}</label>

                              <div class="col-md-6">
                                  <input id="hsc_school" type="text" class="form-control" name="hsc_school" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="hsc_place" class="col-md-4 col-form-label text-md-right">{{ __('Place') }}</label>
                              <div class="col-md-6">
                                  <input id="hsc_place" type="text" class="form-control" name="hsc_place" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="hsc_percentage" class="col-md-4 col-form-label text-md-right">{{ __('Percentage/CGPA') }}</label>
                              <div class="col-md-6">
                                  <input id="hsc_percentage" type="text" class="form-control" name="hsc_percentage" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="hsc_year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>
                              <div class="col-md-6">
                                  <input id="hsc_year" type="text" class="form-control" name="hsc_year" required>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div style="float:left;margin:10px;">
                  <div class="card" style="width:530px;">
                      <div class="card-header">{{__('Education')}}/UG</div>
                      <div class="card-body">
                          <div class="form-group row">
                              <label for="ug_college" class="col-md-4 col-form-label text-md-right">{{ __('College Name') }}</label>

                              <div class="col-md-6">
                                  <input id="ug_college" type="text" class="form-control" name="ug_college" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="ug_place" class="col-md-4 col-form-label text-md-right">{{ __('Place') }}</label>
                              <div class="col-md-6">
                                  <input id="ug_place" type="text" class="form-control" name="ug_place" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="ug_percentage" class="col-md-4 col-form-label text-md-right">{{ __('Percentage/CGPA') }}</label>
                              <div class="col-md-6">
                                  <input id="ug_percentage" type="text" class="form-control" name="ug_percentage" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="ug_year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>
                              <div class="col-md-6">
                                  <input id="ug_year" type="text" class="form-control" name="ug_year" required>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div style="float:left;margin:10px;">
                  <div class="card" style="width:530px;">
                      <div class="card-header">{{__('Education')}}/PG</div>
                      <div class="card-body">
                          <div class="form-group row">
                              <label for="pg_college" class="col-md-4 col-form-label text-md-right">{{ __('College Name') }}</label>

                              <div class="col-md-6">
                                  <input id="pg_college" type="text" class="form-control" name="pg_college" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="pg_place" class="col-md-4 col-form-label text-md-right">{{ __('Place') }}</label>
                              <div class="col-md-6">
                                  <input id="pg_place" type="text" class="form-control" name="pg_place" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="pg_percentage" class="col-md-4 col-form-label text-md-right">{{ __('Percentage/CGPA') }}</label>
                              <div class="col-md-6">
                                  <input id="pg_percentage" type="text" class="form-control" name="pg_percentage" required>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="pg_year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>
                              <div class="col-md-6">
                                  <input id="pg_year" type="text" class="form-control" name="pg_year" required>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <br>

              <div class="card" style="width:100%;">
                  <div class="card-header">{{ __('Extra Information')}}</div>
                  <div class="card-body">
                      <div class="form-group row">
                          <label for="skills" class="col-md-4 col-form-label text-md-right">{{ __('Skills') }}</label>

                          <div class="col-md-6">
                              <input id="skills" type="text" class="form-control" name="skills" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="projects" class="col-md-4 col-form-label text-md-right">{{ __('Projects') }}</label>

                          <div class="col-md-6">
                              <input id="projects" type="text" class="form-control" name="projects" required>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <input type="submit" class="btn btn-primary" style="margin-left:900px;" value="submit">
          </form>
      </div>

@endif
@endsection
