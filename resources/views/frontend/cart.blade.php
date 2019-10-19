@extends('layouts/frontendapp')
@section('frontend_content')
  <!-- Main Content - start -->
  <main>
  <section class="container stylization maincont">


  <ul class="b-crumbs">
  	<li>
  		<a href="index-2.html">
  			Home
  		</a>
  	</li>
  	<li>
  		<span>Cart</span>
  	</li>
  </ul>
  <h1 class="main-ttl main-ttl-categs"><span>Blog</span></h1>
<!-- Blog Categories -->
@if (session('success_message'))
  <ul class="blog-categs">
    <span class="alert alert-success">{{session('success_message')}}</span>
  </ul>
@endif
@if (session('error_message'))
  <ul class="blog-categs">
    <span class="alert alert-danger">{{session('error_message')}}</span>
  </ul>
@endif

  <!-- Cart Items - start -->
  

  	<div class="cart-items-wrap">
  		<table class="cart-items">
  			<thead>
  			<tr>
  				<td class="cart-image">Photo</td>
  				<td class="cart-ttl">Products</td>
  				<td class="cart-price">Price</td>
  				<td class="cart-quantity">Quantity</td>
  				<td class="cart-summ">Summ</td>
  				<td class="cart-del">&nbsp;</td>
  			</tr>
  			</thead>
  			<tbody>
          @forelse ($cart_items as $cart_item)
            <tr>
    					<td class="cart-image">
    						<a href="product.html">
    							<img src="{{asset('uploads/product_photos/')}}/{{$cart_item->relationtoproduct->image}}" alt="Similique delectus totam">
    						</a>
    					</td>
    					<td class="cart-ttl">
    						<a href="product.html">{{$cart_item->product_name}}</a>
    						<p>Color: {{$cart_item->product_color}}</p>
    						<p>Size: {{$cart_item->size}}</p>
    					</td>
    					<td class="cart-price">
    						<b>{{$cart_item->price}}</b>
    					</td>
    					<td class="cart-quantity">
    						<p class="cart-qnt">
    							<input value="{{$cart_item->quantity}}" type="text">
    							<a href="{{url('cart/update/quantity')}}/{{$cart_item->id}}/{{1}}" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                  @if ($cart_item->quantity>1)
                    <a href="{{url('cart/update/quantity')}}/{{$cart_item->id}}/{{-1}}" class="cart-minus"><i class="fa fa-angle-down"></i></a>

                  @endif
    						</p>
    					</td>
    					<td class="cart-summ">
    						<b>{{$cart_item->price*$cart_item->quantity}}</b>
    					</td>
    					<td class="cart-del">
    						<a href="{{url('delete/from/cart')}}/{{$cart_item->id}}" class="cart-remove"></a>
    					</td>
    				</tr>
          @empty
            <tr>
              <td colspan="5" style="text-align: center; color:red;">No product has been added!</td>
            </tr>
          @endforelse
          
  			</tbody>
  		</table>
  	</div>
  	
      @if (!empty(Session::get('CouponAmount')))
      <ul class="cart-total">
        <li class="cart-summ">Sub TOTAL: <b>BDT {{$total}}</b></li>
      </ul>
      <ul class="cart-total">
        <li class="cart-summ">Coupon Discount: <b>BDT {{Session::get('CouponAmount')}}</b></li>
      </ul>
      <ul class="cart-total">
        <li class="cart-summ">TOTAL: <b>BDT {{$total-Session::get('CouponAmount')}}</b></li>
      </ul>
      @else
      <ul class="cart-total">
        <li class="cart-summ">TOTAL: <b>BDT {{$total}}</b></li>
      </ul>
      @endif
  		
  	
  	<div class="cart-submit">
  		<div class="cart-coupon">
        <form action="{{ url('apply/coupon') }}" method="post">
          @csrf
          
          <input placeholder="your coupon" name="coupon_code" type="text">
          <input type="submit" name="submit" value="Apply">
        </form>
  			
  		</div>
  		<a href="#" class="cart-submit-btn">Checkout</a>
  		<a href="{{url('clear/cart')}}" class="cart-clear">Clear cart</a>
  	</div>
  
  <!-- Cart Items - end -->

  </section>
  </main>
  <!-- Main Content - end -->
@endsection
