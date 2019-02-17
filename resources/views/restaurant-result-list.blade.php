@include('header')
		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start hero-header -->
			<div class="hero hero-sm" style="background-image:url('{{url('/')}}/images/hero-header/02.jpg');">
<!--				<div class="container">
					
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

				</div>-->
				
			</div>
			<!-- end hero-header -->

			<div class="container pt-10 pb-30">
			
				<div class="breadcrumb-wrapper">
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{url('/resturants/list')}}">Restaurants</a></li>
						<li class="active">Feature Items</li>
					</ol>
				</div>
				
				<div class="row mb-10">
				
					<div class="col-md-8">
					
						<div class="section-title-02">
							<h3><span>Restaurants near you <!--<small class="ml-10">/ 253 restaurants</small>--></span></h3>						
						</div>
					
					</div>
					
				</div>
						
				<div class="row">
				
<!--					<div class="col-sm-4 col-md-3">
					
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
						
					</div>-->
					
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
                                            <div id="restaurant-list-wrapper">
                                                
                                            </div>
						
					</div>

				</div>
				
			</div>
			
		</div>                
		<!-- end Main Wrapper -->
                <script type="text/javascript">
                $(document).ready(function(){
                   loadRestaurantList(); 
                });
                </script>
@include('footer')