<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from allstore-html.real-web.pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jul 2019 14:50:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<title>LetsBuy - MultiConcept eCommerce</title>

	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('frontend_assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend_assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend_assets/css/ion.rangeSlider.css')}}">
	<link rel="stylesheet" href="{{asset('frontend_assets/css/ion.rangeSlider.skinFlat.css')}}">
	<link rel="stylesheet" href="{{asset('frontend_assets/css/jquery.bxslider.css')}}">
	<link rel="stylesheet" href="{{asset('frontend_assets/css/jquery.fancybox.css')}}">
	<link rel="stylesheet" href="{{asset('frontend_assets/css/flexslider.css')}}">
	<link rel="stylesheet" href="{{asset('frontend_assets/css/swiper.css')}}">
	<link rel="stylesheet" href="{{asset('frontend_assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend_assets/css/media.css')}}">

</head>
<body>
<!-- Header - start -->
<header class="header">

	<!-- Topbar - start -->
	<div class="header_top">
		<div class="container">
			<ul class="contactinfo nav nav-pills">
				<li>
					<i class='fa fa-phone'></i> +7 777 123 1575
				</li>
				<li>
					<i class="fa fa-envelope"></i> admin@real-web.pro
				</li>
			</ul>
			<!-- Social links -->
<ul class="social-icons nav navbar-nav">
	<li>
		<a href="http://facebook.com/" rel="nofollow" target="_blank">
			<i class="fa fa-facebook"></i>
		</a>
	</li>
	<li>
		<a href="http://google.com/" rel="nofollow" target="_blank">
			<i class="fa fa-google-plus"></i>
		</a>
	</li>
	<li>
		<a href="http://twitter.com/" rel="nofollow" target="_blank">
			<i class="fa fa-twitter"></i>
		</a>
	</li>
	<li>
		<a href="http://vk.com/" rel="nofollow" target="_blank">
			<i class="fa fa-vk"></i>
		</a>
	</li>
	<li>
		<a href="http://instagram.com/" rel="nofollow" target="_blank">
			<i class="fa fa-instagram"></i>
		</a>
	</li>
</ul>		</div>
	</div>
	<!-- Topbar - end -->

	<!-- Logo, Shop-menu - start -->
	<div class="header-middle">
		<div class="container header-middle-cont">
			<div class="toplogo">
				<a href="{{url('/')}}">
					<img src="{{asset('frontend_assets/img/logo.png')}}" alt="AllStore - MultiConcept eCommerce Template">
				</a>
			</div>
			<div class="shop-menu">
				<ul>

					<li>
						<a href="wishlist.html">
							<i class="fa fa-heart"></i>
							<span class="shop-menu-ttl">Wishlist</span>
							(<span id="topbar-favorites">1</span>)
						</a>
					</li>

					<li>
						<a href="compare.html">
							<i class="fa fa-bar-chart"></i>
							<span class="shop-menu-ttl">Compare</span> (5)
						</a>
					</li>

					<li class="topauth">
						<a href="{{ route('register') }}">
							<i class="fa fa-lock"></i>
							<span class="shop-menu-ttl">Registration</span>
						</a>
						<a href="{{url('home')}}">
							<span class="shop-menu-ttl">Login</span>
						</a>
					</li>

					<li>
						<div class="h-cart">
							<a href="{{url('cart')}}">
								<i class="fa fa-shopping-cart"></i>
								<span class="shop-menu-ttl">Cart</span>
								(<b>{{App\Cart::where('customer_ip', $_SERVER['REMOTE_ADDR'])->sum('product_quantity')}}</b>)
							</a>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<!-- Logo, Shop-menu - end -->

	<!-- Topmenu - start -->
	<div class="header-bottom">
		<div class="container">
			<nav class="topmenu">

	<!-- Catalog menu - start -->
	<div class="topcatalog">
		<a class="topcatalog-btn" href="{{url('category/wise/product')}}/{{'all'}}"><span>All</span> catalog</a>
		<ul class="topcatalog-list">
			@php
			$categories = App\Category::with('relationtosubcategory')->where(['parent_id' => 0])->where('status','1')->get();

			@endphp
			@foreach ($categories as $main_category)
				<li>
					<a href="{{url('category/wise/product')}}/{{$main_category->url}}">
						{{$main_category->name}}
					</a>
					{{-- <i class="fa fa-angle-right"></i> --}}
					<ul>

					@foreach ($main_category->relationtosubcategory as $subcategory)


							<li>
								<a href="{{url('category/wise/product')}}/{{$subcategory->url}}">
									{{$subcategory->name}}
								</a>
							</li>

					@endforeach
				</ul>
				</li>
			@endforeach

		</ul>
	</div>
	<!-- Catalog menu - end -->

	<!-- Main menu - start -->
	<button type="button" class="mainmenu-btn">Menu</button>

	<ul class="mainmenu">
		<li>
			<a href="{{url('/')}}" class="active">
				Home
			</a>
		</li>
		<li>
			<a href="{{url('contact')}}">
				Contact
			</a>
		</li>

		<li class="mainmenu-more">
			<span>...</span>
			<ul class="mainmenu-sub"></ul>
		</li>
	</ul>
	<!-- Main menu - end -->

	<!-- Search - start -->
	<div class="topsearch">
		<a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
		<form class="topsearch-form" action="#">
			<input type="text" placeholder="Search products">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<!-- Search - end -->

</nav>		</div>
	</div>
	<!-- Topmenu - end -->

</header>
<!-- Header - end -->

@yield('frontend_content');

<!-- Footer - start -->
<footer class="footer-wrap">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="companyinfo">
					<a href="index-2.html">
						<img src="{{asset('frontend_assets/img/logo-b.png')}}" alt="AllStore - MultiConcept eCommerce Responsive HTML5 Template">
						AllStore - MultiConcept eCommerce Responsive HTML5 Template
					</a>
				</div>
				<div class="f-block-list">
					<div class="f-block-wrap">
						<div class="f-block">
							<a href="#" class="f-block-btn" data-id="#f-block-modal-1">
								<div class="iframe-img">
									<img src="{{asset('frontend_assets/img/footer/1.jpg')}}" alt="About us">
								</div>
								<div class="overlay-icon">
									<i class="fa fa-info-circle"></i>
								</div>
							</a>
							<p class="f-info-ttl">About us</p>
							<p>Shipping and payment information.</p>
						</div>
					</div>
					<div class="f-block-wrap">
						<div class="f-block">
							<a href="#" class="f-block-btn" data-id="#f-block-modal-2">
								<div class="iframe-img">
									<img src="{{asset('frontend_assets/img/footer/2.jpg')}}" alt="Ask questions">
								</div>
								<div class="overlay-icon">
									<i class="fa fa-phone"></i>
								</div>
							</a>
							<p class="f-info-ttl">Ask questions</p>
							<p>We call back within 10 minutes</p>
						</div>
					</div>
					<div class="f-block-wrap">
						<div class="f-block">
							<a href="#" class="f-block-btn" data-id="#f-block-modal-3" data-content="<iframe width='853' height='480' src='https://www.youtube.com/embed/kaOVHSkDoPY?rel=0&amp;showinfo=0' allowfullscreen></iframe>">
								<div class="iframe-img">
									<img src="{{asset('frontend_assets/img/footer/3.jpg')}}" alt="Video (2 min)">
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle"></i>
								</div>
							</a>
							<p class="f-info-ttl">Video (2 min)</p>
							<p>Watch a video about our store</p>
						</div>
					</div>
					<div class="f-block-wrap">
						<div class="f-block">
							<a href="#" class="f-block-btn" data-id="#f-block-modal-4">
								<div class="iframe-img">
									<img src="{{asset('frontend_assets/img/footer/4.jpg')}}" alt="Our address">
								</div>
								<div class="overlay-icon">
									<i class="fa fa-map-marker"></i>
								</div>
							</a>
							<p class="f-info-ttl">Our address</p>
							<p>Spain, Madrid, 45</p>
						</div>
					</div>
				</div>

				<div class="stylization f-block-modal f-block-modal-content" id="f-block-modal-1">
					<img class="f-block-modal-img" src="{{asset('frontend_assets/img/footer/modal.jpg')}}" alt="About us">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam natus iste ullam vero, tenetur ab ipsa consectetur deleniti officiis ex debitis incidunt alias voluptatum, maxime placeat dolores veniam sunt at atque velit, soluta. Neque ea alias quia provident molestias, ratione aut esse placeat beatae sequi sed laudantium. Unde animi nihil esse, repellendus exercitationem dicta harum ab labore, voluptates explicabo in, quidem dolorum voluptas!
				</div>
				<div class="stylization f-block-modal f-block-modal-callback" id="f-block-modal-2">
					<div class="modalform">
						<form action="#" method="POST" class="form-validate">
							<p class="modalform-ttl">Callback</p>
							<input type="text" placeholder="Your name" data-required="text" name="name">
							<input type="text" placeholder="Your phone" data-required="text" name="phone">
							<button type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						</form>
					</div>
				</div>
				<div class="stylization f-block-modal f-block-modal-video" id="f-block-modal-3">

				</div>
				<div class="stylization f-block-modal f-block-modal-map" id="f-block-modal-4">
					<div class="allstore-gmap">
						<div class="marker" data-zoom="15" data-lat="-37.81485261872975" data-lng="144.95655298233032" data-marker="img/marker.png">534-540 Little Bourke St, Melbourne VIC 3000, Australia</div>
					</div>
				</div>
				<div class="f-delivery">
					<img src="{{asset('frontend_assets/img/map.png')}}" alt="">
					<h4>Free delivery in London</h4>
					<p>We will deliver within 1 hour</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container f-menu-list">
		<div class="row">
			<div class="f-menu">
				<h3>
					About us
				</h3>
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="index-2.html">Home</a></li>
					<li><a href="catalog-list.html">Catalog</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contacts.html">Contacts</a></li>
				</ul>
			</div>
			<div class="f-menu">
				<h3>
					Shop
				</h3>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="catalog-list.html">Women</a></li>
					<li><a href="catalog-list.html">Men</a></li>
					<li><a href="catalog-list.html">Kids</a></li>
					<li><a href="catalog-list.html">Shoes</a></li>
					<li><a href="catalog-list.html">Accessories</a></li>
				</ul>
			</div>
			<div class="f-menu">
				<h3>
					Information
				</h3>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="blog.html">Blog</a></li>
					<li><a href="blog.html">News</a></li>
					<li><a href="reviews.html">Reviews</a></li>
					<li><a href="blog.html">Articles</a></li>
					<li><a href="contacts.html">Contacts</a></li>
				</ul>
			</div>
			<div class="f-menu">
				<h3>
					Pages
				</h3>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="contacts.html">About us</a></li>
					<li><a href="contacts.html">Delivery</a></li>
					<li><a href="contacts.html">Guarantees</a></li>
					<li><a href="contacts.html">Contacts</a></li>
					<li><a href="404.html">Page 404</a></li>
				</ul>
			</div>
			<div class="f-subscribe">
				<h3>Subscribe to news</h3>
				<form class="f-subscribe-form" action="#">
					<input placeholder="Your e-mail" type="text">
					<button type="submit"><i class="fa fa-paper-plane"></i></button>
				</form>
				<p>Enter your email address if you want to receive our newsletter. Subscribe now!</p>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<ul class="social-icons nav navbar-nav">
					<li>
						<a href="http://facebook.com/" rel="nofollow" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="http://google.com/" rel="nofollow" target="_blank">
							<i class="fa fa-google-plus"></i>
						</a>
					</li>
					<li>
						<a href="http://twitter.com/" rel="nofollow" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="http://vk.com/" rel="nofollow" target="_blank">
							<i class="fa fa-vk"></i>
						</a>
					</li>
					<li>
						<a href="http://instagram.com/" rel="nofollow" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
				</ul>
				<div class="footer-copyright">
					<i><a href="https://themeforest.net/user/real-web?ref=real-web">Real-Web</a></i> © Copyright 2017
				</div>
			</div>
		</div>
	</div>

</footer>
<!-- Footer - end -->


<!-- jQuery plugins/scripts - start -->
<script src="{{asset('frontend_assets/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('frontend_assets/js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('frontend_assets/js/fancybox/fancybox.js')}}"></script>
<script src="{{asset('frontend_assets/js/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{asset('frontend_assets/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('frontend_assets/js/swiper.jquery.min.js')}}"></script>
<script src="{{asset('frontend_assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend_assets/js/progressbar.min.js')}}"></script>
<script src="{{asset('frontend_assets/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('frontend_assets/js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('frontend_assets/js/jQuery.Brazzers-Carousel.js')}}"></script>
<script src="{{asset('frontend_assets/js/plugins.js')}}"></script>
<script src="{{asset('frontend_assets/js/main.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhAYvx0GmLyN5hlf6Uv_e9pPvUT3YpozE"></script>
<script src="{{asset('frontend_assets/js/gmap.js')}}"></script>
<!-- jQuery plugins/scripts - end -->

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter42088244 = new Ya.Metrika({ id:42088244, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "../mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/42088244" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>

<!-- Mirrored from allstore-html.real-web.pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jul 2019 14:51:54 GMT -->
</html>
