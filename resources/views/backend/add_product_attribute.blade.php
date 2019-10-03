@extends('layouts/backendapp')
@section('backend_content')
  <div class="contentbar">
    <div class="row">
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
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Add Product Attributes</h5>
                            </div>
                            <div class="card-body">
                                <form class="" action="{{url('admin/add/product/attribute')}}/{{$product->id}}" method="post">
                                  @csrf
                                  <div class="">
                                      <div class="grid-example">
                                          <div class="row">
                                              <div class="col-sm-4">
                                                <div class="row">
                                                  <label class="col-sm-6 col-form-label">Prooduct Name:</label>
                                                  <label class="col-sm-6 col-form-label">{{$product->product_name}}</label>
                                                </div>
                                                <div class="row">
                                                  <label class="col-sm-6 col-form-label">Prooduct Code:</label>
                                                  <label class="col-sm-6 col-form-label">{{$product->product_code}}</label>
                                                </div>
                                                <div class="row">
                                                  <label class="col-sm-6 col-form-label">Prooduct Color:</label>
                                                  <label class="col-sm-6 col-form-label">{{$product->product_color}}</label>
                                                </div>
                                              </div>
                                              <div class="col-sm-8">
                                                <div class="field_wrapper">
                                                  <div>
                                                      <input type="text" name="sku[]" id="sku" placeholder="SKU" style="width:120px;" required/>
                                                      <input type="text" name="size[]" id="size" placeholder="Size" style="width:120px;" required/>
                                                      <input type="text" name="price[]" id="price" placeholder="Price" style="width:120px;" required/>
                                                      <input type="text" name="stock[]" id="stock" placeholder="Stock" style="width:120px;" required/>
                                                      <a href="javascript:void(0);" class="add_attribute_button" title="Add field">Add</a>
                                                  </div>
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Add Attributes</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Display Product Attributes</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">


                                      <table id="default-datatable" class="display table table-striped table-bordered">
                                          <thead>
                                              <tr>
                                                  <th>#</th>
                                                  <th>SKU</th>
                                                  <th>Size</th>
                                                  <th>Price</th>
                                                  <th>Stock</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @forelse ($product['relationtoattributes'] as $attribute)
                                            <form class="" action="{{url('admin/edit/product/attribute')}}/{{$product->id}}" method="post">
                                              @csrf

                                              <tr>
                                                <td><input type="hidden" name="id" value="{{$attribute->id}}" /></td>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$attribute->sku}}</td>
                                                <td>{{$attribute->size}}</td>
                                                <td><input type="text" name="price" value="{{$attribute->price}}" /></td>
                                                <td><input type="text" name="stock" value="{{$attribute->stock}}" /></td>
                                                <td>
                                                  <button type="submit" class="btn btn-primary">Update</button>
                                                  <a href="{{url('admin/delete/product/attribute')}}/{{$attribute->id}}" onclick="return confirm('Are you sure you want to delete this attribute?');"><h5><span class="badge badge-danger">Delete</span></h5></a>
                                            </td>
                                              </tr>
                                              </form>
                                            @empty
                                              <tr >
                                                <td colspan="5" align="center">No attribute has been added yet!</td>
                                              </tr>
                                            @endforelse
                                          </tbody>
                                        </table>

                                    </div>
                                  </div>
                                </div>
                              </div>
                </div>
  </div>

@endsection
