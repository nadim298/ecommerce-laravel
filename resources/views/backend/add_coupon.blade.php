@extends('layouts/backendapp')
@section('backend_content')
  <div class="contentbar">
                <!-- Start row -->
                <div class="row justify-content-center">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Add Coupon</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-validate" action="{{url('admin/add/coupon')}}" method="post" >
                                  @csrf
                                  <div class="form-group row">
                                      <label class="col-lg-3 col-form-label">Amount Type:<span class="text-danger">*</span></label>
                                      <div class="col-lg-6">
                                        <select class="form-control" name="amount_type" id="amount_type" style="width:220px;">
                                          <option value="Percentage">Percentage</option>
                                          <option value="Fixed">Fixed</option>
                                        </select>
                                      </div>
                                  </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Coupon Code<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="coupon_code">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Amount<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control" min="0"  name="amount">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Expiry Date<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                          <div class="input-group">
                                          <input type="text" name="expiry_date" id="autoclose-date" class="datepicker-here form-control" placeholder="yyyy/dd/mm" aria-describedby="basic-addon3"/>
                                          <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon3"><i class="feather icon-calendar"></i></span>
                                          </div>
                                        </div>
                                        </div>

                                    </div>


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Status<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <select class="select2-single form-control" name="status">
                                            <option value="1">Publish</option>
                                            <option value="0">Block</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-8">
                                            <button type="submit" class="btn btn-primary">Add Product</button>
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
