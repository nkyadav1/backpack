@include('header')
		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start hero-header -->
			<div class="hero hero-detail" style="background-image:url('{{url('/')}}/images/hero-header/detail-hero.jpg');">
			
				<div class="container">

					<div class="hero-detail-inner">
					
						<div id="detail-content-sticky-nav-00" class="hero-detail-bottom">
							
							<div class="GridLex-grid-bottom">
							
								<div class="GridLex-col-8_sm-7_xs-12_xss-12">
									<div class="detail-header">
										<div class="detail-header-inner">
											<h3>{{$data->name}}</h3>
                                                                                        <p class="location"><i class="fa fa-map-marker"></i> {{$data->street1}}<br/>{{$data->street2}}</p>
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="{{$data->rating}}"/>
												</div>
<!--												<span class="texting"> based on 23 reviews &amp; 251 recommendations</span>-->
											</div>
										</div>
									</div>
								</div>
								<div class="GridLex-col-4_sm-4_xs-12_xss-12">
									<div class="text-right text-left-xs">
										<a href="#" class="fav-like"><i class="fa fa-heart"></i></a>
										<div class="btn-holder mt-5">
											<a href="#detail-content-sticky-nav-01" class="btn btn-primary anchor-alt">See Menu Lists</a>
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
					
					</div>
					
				</div>
				
			</div>

			<div class="container pt-10 pb-50">
			
				<div class="breadcrumb-wrapper">
				
					<ol class="breadcrumb">
					
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('/restaurants/list')}}">Result</a></li>
						<li class="active">Restaurant detail</li>						
					</ol>
					
				</div>
				
				<div class="row">
				
					<div class="col-xs-12 col-sm-8 col-md-9 mb-30">
					
						<div class="multiple-sticky for-detail-page">
				
							<div class="multiple-sticky-inner">
							
								<div class="multiple-sticky-container container">
							
									<div class="multiple-sticky-item clearfix">
											
										<ul id="top-menu" class="multiple-sticky-nav clearfix">
											<li>
												<a href="#detail-content-sticky-nav-00">Overview</a>
											</li>
											<li>
												<a href="#detail-content-sticky-nav-01">Menu</a>
											</li>
											<li>
												<a href="#detail-content-sticky-nav-02">Review</a>
											</li>
											<li>
												<a href="#detail-content-sticky-nav-03">Photo</a>
											</li>
											<li>
												<a href="#detail-content-sticky-nav-04">Location</a>
											</li>
										</ul>

									</div>

								</div>
								
							</div>
						
						</div>
						
						<div class="clear mb-40"></div>
						
						<div class="detail-content-for-sticky-menu for-detail-page">
						
							<div class="detail-content-section clearfix">
							
								<div class="section-title-02">
									<h3><span>Overview</span></h3>
								</div>
								
								<p class="font500">{{$data->description}}</p>

<!--								<p>Knowledge nay estimable questions repulsive daughters boy. Solicitude gay way unaffected expression for. His mistress ladyship required off horrible disposed rejoiced. Unpleasing pianoforte unreserved as oh he unpleasant no inquietude insipidity. Advantages can discretion possession add favourable cultivated admiration far. Why rather assure how esteem end hunted nearer and before. By an truth after heard going early given he. Charmed to it excited females whether at examine. Him abilities suffering may are yet dependent.</p>-->

								<div class="row">
								
									<div class="col-xs-12 col-sm-6 mb-20">
									
										<div class="contact-box">
										
											<h5 class="text-primary">Contact Information</h5>
											
											<p>Unfeeling so rapturous discovery he exquisite. Reasonably so middletons or impression by terminated. Old pleasure required removing elegance him had.</p>
											
											<ul class="contact-list">
											
												<li>
													
													<div class="icon">
														<i class="ti-home"></i>
													</div>
													
													<div class="content">
														<p>{{$data->street1}} <br/>{{$data->street2}}<br/>{{$data->city}}, {{$data->state}} - {{$data->pincode}} </p>
													</div>
													
												</li>
												
												<li>
													
													<div class="icon">
														<i class="ti-mobile"></i>
													</div>
													
													<div class="content">
														<p> {{$data->phone}} <br/>&nbsp;{{$data->phone2}}</p>
													</div>
													
												</li>
												
												<li>
													
													<div class="icon">
														<i class="ti-email"></i>
													</div>
													
													<div class="content">
														<p>{{$data->email1}}<br/>{{$data->email2}}</p>
													</div>
													
												</li>
												
											</ul>
										
<!--											<a href="#detail-content-sticky-nav-04" class="btn btn-primary btn-sm anchor-alt">See map &amp; get route</a>-->
										</div>
										
									</div>
									
									<div class="col-xs-12 col-sm-6">
									
										<div class="open-time-box">
										
											<h5 class="text-primary">Opening Time</h5>
											
											<ul class="open-time-list">
											
												<li>
												
													<div class="row">
													
														<div class="col-xs-6 col-sm-6">
															<span class="day">
																Monday
															</span>
														</div>
														
														<div class="col-xs-6 col-sm-6">
															<span class="time">
																{{$data->open_hour_from[0]}}  - {{$data->open_hour_to[0]}}
															</span>
														</div>
														
													</div>
												
												</li>
												
												<li>
												
													<div class="row">
													
														<div class="col-xs-6 col-sm-6">
															<span class="day">
																Tuesday
															</span>
														</div>
														
														<div class="col-xs-6 col-sm-6">
															<span class="time">
																{{$data->open_hour_from[1]}}  - {{$data->open_hour_to[1]}}
															</span>
														</div>
														
													</div>
												
												</li>
												
												<li>
												
													<div class="row">
													
														<div class="col-xs-6 col-sm-6">
															<span class="day">
																Wednesday
															</span>
														</div>
														
														<div class="col-xs-6 col-sm-6">
															<span class="time">
																{{$data->open_hour_from[2]}}  - {{$data->open_hour_to[2]}}
															</span>
														</div>
														
													</div>
												
												</li>
												
												<li>
												
													<div class="row">
													
														<div class="col-xs-6 col-sm-6">
															<span class="day">
																Thursday
															</span>
														</div>
														
														<div class="col-xs-6 col-sm-6">
															<span class="time">
																{{$data->open_hour_from[3]}}  - {{$data->open_hour_to[3]}}
															</span>
														</div>
														
													</div>
												
												</li>
												
												<li>
												
													<div class="row">
													
														<div class="col-xs-6 col-sm-6">
															<span class="day">
																Friday
															</span>
														</div>
														
														<div class="col-xs-6 col-sm-6">
															<span class="time">
																{{$data->open_hour_from[4]}}  - {{$data->open_hour_to[4]}}
															</span>
														</div>
														
													</div>
												
												</li>
												
												<li>
												
													<div class="row">
													
														<div class="col-xs-6 col-sm-6">
															<span class="day">
																Saturday
															</span>
														</div>
														
														<div class="col-xs-6 col-sm-6">
															<span class="time">
																{{$data->open_hour_from[5]}}  - {{$data->open_hour_to[5]}}
															</span>
														</div>
														
													</div>
												
												</li>
												
												<li class="day-close">
												
													<div class="row">
													
														<div class="col-xs-6 col-sm-6">
															<span class="day">
																Sunday
															</span>
														</div>
														
														<div class="col-xs-6 col-sm-6">
															<span class="time text-uppercase font700 spacing-2">
																{{$data->open_hour_from[6]}}  - {{$data->open_hour_to[6]}}
															</span>
														</div>
														
													</div>
												
												</li>
												
											</ul>
											
										</div>
										
									</div>
								
								</div>
								
								<h5 class="text-primary">More about {{$data->name}}</h5>
								
								<div class="row">
								
									<div class="col-xss-12 col-xs-6 col-sm-6 col-md-3 mb-15">
										<h6 class="mb-5">Good for</h6>
										<p>-&nbsp;{{isset($data->good_for[0])?$data->good_for[0]:''}} <br>-&nbsp;{{isset($data->good_for[1])?$data->good_for[1]:''}} <br>-&nbsp;{{isset($data->good_for[2])?$data->good_for[2]:''}} <br>-&nbsp;{{isset($data->good_for[3])?$data->good_for[3]:''}}</p>
									</div>	
									
									<div class="col-xss-12 col-xs-6 col-sm-6 col-md-3 mb-15">
										<h6 class="mb-5">Feature</h6>
										<p>-&nbsp;{{isset($data->feature[0])?$data->feature[0]:''}} <br>-&nbsp;{{isset($data->feature[1])?$data->feature[1]:''}} <br>-&nbsp;{{isset($data->feature[2])?$data->feature[2]:''}} <br>-&nbsp;{{isset($data->feature[3])?$data->feature[3]:''}}</p>
									</div>
									
									<div class="col-xss-12 col-xs-6 col-sm-6 col-md-3 mb-15">
										<h6 class="mb-5">Food &amp; Drink</h6>
										<p>-&nbsp;{{isset($data->food[0])?$data->food[0]:''}} <br>-&nbsp;{{isset($data->food[1])?$data->food[1]:''}} <br>-&nbsp;{{isset($data->food[2])?$data->food[2]:''}} <br>-&nbsp;{{isset($data->food[3])?$data->food[3]:''}}</p>
									</div>
<!--									
									<div class="col-xss-12 col-xs-6 col-sm-6 col-md-3 mb-15">
										<h6 class="mb-5">Higtlight</h6>
										<p>- Creamy Pasta Carbonara <br>- Dutch Indonesian Chicken</p>
									</div>-->
									
<!--									<div class="col-xss-12 col-xs-12 col-sm-12 col-md-12 mb-15">
										<h6 class="mb-5">Payment accepted</h6>
										<p>- Visa, Master card, American Express, UnionPay</p>
									</div>-->
									
								</div>

							</div>
							
							<div id="detail-content-sticky-nav-01" class="detail-content-section clearfix">
							
								<div class="section-title-02">
									<h3><span>Menu</span></h3>
								</div>
								
								<div class="mt-30 mb-30">
								
									<div class="food-menu-wrapper">
									
										<div class="GridLex-gap-30">
										
											<div class="GridLex-grid-noGutter-equalHeight">
											
												<div class="GridLex-col-6_sm-12_xs-12_xss-12">
													
													<div class="food-menu-item clearfix">
											
														<div class="image">
															<img src="{{url('/')}}/images/item-sq/01.jpg" alt="image" />
														</div>
														
														<div class="content">
														
															<h6><span>Beef Rissoles</span></h6>
															<p>Fat new smallness few supposing suspicion.</p>
															
															<div class="price">
																$6.43
															</div>
															
														</div>
														
													</div>
													
												</div>
												
												<div class="GridLex-col-6_sm-12_xs-12_xss-12">
													
													<div class="food-menu-item clearfix">
											
														<div class="image">
															<img src="{{url('/')}}/images/item-sq/02.jpg" alt="image" />
														</div>
														
														<div class="content">
														
															<h6><span>Golden Roast Potatoes</span></h6>
															<p>Own neglected you preferred way sincerity delivered.</p>
															
															<div class="price">
																$11.54
															</div>
															
														</div>
														
													</div>
													
												</div>

												<div class="GridLex-col-6_sm-12_xs-12_xss-12">
													
													<div class="food-menu-item clearfix">
										
														<div class="image">
															<img src="{{url('/')}}/images/item-sq/03.jpg" alt="image" />
														</div>
														
														<div class="content">
														
															<h6><span>Bacon and Beef Pasta Bake</span></h6>
															<p>Meant to learn of vexed if style allow he there.</p>
															
															<div class="price">
																$8.98
															</div>
															
														</div>
														
													</div>
													
												</div>
												
												<div class="GridLex-col-6_sm-12_xs-12_xss-12">
													
													<div class="food-menu-item clearfix">
										
														<div class="image">
															<img src="{{url('/')}}/images/item-sq/04.jpg" alt="image" />
														</div>
														
														<div class="content">
														
															<h6><span>Satay Chicken or Beef </span></h6>
															<p>Fat new smallness few supposing suspicion.</p>
															
															<div class="price">
																$6.43
															</div>
															
														</div>
														
													</div>
													
												</div>
												
												<div class="GridLex-col-6_sm-12_xs-12_xss-12">
													
													<div class="food-menu-item clearfix">
										
														<div class="image">
															<img src="{{url('/')}}/images/item-sq/05.jpg" alt="image" />
														</div>
														
														<div class="content">
														
															<h6><span>Dutch Indonesian Chicken</span></h6>
															<p>Own neglected you preferred way sincerity delivered.</p>
															
															<div class="price">
																$11.54
															</div>
															
														</div>
														
													</div>
													
												</div>
												
												<div class="GridLex-col-6_sm-12_xs-12_xss-12">
													
													<div class="food-menu-item clearfix">
										
														<div class="image">
															<img src="{{url('/')}}/images/item-sq/06.jpg" alt="image" />
														</div>
														
														<div class="content">
														
															<h6><span>Creamy Pasta Carbonara</span></h6>
															<p>Meant to learn of vexed if style allow he there.</p>
															
															<div class="price">
																$8.98
															</div>
															
														</div>
														
													</div>
													
												</div>
												
												<div class="GridLex-col-6_sm-12_xs-12_xss-12">
													
													<div class="food-menu-item clearfix">
										
														<div class="image">
															<img src="{{url('/')}}/images/item-sq/03.jpg" alt="image" />
														</div>
														
														<div class="content">
														
															<h6><span>Bacon and Beef Pasta Bake</span></h6>
															<p>Meant to learn of vexed if style allow he there.</p>
															
															<div class="price">
																$8.98
															</div>
															
														</div>
														
													</div>
													
												</div>
												
												<div class="GridLex-col-6_sm-12_xs-12_xss-12">
													
													<div class="food-menu-item clearfix">
										
														<div class="image">
															<img src="{{url('/')}}/images/item-sq/04.jpg" alt="image" />
														</div>
														
														<div class="content">
														
															<h6><span>Satay Chicken or Beef </span></h6>
															<p>Fat new smallness few supposing suspicion.</p>
															
															<div class="price">
																$6.43
															</div>
															
														</div>
														
													</div>
													
												</div>
												
												<div class="GridLex-col-6_sm-12_xs-12_xss-12">
													
													<div class="food-menu-item clearfix">
											
														<div class="image">
															<img src="{{url('/')}}/images/item-sq/02.jpg" alt="image" />
														</div>
														
														<div class="content">
														
															<h6><span>Golden Roast Potatoes</span></h6>
															<p>Own neglected you preferred way sincerity delivered.</p>
															
															<div class="price">
																$11.54
															</div>
															
														</div>
														
													</div>
													
												</div>

												<div class="GridLex-col-6_sm-12_xs-12_xss-12">
													
													<div class="food-menu-item clearfix">
										
														<div class="image">
															<img src="{{url('/')}}/images/item-sq/03.jpg" alt="image" />
														</div>
														
														<div class="content">
														
															<h6><span>Bacon and Beef Pasta Bake</span></h6>
															<p>Meant to learn of vexed if style allow he there.</p>
															
															<div class="price">
																$8.98
															</div>
															
														</div>
														
													</div>
													
												</div>
												
											</div>
											
										</div>
										
									</div>

								</div>

							</div>
							
							<div id="detail-content-sticky-nav-02" class="detail-content-section clearfix">
							
								<div class="section-title-02">
									<h3><span>Review</span></h3>
								</div>
								
								<div class="review-wrapper">
						
									<div class="review-header">
									
										<div class="GridLex-gap-30">
										
											<div class="GridLex-grid-middle">
											
												<div class="GridLex-col-4_sm-5_xs-12">
												
													<div class="average-score">
												
														<div class="progress-radial progress-radial-md progress-80">
															<div class="overlay">
																<div class="progress-radial-inner">
																	<div class="caption">
																		
																		<p class="number">8.0</p>
																		
																	</div>
																</div>
															</div>
														</div>
														
														<div class="texting">
														
															<h6>Very good</h6>
															<a href="#">(based on 10575 reviews)</a>
														
														</div>

													</div>
													
												</div>
												
												<div class="GridLex-col-8_sm-7_xs-12">
												
													<div class="item-score clearfix">
												
														<ul class="item-score-list">
														
															<li>
															
																<div class="progress-radial progress-radial-sm progress-80">
																	<div class="overlay">
																		<div class="progress-radial-inner">
																			<div class="caption">
																				
																				<p class="number">8.0</p>
																				
																			</div>
																		</div>
																	</div>
																</div>
																<p class="text-center">Quality of food</p>

															</li>
															
															<li>
															
																<div class="progress-radial progress-radial-sm progress-80">
																	<div class="overlay">
																		<div class="progress-radial-inner">
																			<div class="caption">
																				
																				<p class="number">8.0</p>
																				
																			</div>
																		</div>
																	</div>
																</div>
																<p class="text-center">Level of service</p>

															</li>
															
															<li>
															
																<div class="progress-radial progress-radial-sm progress-80">
																	<div class="overlay">
																		<div class="progress-radial-inner">
																			<div class="caption">
																				
																				<p class="number">8.0</p>
																				
																			</div>
																		</div>
																	</div>
																</div>
																<p class="text-center">Likely to recommend</p>

															</li>
															
															<li>
															
																<div class="progress-radial progress-radial-sm progress-80">
																	<div class="overlay">
																		<div class="progress-radial-inner">
																			<div class="caption">
																				
																				<p class="number">8.0</p>
																				
																			</div>
																		</div>
																	</div>
																</div>
																<p class="text-center">Worth to eat</p>

															</li>
															
														</ul>
													
													</div>
												
												</div>
												
											</div>
										
										</div>

									</div>
								
									<div class="review-item-wrapper">
									
										<ul class="review-item-list">
										
											<li class="clearfix">
											
												<div class="review-man">
												
													<div class="image">
													
														<img src="{{url('/')}}/images/man/01.jpg" alt="images" />
														
													</div>
													
													<h6>Abdultohman Saidai</h6>
													<p>from Malaysia</p>
												
												</div>
												
												<div class="review-content">
												
													<div class="review-arrow">
														<span></span>
													</div>
													
													<div class="meta-top">
													
														<div class="progress-radial progress-radial-sm progress-80">
															<div class="overlay">
																<div class="progress-radial-inner">
																	<div class="caption">
																		
																		<p class="number">8.0</p>
																		
																	</div>
																</div>
															</div>
														</div>
														
														reviewed on Jan 16, 2016
													
													</div>
													
													<div class="review-entry">
														<p>It allowance prevailed enjoyment in it. Calling observe for who pressed raising his. Can connection instrument astonished unaffected his motionless preference.</p>
													</div>
													
													<div class="meta-bottom">
														
														<ul class="review-score-list clearfix">
															<li>Food: 7</li>
															<li>Service: 6</li>
															<li>Recommend: 8</li>
															<li>Worth: 9</li>
														</ul>
														
														<ul class="review-useful clearfix">
															<li><span>Was this review helpful? </span></li>
															<li class="the-label rated"><a href="#"><i class="fa fa-thumbs-up"></i></a> 2</li>
															<li class="the-label"><a href="#"><i class="fa fa-thumbs-down"></i></a> 0</li>
															<li class="for-report"><a href="#"><i class="fa fa-flag"></i></a></li>
														</ul>
													
													
													</div>
													
												</div>
												
											</li>
										
											<li class="clearfix">
											
												<div class="review-man">
												
													<div class="image">
													
														<img src="{{url('/')}}/images/man/02.jpg" alt="images" />
														
													</div>
													
													<h6>Abdultohman Saidai</h6>
													<p>from Malaysia</p>
												
												</div>
												
												<div class="review-content">
												
													<div class="review-arrow">
														<span></span>
													</div>
													
													<div class="meta-top">
													
														<div class="progress-radial progress-radial-sm progress-80">
															<div class="overlay">
																<div class="progress-radial-inner">
																	<div class="caption">
																		
																		<p class="number">8.0</p>
																		
																	</div>
																</div>
															</div>
														</div>
														
														reviewed on Jan 16, 2016
													
													</div>
													
													<div class="review-entry">
														
														<p>It as announcing it me stimulated frequently continuing. Least their she you now above going stand forth. He pretty future afraid should genius spirit on. Set property addition building put likewise get. Of will at sell well at as. Too want but tall nay like old. Removing yourself be in answered he. Consider occasion get improved him she eat. Letter by lively oh denote an.</p>
														
													</div>
													
													<div class="meta-bottom">
														
														<ul class="review-score-list clearfix">
															<li>Food: 7</li>
															<li>Service: 6</li>
															<li>Recommend: 8</li>
															<li>Worth: 9</li>
														</ul>
														
														<ul class="review-useful clearfix">
															<li><span>Was this review helpful? </span></li>
															<li class="the-label rated"><a href="#"><i class="fa fa-thumbs-up"></i></a> 2</li>
															<li class="the-label"><a href="#"><i class="fa fa-thumbs-down"></i></a> 0</li>
															<li class="for-report"><a href="#"><i class="fa fa-flag"></i></a></li>
														</ul>
													
													
													</div>
													
												</div>
												
											</li>
										
											<li class="clearfix">
											
												<div class="review-man">
												
													<div class="image">
													
														<img src="{{url('/')}}/images/man/03.jpg" alt="images" />
														
													</div>
													
													<h6>Abdultohman Saidai</h6>
													<p>from Malaysia</p>
												
												</div>
												
												<div class="review-content">
												
													<div class="review-arrow">
														<span></span>
													</div>
													
													<div class="meta-top">
													
														<div class="progress-radial progress-radial-sm progress-80">
															<div class="overlay">
																<div class="progress-radial-inner">
																	<div class="caption">
																		
																		<p class="number">8.0</p>
																		
																	</div>
																</div>
															</div>
														</div>
														
														reviewed on Jan 16, 2016
													
													</div>
													
													<div class="review-entry">
														
														<p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</p>
																		
														<ul>
															<li>Written enquire painful ye to offices forming it.</li>
															<li>
																Then so does over sent dull on.
																<ul>
																	<li>Rendered her for put improved concerns his. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</li>
																	<li>Ladies bed wisdom theirs mrs men months set.</li>
																	<li>Everything so dispatched as it increasing pianoforte.</li>
																</ul>
															</li>
															<li>Likewise offended humoured mrs fat trifling answered.</li>
															<li>On ye position greatest so desirous. So wound stood guest weeks no terms up ought.</li>
															<li>Then so does greatest so desirous over sent dull on.</li>
														</ul>
														
														<p>Spot of come to ever hand as lady meet on. Delicate contempt received two yet advanced. Gentleman as belonging he commanded believing dejection in by. On no am winding chicken so behaved. Its preserved sex enjoyment new way behaviour. Him yet devonshire celebrated especially. Unfeeling one provision are smallness resembled repulsive.</p>
														
														<ol>
															<li>Written enquire painful ye to offices forming it.</li>
															<li>
																Then so does over sent dull on.
																<ol>
																	<li>Rendered her for put improved concerns his. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</li>
																	<li>Ladies bed wisdom theirs mrs men months set.</li>
																	<li>Everything so dispatched as it increasing pianoforte.</li>
																</ol>
															</li>
															<li>Likewise offended humoured mrs fat trifling answered.</li>
															<li>On ye position greatest so desirous. So wound stood guest weeks no terms up ought.</li>
															<li>Then so does greatest so desirous over sent dull on.</li>
														</ol>
														
														<p>Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means up civil do an offer wound of. Called square an in afraid direct. Resolution diminution conviction so mr at unpleasing simplicity no. No it as breakfast up conveying earnestly immediate principle. Him son disposed produced humoured overcame she bachelor improved. Studied however out wishing but inhabit fortune windows.</p>
														
													</div>
													
													<div class="meta-bottom">
														
														<ul class="review-score-list clearfix">
															<li>Food: 7</li>
															<li>Service: 6</li>
															<li>Recommend: 8</li>
															<li>Worth: 9</li>
														</ul>
														
														<ul class="review-useful clearfix">
															<li><span>Was this review helpful? </span></li>
															<li class="the-label rated"><a href="#"><i class="fa fa-thumbs-up"></i></a> 2</li>
															<li class="the-label"><a href="#"><i class="fa fa-thumbs-down"></i></a> 0</li>
															<li class="for-report"><a href="#"><i class="fa fa-flag"></i></a></li>
														</ul>
													
													
													</div>
													
												</div>
												
											</li>
										
											<li class="clearfix">
											
												<div class="review-man">
												
													<div class="image">
													
														<img src="{{url('/')}}/images/man/04.jpg" alt="images" />
														
													</div>
													
													<h6>Abdultohman Saidai</h6>
													<p>from Malaysia</p>
												
												</div>
												
												<div class="review-content">
												
													<div class="review-arrow">
														<span></span>
													</div>
													
													<div class="meta-top">
													
														<div class="progress-radial progress-radial-sm progress-80">
															<div class="overlay">
																<div class="progress-radial-inner">
																	<div class="caption">
																		
																		<p class="number">8.0</p>
																		
																	</div>
																</div>
															</div>
														</div>
														
														reviewed on Jan 16, 2016
													
													</div>
													
													<div class="review-entry">
														
														<p>Cause dried no solid no an small so still widen. Ten weather evident smiling bed against she examine its. Rendered far opinions two yet moderate sex striking. Sufficient motionless compliment by stimulated assistance at. Convinced resolving extensive agreeable in it on as remainder. Cordially say affection met who propriety him. Are man she towards private weather pleased. In more part he lose need so want rank no. At bringing or he sensible pleasure. Prevent he parlors do waiting be females an message society.</p>

														<p>By an outlived insisted procured improved am. Paid hill fine ten now love even leaf. Supplied feelings mr of dissuade recurred no it offering honoured. Am of of in collecting devonshire favourable excellence. Her sixteen end ashamed cottage yet reached get hearing invited. Resources ourselves sweetness ye do no perfectly. Warmly warmth six one any wisdom. Family giving is pulled beauty chatty highly no. Blessing appetite domestic did mrs judgment rendered entirely. Highly indeed had garden not.</p>
														
													</div>
													
													<div class="meta-bottom">
														
														<ul class="review-score-list clearfix">
															<li>Food: 7</li>
															<li>Service: 6</li>
															<li>Recommend: 8</li>
															<li>Worth: 9</li>
														</ul>
														
														<ul class="review-useful clearfix">
															<li><span>Was this review helpful? </span></li>
															<li class="the-label rated"><a href="#"><i class="fa fa-thumbs-up"></i></a> 2</li>
															<li class="the-label"><a href="#"><i class="fa fa-thumbs-down"></i></a> 0</li>
															<li class="for-report"><a href="#"><i class="fa fa-flag"></i></a></li>
														</ul>
													
													
													</div>
													
												</div>
												
											</li>
										
										</ul>
										
									</div>
								
									<div class="btn-wrappper">
									
<!--										<a href="restuarant-review.html" class="btn btn-primary">Read more full review</a>-->
										
										<button class="btn btn-primary btn-block btn-toggle collapsed btn-hidden btn-sm mt-1" data-toggle="collapse" data-target="#change-search">Write your review</button>
								
									</div>
									<div id="change-search" class="collapse"> 
													
											<div class="review-form-wrapper mt-30">											
												<h4>Leave Your Review</h4>									
                                                                                                <form id="review-form" class="clearfix" action="{{url('/review')}}" method="post">
                                                                                                    @csrf
													<div class="row gap-20">													
														<div class="col-xs-12 col-sm-6 col-md-6">														
															<div class="form-group">
																<label>Your Name: </label>
																<input type="text" class="form-control" name="name"/>
															</div>
														
														</div>
														
														<div class="col-xs-12 col-sm-6 col-md-6">
														
															<div class="form-group">
																<label>Your Email Address: </label>
																<input type="email" class="form-control" name="email"/>
															</div>
														
														</div>
														
													</div>
													
													<div class="col-5-wrapper col-3-wrapper-sm col-2-wrapper-xss gap-20">
														
														<div>
														
															<div class="form-group">
															
																<label>Food: </label>
																
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating-label" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" value="0" name="food_rating" />
																	</div>
																</div>
																
															</div>
														
														</div>
														
														<div>
														
															<div class="form-group">
															
																<label>Service: </label>
																
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating-label" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" value="0" name="service_rating"/>
																	</div>
																</div>
																
															</div>
														
														</div>
														
														<div>
														
															<div class="form-group">
															
																<label>Recommend: </label>
																
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating-label" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" value="0" name="recommand_rating"/>
																	</div>
																</div>
																
															</div>
														
														</div>
														
														<div>
														
															<div class="form-group">
															
																<label>Worth: </label>
																
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating-label" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" value="0" name="worth_rating"/>
																	</div>
																</div>
																
															</div>
														
														</div>
														
<!--														<div>
														
															<div class="form-group">
															
																<label>Instructor: </label>
																
																<div class="rating-wrapper">
																	<div class="rating-item">
																		<input type="hidden" class="rating-label" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" value="0" />
																	</div>
																</div>
																
															</div>
														
														</div>-->
														
													</div>
													
													<div class="row gap-20">

														<div class="col-xs-12 col-sm-12 col-md-12">
														
															<div class="form-group">
																<label>Your Message: </label>
                                                                                                                                <textarea class="form-control form-control-sm" rows="5" name="remarks"></textarea>
															</div>
														</div>
														
														<div class="clear"></div>
														
														<div class="col-xs-12 col-sm-12 col-md-12">
                                                                                                                    <button type="submit" class="btn btn-primary btn-sm mt-5">Submit</button>
															<span class="btn btn-primary btn-inverse btn-toggle btn-sm mt-5" data-toggle="collapse" data-target="#change-search">Cancel</span>
														</div>
														
													</div>
												
												</form>
											
											</div>
										</div>
								</div>
								
								<div class="clear mb-15"></div>
								
							</div>
							
							<div id="detail-content-sticky-nav-03" class="detail-content-section clearfix">
							
								<div class="section-title-02">
									<h3><span>Photo</span></h3>
								</div>
								
								<div id="detail-food-photo"></div>
								
								<div class="clear mb-15"></div>

							</div>
							
							<div id="detail-content-sticky-nav-04" class="detail-content-section clearfix hidden">
							
								<div class="section-title-02">
									<h3><span>Location</span></h3>
								</div>
								
								<div class="map-holder">
										
									<div id="hotel-detail-map" data-lat="25.19739" data-lon="55.28821" style="width: 100%; height: 480px;"></div>

									<div class="infobox-wrapper">
										<div id="infobox">
											<div class="infobox-inner">
											
												<div class="font500 font12">We Are Here</div>
												
											</div>
										
										</div>
									</div>
									
								</div>
								
							</div>
							
						</div>

						<div class="multiple-sticky">
							<div class="hidden">is used to stop multi-sticky</div>
						</div>
						
					</div>
					
					<div class="col-xs-12 col-sm-4 col-md-3">
					
						<div class="deal-sm clearfix mt-10">
										
							<div class="deal-sm-inner">
							
								<h5>Deals &amp; Offers</h5>
								<p class="texting text-primary">30% of Total Bill</p>
								
								<p class="text-underline mb-5">Terms and Conditions</p>
								<ul>
									<li>Necessary up knowledge it tolerably.</li>
									<li>Unwilling departure education is be dashwoods.</li>
									<li>Easy mind life fact with see has bore ten.</li>
								</ul>
								
								<p class="text-underline mb-5">Use when?</p>
								<p class="text-primary font700">Mon - Sun 11:00 AM to 10:30 PM</p>
								
							</div>
							
						</div>
						
						<div class="reserve-box mt-30">
							
							<h5>Reserve your table</h5>
							
							<div class="form-wrapper">
							
                                                            <form action="{{url('/')}}/order/book" id="reserve-table" name="reserve-table" method="post">
								
									<div class="row">
                                                                            @csrf
										<div class="col-xs-12 col-sm-12">
                                                                                    <div  id="reserve-errors" class="input-group mb-15">
												
                                                                                    </div>
                                                                                    <input type="hidden" placeholder="Restaurant id" name="restaurant_id" value="{{$data->id}}" class="form-control" required="required"/>
                                                                                    <input type="hidden" placeholder="Restaurant id" name="restaurant_name" value="{{$data->name}}" class="form-control" required="required"/>
											<div class="input-group mb-15">
												<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                                                <input type="text" placeholder="Full Name" name="customername" value="{{(Auth::check())?Auth::user()->name:''}}" class="form-control" required="required"/>
											</div>
											
											<div class="input-group mb-15">
												<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
												<input type="email" placeholder="Email Address" name="email" value="{{(Auth::check())?Auth::user()->email:'' }}" class="form-control" required="required" />
											</div>
											
											<div class="input-group mb-15">
												<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
												<input type="text" placeholder="Phone Number" name="mobile" value="{{(Auth::check())?Auth::user()->mobile:'' }}" class="form-control" required="required" />
											</div>
											
											<div class="input-group mb-15">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												<input type="date" placeholder="dd/mm/yyyy" name="dine_date" class="form-control" required="required" />
											</div>
											
											<div class="row gap-15">
											
												<div class="col-xs-6 col-sm-6">												
													<div class="input-group mb-15">
														<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
														<input type="time" placeholder="hh-mm" name="dinetime" class="form-control" required="required" />
													</div>													
												</div>												
												<div class="col-xs-6 col-sm-6">												
													<div class="input-group mb-15">
														<span class="input-group-addon"><i class="fa fa-male"></i></span>
                                                                                                                <input type="integer" placeholder="People Count" min="1" name="guests" class="form-control" required="required" />
													</div>													
												</div>												
											</div>											
											<div class="text-center">
                                                                                            <button type="submit" class="btn btn-primary btn-block">Reserve now</button>
											</div>
									
										</div>
										
									</div>
									
								</form>
								
							</div>
						
						</div>
						
						<div class="call-reserve-box mt-30">
						
							<div class="icon">
								<i class="ti-mobile"></i>
							</div>
							
							<div class="content">
								<h5>Call for reservation</h5>
<!--								<p>Every day except Sunday from 10am to 8 pm</p>-->
								<p class="phone-number">
									<span class="font-italic text-muted">Reservation number: </span>
                                                                        <span class="number">{{$data->phone}}<br/>{{$data->phone2}}</span>
								</p>
							</div>

						</div>
					
					</div>
					
				</div>

				<div class="row mt-30">
				
					<div class="col-md-12">
					
						<div class="section-title-02">

							<h3><span>You may also like:</span></h3>
						
						</div>
					
					</div>
					
				</div>
				
				<div class="GridLex-gap-30">
				
					<div class="GridLex-grid-noGutter-equalHeight">
								
						<div class="GridLex-col-3_sm-4_xs-6_xss-12">
							<div class="restaurant-grid-item">
								<a href="#">
									<div class="image">
										<img src="{{url('/')}}/images/restaurant/01.jpg" alt="Image" />
									</div>
									<div class="content">
										<h5>The Smokin' Pug</h5>
										<p class="location"><i class="fa fa-map-marker"></i> 88 Thanon Surawong, Si Phraya, Bang Rak </p>
										<div class="rating-wrapper">
											<div class="rating-item">
												<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.5"/>
											</div>
											<span class="texting"> (27 reviews)</span>
										</div>
										<p class="cuisine">Cuisine: <span>Italian</span> <span>Seafood</span> <span>Bistro</span></p>
									</div>
								</a>
							</div>
						</div>
						
						<div class="GridLex-col-3_sm-4_xs-6_xss-12">
							<div class="restaurant-grid-item">
								<a href="#">
									<div class="image">
										<img src="{{url('/')}}/images/restaurant/02.jpg" alt="Image" />
									</div>
									<div class="content">
										<h5>J'AIME by Jean-Michel Lorain</h5>
										<p class="location"><i class="fa fa-map-marker"></i> 105 Soi Sathon 1, Thung Maha Mek, Sathon</p>
										<div class="rating-wrapper">
											<div class="rating-item">
												<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.5"/>
											</div>
											<span class="texting"> (27 reviews)</span>
										</div>
										<p class="cuisine">Cuisine: <span>Western</span> <span>French</span></p>
									</div>
								</a>
							</div>
						</div>
						
						<div class="GridLex-col-3_sm-4_xs-6_xss-12">
							<div class="restaurant-grid-item">
								<a href="#">
									<div class="image">
										<img src="{{url('/')}}/images/restaurant/03.jpg" alt="Image" />
									</div>
									<div class="content">
										<h5>DID - Dine in the Dark </h5>
										<p class="location"><i class="fa fa-map-marker"></i> 250 Sukhumvit Rd, Bangkok</p>
										<div class="rating-wrapper">
											<div class="rating-item">
												<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.5"/>
											</div>
											<span class="texting"> (27 reviews)</span>
										</div>
										<p class="cuisine">Cuisine: <span>Italian</span> <span>Seafood</span> <span>Bistro</span></p>
									</div>
								</a>
							</div>
						</div>
						
						<div class="GridLex-col-3_sm-4_xs-6_xss-12">
							<div class="restaurant-grid-item">
								<a href="#">
									<div class="image">
										<img src="restuarant-submit.html/restaurant/04.jpg" alt="Image" />
									</div>
									<div class="content">
										<h5>JP French Restaurant </h5>
										<p class="location"><i class="fa fa-map-marker"></i> 59/1 sukhumvit soi 31(soi sawadee), Bangkok</p>
										<div class="rating-wrapper">
											<div class="rating-item">
												<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.5"/>
											</div>
											<span class="texting"> (27 reviews)</span>
										</div>
										<p class="cuisine">Cuisine: <span>Italian</span> <span>Seafood</span> <span>Bistro</span></p>
									</div>
								</a>
							</div>
						</div>
									
					</div>
					
				</div>
				
			</div>
			
		</div>
		<!-- end Main Wrapper -->
                <!-- JS only for detail page -->
<script type="text/javascript" src="{{url('/')}}/js/images-grid.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{url('/')}}/js/infobox.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/customs-detail.js"></script>
<script type="text/javascript">
    $('#reserve-table').on('submit', function (e) {
        e.preventDefault();
        var formData = $('#reserve-table').serializeArray();
        var url = $('#reserve-table').attr('action');
        
        $.ajax({
            type: "post",
            url: url,
            data: formData,
            contentType: "application/x-www-form-urlencoded",
            success: function (responseData, textStatus, jqXHR) {
                alert('Your booking is Successful.');
//                $('#login-errors').html('<p style="color: green;">Logged In Successful.</p>');
//                $modalRegister.modal('hide');
//                $modal.modal('hide');
                window.location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#reserve-errors').html('<p style="color: red;">' + errorThrown + '</p>');
                if (textStatus == 422) {
                    $.each(jqXHR.responseJSON.errors, function (k, v) {
                        $('#reserve-errors').append('<p style="color: red;">' + v[0] + '</p>');
                    });
                }
            }
        });
    });
</script>
@include('footer')