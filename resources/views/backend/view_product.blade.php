@extends('layouts/backendapp')
@section('backend_content')
  <div class="contentbar">
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    @if (session('success_message'))
                      <div class="col-lg-12">
                        <div class="card-body">
                          <span style="text-align:center;display: block;" class="alert alert-success">{{session('success_message')}}</span>
                        </div>
                      </div>
                    @endif
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Manage Products</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="default-datatable" class="display table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product Category</th>
                                                <th>Product Name</th>
                                                <th>Product Code</th>
                                                <th>Product Color</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($products as $product)
                                              <tr>
                                                  <td>{{$loop->index+1}}</td>
                                                  <td>{{$product->relationtocategory->name}}</td>
                                                  <td>{{$product->product_name}}</td>
                                                  <td>{{$product->product_code}}</td>
                                                  <td>{{$product->product_color}}</td>
                                                  <td>{{$product->price}}</td>
                                                  <td><img src="{{asset('uploads/product_photos/')}}/{{$product->image}}" alt="" width="100%"></td>
                                                  <td>@if ($product->status==1)
                                                    <span style="color:green;">Enabled</span>
                                                  @else
                                                    <span style="color:red;">Disabled</span>
                                                  @endif</td>
                                                  <td class="center">
                                                    <div class="badge-list">
                                                      <a href="{{url('admin/edit/product')}}/{{$product->id}}"><h5><span class="badge badge-success">Edit</span></h5></a>
                                                      <a href="{{url('admin/add/product/attribute')}}/{{$product->id}}"><h5><span class="badge badge-primary">Attributes</span></h5></a>
                                                      <a href="{{url('admin/add/product/image')}}/{{$product->id}}"><h5><span class="badge badge-primary">Images</span></h5></a>
                                                      <a href="{{url('admin/delete/product')}}/{{$product->id}}" onclick="return confirm('Are you sure you want to delete this product?');"><h5><span class="badge badge-danger">Delete</span></h5></a>
                                                  </div>

                                                  </td>
                                              </tr>
                                            @empty

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
