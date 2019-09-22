@extends('layouts/frontendapp')

@section('frontend_content')
	<!-- Main Content - start -->
	<main>
	<section class="container">


	<!-- Slider -->
	<div class="fr-slider-wrap">
		<div class="fr-slider">
			<ul class="slides">
				<li>
					<img src="{{asset('frontend_assets/img/front/slider/slide1.jpg')}}" alt="">
					<div class="fr-slider-cont">
						<h3>MEGA SALE -30%</h3>
						<p>Winter collection for women's. <br>We all have choices for you. Check it out!</p>
						<p class="fr-slider-more-wrap">
							<a class="fr-slider-more" href="#">View collection</a>
						</p>
					</div>
				</li>
				<li>
					<img src="{{asset('frontend_assets/img/front/slider/slide2.jpg')}}" alt="">
					<div class="fr-slider-cont">
						<h3>NEW COLLECTION</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Aliquam consequuntur dolorem doloribus fuga harum</p>
						<p class="fr-slider-more-wrap">
							<a class="fr-slider-more" href="#">Shopping now</a>
						</p>
					</div>
				</li>
				<li>
					<img src="{{asset('frontend_assets/img/front/slider/slide3.jpg')}}" alt="">
					<div class="fr-slider-cont">
						<h3>SUMMER TRENDS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Aliquam consequuntur dolorem doloribus fuga harum</p>
						<p class="fr-slider-more-wrap">
							<a class="fr-slider-more" href="#">Start shopping</a>
						</p>
					</div>
				</li>
			</ul>
		</div>
	</div>


	<!-- Popular Products -->
	<div class="fr-pop-wrap">

		<h3 class="component-ttl"><span>Popular products</span></h3>

		<ul class="fr-pop-tabs sections-show">
			@foreach ($categories as $category)
					<li><a data-frpoptab-num="{{$category->id}}" data-frpoptab="#frpoptab-tab-{{$category->id}}" href="#">{{$category->name}}</a></li>
			@endforeach
		</ul>

		<div class="fr-pop-tab-cont">
			@forelse ($categories as $category)

			<div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-{{$category->id}}">

	      <ul class="slides">
					@foreach ($category->relationtosubcategory as $subcategory)
						@foreach ($products as $product)

							@if ($product->category_id==$subcategory->id)
								<li class="prod-i">
			  							<div class="prod-i-top">
			  								<a href="{{url('product/details')}}/{{$product->id}}" class="prod-i-img"><img src="{{asset('uploads/product_photos/')}}/{{$product->image}}" alt="Product Image"><!-- NO SPACE --></a>
			  								<p class="prod-i-info">
			  									<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
			  									<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
			  									<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
			  								</p>
			  								<p class="prod-i-addwrap">
			  									<a href="{{url('product/details')}}/{{$product->id}}" class="prod-i-add">Go to detail</a>
			  								</p>
			  							</div>
			  							<h3>
			  								<a href="{{url('product/details')}}/{{$product->id}}">{{$product->product_name}}</a>
			  							</h3>
			  							<p class="prod-i-price">
			  								<b>BDT {{$product->price}}</b>
			  							</p>
			  						</li>

							@endif

						@endforeach

					@endforeach


				</ul>
			</div>
		@empty
			<p class="alert alert-danger text-center">No Data Available</p>
			@endforelse
		</div>
	<!-- .fr-pop-tab-cont -->
	</div><!-- .fr-pop-wrap -->

	<!-- Subscribe Form -->
	<div class="newsletter">
		<h3>Subscribe to us</h3>
		<p>Enter your email if you want to receive our news</p>
		<form action="#">
			<input placeholder="Your e-mail" type="text">
			<input name="OK" value="Subscribe" type="submit">
		</form>
	</div>


	</section>
	</main>
	<!-- Main Content - end -->
@endsection
