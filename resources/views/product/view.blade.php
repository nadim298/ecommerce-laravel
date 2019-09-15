@extends('layouts/app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <div class="card">
          <div class="card-header bg-success">
            Product List
          </div>
          <div class="card-body">
            @if (session('deletestatus'))
              <div class="alert alert-danger">
                {{session('deletestatus')}}
              </div>
            @endif
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Product Description</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Product Quantity</th>
                  <th scope="col">Alert Quantity</th>
                  <th scope="col">Product Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($products as $product)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$product->relationtocategory->category_name}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{str_limit($product->product_description,100)}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_quantity}}</td>
                    <td>{{$product->alert_quantity}}</td>
                    <td> <img src="{{asset('uploads/product_photos/')}}/{{$product->product_image}}" alt="" width="100%"> </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a type="button" class="btn btn-primary" href="{{url('edit/product')}}/{{$product->id}}">Edit</a>
                        <a type="button" class="btn btn-danger" href="{{url('delete/product')}}/{{$product->id}}">Delete</a>
                      </div>
                    </td>
                  </tr>
                @empty
                  <tr class="text-center text-danger">
                    <td colspan="9">No Data Available</td>
                  </tr>
                @endforelse

              </tbody>
            </table>
            {{$products->links()}}
          </div>
        </div>
        <div class="card">
          <div class="card-header bg-danger">
            Deleted Products
          </div>
          <div class="card-body">

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Product Description</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Product Quantity</th>
                  <th scope="col">Alert Quantity</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($deleted_products as $deleted_product)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$deleted_product->product_name}}</td>
                    <td>{{str_limit($deleted_product->product_description,100)}}</td>
                    <td>{{$deleted_product->product_price}}</td>
                    <td>{{$deleted_product->product_quantity}}</td>
                    <td>{{$deleted_product->alert_quantity}}</td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                      <a type="button" class="btn btn-success" href="{{url('restore/product')}}/{{$deleted_product->id}}">Restore</a>
                      <a type="button" class="btn btn-danger" href="{{url('force/delete/product')}}/{{$deleted_product->id}}">Delete Permanently</a>
                    </div>
                    </td>

                  </tr>
                @empty
                  <tr class="text-center text-danger">
                    <td colspan="6">No Data Available</td>
                  </tr>
                @endforelse

              </tbody>
            </table>
            {{$products->links()}}
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-header bg-success">
            Add Product Form
          </div>
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif
            @if (session('editstatus'))
              <div class="alert alert-success">
                {{session('editstatus')}}
              </div>
            @endif
            @if ($errors->all())
              <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </div>
            @endif

            <form action="{{url('add/product/insert')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="">Category Name</label>
                  <select class="form-control" name="category_id">

                    <option value="">-Select a category-</option>
                    @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                  </select>
                </div>
              <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="product_name" placeholder="Enter your product name" value="{{old('product_name')}}">
              </div>
              <div class="form-group">
                <label for="">Product Description</label>
                <textarea class="form-control" name="product_description" rows="3">{{old('product_description')}}</textarea>
              </div>
              <div class="form-group">
                <label for="">Product Price</label>
                <input type="text" class="form-control" name="product_price" placeholder="Enter your product price" value="{{old('product_price')}}">
              </div>
              <div class="form-group">
                <label for="">Product Quantity</label>
                <input type="text" class="form-control" name="product_quantity" placeholder="Enter your product quantity" value="{{old('product_quantity')}}">
              </div>
              <div class="form-group">
                <label for="">Alert Quantity</label>
                <input type="text" class="form-control" name="alert_quantity" placeholder="Enter your alert quantity" value="{{old('alert_quantity')}}">
              </div>
              <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" class="form-control" name="product_image">
              </div>

              <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
          </div>

        </div>

      </div>

    </div>


  </div>
@endsection
