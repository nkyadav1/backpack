@include('header')
		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start hero-header -->
			<div class="hero hero-sm" style="background-image:url('{{url('/')}}/images/hero-header/02.jpg');">
				<div class="container">
					
					<div class="home-search-form">
					
						<form>
						
							<div class="form-group location-form">
								<input type="text" class="form-control" placeholder="Where would you like to eat?">
							</div>
							
							<div class="form-group">
								<select class="custom-select" id="cuisine-type">
									<option value="0">Cuisine Type</option>
									<option value="1">African</option>
									<option value="2">American‎</option>
									<option value="3">Italian</option>
									<option value="4">French</option>
									<option value="5">Indochinese‎</option>
									<option value="6">Halal</option>
								</select>
							</div>
							
							<div class="form-group">
								<select class="custom-select" id="no-of-people">
									<option value="0">Number Of People</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
								</select>
							</div>
							
							<button class="btn btn-primary btn-form">Find a Table</button>
						
						</form>
						
					</div>

				</div>
				
			</div>
			<!-- end hero-header -->

			<div class="container pt-10 pb-30">
			
				<div class="breadcrumb-wrapper">
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Page</a></li>
						<li class="active">Feature Items</li>
					</ol>
				</div>
				
				<div class="row mb-10">
				
					<div class="col-md-8">
					
						<div class="section-title-02">

							<h3><span>Restaurant in Bangkok <small class="ml-10">/ 253 restaurants</small></span></h3>
						
						</div>
					
					</div>
					
				</div>
						
				<div class="row">
				
					<div class="col-sm-4 col-md-3">
					
						<div class="section-title-02">
							<h4><span>Filter Your Result</span></h4>
						</div>

						<div class="sidebar-module">
							<h5>Price Range</h5>
							<div class="range-slider-wrapper">
								<input id="price_range" />
							</div>
						</div>
						
						<div class="sidebar-module">
							<h5>Rating Range</h5>
							<div class="range-slider-wrapper">
								<input id="star_rating_range" />
							</div>
						</div>
									
						<div class="sidebar-module">
							<h5>Cuisine Type</h5>
							<div class="checkbox-block font-icon-checkbox">
								<input id="filter_cuisine-1" name="filter_cuisine" type="checkbox" class="checkbox" checked="checked" />
								<label class="" for="filter_cuisine-1">Any</label>
							</div>
							<div class="checkbox-block font-icon-checkbox">
								<input id="filter_cuisine-2" name="filter_cuisine" type="checkbox" class="checkbox"/>
								<label class="" for="filter_cuisine-2">American‎</label>
							</div>
							<div class="checkbox-block font-icon-checkbox">
								<input id="filter_cuisine-3" name="filter_cuisine" type="checkbox" class="checkbox"/>
								<label class="" for="filter_cuisine-3">Italian</label>
							</div>
							<div class="checkbox-block font-icon-checkbox">
								<input id="filter_cuisine-4" name="filter_cuisine" type="checkbox" class="checkbox"/>
								<label class="" for="filter_cuisine-4">French</label>
							</div>
							<div class="checkbox-block font-icon-checkbox">
								<input id="filter_cuisine-5" name="filter_cuisine" type="checkbox" class="checkbox"/>
								<label class="" for="filter_cuisine-5">Indochinese‎</label>
							</div>
							<div id="amenities-more-less" class="collapse"> 
								<div class="inner">
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_cuisine-6" name="filter_cuisine" type="checkbox" class="checkbox"/>
										<label class="" for="filter_cuisine-6">Halal</label>
									</div>
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_cuisine-7" name="filter_cuisine" type="checkbox" class="checkbox"/>
										<label class="" for="filter_cuisine-7">Thai</label>
									</div>
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_cuisine-8" name="filter_cuisine" type="checkbox" class="checkbox"/>
										<label class="" for="filter_cuisine-8">Arabic</label>
									</div>
								</div>
							</div>
							<button class="btn btn-more-less" data-toggle="collapse" data-target="#amenities-more-less">Show more</button>
						</div>
						
						<div class="sidebar-module">
							<h5>Location</h5>
							<div class="checkbox-block font-icon-checkbox">
								<input id="filter_amenities-1" name="filter_amenities" type="checkbox" class="checkbox" checked="checked" />
								<label class="" for="filter_amenities-1">Any</label>
							</div>
							<div class="checkbox-block font-icon-checkbox">
								<input id="filter_amenities-2" name="filter_amenities" type="checkbox" class="checkbox"/>
								<label class="" for="filter_amenities-2">Shared outdoor pool</label>
							</div>
							<div class="checkbox-block font-icon-checkbox">
								<input id="filter_amenities-3" name="filter_amenities" type="checkbox" class="checkbox"/>
								<label class="" for="filter_amenities-3">Hot tub/Jacuzzi</label>
							</div>
							<div class="checkbox-block font-icon-checkbox">
								<input id="filter_amenities-4" name="filter_amenities" type="checkbox" class="checkbox"/>
								<label class="" for="filter_amenities-4">Satellite or cable TV</label>
							</div>
							<div class="checkbox-block font-icon-checkbox">
								<input id="filter_amenities-5" name="filter_amenities" type="checkbox" class="checkbox"/>
								<label class="" for="filter_amenities-5">Parking</label>
							</div>
							<div id="location-more-less" class="collapse"> 
								<div class="inner">
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_amenities-6" name="filter_amenities" type="checkbox" class="checkbox"/>
										<label class="" for="filter_amenities-6">A/C or climate control</label>
									</div>
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_amenities-7" name="filter_amenities" type="checkbox" class="checkbox"/>
										<label class="" for="filter_amenities-7">Smoking allowed</label>
									</div>
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_amenities-8" name="filter_amenities" type="checkbox" class="checkbox"/>
										<label class="" for="filter_amenities-8">Microwave</label>
									</div>
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_amenities-9" name="filter_amenities" type="checkbox" class="checkbox"/>
										<label class="" for="filter_amenities-9">Dishwasher</label>
									</div>
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_amenities-10" name="filter_amenities" type="checkbox" class="checkbox"/>
										<label class="" for="filter_amenities-10">Refrigerator</label>
									</div>
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_amenities-11" name="filter_amenities" type="checkbox" class="checkbox"/>
										<label class="" for="filter_amenities-11">Grill</label>
									</div>
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_amenities-12" name="filter_amenities" type="checkbox" class="checkbox"/>
										<label class="" for="filter_amenities-12">Patio / Balcony</label>
									</div>
									<div class="checkbox-block font-icon-checkbox">
										<input id="filter_amenities-13" name="filter_amenities" type="checkbox" class="checkbox"/>
										<label class="" for="filter_amenities-13">Fitness Room</label>
									</div>
								</div>
							</div>
							<button class="btn btn-more-less" data-toggle="collapse" data-target="#location-more-less">Show more</button>
						</div>
						
						<div class="sidebar-module">
							<h5>Sidebar Selection</h5>
							<div class="form-group mb-0">
								<select class="custom-select" id="gender">
									<option value="0">Please Select</option>
									<option value="1">Family-friendly‎</option>
									<option value="2">Romantic‎</option>
									<option value="3">Shopping‎</option>
									<option value="4">Spa Hotel‎</option>
									<option value="5">Luxury‎</option>
								</select>
							</div>
						</div>
						
						<div class="sidebar-module">
							<h5>Sidebar Text</h5>
							<p>Attachment apartments in delightful by motionless it no. And now she burst sir learn total. Hearing hearted shewing own ask. Solicitude uncommonly use her motionless not collecting age. The properly servants required mistaken outlived bed and.</p>
						</div>
						
					</div>
					
					<div class="col-sm-8 col-md-9">
						
						<div class="sort-by-wrapper clearfix">
						
							<div class="row gap-5">
							
								<div class="col-sm-10">

									<div class="text-holder bg-primary">Sort By:</div>
									<ul class="sort-by">
										<li>
											<button class="btn active">Offer <i class="ti-angle-up"></i></button>
										</li>
										<li>
											<button class="btn">Name</button>
										</li>
										<li>
											<button class="btn">Rating</button>
										</li>
										<li>
											<button class="btn">Price</button>
										</li>
										<li>
											<button class="btn">Cuisine</button>
										</li>
										<li>
											<button class="btn">Location</button>
										</li>
									</ul>

								</div>
								
								<div class="col-sm-2">
							
									<ul class="layout-option">
										<li><a href="{{url('/restaurants/grid')}}"><i class="ti-view-grid"></i></a></li>
										<li class="active"><a href="restuarants/list"><i class="ti-view-list-alt"></i></a></li>
									</ul>
								
								</div>

							</div>

						</div>

						<div class="restaurant-list-item-wrapper no-last-bb">

							<div class="restaurant-list-item clearfix">
							
								<div class="GridLex-grid-noGutter-equalHeight">
								
									<div class="GridLex-col-3_sm-3_xss-12">
										<div class="image">
											<img src="{{url('/')}}/images/restaurant/01.jpg" alt="Image" />
										</div>
									</div>
									
									<div class="GridLex-col-9_sm-9_xss-12">
									
										<div class="GridLex-grid-noGutter-equalHeight">
										
											<div class="GridLex-col-9_sm-12 content-wrapper">
											
												<div class="content">
													<h5><a href="#">The Smokin' Pug</a></h5>
													<p class="location"><i class="fa fa-map-marker"></i> 88 Thanon Surawong, Si Phraya, Bang Rak </p>
													<p class="short-info">Barton waited twenty always repair in within we do. An delighted offending curiosity my is dashwoods at...</p>
													<p class="text-primary offer">-30% off the "à la carte" menu! * </p>
													<p class="cuisine">Cuisine: <span>Italian</span> <span>Seafood</span> <span>Bistro</span></p>
												</div>
											
											</div>
											
											<div class="GridLex-col-3_sm-12 meta-wrapper">
											
												<div class="meta">
													<div class="rating-wrapper">
														<div class="rating-item">
															<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.5"/>
														</div>
														<span class="texting"> (27 reviews)</span>
													</div>
													<div class="right-bottom">
														<div class="price">Average price: <span>$65 - $78</span></div>
														<div class="clear"></div>
														<a href="#" class="btn btn-primary btn-sm btn-block">Details</a>
													</div>
												</div>
											
											</div>
										
										</div>
										
									</div>
									
								</div>
							
							</div>

							<div class="restaurant-list-item clearfix">
							
								<div class="GridLex-grid-noGutter-equalHeight">
								
									<div class="GridLex-col-3_sm-3_xss-12">
										<div class="image">
											<img src="{{url('/')}}/images/restaurant/02.jpg" alt="Image" />
										</div>
									</div>
									
									<div class="GridLex-col-9_sm-9_xss-12">
									
										<div class="GridLex-grid-noGutter-equalHeight">
										
											<div class="GridLex-col-9_sm-12 content-wrapper">
											
												<div class="content">
													<h5><a href="#">J'AIME by Jean-Michel Lorain</a></h5>
													<p class="location"><i class="fa fa-map-marker"></i> 105 Soi Sathon 1, Thung Maha Mek, Sathon</p>
													<p class="short-info">Barton waited twenty always repair in within we do. An delighted offending curiosity my is dashwoods at...</p>
													<p class="text-primary offer">-30% off the "à la carte" menu! * </p>
													<p class="cuisine">Cuisine: <span>Italian</span> <span>Seafood</span> <span>Bistro</span></p>
												</div>
											
											</div>
											
											<div class="GridLex-col-3_sm-12 meta-wrapper">
											
												<div class="meta">
													<div class="rating-wrapper">
														<div class="rating-item">
															<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.5"/>
														</div>
														<span class="texting"> (27 reviews)</span>
													</div>
													<div class="right-bottom">
														<div class="price">Average price: <span>$65 - $78</span></div>
														<div class="clear"></div>
														<a href="#" class="btn btn-primary btn-sm btn-block">Details</a>
													</div>
												</div>
											
											</div>
										
										</div>
										
									</div>
									
								</div>
							
							</div>

							<div class="restaurant-list-item clearfix">
							
								<div class="GridLex-grid-noGutter-equalHeight">
								
									<div class="GridLex-col-3_sm-3_xss-12">
										<div class="image">
											<img src="{{url('/')}}/images/restaurant/03.jpg" alt="Image" />
										</div>
									</div>
									
									<div class="GridLex-col-9_sm-9_xss-12">
									
										<div class="GridLex-grid-noGutter-equalHeight">
										
											<div class="GridLex-col-9_sm-12 content-wrapper">
											
												<div class="content">
													<h5><a href="#">The Smokin' Pug</a></h5>
													<p class="location"><i class="fa fa-map-marker"></i> 88 Thanon Surawong, Si Phraya, Bang Rak </p>
													<p class="short-info">Barton waited twenty always repair in within we do. An delighted offending curiosity my is dashwoods at...</p>
													<p class="text-primary offer">-30% off the "à la carte" menu! * </p>
													<p class="cuisine">Cuisine: <span>Italian</span> <span>Seafood</span> <span>Bistro</span></p>
												</div>
											
											</div>
											
											<div class="GridLex-col-3_sm-12 meta-wrapper">
											
												<div class="meta">
													<div class="rating-wrapper">
														<div class="rating-item">
															<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="4.5"/>
														</div>
														<span class="texting"> (43 reviews)</span>
													</div>
													<div class="right-bottom">
														<div class="price">Average price: <span>$65 - $78</span></div>
														<div class="clear"></div>
														<a href="#" class="btn btn-primary btn-sm btn-block">Details</a>
													</div>
												</div>
											
											</div>
										
										</div>
										
									</div>
									
								</div>
							
							</div>

							<div class="restaurant-list-item clearfix">
							
								<div class="GridLex-grid-noGutter-equalHeight">
								
									<div class="GridLex-col-3_sm-3_xss-12">
										<div class="image">
											<img src="{{url('/')}}/images/restaurant/04.jpg" alt="Image" />
										</div>
									</div>
									
									<div class="GridLex-col-9_sm-9_xss-12">
									
										<div class="GridLex-grid-noGutter-equalHeight">
										
											<div class="GridLex-col-9_sm-12 content-wrapper">
											
												<div class="content">
													<h5><a href="#">J'AIME by Jean-Michel Lorain</a></h5>
													<p class="location"><i class="fa fa-map-marker"></i> 105 Soi Sathon 1, Thung Maha Mek, Sathon</p>
													<p class="short-info">Barton waited twenty always repair in within we do. An delighted offending curiosity my is dashwoods at...</p>
													<p class="text-primary offer">-30% off the "à la carte" menu! * </p>
													<p class="cuisine">Cuisine: <span>Italian</span> <span>Seafood</span> <span>Bistro</span></p>
												</div>
											
											</div>
											
											<div class="GridLex-col-3_sm-12 meta-wrapper">
											
												<div class="meta">
													<div class="rating-wrapper">
														<div class="rating-item">
															<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="4.0"/>
														</div>
														<span class="texting"> (65 reviews)</span>
													</div>
													<div class="right-bottom">
														<div class="price">Average price: <span>$65 - $78</span></div>
														<div class="clear"></div>
														<a href="#" class="btn btn-primary btn-sm btn-block">Details</a>
													</div>
												</div>
											
											</div>
										
										</div>
										
									</div>
									
								</div>
							
							</div>

							<div class="restaurant-list-item clearfix">
							
								<div class="GridLex-grid-noGutter-equalHeight">
								
									<div class="GridLex-col-3_sm-3_xss-12">
										<div class="image">
											<img src="{{url('/')}}/images/restaurant/05.jpg" alt="Image" />
										</div>
									</div>
									
									<div class="GridLex-col-9_sm-9_xss-12">
									
										<div class="GridLex-grid-noGutter-equalHeight">
										
											<div class="GridLex-col-9_sm-12 content-wrapper">
											
												<div class="content">
													<h5><a href="#">The Smokin' Pug</a></h5>
													<p class="location"><i class="fa fa-map-marker"></i> 88 Thanon Surawong, Si Phraya, Bang Rak </p>
													<p class="short-info">Barton waited twenty always repair in within we do. An delighted offending curiosity my is dashwoods at...</p>
													<p class="text-primary offer">-30% off the "à la carte" menu! * </p>
													<p class="cuisine">Cuisine: <span>Italian</span> <span>Seafood</span> <span>Bistro</span></p>
												</div>
											
											</div>
											
											<div class="GridLex-col-3_sm-12 meta-wrapper">
											
												<div class="meta">
													<div class="rating-wrapper">
														<div class="rating-item">
															<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="5.0"/>
														</div>
														<span class="texting"> (143 reviews)</span>
													</div>
													<div class="right-bottom">
														<div class="price">Average price: <span>$65 - $78</span></div>
														<div class="clear"></div>
														<a href="#" class="btn btn-primary btn-sm btn-block">Details</a>
													</div>
												</div>
											
											</div>
										
										</div>
										
									</div>
									
								</div>
							
							</div>

							<div class="restaurant-list-item clearfix">
							
								<div class="GridLex-grid-noGutter-equalHeight">
								
									<div class="GridLex-col-3_sm-3_xss-12">
										<div class="image">
											<img src="{{url('/')}}/images/restaurant/06.jpg" alt="Image" />
										</div>
									</div>
									
									<div class="GridLex-col-9_sm-9_xss-12">
									
										<div class="GridLex-grid-noGutter-equalHeight">
										
											<div class="GridLex-col-9_sm-12 content-wrapper">
											
												<div class="content">
													<h5><a href="#">J'AIME by Jean-Michel Lorain</a></h5>
													<p class="location"><i class="fa fa-map-marker"></i> 105 Soi Sathon 1, Thung Maha Mek, Sathon</p>
													<p class="short-info">Barton waited twenty always repair in within we do. An delighted offending curiosity my is dashwoods at...</p>
													<p class="text-primary offer">-30% off the "à la carte" menu! * </p>
													<p class="cuisine">Cuisine: <span>Italian</span> <span>Seafood</span> <span>Bistro</span></p>
												</div>
											
											</div>
											
											<div class="GridLex-col-3_sm-12 meta-wrapper">
											
												<div class="meta">
													<div class="rating-wrapper">
														<div class="rating-item">
															<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="4.0"/>
														</div>
														<span class="texting"> (65 reviews)</span>
													</div>
													<div class="right-bottom">
														<div class="price">Average price: <span>$65 - $78</span></div>
														<div class="clear"></div>
														<a href="#" class="btn btn-primary btn-sm btn-block">Details</a>
													</div>
												</div>
											
											</div>
										
										</div>
										
									</div>
									
								</div>
							
							</div>

						</div>

						<div class="pagination-wrapper">
						
							<div class="GridLex-grid-middle GridLex-grid-noGutter">
								<div class="GridLex-col-6_sm-12_xs-12">
									<div class="text-right text-center-sm mb-10-sm">Showing 1 to 24 from 253 restaurants</div>
								</div>
								<div class="GridLex-col-6_sm-12_xs-12">
									<nav>
										<ul class="pagination pagination-text-center-sm mb-5-xs">
											<li>
												<a href="#" aria-label="Previous">
													<span aria-hidden="true">&laquo;</span>
												</a>
											</li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li>
												<a href="#" aria-label="Next">
													<span aria-hidden="true">&raquo;</span>
												</a>
											</li>
										</ul>
									</nav>

								</div>
							</div>

						</div>
						
					</div>

				</div>
				
			</div>
			
		</div>
		<!-- end Main Wrapper -->
@include('footer')