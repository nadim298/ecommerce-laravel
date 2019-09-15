@extends('layouts/backendapp')
@section('backend_content')
  <div class="contentbar">
                <!-- Start row -->
                <div class="row justify-content-center">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Chage Password</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-validate" action="{{url('admin/update/password')}}" method="post">
                                  @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Current Password <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter Password">
                                        </div>
                                        <div class="col-lg-3">
                                          <span id="current_password_check_result"></span>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-password">New Password <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" id="val-password" name="new_password" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-confirm-password">Re-Type Password <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control" id="val-confirm-password" name="confirm_password" placeholder="Enter again passward for confirm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-8">
                                            <button type="submit" class="btn btn-primary">Update Password</button>
                                        </div>
                                    </div>
                                  </form>
                                  </div>

                                  </div>
                                  </div>
                                  @if (session('success_message'))
                                    <div class="col-lg-12">
                                      <div class="card-body">
                                        <span style="text-align:center;display: block;" class="alert alert-success">{{session('success_message')}}</span>
                                      </div>
                                    </div>
                                  @endif
                                  @if (session('error_message'))
                                    <div class="col-lg-12">
                                      <div class="card-body">
                                        <span style="text-align:center;display: block;" class="alert alert-danger">{{session('error_message')}}</span>
                                      </div>
                                    </div>
                                  @endif
                                  </div>

@endsection
