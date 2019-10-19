@extends('layouts/backendapp')
@section('backend_content')
  <div class="contentbar">
                <!-- Start row -->
                <div class="row justify-content-center">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Edit Product</h5>
                            </div>
                            <div class="card-body">
                              <form class="form-validate" action="{{url('admin/edit/coupon')}}/{{$coupon->id  }}" method="post" >
                                  @csrf
                                  <input type="hidden" class="form-control" name="id" value="{{$coupon->id}}">
                                  <div class="form-group row">
                                      <label class="col-lg-3 col-form-label">Amount Type:<span class="text-danger">*</span></label>
                                      <div class="col-lg-6">
                                        <select class="form-control" name="amount_type" id="amount_type" style="width:220px;">
                                          <option value="Percentage" @if ($coupon->amount_type=="Percentage")
                                            selected
                                          @endif>Percentage</option>
                                          <option value="Fixed" @if ($coupon->amount_type=="Fixed")
                                            selected
                                          @endif>Fixed</option>
                                      </select>
                                      </div>
                                  </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Coupon Code<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="coupon_code" value="{{  $coupon->coupon_code}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Amount<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control" min="0"  name="amount" value="{{  $coupon->amount}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Expiry Date<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                          <div class="input-group">
                                          <input type="date" value="{{  $coupon->expiry_date}}" name="expiry_date" id="inputDate" class="form-control" aria-describedby="basic-addon3" />
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
                                          <option value="1" @if ($coupon->status==1)
                                            selected
                                          @endif>Active</option>
                                          <option value="0" @if ($coupon->status==0)
                                            selected
                                          @endif>Inactive</option>
                                      </select>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-8">
                                            <button type="submit" class="btn btn-primary">Update Product</button>
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
