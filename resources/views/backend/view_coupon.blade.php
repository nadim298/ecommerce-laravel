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
                                    <th>Coupon Code</th>
                                    <th>amount</th>
                                    <th>amount_type</th>
                                    <th>expiry_date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($coupons as $coupon)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$coupon->coupon_code}}</td>
                                        <td>{{$coupon->amount}}</td>
                                        <td>{{$coupon->amount_type}}</td>
                                        <td>{{$coupon->expiry_date}}</td>
                                        <td>@if ($coupon->status==1)
                                                <span style="color:green;">Active</span>
                                            @else
                                                <span style="color:red;">Inactive</span>
                                            @endif</td>
                                        <td class="center">
                                            <div class="badge-list">
                                                <a href="{{url('admin/edit/coupon')}}/{{$coupon->id}}"><h5><span class="badge badge-success">Edit</span></h5></a>
                                                <a href="{{url('admin/delete/coupon')}}/{{$coupon->id}}" onclick="return confirm('Are you sure you want to delete this coupon?');"><h5><span class="badge badge-danger">Delete</span></h5></a>
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
