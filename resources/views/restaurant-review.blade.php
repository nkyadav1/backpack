@include('header')		
		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">
		
			<!-- start hero-header -->
			<div class="hero hero-sm" style="background-image:url('images/hero-header/02.jpg');">
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
						<li><a href="#">Result</a></li>
						<li><a href="#">Restuarant</a></li>
						<li class="active">Review for J'AIME by Jean-Michel Lorain</li>
					</ol>
				</div>
						
				<div class="row mt-40">
				
					<div class="col-sm-4 col-md-3 mb-30">
					
						<div class="section-title-02 mb-20">
							<h4><span>Review for:</span></h4>
						</div>
						
						<div class="restaurant-grid-item bg-white">
							<a href="restaurant-detail.html">
								<div class="image">
									<img src="images/restaurant/02.jpg" alt="Image" />
								</div>
								<div class="content">
									<h5>J'AIME by Jean-Michel Lorain</h5>
									<p class="location mb-0"><i class="fa fa-map-marker"></i> 105 Soi Sathon 1, Thung Maha Mek, Sathon</p>
								</div>
							</a>
							
							<a href="restaurant-detail.html" class="btn btn-primary btn-sm btn-block mt-10"><i class="fa fa-arrow-left"></i> Back to detail</a>
							
						</div>
						
						<div class="clear mb-40"></div>
						
						<div class="section-title-02 hidden-xs">
							<h4><span>Nearby Restuarant:</span></h4>
						</div>
						
						<div class="sidebar-module clearfix mb-30 hidden-xs">
						
							<div class="restaurant-sm-wrapper">

								<div class="restaurant-sm-item clearfix">
									<a href="#">
										<div class="image">
											<img src="images/restaurant/03.jpg" alt="Image" />
										</div>
										<div class="content">
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="4.0"/>
												</div>
											</div>
											<h6>DID - Dine in the Dark </h6>
											<p class="location"><i class="fa fa-map-marker"></i> 250 Sukhumvit Rd, Bangkok</p>
										</div>
									</a>
								</div>
								
								<div class="restaurant-sm-item clearfix">
									<a href="#">
										<div class="image">
											<img src="images/restaurant/08.jpg" alt="Image" />
										</div>
										<div class="content">
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.0"/>
												</div>
											</div>
											<h6>Le Normandie</h6>
											<p class="location"><i class="fa fa-map-marker"></i> 48, Oriental Ave, Bang Rak,</p>
										</div>
									</a>
								</div>
					
								<div class="restaurant-sm-item clearfix">
									<a href="#">
										<div class="image">
											<img src="images/restaurant/01.jpg" alt="Image" />
										</div>
										<div class="content">
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.5"/>
												</div>
											</div>
											<h6>The Smokin' Pug</h6>
											<p class="location"><i class="fa fa-map-marker"></i> 88 Thanon Surawong, Si Phraya, Bang Rak </p>
										</div>
									</a>
								</div>
								
								<div class="restaurant-sm-item clearfix">
									<a href="#">
										<div class="image">
											<img src="images/restaurant/02.jpg" alt="Image" />
										</div>
										<div class="content">
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="4.5"/>
												</div>
											</div>
											<h6>J'AIME by Jean-Michel Lorain</h6>
											<p class="location"><i class="fa fa-map-marker"></i> 105 Soi Sathon 1, Thung Maha Mek, Sathon</p>
										</div>
									</a>
								</div>
								
							</div>
						
						</div>
						
						<div class="sidebar-module clearfix hidden-xs">
						
							<div class="download-app-sm">
										
								<div class="download-app-sm-inner">
								
									<h6 class="text-primary">Get the Restuarant Finder app</h6>
									<p>Abroad no chatty others my silent an. Fat way appear denote who wholly narrow gay settle.</p>

									<div class="image">
										<img src="images/app-download.jpg" alt="Image" />
									</div>
									
									<div class="clearfix">
										<a href="#" class="btn btn-primary btn-app mt-5 clearfix">
											<span class="icon">
												<i class="ion-social-apple"></i>
											</span>
											<span class="content">
												Download on the
												<span class="block">App Store</span>
											</span>
										</a>
										<a href="#" class="btn btn-primary btn-app mt-5 clearfix">
											<span class="icon">
												<i class="ion-social-android"></i>
											</span>
											<span class="content">
												Get it on
												<span class="block">Google Play</span>
											</span>
										</a>
									</div>
									
								</div>
								
							</div>

						</div>
						
					</div>
					
					<div class="col-sm-8 col-md-9 mb-30">
					
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
						
							<div class="clearfix text-right">
								<a href="#review-form" class="btn btn-primary btn-sm mt-20 anchor"><i class="fa fa-pencil"></i> Leave your review</a>
							</div>
							
							<div class="review-item-wrapper">
							
								<ul class="review-item-list">
								
									<li class="clearfix">
									
										<div class="review-man">
										
											<div class="image">
											
												<img src="images/man/01.jpg" alt="images" />
												
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
											
												<img src="images/man/02.jpg" alt="images" />
												
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
											
												<img src="images/man/03.jpg" alt="images" />
												
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
											
												<img src="images/man/04.jpg" alt="images" />
												
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
							
								<a href="#" class="btn btn-primary">Load more reviews</a>
						
							</div>
							
						</div>
						
						<div id="review-form" class="mt-50">
						
							<div class="section-title-02">
								<h3><span>Leave your review</span></h3>
							</div>
							
							<form class="clearfix review-form-inner">
												
								<div class="row gap-20">
								
									<div class="col-xs-12 col-sm-6 col-md-6">
									
										<div class="form-group">
											<label>Your Name: </label>
											<input type="text" class="form-control" />
										</div>
									
									</div>
									
									<div class="col-xs-12 col-sm-6 col-md-6">
									
										<div class="form-group">
											<label>Your Email Address: </label>
											<input type="email" class="form-control" />
										</div>
									
									</div>
									
								</div>
								
								<div class="col-5-wrapper col-3-wrapper-sm col-2-wrapper-xss gap-20">
									
									<div>
									
										<div class="form-group">
										
											<label>Content: </label>
											
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating-label" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" value="0" />
												</div>
											</div>
											
										</div>
									
									</div>
									
									<div>
									
										<div class="form-group">
										
											<label>Knowledge: </label>
											
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating-label" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" value="0" />
												</div>
											</div>
											
										</div>
									
									</div>
									
									<div>
									
										<div class="form-group">
										
											<label>Assignment: </label>
											
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating-label" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" value="0" />
												</div>
											</div>
											
										</div>
									
									</div>
									
									<div>
									
										<div class="form-group">
										
											<label>Classroom: </label>
											
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating-label" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" value="0" />
												</div>
											</div>
											
										</div>
									
									</div>
									
									<div>
									
										<div class="form-group">
										
											<label>Instructor: </label>
											
											<div class="rating-wrapper">
												<div class="rating-item">
													<input type="hidden" class="rating-label" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" value="0" />
												</div>
											</div>
											
										</div>
									
									</div>
									
								</div>
								
								<div class="row gap-20">

									<div class="col-xs-12 col-sm-12 col-md-12">
									
										<div class="form-group">
											<label>Your Message: </label>
											<textarea class="form-control form-control-sm" rows="5"></textarea>
										</div>
									</div>
									
									<div class="clear"></div>
									
									<div class="col-xs-12 col-sm-12 col-md-12">
										<button class="btn btn-primary btn-sm mt-5">Submit</button>
									</div>
									
								</div>
							
							</form>
							
						</div>
						
					</div>

				</div>
				
			</div>
			
		</div>
		<!-- end Main Wrapper -->
@include('footer')