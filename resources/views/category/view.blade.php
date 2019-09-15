
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

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Created At</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($categories as $category)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>
                      {{$category->created_at->format('d-M-Y h:i A')}}
                      <br>
                      {{$category->created_at->diffForHumans()}}

                    </td>

                  </tr>
                @empty
                  <tr class="text-center text-danger">
                    <td colspan="7">No Data Available</td>
                  </tr>
                @endforelse
              </tbody>
            </table>
            {{$categories->links()}}
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


              </tbody>
            </table>

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
            <form action="{{url('add/category/insert')}}" method="post">
              @csrf
              <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" class="form-control" name="category_name" placeholder="Enter your product name" value="{{old('product_name')}}">
              </div>

              <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
          </div>

        </div>

      </div>

    </div>


  </div>
@endsection
