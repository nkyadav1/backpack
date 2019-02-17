<div class="restaurant-list-item-wrapper no-last-bb">
    
            
            @foreach($results['data'] as $restaurant)
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
                            <h5><a href="#"> {{ $restaurant['name'] }}</a></h5>
                            <p class="location"><i class="fa fa-map-marker"></i> {{$restaurant['address']}}</p>
                            <p class="short-info"> {{$restaurant['description']}}</p>
                            @if (isset($restaurant['offer']))
                                <p class="text-primary offer"> $restaurant['offer']</p>
                            @endif
                            <p class="cuisine">Cuisine: {{$restaurant['amenities']}}</p>
                        </div>

                    </div>

                    <div class="GridLex-col-3_sm-12 meta-wrapper">

                        <div class="meta">
                            <div class="rating-wrapper">
                                <div class="rating-item">
                                    <input type="hidden" class="rating" data-filled="oi oi-star" data-empty="oi oi-star" data-fractions="2" data-readonly value="3.5"/>
                                </div>
                                <span class="texting"><i class="fa fa-star green">&nbsp;</i>{{$restaurant['rating']}}</span>
                            </div>
                            <div class="right-bottom">
                                <div class="price">Average price: <span><i class="fa fa-inr">&nbsp;</i>{{$restaurant['avg_price']}}</span></div>
                                <div class="clear"></div>
                                <a href="{{url('/restaurant')}}/{{$restaurant['id']}}" class="btn btn-primary btn-sm btn-block">Details</a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            </div>

    </div>
            @endforeach



        	
</div>

<div class="pagination-wrapper">

    <div class="GridLex-grid-middle GridLex-grid-noGutter">
        <div class="GridLex-col-6_sm-12_xs-12">
            <div class="text-right text-center-sm mb-10-sm">Showing {{$results['from']}} to {{$results['to']}} from {{$results['total']}} restaurants</div>
        </div>
        <div class="GridLex-col-6_sm-12_xs-12">
            <nav>
                <ul class="pagination pagination-text-center-sm mb-5-xs">
                    <li>
                        <a href="{{$results['prev_page_url']}}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">{{$results['current_page']}}</a></li>
<!--                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>-->
                    <li>
                        <a href="{{$results['next_page_url']}}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

</div>
