@extends('layouts/frontendapp')
@section('frontend_content')

<main>
<section class="container">


<ul class="b-crumbs">
	<li>
		<a href="{{url('/')}}">
			Home
		</a>
	</li>
	<li>
		<span>{{$category_details->name}}</span>
	</li>
</ul>
<h1 class="main-ttl"><span>{{$category_details->name}}</span></h1>
<!-- Catalog Sidebar - start -->
<div class="section-sb">
	<!-- Filter - start -->
	<div class="section-filter">
		<button id="section-filter-toggle" class="section-filter-toggle" data-close="Hide Filter" data-open="Show Filter">
			<span>Show Filter</span> <i class="fa fa-angle-down"></i>
		</button>
		<div class="section-filter-cont">
			<div class="section-filter-price">
				<div class="range-slider section-filter-price" data-min="0" data-max="1000" data-from="200" data-to="800" data-prefix="$" data-grid="false"></div>
			</div>
			<div class="section-filter-item">
				<p class="section-filter-ttl">Style <i class="fa fa-angle-down"></i></p>
				<div class="section-filter-fields">
					<p class="section-filter-field">
						<input id="section-filter-checkbox2-1" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox2-1">Work</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox2-2" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox2-2">Vintage</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox2-3" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox2-3">Cute</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox2-4" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox2-4">Novelty</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox2-5" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox2-5">Brief</label>
					</p>
				</div>
			</div>
			<div class="section-filter-item opened">
				<p class="section-filter-ttl">Material <i class="fa fa-angle-down"></i></p>
				<div class="section-filter-fields">
					<p class="section-filter-field">
						<input id="section-filter-checkbox3-1" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox3-1">Cotton</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox3-2" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox3-2">Spandex</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox3-3" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox3-3">Polyester</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox3-4" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox3-4">Acetate</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox3-5" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox3-5">Microfiber</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox3-6" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox3-6">Silk</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox3-7" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox3-7">Fur</label>
					</p>
				</div>
			</div>
			<div class="section-filter-item opened">
				<p class="section-filter-ttl">Color <i class="fa fa-angle-down"></i></p>
				<div class="section-filter-fields">
					<ul class="section-filter-color">
						<li class="active"><img src="img/color/red.jpg" alt="Red"></li>
						<li><img src="img/color/blue.jpg" alt="Blue"></li>
						<li><img src="img/color/green.jpg" alt="Green"></li>
						<li><img src="img/color/yellow.jpg" alt="Yellow"></li>
						<li><img src="img/color/purple.jpg" alt="Purple"></li>
					</ul>
				</div>
			</div>
			<div class="section-filter-item opened">
				<p class="section-filter-ttl">Decoration <i class="fa fa-angle-down"></i></p>
				<div class="section-filter-fields">
					<div class="section-filter-select">
						<select data-placeholder="Decoration" class="chosen-select">
							<option>Pattern</option>
							<option>Pockets</option>
							<option>Button</option>
							<option>Beading</option>
							<option>LOGO</option>
							<option>Spliced</option>
							<option>Letter</option>
							<option>Pleated</option>
							<option>Appliques</option>
							<option>Bow</option>
							<option>Criss-Cross</option>
							<option>Crystal</option>
							<option>Draped</option>
							<option>Embroidery</option>
							<option>Feathers</option>
							<option>Fur</option>
							<option>Flowers</option>
							<option>Lace</option>
							<option>Pearls</option>
							<option>Ruched</option>
							<option>Ruffles</option>
							<option>Sashes</option>
							<option>Ribbons</option>
							<option>Sequined</option>
							<option>Tassel</option>
							<option>Rivet</option>
							<option>Hole</option>
							<option>Hollow Out</option>
							<option>Embroidered Flares</option>
							<option>Cuffs</option>
							<option>Patches</option>
							<option>Fake Zippers</option>
							<option>Bleached</option>
							<option>Ripped</option>
							<option>Washed</option>
							<option>Patchwork</option>
							<option>Scratched</option>
							<option>Side Stripe</option>
							<option>None</option>
							<option>Character</option>
							<option>Other</option>
							<option>Badge</option>
							<option>Offset printing</option>
							<option>Patch pocket</option>
						</select>
					</div>
				</div>
			</div>
			<div class="section-filter-item opened">
				<p class="section-filter-ttl">Manufacturer country <i class="fa fa-angle-down"></i></p>
				<div class="section-filter-fields">
					<div class="section-filter-select">
						<select data-placeholder="Manufacturer country" class="chosen-select" multiple>
							<optgroup label="EUROPE">
								<option>Albania</option>
								<option>Andorra</option>
								<option>Armenia</option>
								<option>Austria</option>
								<option>Azerbaijan</option>
								<option>Belarus</option>
								<option>Belgium</option>
								<option>Bosnia and Herzegovina</option>
								<option>Bulgaria</option>
								<option>Croatia</option>
								<option>Cyprus</option>
								<option>Czech Republic</option>
								<option>Denmark</option>
								<option>Estonia</option>
								<option>Finland</option>
								<option>France</option>
								<option>Georgia</option>
								<option>Germany</option>
								<option>Greece</option>
								<option>Hungary</option>
								<option>Iceland</option>
								<option>Ireland</option>
								<option>Italy</option>
								<option>Latvia</option>
								<option>Liechtenstein</option>
								<option>Lithuania</option>
								<option>Luxembourg</option>
								<option>Macedonia</option>
								<option>Malta</option>
								<option>Moldova</option>
								<option>Monaco</option>
								<option>Montenegro</option>
								<option>Netherlands</option>
								<option>Norway</option>
								<option>Poland</option>
								<option>Portugal</option>
								<option>Romania</option>
								<option>San Marino</option>
								<option>Serbia</option>
								<option>Slovakia</option>
								<option>Slovenia</option>
								<option>Spain</option>
								<option>Sweden</option>
								<option>Switzerland</option>
								<option>Ukraine</option>
								<option>United Kingdom</option>
								<option>Vatican City</option>
							</optgroup>
							<optgroup label="ASIA">
								<option>Afghanistan</option>
								<option>Bahrain</option>
								<option>Bangladesh</option>
								<option>Bhutan</option>
								<option>Brunei</option>
								<option>Burma (Myanmar)</option>
								<option>Cambodia</option>
								<option>China</option>
								<option>East Timor</option>
								<option>India</option>
								<option>Indonesia</option>
								<option>Iran</option>
								<option>Iraq</option>
								<option>Israel</option>
								<option>Japan</option>
								<option>Jordan</option>
								<option>Kazakhstan</option>
								<option>Korea, North</option>
								<option>Korea, South</option>
								<option>Kuwait</option>
								<option>Kyrgyzstan</option>
								<option>Laos</option>
								<option>Lebanon</option>
								<option>Malaysia</option>
								<option>Maldives</option>
								<option>Mongolia</option>
								<option>Nepal</option>
								<option>Oman</option>
								<option>Pakistan</option>
								<option>Philippines</option>
								<option>Qatar</option>
								<option>Russian Federation</option>
								<option>Saudi Arabia</option>
								<option>Singapore</option>
								<option>Sri Lanka</option>
								<option>Syria</option>
								<option>Tajikistan</option>
								<option>Thailand</option>
								<option>Turkey</option>
								<option>Turkmenistan</option>
								<option>United Arab Emirates</option>
								<option>Uzbekistan</option>
								<option>Vietnam</option>
								<option>Yemen</option>
							</optgroup>
							<optgroup label="N. AMERICA">
								<option>Antigua and Barbuda</option>
								<option>Bahamas</option>
								<option>Barbados</option>
								<option>Belize</option>
								<option>Canada</option>
								<option>Costa Rica</option>
								<option>Cuba</option>
								<option>Dominica</option>
								<option>Dominican Republic</option>
								<option>El Salvador</option>
								<option>Grenada</option>
								<option>Guatemala</option>
								<option>Haiti</option>
								<option>Honduras</option>
								<option>Jamaica</option>
								<option>Mexico</option>
								<option>Nicaragua</option>
								<option>Panama</option>
								<option>Saint Kitts and Nevis</option>
								<option>Saint Lucia</option>
								<option>Saint Vincent and the Grenadines</option>
								<option>Trinidad and Tobago</option>
								<option>United States</option>
							</optgroup>
							<optgroup label="S. AMERICA">
								<option>Argentina</option>
								<option>Bolivia</option>
								<option>Brazil</option>
								<option>Chile</option>
								<option>Colombia</option>
								<option>Ecuador</option>
								<option>Guyana</option>
								<option>Paraguay</option>
								<option>Peru</option>
								<option>Suriname</option>
								<option>Uruguay</option>
								<option>Venezuela</option>
							</optgroup>
							<optgroup label="AFRICA">
								<option>Algeria</option>
								<option>Angola</option>
								<option>Benin</option>
								<option>Botswana</option>
								<option>Burkina</option>
								<option>Burundi</option>
								<option>Cameroon</option>
								<option>Cape Verde</option>
								<option>Central African Republic</option>
								<option>Chad</option>
								<option>Comoros</option>
								<option>Congo</option>
								<option>Congo</option>
								<option>Djibouti</option>
								<option>Egypt</option>
								<option>Equatorial Guinea</option>
								<option>Eritrea</option>
								<option>Ethiopia</option>
								<option>Gabon</option>
								<option>Gambia</option>
								<option>Ghana</option>
								<option>Guinea</option>
								<option>Guinea-Bissau</option>
								<option>Ivory Coast</option>
								<option>Kenya</option>
								<option>Lesotho</option>
								<option>Liberia</option>
								<option>Libya</option>
								<option>Madagascar</option>
								<option>Malawi</option>
								<option>Mali</option>
								<option>Mauritania</option>
								<option>Mauritius</option>
								<option>Morocco</option>
								<option>Mozambique</option>
								<option>Namibia</option>
								<option>Niger</option>
								<option>Nigeria</option>
								<option>Rwanda</option>
								<option>Sao Tome and Principe</option>
								<option>Senegal</option>
								<option>Seychelles</option>
								<option>Sierra Leone</option>
								<option>Somalia</option>
								<option>South Africa</option>
								<option>South Sudan</option>
								<option>Sudan</option>
								<option>Swaziland</option>
								<option>Tanzania</option>
								<option>Togo</option>
								<option>Tunisia</option>
								<option>Uganda</option>
								<option>Zambia</option>
								<option>Zimbabwe</option>
							</optgroup>
							<optgroup label="OCEANIA">
								<option>Australia</option>
								<option>Fiji</option>
								<option>Kiribati</option>
								<option>Marshall Islands</option>
								<option>Micronesia</option>
								<option>Nauru</option>
								<option>New Zealand</option>
								<option>Palau</option>
								<option>Papua New Guinea</option>
								<option>Samoa</option>
								<option>Solomon Islands</option>
								<option>Tonga</option>
								<option>Tuvalu</option>
								<option>Vanuatu</option>
							</optgroup>
						</select>
					</div>
				</div>
			</div>
			<div class="section-filter-item">
				<p class="section-filter-ttl">Pattern Type <i class="fa fa-angle-down"></i></p>
				<div class="section-filter-fields">
					<p class="section-filter-field">
						<input id="section-filter-checkbox4-1" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox4-1">Solid</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox4-2" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox4-2">Patchwork</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox4-3" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox4-3">Dot</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox4-4" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox4-4">Print</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox4-5" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox4-5">Character</label>
					</p>
				</div>
			</div>
			<div class="section-filter-item">
				<p class="section-filter-ttl">Fit Type <i class="fa fa-angle-down"></i></p>
				<div class="section-filter-fields">
					<p class="section-filter-field">
						<input id="section-filter-checkbox5-1" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox5-1">Loose</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox5-2" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox5-2">Skinny</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox5-3" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox5-3">Regular</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox5-4" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox5-4">Straight</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox5-5" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox5-5">Boot Cut</label>
					</p>
				</div>
			</div>
			<div class="section-filter-item opened">
				<p class="section-filter-ttl">Fabric Type <i class="fa fa-angle-down"></i></p>
				<div class="section-filter-fields">
					<p class="section-filter-field">
						<input id="section-filter-radio1-1" value="on" type="radio" name="section-filter-radio1">
						<label class="section-filter-radio" for="section-filter-radio1-1">Velour</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-radio1-2" value="on" type="radio" name="section-filter-radio1">
						<label class="section-filter-radio" for="section-filter-radio1-2">Batik</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-radio1-3" value="on" type="radio" name="section-filter-radio1">
						<label class="section-filter-radio" for="section-filter-radio1-3">Chiffon</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-radio1-4" value="on" type="radio" name="section-filter-radio1">
						<label class="section-filter-radio" for="section-filter-radio1-4">Broadcloth</label>
					</p>
				</div>
			</div>
			<div class="section-filter-item">
				<p class="section-filter-ttl">Wash <i class="fa fa-angle-down"></i></p>
				<div class="section-filter-fields">
					<p class="section-filter-field">
						<input id="section-filter-checkbox6-1" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox6-1">Colored</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox6-2" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox6-2">Light</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox6-3" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox6-3">Medium</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox6-4" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox6-4">Stonewashed</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox6-5" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox6-5">White</label>
					</p>
					<p class="section-filter-field">
						<input id="section-filter-checkbox6-6" value="on" type="checkbox">
						<label class="section-filter-checkbox" for="section-filter-checkbox6-6">Distrressed</label>
					</p>
				</div>
			</div>
			<div class="section-filter-buttons">
				<input class="btn btn-themes" id="set_filter" name="set_filter" value="Apply filter" type="button">
				<input class="btn btn-link" id="del_filter" name="del_filter" value="Reset" type="button">
			</div>
		</div>
	</div>
	<!-- Filter - end -->

</div>
<!-- Catalog Sidebar - end -->
<!-- Catalog Items | List V2 - start -->
<div class="section-cont">

    <!-- Catalog Topbar - start -->
<div class="section-top">

	<!-- View Mode -->
	<ul class="section-mode">
		<li class="section-mode-gallery"><a title="View mode: Gallery" href="catalog-gallery.html"></a></li>
		<li class="section-mode-list active"><a title="View mode: List" href="catalog-list.html"></a></li>
		<li class="section-mode-table"><a title="View mode: Table" href="catalog-table.html"></a></li>
	</ul>

	<!-- Sorting -->
	<div class="section-sortby">
		<p>default sorting</p>
		<ul>
			<li>
				<a href="#">sort by popularity</a>
			</li>
			<li>
				<a href="#">low price to high</a>
			</li>
			<li>
				<a href="#">high price to low</a>
			</li>
			<li>
				<a href="#">by title A <i class="fa fa-angle-right"></i> Z</a>
			</li>
			<li>
				<a href="#">by title Z <i class="fa fa-angle-right"></i> A</a>
			</li>
			<li>
				<a href="#">default sorting</a>
			</li>
		</ul>
	</div>

	<!-- Count per page -->
	<div class="section-count">
		<p>12</p>
		<ul>
			<li><a href="#">12</a></li>
			<li><a href="#">24</a></li>
			<li><a href="#">48</a></li>
		</ul>
	</div>

</div>
<!-- Catalog Topbar - end -->
        <div class="prod-items section-items prod-list2">
          @forelse ($products as $product)
            <div class="prodlist-i">
                  <a class="list-img-carousel prodlist-i-img" href="{{url('product/details')}}/{{$product->id}}">
                    <img src="{{asset('uploads/product_photos')}}/{{$product->image}}" alt="Adipisci aperiam commodi">
                  </a>
                  <div class="prodlist-i-cont">
                      <h3><a href="{{url('product/details')}}/{{$product->id}}">{{$product->product_name}}</a></h3>
                      <p class="prodlist-i-info">
                          <a href="#" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>
                          <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Quick view</a>
                          <a class="prodlist-i-compare" href="#"><i class="fa fa-bar-chart"></i> Compare</a>
                      </p>
                                              <div class="prodlist-i-txt">
                                                {{$product->description}}
                                            </div>
                                          <div class="prodlist-i-action">
                          <span class="prodlist-i-price">
                              <b>{{$product->price}}</b>
                                                      </span>
                          <p class="prodlist-i-qnt">
                              <input value="1" type="text">
                              <a href="#" class="prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                              <a href="#" class="prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                          </p>
                          <p class="prodlist-i-addwrap">
                              <a href="#" class="prodlist-i-add">Add to cart</a>
                          </p>
                      </div>
                                          <div class="prodlist-i-skuwrap">
                                                      <div class="prodlist-i-skuitem">
                                  <p class="prodlist-i-skuttl">Color</p>
                                  <ul class="prodlist-i-skucolor">
                                      <li class="active"><img src="img/color/blue.jpg" alt=""></li>
                                      <li><img src="img/color/red.jpg" alt=""></li>
                                                                          <li><img src="img/color/green.jpg" alt=""></li>
                                  </ul>
                              </div>
                                                                              <div class="prodlist-i-skuitem">
                                  <p class="prodlist-i-skuttl">Clothes sizes</p>
                                  <div class="offer-props-select">
                                      <p>XS</p>
                                      <ul>
                                          <li><a href="#">S</a></li>
                                          <li><a href="#">M</a></li>
                                          <li><a href="#">L</a></li>
                                          <li class="active"><a href="#">XS</a></li>
                                          <li><a href="#">XL</a></li>
                                          <li><a href="#">XXL</a></li>
                                          <li><a href="#">XXXL</a></li>
                                      </ul>
                                  </div>
                              </div>
                                              </div>
                                      </div>

              <ul class="prodlist-i-props2">
                  <li><span class="prodlist-i-propttl"><span>Exterior</span></span> <span class="prodlist-i-propval">Silt Pocket</span></li>
                  <li><span class="prodlist-i-propttl"><span>Material</span></span> <span class="prodlist-i-propval">PU</span></li>
                  <li><span class="prodlist-i-propttl"><span>Occasion</span></span> <span class="prodlist-i-propval">Versatile</span></li>
                  <li><span class="prodlist-i-propttl"><span>Shape</span></span> <span class="prodlist-i-propval">Casual Tote</span></li>
                  <li><span class="prodlist-i-propttl"><span>Pattern Type</span></span> <span class="prodlist-i-propval">Solid</span></li>
                  <li><span class="prodlist-i-propttl"><span>Style</span></span> <span class="prodlist-i-propval">American Style</span></li>
                  <li><span class="prodlist-i-propttl"><span>Hardness</span></span> <span class="prodlist-i-propval">Soft</span></li>
                  <li><span class="prodlist-i-propttl"><span>Decoration</span></span> <span class="prodlist-i-propval">None</span></li>
                  <li><span class="prodlist-i-propttl"><span>Closure Type</span></span> <span class="prodlist-i-propval">Zipper</span></li>
              </ul>
          </div>
          @empty
            No Product
          @endforelse
        </div>

    <!-- Pagination - start -->
<ul class="pagi">
	<li class="active"><span>1</span></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">4</a></li>
	<li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
</ul>
<!-- Pagination - end -->
</div>
<!-- Catalog Items | List V2 - end -->

<!-- Quick View Product - start -->
<div class="qview-modal">
	<div class="prod-wrap">
		<a href="product.html">
			<h1 class="main-ttl">
				<span>Reprehenderit adipisci</span>
			</h1>
		</a>
				<div class="prod-slider-wrap">
			<div class="prod-slider">
				<ul class="prod-slider-car">
										<li>
						<a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/1.jpg">
							<img src="img/popup/1.jpg" alt="">
						</a>
					</li>
										<li>
						<a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/2.jpg">
							<img src="img/popup/2.jpg" alt="">
						</a>
					</li>
										<li>
						<a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/3.jpg">
							<img src="img/popup/3.jpg" alt="">
						</a>
					</li>
										<li>
						<a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/4.jpg">
							<img src="img/popup/4.jpg" alt="">
						</a>
					</li>
										<li>
						<a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/5.jpg">
							<img src="img/popup/5.jpg" alt="">
						</a>
					</li>
										<li>
						<a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/6.jpg">
							<img src="img/popup/6.jpg" alt="">
						</a>
					</li>
										<li>
						<a data-fancybox-group="popup-product" class="fancy-img" href="img/popup/7.jpg">
							<img src="img/popup/7.jpg" alt="">
						</a>
					</li>
									</ul>
			</div>
			<div class="prod-thumbs">
				<ul class="prod-thumbs-car">
											<li>
							<a data-slide-index="0" href="#">
								<img src="img/popup/1.jpg" alt="">
							</a>
						</li>
											<li>
							<a data-slide-index="1" href="#">
								<img src="img/popup/2.jpg" alt="">
							</a>
						</li>
											<li>
							<a data-slide-index="2" href="#">
								<img src="img/popup/3.jpg" alt="">
							</a>
						</li>
											<li>
							<a data-slide-index="3" href="#">
								<img src="img/popup/4.jpg" alt="">
							</a>
						</li>
											<li>
							<a data-slide-index="4" href="#">
								<img src="img/popup/5.jpg" alt="">
							</a>
						</li>
											<li>
							<a data-slide-index="5" href="#">
								<img src="img/popup/6.jpg" alt="">
							</a>
						</li>
											<li>
							<a data-slide-index="6" href="#">
								<img src="img/popup/7.jpg" alt="">
							</a>
						</li>
									</ul>
			</div>
		</div>

		<div class="prod-cont">
			<p class="prod-actions">
				<a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>
				<a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
			</p>
			<div class="prod-skuwrap">
				<p class="prod-skuttl">Color</p>
				<ul class="prod-skucolor">
					<li class="active">
						<img src="img/color/blue.jpg" alt="">
					</li>
					<li>
						<img src="img/color/red.jpg" alt="">
					</li>
					<li>
						<img src="img/color/green.jpg" alt="">
					</li>
					<li>
						<img src="img/color/yellow.jpg" alt="">
					</li>
					<li>
						<img src="img/color/purple.jpg" alt="">
					</li>
				</ul>
				<p class="prod-skuttl">Sizes</p>
				<div class="offer-props-select">
					<p>XL</p>
					<ul>
						<li><a href="#">XS</a></li>
						<li><a href="#">S</a></li>
						<li><a href="#">M</a></li>
						<li class="active"><a href="#">XL</a></li>
						<li><a href="#">L</a></li>
						<li><a href="#">4XL</a></li>
						<li><a href="#">XXL</a></li>
					</ul>
				</div>
			</div>
			<div class="prod-info">
				<p class="prod-price">
					<b class="item_current_price">$238</b>
				</p>
				<p class="prod-qnt">
					<input type="text" value="1">
					<a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
					<a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
				</p>
				<p class="prod-addwrap">
					<a href="#" class="prod-add">Add to cart</a>
				</p>
			</div>
			<ul class="prod-i-props">
				<li>
					<b>SKU</b> 05464207
				</li>
				<li>
					<b>Manufacturer</b> Mayoral
				</li>
				<li>
					<b>Material</b> Cotton
				</li>
				<li>
					<b>Pattern Type</b> Print
				</li>
				<li>
					<b>Wash</b> Colored
				</li>
				<li>
					<b>Style</b> Cute
				</li>
				<li>
					<b>Color</b> Blue, Red
				</li>
				<li><a href="#" class="prod-showprops">All Features</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Quick View Product - end -->
</section>
</main>
@endsection
