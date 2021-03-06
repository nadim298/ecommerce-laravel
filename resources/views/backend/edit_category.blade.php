@extends('layouts/backendapp')
@section('backend_content')
  <div class="contentbar">
                <!-- Start row -->
                <div class="row justify-content-center">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Edit Category</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-validate" action="{{url('admin/edit/category')}}/{{$category->id}}" method="post">
                                  @csrf
                                  <input type="hidden" class="form-control"  name="id" value="{{$category->id}}">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Name<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="name" value="{{$category->name}}">
                                        </div>
                                        <div class="col-lg-3">
                                          <span id="current_password_check_result"></span>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Category Of<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="parent_id">
                                                <option value="0">Main Category</option>
                                                @foreach ($main_categories as $main_category)
                                                  <option value="{{$main_category->id}}" @if ($main_category->id==$category->parent_id)
                                                    selected
                                                  @endif>{{$main_category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" >Description<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" name="description" rows="5" cols="80">{{$category->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" >URL<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" value="{{$category->url}}" name="url">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Status<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <select class="select2-single form-control" name="status">
                                            <option value="1" @if ($category->status==1)
                                              selected
                                            @endif>Enable</option>
                                            <option value="0" @if ($category->status==0)
                                              selected
                                            @endif>Disable</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-8">
                                            <button type="submit" class="btn btn-primary">Update Category</button>
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
