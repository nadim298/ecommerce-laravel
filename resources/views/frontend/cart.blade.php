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
  <h1 class="main-ttl"><span>Cart</span></h1>
  <!-- Cart Items - start -->
  <form action="#">

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
    							<img src="{{asset('uploads/product_photos/')}}/{{$cart_item->relationtoproduct->product_image}}" alt="Similique delectus totam">
    						</a>
    					</td>
    					<td class="cart-ttl">
    						<a href="product.html">{{$cart_item->relationtoproduct->product_name}}</a>
    						<p>Color: Red</p>
    						<p>Size: XS</p>
    					</td>
    					<td class="cart-price">
    						<b>{{$cart_item->relationtoproduct->product_price}}</b>
    					</td>
    					<td class="cart-quantity">
    						<p class="cart-qnt">
    							<input value="{{$cart_item->product_quantity}}" type="text">
    							<a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
    							<a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
    						</p>
    					</td>
    					<td class="cart-summ">
    						<b>{{$cart_item->relationtoproduct->product_price*$cart_item->product_quantity}}</b>
    						<p class="cart-forone">unit price <b>$220</b></p>
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
  	<ul class="cart-total">
  		<li class="cart-summ">TOTAL: <b>$815</b></li>
  	</ul>
  	<div class="cart-submit">
  		<div class="cart-coupon">
  			<input placeholder="your coupon" type="text">
  			<a class="cart-coupon-btn" href="#"><img src="{{asset('frontend_assets/img/ok.png')}}" alt="your coupon"></a>
  		</div>
  		<a href="#" class="cart-submit-btn">Checkout</a>
  		<a href="{{url('clear/cart')}}" class="cart-clear">Clear cart</a>
  	</div>
  </form>
  <!-- Cart Items - end -->

  </section>
  </main>
  <!-- Main Content - end -->
@endsection
