@extends('layout/master')
@section('content')
<div class="page-title quick-search">
		<div class="container">
			<div class="flex-wrap">
									<div class="flex-left">
						<h1 class="h4-size">Browse Ads</h1>
						<ul class="list-unstyled list-inline breadcrumbs"><li><a href="../index.html">Home</a></li><li>Browse Ads</li></ul>					</div>
					<div class="flex-right">
						<a href="#" title="Quick Search" data-toggle="modal" data-target="#quick-search">
							<i class="aficon-binoculars"></i>
						</a>
					</div>				
							</div>
		</div>
	</div>

<main>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="white-block filters-toggle">
	<div class="white-block-content">
		<h6>
			<a href="javascript:void(0);" class="toggle-filters">Toggle Filters</a>
		</h6>
	</div>
</div>
<form method="post" class="search-form" action="https://themes/adifier/browse-ads/">
	<div class="white-block no-margin">
		<div class="white-block-title">
			<h5>Filter Ads</h5>
			<a href="javascript:void(0);" class="reset-search" title="Reset Search"><i class="aficon-undo"></i></a>
		</div>

		<div class="white-block-content">
			<div class="form-group">
				<label for="keyword">Keyword</label>
				<input type="text" class="keyword" name="keyword" id="keyword" value="" placeholder="Search for...">
			</div>

			<div class="form-group">
				            <label class="label-bottom-margin">Category</label>
            <ul class="list-unstyled taxonomy-filter category-filter">
                <li>
                    <div class="styled-radio">
                        <input type="radio" name="category" value="" id="category" checked=&quot;checked&quot;>
                        <label for="category">All</label>
                    </div>
                </li>
                		<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="38" id="category-38" >
				<label for="category-38">Electronics</label>
										<a href="javascript:void(0);"><i class="aficon-angle-down"></i></a>
											
			</div>
							<ul class="list-unstyled hidden">
							<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="13" id="category-13" >
				<label for="category-13">Computers</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="37" id="category-37" >
				<label for="category-37">Drones</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="15" id="category-15" >
				<label for="category-15">Notebooks</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="39" id="category-39" >
				<label for="category-39">Phones</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="36" id="category-36" >
				<label for="category-36">Watches</label>
									
			</div>
					</li>
						</ul>
						</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="81" id="category-81" >
				<label for="category-81">Furniture</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="42" id="category-42" >
				<label for="category-42">Jobs</label>
										<a href="javascript:void(0);"><i class="aficon-angle-down"></i></a>
											
			</div>
							<ul class="list-unstyled hidden">
							<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="46" id="category-46" >
				<label for="category-46">Dancers</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="51" id="category-51" >
				<label for="category-51">Drivers</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="43" id="category-43" >
				<label for="category-43">Film Stunts</label>
									
			</div>
					</li>
						</ul>
						</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="9" id="category-9" >
				<label for="category-9">Real Estate</label>
										<a href="javascript:void(0);"><i class="aficon-angle-down"></i></a>
											
			</div>
							<ul class="list-unstyled hidden">
							<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="11" id="category-11" >
				<label for="category-11">Appartments</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="29" id="category-29" >
				<label for="category-29">Houses</label>
									
			</div>
					</li>
						</ul>
						</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="17" id="category-17" >
				<label for="category-17">Services</label>
										<a href="javascript:void(0);"><i class="aficon-angle-down"></i></a>
											
			</div>
							<ul class="list-unstyled hidden">
							<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="57" id="category-57" >
				<label for="category-57">Builders</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="18" id="category-18" >
				<label for="category-18">Car Mechanic</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="59" id="category-59" >
				<label for="category-59">Moving &amp; Storage</label>
									
			</div>
					</li>
						</ul>
						</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="2" id="category-2" >
				<label for="category-2">Vehicles</label>
										<a href="javascript:void(0);"><i class="aficon-angle-down"></i></a>
											
			</div>
							<ul class="list-unstyled hidden">
							<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="25" id="category-25" >
				<label for="category-25">Boats &amp; Watercrafts</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="24" id="category-24" >
				<label for="category-24">Campers</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="5" id="category-5" >
				<label for="category-5">Cars</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="22" id="category-22" >
				<label for="category-22">Motocycles</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="23" id="category-23" >
				<label for="category-23">Snowmobiles</label>
									
			</div>
					</li>
				<li class="">
			<div class="styled-radio">
				<input type="radio" name="category" value="6" id="category-6" >
				<label for="category-6">Trucks</label>
									
			</div>
					</li>
						</ul>
						</li>
		            </ul>
            			</div>

			<div class="category-custom-fields">
							</div>

										<div class="form-group">
																<!-- fix for taxonomy page and geo search -->
												<!-- endfix -->
						<label for="location">Location</label>
						<input type="text" class="location" name="location" id="location" value="" placeholder="Start typing...">
						<input type="hidden" name="latitude" class="latitude" value="">
						<input type="hidden" name="longitude" class="longitude" value="">						

						<div class="radius-slider hidden">
							<label class="margin-above label-bottom-margin">Radius</label>
							<div class="slider-wrap">
								<div class="filter-slider" data-min="0" data-max="2000" data-default="2000" data-sufix="mi"></div>
								<input type="hidden" name="radius" class="radius" value="2000">
								<div class="slider-value"></div>
							</div>
						</div>
									</div>
			
							<div class="form-group">
					<label class="label-bottom-margin">Price</label>
											<div class="date-range">
							<input type="text" name="price[0]" value="" placeholder="min" />
							<input type="text" name="price[1]" value="" placeholder="max" />
						</div>
									</div>
				<div class="form-group">
						<div class="form-group">
		<div class="styled-select">
			<label for="currency">Currency</label>
			<select name="currency" id="currency" class="currency-swap">
									<option value="USD" >USD ($)</option>
										<option value="EUR" >EUR (€)</option>
										<option value="RUB" >RUB (₽)</option>
								</select>
		</div>
	</div>
					</div>
			
							<div class="form-group">
					<label class="label-bottom-margin">Type</label>
					<ul class="list-unstyled">
						<li>
							<div class="styled-radio">
								<input type="radio" name="type" value="" id="type-0" checked="checked">
								<label for="type-0">All</label>
							</div>
						</li>
													<li>
								<div class="styled-radio">
									<input type="radio" name="type" value="1" id="type-1" >
									<label for="type-1">Sell</label>
								</div>
							</li>
																			<li>
								<div class="styled-radio">
									<input type="radio" name="type" value="2" id="type-2" >
									<label for="type-2">Auction</label>
								</div>
							</li>
																			<li>
								<div class="styled-radio">
									<input type="radio" name="type" value="3" id="type-3" >
									<label for="type-3">Buy</label>
								</div>
							</li>
																			<li>
								<div class="styled-radio">
									<input type="radio" name="type" value="4" id="type-4" >
									<label for="type-4">Exchange</label>
								</div>
							</li>
																			<li>
								<div class="styled-radio">
									<input type="radio" name="type" value="5" id="type-5" >
									<label for="type-5">Gift</label>
								</div>
							</li>
																			<li>
								<div class="styled-radio">
									<input type="radio" name="type" value="6" id="type-6" >
									<label for="type-6">Rent</label>
								</div>
							</li>
																			<li>
								<div class="styled-radio">
									<input type="radio" name="type" value="7" id="type-7" >
									<label for="type-7">Job - Offer</label>
								</div>
							</li>
																			<li>
								<div class="styled-radio">
									<input type="radio" name="type" value="8" id="type-8" >
									<label for="type-8">Job - Wanted</label>
								</div>
							</li>
											</ul>
				</div>
			
							<div class="form-group">
					<label class="label-bottom-margin">Condition</label>
					<ul class="list-unstyled">
						<li>
							<div class="styled-radio">
								<input type="radio" name="cond" value="" id="cond-0" checked="checked">
								<label for="cond-0">All</label>
							</div>
						</li>
						<li>
							<div class="styled-radio">
								<input type="radio" name="cond" value="1" id="cond-1" >
								<label for="cond-1">New</label>
							</div>
						</li>
						<li>
							<div class="styled-radio">
								<input type="radio" name="cond" value="2" id="cond-2" >
								<label for="cond-2">Manufacturer Refurbished</label>
							</div>
						</li>
						<li>
							<div class="styled-radio">
								<input type="radio" name="cond" value="3" id="cond-3" >
								<label for="cond-3">Used</label>
							</div>
						</li>
						<li>
							<div class="styled-radio">
								<input type="radio" name="cond" value="4" id="cond-4" >
								<label for="cond-4">For Parts Or Not Working</label>
							</div>
						</li>
					</ul>
				</div>
			
			<div class="form-group">
									<div class="styled-checkbox hidden show-sale-filter">
						<input type="checkbox" name="sale-only" value="1" id="sale-only" >
						<label for="sale-only">Show ads on sale only</label>
					</div>
								<div class="styled-checkbox">
					<input type="checkbox" name="image-only" value="1" id="image-only" >
					<label for="image-only">Show ads with image(s) only</label>
				</div>
				<div class="styled-checkbox">
					<input type="checkbox" name="negotiable-only" value="1" id="negotiable-only" >
					<label for="negotiable-only">Show negotiable ads only</label>
				</div>
									<div class="styled-checkbox">
						<input type="checkbox" name="urgent-only" value="1" id="urgent-only" >
						<label for="urgent-only">Show only urgent ads</label>
					</div>
							</div>
			<div class="submit-search-form">
				<a href="javascript:void(0);" class="af-button filter-adverts">Apply Filters</a>
			</div>
		</div>
	</div>
</form>			</div>
			<div class="col-sm-9">
				<div class="ajax-search">
			<div class="white-block">
			<div class="white-block-content">
				<div class="flex-wrap search-order">
					<h6>
						Showing 						<strong>1</strong>
						-
						<strong>12</strong> 
						of						<strong>21</strong>
						ads found					</h6>
					<div class="flex-right flex-wrap">
						<div class="styled-select styled-select-no-label">
							<select name="af_orderby" class="orderby">
								<option value=""  selected='selected'>Sort By Date</option>
								<option value="expire-ASC" >Sort By Expire</option>
								<option value="views-DESC" >Sort By Popularity</option>
								<option value="price-ASC" >Sort By Price - Ascending</option>
								<option value="price-DESC" >Sort By Price - Descending</option>
							</select>
						</div>
						<div class="layout-view">
							<a href="javascript:void(0);" class="active" data-style="grid"><i class="aficon-th"></i></a>
							<a href="javascript:void(0);" class="" data-style="list"><i class="aficon-th-list"></i></a>
							<a href="javascript:void(0);" class="" data-style="card"><i class="aficon-th-large"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="af-items-3 af-listing-grid" >
			<div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

		<div class="advert-tags">
					<div class="ribbon featured">
				Featured			</div>
				</div>
	
	<a href="../advert/handy-mechanic-for-ford-vehicles/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-5-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/services/index.html">Services</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/washington/index.html">Washington</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/handy-mechanic-for-ford-vehicles/index.html" class="text-overflow" title="Handy Mechanic For FORD Vehicles">
		Handy Mechanic For FORD Vehicles	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price"><span class="text-price">Exchange</span></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="81" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="81" data-longitude="-77.03687070" data-latitude="38.90719230" data-icon="https://wp-content/uploads/2018/02/services.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid advert-hightlight">

	
	<a href="../advert/scania-r-srs-l-class-r450-la-streamline-highline-diesel/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-9-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/vehicles/index.html">Vehicles</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/amsterdam/index.html">Amsterdam</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/scania-r-srs-l-class-r450-la-streamline-highline-diesel/index.html" class="text-overflow" title="Scania R-SRS L-CLASS R450 LA Streamline Highline Diesel">
		Scania R-SRS L-CLASS R450 LA Streamline Highline Diesel	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price">300,000.00<span class="price-symbol">€</span></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="88" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="88" data-longitude="4.89516790" data-latitude="52.37021570" data-icon="https://wp-content/uploads/2018/02/cars.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

	
	<a href="../advert/move-quickly-with-high-load-trailer/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-8-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/services/index.html">Services</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/dortmund/index.html">Dortmund</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/move-quickly-with-high-load-trailer/index.html" class="text-overflow" title="Move Quickly With High Load Trailer">
		Move Quickly With High Load Trailer	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price"><span class="price-symbol">$</span>26,099.00<div class="price-bids"><span>6 Bids</span></div></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="87" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="87" data-longitude="7.46529810" data-latitude="51.51358720" data-icon="https://wp-content/uploads/2018/02/services.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

		<div class="advert-tags">
					<div class="ribbon negotiable">
				Negotiable			</div>
				</div>
	
	<a href="../advert/indoor-furniture-pe-wicker-sofa-lounge-couch/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-22-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/furniture/index.html">Furniture</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/ostend/index.html">Ostend</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/indoor-furniture-pe-wicker-sofa-lounge-couch/index.html" class="text-overflow" title="Indoor Furniture PE Wicker Sofa Lounge Couch">
		Indoor Furniture PE Wicker Sofa Lounge Couch	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price">90,00<span class="price-symbol">₽</span><span class="no-strike">/ week</span></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="127" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="127" data-longitude="2.92865600" data-latitude="51.21543000" data-icon="https://wp-content/uploads/2018/02/furniture.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

	
	<a href="../advert/trained-ballet-dancer-is-required-for-the-show/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-20-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/jobs/index.html">Jobs</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/london/index.html">London</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/trained-ballet-dancer-is-required-for-the-show/index.html" class="text-overflow" title="Trained Ballet Dancer Is Required For The Show">
		Trained Ballet Dancer Is Required For The Show	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price"><span class="text-price">Job - Wanted</span></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="125" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="125" data-longitude="-0.12775830" data-latitude="51.50735090" data-icon="https://wp-content/uploads/2018/02/jobs.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

		<div class="advert-tags">
					<div class="ribbon urgent">
				Urgent			</div>
				</div>
	
	<a href="../advert/polaris-600-assault-144-snowmobile-2017-with-warranty/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-11-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/vehicles/index.html">Vehicles</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/sundsvall/index.html">Sundsvall</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/polaris-600-assault-144-snowmobile-2017-with-warranty/index.html" class="text-overflow" title="Polaris 600 Assault 144 Snowmobile 2017 With Warranty">
		Polaris 600 Assault 144 Snowmobile 2017 With Warranty	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price"><span class="">450.00<span class="price-symbol">€</span></span>400.00<span class="price-symbol">€</span></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="86" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="86" data-longitude="17.30692700" data-latitude="62.39081100" data-icon="https://wp-content/uploads/2018/02/cars.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

	
	<a href="../advert/apartment-in-spain-for-sale-at-panoramica-golf-country-club/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-18-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/real-estate/index.html">Real Estate</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/paris/index.html">Paris</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/apartment-in-spain-for-sale-at-panoramica-golf-country-club/index.html" class="text-overflow" title="Apartment In Spain For Sale At Panoramica Golf &#038; Country Club">
		Apartment In Spain For Sale At Panoramica Golf &#038; Country Club	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price">Call for price</div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="118" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="118" data-longitude="2.35222190" data-latitude="48.85661400" data-icon="https://wp-content/uploads/2018/02/real-estate.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

	
	<a href="../advert/fashion-luxury-men-date-stainless-steel-leather-analog-quartz/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-17-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/electronics/index.html">Electronics</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/berlin/index.html">Berlin</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/fashion-luxury-men-date-stainless-steel-leather-analog-quartz/index.html" class="text-overflow" title="Fashion Luxury Men Date Stainless Steel Leather Analog Quartz">
		Fashion Luxury Men Date Stainless Steel Leather Analog Quartz	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price"><span class="price-symbol">$</span>65.00<div class="price-bids"><span>1 Bid</span></div></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="114" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="114" data-longitude="13.40495400" data-latitude="52.52000660" data-icon="https://wp-content/uploads/2018/02/electronics.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

	
	<a href="../advert/customized-apple-imac-21-5-all-in-one-desktop-computer/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-13-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/electronics/index.html">Electronics</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/vienna/index.html">Vienna</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/customized-apple-imac-21-5-all-in-one-desktop-computer/index.html" class="text-overflow" title="Customized Apple iMac 21.5&#8243; All-In-One Desktop Computer">
		Customized Apple iMac 21.5&#8243; All-In-One Desktop Computer	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price"><span class="text-price">Buying</span></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="111" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="111" data-longitude="16.37381890" data-latitude="48.20817430" data-icon="https://wp-content/uploads/2018/02/electronics.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

	
	<a href="../advert/new-x5sw-1-2-4ghz-4ch-6-axis-rc-quadcopter-drone/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-12-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/electronics/index.html">Electronics</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/british-columbia/index.html">British Columbia</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/new-x5sw-1-2-4ghz-4ch-6-axis-rc-quadcopter-drone/index.html" class="text-overflow" title="New X5SW-1 2.4GHz 4CH 6 Axis RC Quadcopter Drone">
		New X5SW-1 2.4GHz 4CH 6 Axis RC Quadcopter Drone	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price"><span class="text-price">Exchange</span></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="105" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="105" data-longitude="-123.12073750" data-latitude="49.28272910" data-icon="https://wp-content/uploads/2018/02/electronics.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

	
	<a href="../advert/2012-audi-r8-gt-spyder-convertible-2-door/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-23-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/vehicles/index.html">Vehicles</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/paris/index.html">Paris</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/2012-audi-r8-gt-spyder-convertible-2-door/index.html" class="text-overflow" title="2012 Audi R8 GT Spyder Convertible 2-Door">
		2012 Audi R8 GT Spyder Convertible 2-Door	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price"><span class="text-price">Gift</span></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="131" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="131" data-longitude="2.35222190" data-latitude="48.85661400" data-icon="https://wp-content/uploads/2018/02/cars.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div><div class="af-item-wrap"><div class="white-block hover-shadow advert-item advert-grid ">

	
	<a href="../advert/apple-iphone-6-16gb-4g-lte-factory-unlocked/index.html" class="advert-media">
		<img width="355" height="250" src="../wp-content/uploads/2018/02/adr-16-355x250.jpg" class="attachment-adifier-grid size-adifier-grid wp-post-image" alt="" decoding="async" loading="lazy" />	</a>

	<div class="white-block-content">

		<div class="top-advert-meta flex-wrap">
	<div class="advert-cat text-overflow">
					<i class="aficon-dot-circle-o"></i>
			<a href="../advert-category/electronics/index.html">Electronics</a>			
			</div>			
	<div class="advert-city text-overflow">
					<i class="aficon-map-marker-alt-o"></i>
			<a href="../advert-location/belgrade/index.html">Belgrade</a>			</div>
</div>
		<h5 class="adv-title">
	<a href="../advert/apple-iphone-6-16gb-4g-lte-factory-unlocked/index.html" class="text-overflow" title="Apple iPhone 6 16GB 4G LTE Factory Unlocked">
		Apple iPhone 6 16GB 4G LTE Factory Unlocked	</a>
</h5>
		<div class="bottom-advert-meta flex-wrap">
	<div class="price"><span class="">800.00<span class="price-symbol">€</span></span>700.00<span class="price-symbol">€</span></div>	<div class="flex-right">
					<a href="javascript:void(0);" class="compare-add " data-id="113" title="Add This To Compare">
				<i class="aficon-repeat"></i>
			</a>
			
			<a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login" >
		<i class="aficon-heart-o"></i>
		<span>Favorite</span>
		<span class="small-icon">Favorite</span>
	</a>
		</div>
</div>
	</div>

		<div class="search-map-la-long hidden" data-id="113" data-longitude="20.44892160" data-latitude="44.78656800" data-icon="https://wp-content/uploads/2018/02/electronics.png" data-iconwidth="110" data-iconheight="110"></div>
	</div></div>		</div>

		
					<div class="pagination">
				<span aria-current="page" class="page-numbers current">1</span>
<a class="page-numbers" href="index5f6c.html?af_page=2">2</a>			</div>
			
		</div>			</div>
		</div>
	</div>
</main>
<a href="javascript:;" class="to_top af-button">
	<i class="aficon-angle-up"></i>
</a>
@endsection