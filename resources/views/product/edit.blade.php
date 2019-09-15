@extends('layouts/app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('add/product/view')}}">Product List</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$single_product_info->product_name}}</li>
          </ol>
        </nav>
        <div class="card">
          <div class="card-header bg-success">
            Add Product Form
          </div>
          <div class="card-body">
            @if (session('editstatus'))
              <div class="alert alert-success">
                {{session('editstatus')}}
              </div>
            @endif
            <form action="{{url('edit/product/insert')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="">Product Name</label>
                <input type="hidden" name="product_id" value="{{$single_product_info->id}}">
                <input type="text" class="form-control" name="product_name" placeholder="Enter your product name" value="{{$single_product_info->product_name}}">
              </div>
              <div class="form-group">
                <label for="">Product Description</label>
                <textarea class="form-control" name="product_description" rows="3">{{$single_product_info->product_description}}</textarea>
              </div>
              <div class="form-group">
                <label for="">Product Price</label>
                <input type="text" class="form-control" name="product_price" placeholder="Enter your product price" value="{{$single_product_info->product_price}}">
              </div>
              <div class="form-group">
                <label for="">Product Quantity</label>
                <input type="text" class="form-control" name="product_quantity" placeholder="Enter your product quantity" value="{{$single_product_info->product_quantity}}">
              </div>
              <div class="form-group">
                <label for="">Alert Quantity</label>
                <input type="text" class="form-control" name="alert_quantity" placeholder="Enter your alert quantity" value="{{$single_product_info->alert_quantity}}">
              </div>
              <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" class="form-control" name="product_image">
                <img src="{{asset('uploads/product_photos')}}/{{$single_product_info->product_image}}" alt="">
              </div>

              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>

        </div>

      </div>
    </div>
  </div>
@endsection
