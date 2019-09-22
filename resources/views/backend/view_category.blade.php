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
                                <h5 class="card-title">Default Data Table</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="default-datatable" class="display table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Sub Category Of</th>
                                                <th>Description</th>
                                                <th>URL</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($categories as $category)
                                              <tr>
                                                  <td>{{$loop->index+1}}</td>
                                                  <td>{{$category->name}}</td>
                                                  <td>
                                                    @if ($category->parent_id!=0)
                                                      {{$category->subcategorytomaincategory->name}}
                                                    @endif
                                                  </td>
                                                  <td>{{$category->description}}</td>
                                                  <td>{{$category->url}}</td>
                                                  <td>@if ($category->status==1)
                                                    <span style="color:green;">Enabled</span>
                                                  @else
                                                    <span style="color:red;">Disabled</span>
                                                  @endif</td>
                                                  <td class="center">
                                                    <div class="button-list ">
                                                      <a href="{{url('admin/edit/category')}}/{{$category->id}}"><button type="button" class="btn btn-sm btn-success">Edit</button></a>
                                                      <a href="{{url('admin/delete/category')}}/{{$category->id}}" onclick="return confirm('Are you sure you want to delete this category?');"><button type="button" class="btn btn-sm btn-danger">Delete</button></a>
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
