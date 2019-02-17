@include('header')
            <!-- start Main Wrapper -->
            <div class="main-wrapper scrollspy-container">

                <!-- start hero-header -->
                <div class="hero text-center alt-height" style="background-image:url('images/hero-header/01.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                                <h1>Find the best restaurants around you.</h1>
<!--                                <p>More than 20,000 restaurants all around the world and in your country or city</p>-->
<!--                                <div class="home-search-form home-search-form-center">
                                    <form>
                                        <div class="form-group location-form">
                                            <input type="text" class="form-control" placeholder="Where would you like to eat?">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control custom-select" id="cuisine-type" style="background-color:#ffffff !important;">                                                
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

-->                                        <a href="{{url('/restaurants/list')}}"><button class="btn btn-primary btn-form">Find a Table</button></a><!--

                                    </form>

                                    <div class="clear"></div>

                                    <p class="around-you"><a href="#">Or view all 360 restaurants in and/or around your current city</a></p>

                                </div>-->

                            </div>

                        </div>

                    </div>

                </div>
                <!-- end hero-header -->

                <section>

                    <div class="container">

                        <div class="row">

                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                                <div class="section-title-02 text-center">

                                    <h3><span>Your Nearest Destinations</span></h3>

                                    <p>Mist is highly flexible, and will be able to adjust to any of your customization’s. Get your projects to a new level. Included is animation on view, Parallax block, counters and charts, high resolution graphics etc.</p>

                                </div>

                            </div>

                        </div>

                        <div class="destination-grid-wrapper-02">

                            <div class="GridLex-gap-30 GridLex-gap-20-mdd GridLex-gap-10-xs">

                                <div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

                                    <div class="GridLex-col-3_sm-6_xs-6_xss-12">

                                        <div class="destination-grid-item-02">
                                            <a href="#">
                                                <div class="image">
                                                    <img src="images/hot-item/01.jpg" alt="Hot Item">
                                                </div>
                                                <div class="content">
                                                    <h4><span>Chhoti Sadri</span></h4>
<!--                                                    <span>435 restaurants</span>-->
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="GridLex-col-3_sm-6_xs-6_xss-12">

                                        <div class="destination-grid-item-02">
                                            <a href="#">
                                                <div class="image">
                                                    <img src="images/hot-item/02.jpg" alt="Hot Item">
                                                </div>
                                                <div class="content">
                                                    <h4><span>Mandsaur</span></h4>
<!--                                                    <span>188 restaurants</span>-->
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="GridLex-col-3_sm-6_xs-6_xss-12">

                                        <div class="destination-grid-item-02">
                                            <a href="#">
                                                <div class="image">
                                                    <img src="images/hot-item/04.jpg" alt="Hot Item">
                                                </div>
                                                <div class="content">
                                                    <h4><span>Udaipur</span></h4>
<!--                                                    <span>125 restaurants</span>-->
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="GridLex-col-3_sm-6_xs-6_xss-12">
                                        <div class="destination-grid-item-02">
                                            <a href="#">
                                                <div class="image">
                                                    <img src="images/hot-item/03.jpg" alt="Hot Item">
                                                </div>
                                                <div class="content">
                                                    <h4><span>Coming Soon</span></h4>
<!--                                                    <span>89 restaurants</span>-->
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

                <section class="bg-white">

                    <div class="container">

                        <div class="row">

                            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                                <div class="section-title-02 text-center">

                                    <h3><span>Featured Restaurants in Your City</span></h3>

                                    <p>Hand-Picked Restaurants with Exclusive Menus across Bangkok</p>

                                </div>

                            </div>

                        </div>

                        <div class="restaurant-grid-wrapper mb-30">

                            <div class="GridLex-gap-30 GridLex-gap-20-mdd">

                                <div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

                                    <div class="GridLex-col-3_sm-4_xs-6_xss-12">

                                        <div class="restaurant-grid-item">
                                            <a href="#">
                                                <div class="image">
                                                    <img src="images/restaurant/01.jpg" alt="Image" />
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
                                                    <img src="images/restaurant/02.jpg" alt="Image" />
                                                </div>
                                                <div class="content">
                                                    <h5>J'AIME by Jean-Michel Lorain</h5>
                                                    <p class="location"><i class="fa fa-map-marker"></i> 105 Soi Sathon 1, Thung Maha Mek, Sathon</p>
                                                    <div class="rating-wrapper">
                                                        <div class="rating-item">
                                                            <input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="4.5"/>
                                                        </div>
                                                        <span class="texting"> (43 reviews)</span>
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
                                                    <img src="images/restaurant/03.jpg" alt="Image" />
                                                </div>
                                                <div class="content">
                                                    <h5>DID - Dine in the Dark </h5>
                                                    <p class="location"><i class="fa fa-map-marker"></i> 250 Sukhumvit Rd, Bangkok</p>
                                                    <div class="rating-wrapper">
                                                        <div class="rating-item">
                                                            <input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="4.0"/>
                                                        </div>
                                                        <span class="texting"> (65 reviews)</span>
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
                                                    <img src="images/restaurant/04.jpg" alt="Image" />
                                                </div>
                                                <div class="content">
                                                    <h5>JP French Restaurant </h5>
                                                    <p class="location"><i class="fa fa-map-marker"></i> 59/1 sukhumvit soi 31(soi sawadee), Bangkok</p>
                                                    <div class="rating-wrapper">
                                                        <div class="rating-item">
                                                            <input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="5.0"/>
                                                        </div>
                                                        <span class="texting"> (143 reviews)</span>
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
                                                    <img src="images/restaurant/08.jpg" alt="Image" />
                                                </div>
                                                <div class="content">
                                                    <h5>Le Normandie</h5>
                                                    <p class="location"><i class="fa fa-map-marker"></i> 48, Oriental Ave, Bang Rak,</p>
                                                    <div class="rating-wrapper">
                                                        <div class="rating-item">
                                                            <input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.0"/>
                                                        </div>
                                                        <span class="texting"> (32 reviews)</span>
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
                                                    <img src="images/restaurant/06.jpg" alt="Image" />
                                                </div>
                                                <div class="content">
                                                    <h5>J'AIME by Jean-Michel Lorain</h5>
                                                    <p class="location"><i class="fa fa-map-marker"></i> 105 Soi Sathon 1, Thung Maha Mek, Sathon</p>
                                                    <div class="rating-wrapper">
                                                        <div class="rating-item">
                                                            <input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="4.0"/>
                                                        </div>
                                                        <span class="texting"> (65 reviews)</span>
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
                                                    <img src="images/restaurant/07.jpg" alt="Image" />
                                                </div>
                                                <div class="content">
                                                    <h5>Le Beaulieu</h5>
                                                    <p class="location"><i class="fa fa-map-marker"></i> 63 Thanon Witthayu, Lumphini, Pathum Wan</p>
                                                    <div class="rating-wrapper">
                                                        <div class="rating-item">
                                                            <input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.5"/>
                                                        </div>
                                                        <span class="texting"> (43 reviews)</span>
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
                                                    <img src="images/restaurant/08.jpg" alt="Image" />
                                                </div>
                                                <div class="content">
                                                    <h5>Waterside Resort Restaurant</h5>
                                                    <p class="location"><i class="fa fa-map-marker"></i>  Soi Pradit Manutham, Nawamin, Bueng Kum</p>
                                                    <div class="rating-wrapper">
                                                        <div class="rating-item">
                                                            <input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="4.0"/>
                                                        </div>
                                                        <span class="texting"> (65 reviews)</span>
                                                    </div>
                                                    <p class="cuisine">Cuisine: <span>Italian</span> <span>Seafood</span> <span>Bistro</span></p>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="text-center">
                            <a href="#" class="btn btn-primary">More Restaurants</a>
                        </div>

                    </div>

                </section>

                <section>

                    <div class="container">

                        <div class="GridLex-gap-30 GridLex-gap-20-mdd">

                            <div class="GridLex-grid-noGutter-equalHeight">

                                <div class="GridLex-col-3_sm-3_xs-6_xss-12">

                                    <div class="featured-icon text-center">
                                        <div class="icon text-primary">
                                            <i class="ti-location-pin"></i>
                                        </div>
                                        <h5>find what you want</h5>
                                        Choose from over 10,000+ restaurants, with reliable reviews
                                    </div>

                                </div>

                                <div class="GridLex-col-3_sm-3_xs-6_xss-12">

                                    <div class="featured-icon text-center">
                                        <div class="icon text-primary">
                                            <i class="ti-timer"></i>
                                        </div>
                                        <h5>the restaurant is full?</h5>
                                        Book online for free, you don't need to call the restaurant 
                                    </div>

                                </div>

                                <div class="GridLex-col-3_sm-3_xs-6_xss-12">

                                    <div class="featured-icon text-center">
                                        <div class="icon text-primary">
                                            <i class="ti-comments-smiley"></i>
                                        </div>
                                        <h5>ask for the bill with a smile</h5>
                                        Enjoy up to 50% off the bill in participating restaurants 
                                    </div>

                                </div>

                                <div class="GridLex-col-3_sm-3_xs-6_xss-12">

                                    <div class="featured-icon text-center">
                                        <div class="icon text-primary">
                                            <i class="ti-tag"></i>
                                        </div>
                                        <h5>thefork picks up the tab</h5>
                                        Earn Yums for each booking, and get a loyalty discount
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

                <section class="bg-white">

                    <div class="container">

                        <div class="GridLex-gap-30 GridLex-gap-20-mdd">

                            <div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">

                                <div class="GridLex-col-6_sm-6_xs-12_xss-12">

                                    <div class="featured-image text-center" style="background-image:url('images/featured-image/01.jpg');">
                                        <div class="content">
                                            <a href="#" class="block">
                                                <h3 class="text-primary font300 mb-10">Browse our Restaurant Blog</h3>
                                                Explore news, reviews & recommendations!
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="GridLex-col-6_sm-6_xs-12_xss-12">

                                    <div class="featured-image text-center" style="background-image:url('images/featured-image/02.jpg');">
                                        <div class="content">
                                            <a href="#" class="block">
                                                <h3 class="text-primary font300 mb-10">For Restaurant Owners</h3>
                                                Join our vibrant restaurant marketplace!
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

            </div>
            <!-- end Main Wrapper -->
            <script type="text/javascript">
            $(document).ready(function(){
                $('#cuisine-type').select2({
  ajax: {
    url: 'https://api.github.com/search/repositories',
    data: function (params) {
      var query = {
        search: params.term,
        page: params.page || 1
      }

      // Query parameters will be ?search=[term]&page=[page]
      return query;
    }
  }
});
            });                
            
            </script>
@include('footer')