@include('header')		
		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start hero-header -->
			<div class="hero hero-breadcrumb" style="background-image:url('images/hero-header/03.jpg');">
			
				<div class="container">

					<h1>Add your restuarant</h1>
					<p>Get more eater &amp; Drinker</p>
					
				</div>
				
			</div>

			<div class="container pt-10 pb-30">
			
				<div class="breadcrumb-wrapper">
				
					<ol class="breadcrumb">
					
						<li><a href="#">Home</a></li>
						<li class="active">Add your restuarant</li>
						
					</ol>
					
				</div>
				
				<div class="row mt-40 mb-30">

					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

						<div class="notify-box">
						
							<div class="notify-inner">
								
								<p> If you don’t have an account you can create one below by entering your email address/username. Your account details will be confirmed via email.</p>
								
								<a href="#" class="btn btn-primary btn-sm btn-absolute">Sign-up</a>
								
							</div>
						
						</div>
						
						<div class="submite-list-wrapper">
						
							<div class="row">
					
								<div class="col-md-8">
								
									<div class="section-title-02 mb-20">

										<h3><span>Background Information</span></h3>
									
										<p>Get your projects to a new level. Included is animation on view, Parallax block, counters and charts, high resolution graphics etc.</p>
									
									</div>
								
								</div>
								
							</div>
							
							<div class="submite-list-box">
							
								<div class="row ga-20">
								
									<div class="col-xs-12 col-sm-12">
									
										<div class="form-group form-group-lg">
										
											<label>Restuarant name:</label>
											<input type="text" class="form-control"/>
											
										</div>
									
									</div>
									
									<div class="col-xs-12 col-sm-12">
									
										<div class="form-group bootstrap3-wysihtml5-wrapper">
										
											<label>Restuarant information:</label>
											<textarea class="bootstrap3-wysihtml5 form-control" placeholder="Enter text ..." style="height: 200px;"></textarea>
											
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-12">
												
										<div class="form-group">
											<label>Tags</label>
											<input type="text" class="form-control" id="autocompleteTagging" value="Italian,Seafood,Bistro" placeholder="tag to add?" />
										</div>
										
									</div>
									
								</div>

								<h6 class="text-primary text-uppercase mt-15">Address &amp; Contact</h6>
								
								<div class="row gap-20">
								
									<div class="col-xs-12 col-sm-6">
												
										<div class="form-group">
											<label>Street 1</label>
											<input type="text" class="form-control"/>
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-6">
												
										<div class="form-group">
											<label>Street 2</label>
											<input type="text" class="form-control"/>
										</div>
										
									</div>
									
									<div class="col-xss-12 col-xs-5 col-sm-4">
												
										<div class="form-group">
											<label>City</label>
											<input type="text" class="form-control"/>
										</div>
										
									</div>
									
									<div class="col-xss-12 col-xs-7 col-sm-5">
										
										<div class="row gap-20">
										
											<div class="col-xs-8 col-sm-8">
											
												<div class="form-group">
													<label>State</label>
													<input type="text" class="form-control"/>
												</div>
												
											</div>
											
											<div class="col-xs-4 col-sm-4">
											
												<div class="form-group">
													<label>Zip</label>
													<input type="text" class="form-control"/>
												</div>
												
											</div>
											
										</div>
										
									</div>
									
									<div class="col-xss-12 col-xs-12 col-sm-3">
												
										<div class="form-group">
											<label>Country</label>
											<select class="custom-select">
												<option value="0">Thailand</option>
												<option value="1">Malaysia</option>
												<option value="2">Indonesia</option>
												<option value="3">Italic</option>
												<option value="4">Japan</option>
												<option value="5">Germany</option>
												<option value="6">Egypt</option>
											</select>
										</div>
										
									</div>
									
									<div class="col-xss-12 col-xs-6 col-sm-3">
												
										<div class="form-group">
											<label>Phone 1</label>
											<input type="text" class="form-control"/>
										</div>
										
									</div>
									
									<div class="col-xss-12 col-xs-6 col-sm-3">
												
										<div class="form-group">
											<label>Phone 2</label>
											<input type="text" class="form-control"/>
										</div>
										
									</div>
									
									<div class="col-xss-12 col-xs-6 col-sm-3">
												
										<div class="form-group">
											<label>Email 1</label>
											<input type="email" class="form-control"/>
										</div>
										
									</div>
									
									<div class="col-xss-12 col-xs-6 col-sm-3">
												
										<div class="form-group">
											<label>Email 2</label>
											<input type="email" class="form-control"/>
										</div>
										
									</div>
									
									<div class="col-xss-12 col-xs-12 col-sm-6">
												
										<div class="form-group">
											<label>Website</label>
											<input type="email" class="form-control"/>
										</div>
										
									</div>
									
								</div>
								
								<h6 class="text-primary text-uppercase mt-15">Map</h6>
								
								<div id="map-simple" class="map-submit mb-40"></div>
								
								<h6 class="text-primary text-uppercase mt-15">Opening Hours</h6>

								<div class="opening-hours-wrapper">
								
									<div class="opening-hours-box">
									
										<div class="row gap-20">
										
											<div class="col-xs-12 col-sm-6 col-md-6">
											
												<label class="day-name">Monday</label>
												
												<div class="row gap-10">
												
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group from mb-15">
															<span class="input-group-addon">from</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-from[]">
														</div>
														
													</div>
													
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group to mb-15">
															<span class="input-group-addon">to</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-to[]">
														</div>
														
													</div>
													
												</div>
												
											</div>
											
											<div class="col-xs-12 col-sm-6 col-md-6">
											
												<label class="day-name">Tuesday</label>
												
												<div class="row gap-10">
												
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group from mb-15">
															<span class="input-group-addon">from</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-from[]">
														</div>
														
													</div>
													
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group to mb-15">
															<span class="input-group-addon">to</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-to[]">
														</div>
														
													</div>
													
												</div>
												
											</div>
											
											<div class="col-xs-12 col-sm-6 col-md-6">
											
												<label class="day-name">Wednesday</label>
												
												<div class="row gap-10">
												
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group from mb-15">
															<span class="input-group-addon">from</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-from[]">
														</div>
														
													</div>
													
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group to mb-15">
															<span class="input-group-addon">to</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-to[]">
														</div>
														
													</div>
													
												</div>
												
											</div>
											
											<div class="col-xs-12 col-sm-6 col-md-6">
											
												<label class="day-name">Thursday</label>
												
												<div class="row gap-10">
												
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group from mb-15">
															<span class="input-group-addon">from</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-from[]">
														</div>
														
													</div>
													
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group to mb-15">
															<span class="input-group-addon">to</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-to[]">
														</div>
														
													</div>
													
												</div>
												
											</div>
											
											<div class="col-xs-12 col-sm-6 col-md-6">
											
												<label class="day-name">Friday</label>
												
												<div class="row gap-10">
												
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group from mb-15">
															<span class="input-group-addon">from</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-from[]">
														</div>
														
													</div>
													
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group to mb-15">
															<span class="input-group-addon">to</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-to[]">
														</div>
														
													</div>
													
												</div>
												
											</div>
											
											<div class="col-xs-12 col-sm-6 col-md-6">
											
												<label class="day-name">Saturday</label>
												
												<div class="row gap-10">
												
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group from mb-15">
															<span class="input-group-addon">from</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-from[]">
														</div>
														
													</div>
													
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group to mb-15">
															<span class="input-group-addon">to</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-to[]">
														</div>
														
													</div>
													
												</div>
												
											</div>
											
											<div class="col-xs-12 col-sm-6 col-md-6">
											
												<label class="day-name">Sunday</label>
												
												<div class="row gap-10">
												
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group from mb-15">
															<span class="input-group-addon">from</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-from[]">
														</div>
														
													</div>
													
													<div class=" col-xs-6 col-sm-6 col-md-6">
													
														<div class="input-group to mb-15">
															<span class="input-group-addon">to</span>
															<input class="oh-timepicker form-control" type="text" name="open-hour-to[]">
														</div>
														
													</div>
													
												</div>
												
											</div>

										</div>
									
									</div>

								</div>

								<h6 class="text-primary text-uppercase mt-15">More about us</h6>
								
								<div class="row gap-20">
								
									<div class="col-xs-12 col-sm-12">
										
										<label>Horizontal form</label>
									
									</div>
									
									<div class="col-xs-12 col-sm-4 col-md-3">
									
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-4 col-md-3">
									
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-4 col-md-3">
									
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-4 col-md-3">
									
										<span class="block font13 line-12 text-muted font-italic">You can add upto 5 options</span>
										<div class="clearfix mb-15-xs">
											<a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
										</div>
										
									</div>
									
								</div>
								
								<div class="row gap-20">
								
									<div class="col-xs-12 col-sm-4">
									
										<label>Vertical form 1</label>
										
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>

										<div class="clearfix mb-15-xs">
											<a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
											<span class="ml-5 font13 line-12 text-muted font-italic">You can add upto 5 options</span>
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-4">
									
										<label>Vertical form 2</label>
										
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
										
										<div class="clearfix mb-15-xs">
											<a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
											<span class="ml-5 font13 line-12 text-muted font-italic">You can add upto 5 options</span>
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-4">
									
										<label>Vertical form 3</label>
										
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
										<div class="form-group">
											<input type="text" class="form-control" />
										</div>
										
										
										<div class="clearfix mb-15-xs">
											<a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
											<span class="ml-5 font13 line-12 text-muted font-italic">You can add upto 5 options</span>
										</div>
										
									</div>
									
								</div>
								
								<div class="row gap-20 mt-15">
									
									<div class="col-xs-12 col-sm-12 col-md-12">
									
										<label class="block">Checkbox options</label>
										
									</div>
									
									<div class="col-xs-12 col-sm-4">
									
										<div class="checkbox-block font-icon-checkbox">
											<input id="filter_cuisine-1" name="filter_cuisine" type="checkbox" class="checkbox" />
											<label class="" for="filter_cuisine-1">Visa</label>
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-4">
									
										<div class="checkbox-block font-icon-checkbox">
											<input id="filter_cuisine-2" name="filter_cuisine" type="checkbox" class="checkbox"/>
											<label class="" for="filter_cuisine-2">Master card</label>
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-4">
									
									</div>
									
									<div class="col-xs-12 col-sm-4">
									
										<div class="checkbox-block font-icon-checkbox">
											<input id="filter_cuisine-3" name="filter_cuisine" type="checkbox" class="checkbox"/>
											<label class="" for="filter_cuisine-3">American Express</label>
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-4">
									
										<div class="checkbox-block font-icon-checkbox">
											<input id="filter_cuisine-4" name="filter_cuisine" type="checkbox" class="checkbox"/>
											<label class="" for="filter_cuisine-4">Paypal</label>
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-4">
									
										<div class="checkbox-block font-icon-checkbox">
											<input id="filter_cuisine-5" name="filter_cuisine" type="checkbox" class="checkbox"/>
											<label class="" for="filter_cuisine-5">Citibank Cash Back </label>
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-4">
									
										<div class="checkbox-block font-icon-checkbox">
											<input id="filter_cuisine-6" name="filter_cuisine" type="checkbox" class="checkbox"/>
											<label class="" for="filter_cuisine-6"> Krungsri Credit Card</label>
										</div>
										
									</div>

								</div>
								
							</div>
							
							<div class="row">
					
								<div class="col-md-8">
								
									<div class="section-title-02 mb-20">

										<h3><span>Photos</span></h3>
									
										<p>Get your projects to a new level. Included is animation on view, Parallax block, counters and charts, high resolution graphics etc.</p>
									
									</div>
								
								</div>
								
							</div>
							
							<div class="submite-list-box">
							
								<div id="file-submit" class="dropzone">
									<input name="file" type="file" multiple>
									<div class="dz-default dz-message"><span>Click or Drop Images Here</span></div>
								</div>
								
							</div>
							
							<div class="row">
					
								<div class="col-md-8">
								
									<div class="section-title-02 mb-20">

										<h3><span>Menus</span></h3>
									
										<p>Get your projects to a new level. Included is animation on view, Parallax block, counters and charts, high resolution graphics etc.</p>
									
									</div>
								
								</div>
								
							</div>
							
							<div class="submite-list-box">

								<div class="food-menu-form-wrapper">
								
									<h6 class="text-primary text-uppercase">Menu Category #1</h6>
									
									<div class="form-group form-group-lg">

										<input type="text" class="form-control" placeholder="Ex: Breakfast"/>
										
									</div>
									
									<div class="food-menu-form-box clearfix">
									
										<div class="icon">
											<i class="fa fa-cutlery text-primary"></i>
											<span class="number-label">1</span>
										</div>
										
										<div class="image-upload">
											<div class="dropzone food-menu-image">
												<input name="file" type="file">
												<div class="dz-default dz-message"><span>Click or Drop<br />Images Here<br /><small class="font-italic text-muted font400 mt-5 block">2MB max file</small></span></div>
											</div>
										</div>
										
										<div class="food-memu-form">
										
											<div class="row gap-20">
											
												<div class="col-xss-12 col-xs-12 col-sm-9">
												
													<div class="form-group">
														<label>Title</label>
														<input type="text" class="form-control"/>
													</div>
													
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-3">
												
													<div class="form-group">
														<label>Price</label>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon">$</span>
														</div>
													</div>
													
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-12">
												
													<div class="form-group">
														<label>Short Description</label>
														<input type="text" class="form-control"/>
													</div>
													
												</div>
											
											</div>
											
										</div>
										
									</div>
									
									<div class="food-menu-form-box clearfix">
									
										<div class="icon">
											<i class="fa fa-cutlery text-primary"></i>
											<span class="number-label">2</span>
										</div>
										
										<div class="image-upload">
											<div class="dropzone food-menu-image">
												<input name="file" type="file">
												<div class="dz-default dz-message"><span>Click or Drop<br />Images Here<br /><small class="font-italic text-muted font400 mt-5 block">2MB max file</small></span></div>
											</div>
										</div>
										
										<div class="food-memu-form">
										
											<div class="row gap-20">
											
												<div class="col-xss-12 col-xs-12 col-sm-9">
												
													<div class="form-group">
														<label>Title</label>
														<input type="text" class="form-control"/>
													</div>
													
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-3">
												
													<div class="form-group">
														<label>Price</label>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon">$</span>
														</div>
													</div>
													
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-12">
												
													<div class="form-group">
														<label>Short Description</label>
														<input type="text" class="form-control"/>
													</div>
													
												</div>
											
											</div>
											
										</div>
										
									</div>
									
									<div class="clearfix mt-15">
										<a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
										<span class="ml-5 font13 line-12 text-muted font-italic">You can add upto 10 menus</span>
									</div>
									
								</div>
								
								<div class="food-menu-form-wrapper">
								
									<h6 class="text-primary text-uppercase">Menu Category #2 <a href="#" class="pull-right"><i class="fa fa-minus-circle"></i></a></h6>
									
									<div class="form-group form-group-lg">

										<input type="text" class="form-control" placeholder="Ex: Breakfast"/>
										
									</div>
									
									<div class="food-menu-form-box clearfix">
									
										<div class="icon">
											<i class="fa fa-cutlery text-primary"></i>
											<span class="number-label">1</span>
										</div>
										
										<div class="image-upload">
											<div class="dropzone food-menu-image">
												<input name="file" type="file">
												<div class="dz-default dz-message"><span>Click or Drop<br />Images Here<br /><small class="font-italic text-muted font400 mt-5 block">2MB max file</small></span></div>
											</div>
										</div>
										
										<div class="food-memu-form">
										
											<div class="row gap-20">
											
												<div class="col-xss-12 col-xs-12 col-sm-9">
												
													<div class="form-group">
														<label>Title</label>
														<input type="text" class="form-control"/>
													</div>
													
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-3">
												
													<div class="form-group">
														<label>Price</label>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon">$</span>
														</div>
													</div>
													
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-12">
												
													<div class="form-group">
														<label>Short Description</label>
														<input type="text" class="form-control"/>
													</div>
													
												</div>
											
											</div>
											
										</div>
										
									</div>
									
									<div class="food-menu-form-box clearfix">
									
										<div class="icon">
											<i class="fa fa-cutlery text-primary"></i>
											<span class="number-label">2</span>
										</div>
										
										<div class="image-upload">
											<div class="dropzone food-menu-image">
												<input name="file" type="file">
												<div class="dz-default dz-message"><span>Click or Drop<br />Images Here<br /><small class="font-italic text-muted font400 mt-5 block">2MB max file</small></span></div>
											</div>
										</div>
										
										<div class="food-memu-form">
										
											<div class="row gap-20">
											
												<div class="col-xss-12 col-xs-12 col-sm-9">
												
													<div class="form-group">
														<label>Title</label>
														<input type="text" class="form-control"/>
													</div>
													
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-3">
												
													<div class="form-group">
														<label>Price</label>
														<div class="input-group">
															<input type="text" class="form-control">
															<span class="input-group-addon">$</span>
														</div>
													</div>
													
												</div>
												
												<div class="col-xss-12 col-xs-12 col-sm-12">
												
													<div class="form-group">
														<label>Short Description</label>
														<input type="text" class="form-control"/>
													</div>
													
												</div>
											
											</div>
											
										</div>
										
									</div>
									
									<div class="clearfix mt-15">
										<a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
										<span class="ml-5 font13 line-12 text-muted font-italic">You can add upto 10 menus</span>
									</div>
									
								</div>
								
							</div>
							
							<div class="text-center">
								<h6 class="text-primary text-uppercase mb-0"><a href="#"><i class="fa fa-plus font14"></i> Add more menu category</a></h6>
								<p>You can add upto 10 menu categories</p>
							</div>
							
							<div class="mt-30">
					
								<div class="checkbox-block font-icon-checkbox">
									<input id="term_accept-1" name="term_accept" type="checkbox" class="checkbox" />
									<label class="" for="term_accept-1">Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect. <a href="#" class="font700">Terms &amp; Conditions</a></label>
								</div>
								
								<a href="#" class="btn btn-primary mt-15">Submit</a>
								
							</div>
							
						</div>
						
					</div>

				</div>

			</div>
			
		</div>
                
                                <!-- JS for only submission page -->
<script type="text/javascript" src="{{url('/')}}/js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/dropzone.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/jquery.ui.timepicker.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{url('/')}}/js/infobox.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/customs-submit.js"></script>
@include('footer')