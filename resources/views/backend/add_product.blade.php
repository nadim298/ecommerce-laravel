@extends('layouts/backendapp')
@section('backend_content')
  <div class="contentbar">
                <!-- Start row -->
                <div class="row justify-content-center">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Add Product</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-validate" action="{{url('admin/add/product')}}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-group row">
                                      <label class="col-lg-3 col-form-label">Under Category<span class="text-danger">*</span></label>
                                      <div class="col-lg-6">
                                          <select class="select2-single form-control" name="category_id" required>
                                              <option value="">Select a category</option>
                                              @foreach ($main_categories as $main_category)
                                                <option value="{{$main_category->id}}">{{$main_category->name}}</option>
                                                @php
                                                  $sub_categories=App\Category::where('parent_id',$main_category->id)->get();
                                                @endphp
                                                @foreach ($sub_categories as $sub_category)
                                                  <option value="{{$sub_category->id}}"><center>----{{$sub_category->name}}</center></option>
                                                @endforeach
                                              @endforeach
                                          </select>
                                      </div>
                                  </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Prooduct Name<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="product_name">
                                        </div>
                                        <div class="col-lg-3">
                                          <span id="current_password_check_result"></span>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Prooduct Code<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="product_code">
                                        </div>
                                        <div class="col-lg-3">
                                          <span id="current_password_check_result"></span>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Prooduct Color<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="product_color">
                                        </div>
                                        <div class="col-lg-3">
                                          <span id="current_password_check_result"></span>
                                          </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" >Description<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" name="description" rows="5" cols="80"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" >Price<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" >Image<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                          <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
