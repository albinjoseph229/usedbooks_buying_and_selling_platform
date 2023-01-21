@extends('layout/usermaster')
@section('content')
<section class="kc-elm kc-css-975399 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-340710 kc_col-sm-2 kc_column kc_col-sm-2">
                <div class="kc-col-container"></div>
            </div>
            <div class="kc-elm kc-css-992324 kc_col-sm-8 kc_column kc_col-sm-8">
                <div class="kc-col-container">
                    <div class="af-title text-center">
                        <h1 class="af-heading"><span style="color: #fff">Save Money Save Nature</span></h1>
                        <p><span style="color: #fff">Browse from the books listed and choose the one you need</span></p>
                    </div>
                    <div class="kc-elm kc-css-997839" style="height: 35px; clear: both; width:100%;"></div>
                    <div class="kc-search ">

                        <form action="https://browse-ads/" class="header-search flex-wrap">
                            <div class="keyword-wrap">
                                <input type="text" class="form-control" name="keyword" placeholder="Search for...">
                            </div>




                            <div class="styled-select">
                                <select name="category">
                                    <option value="">In Category</option>
                                    <option value="38">Electronics</option>
                                    <option value="13">&nbsp;&nbsp;Computers</option>
                                    <option value="37">&nbsp;&nbsp;Drones</option>
                                    <option value="15">&nbsp;&nbsp;Notebooks</option>
                                    <option value="39">&nbsp;&nbsp;Phones</option>
                                    <option value="36">&nbsp;&nbsp;Watches</option>
                                    <option value="81">Furniture</option>
                                    <option value="42">Jobs</option>
                                    <option value="46">&nbsp;&nbsp;Dancers</option>
                                    <option value="51">&nbsp;&nbsp;Drivers</option>
                                    <option value="43">&nbsp;&nbsp;Film Stunts</option>
                                    <option value="9">Real Estate</option>
                                    <option value="11">&nbsp;&nbsp;Appartments</option>
                                    <option value="29">&nbsp;&nbsp;Houses</option>
                                    <option value="17">Services</option>
                                    <option value="57">&nbsp;&nbsp;Builders</option>
                                    <option value="18">&nbsp;&nbsp;Car Mechanic</option>
                                    <option value="59">&nbsp;&nbsp;Moving &amp; Storage</option>
                                    <option value="2">Vehicles</option>
                                    <option value="25">&nbsp;&nbsp;Boats &amp; Watercrafts</option>
                                    <option value="24">&nbsp;&nbsp;Campers</option>
                                    <option value="5">&nbsp;&nbsp;Cars</option>
                                    <option value="22">&nbsp;&nbsp;Motocycles</option>
                                    <option value="23">&nbsp;&nbsp;Snowmobiles</option>
                                    <option value="6">&nbsp;&nbsp;Trucks</option>
                                </select>
                            </div> <a href="javascript:void(0);" class="af-button submit-form">Search</a>
                        </form>

                    </div>
                    <div class="kc-elm kc-css-880530" style="height: 25px; clear: both; width:100%;"></div>
                </div>
            </div>
            <div class="kc-elm kc-css-101869 kc_col-sm-2 kc_column kc_col-sm-2">
                <div class="kc-col-container"></div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-231869 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-132113 kc_col-sm-1 kc_column kc_col-sm-1">
                <div class="kc-col-container"></div>
            </div>
            <div class="kc-elm kc-css-824662 kc_col-sm-10 kc_column kc_col-sm-10">
                <div class="kc-col-container">
                    <div class="element-categories-list categories-slider owl-carousel" data-visibleitems="5"
                        data-autoplay="">
                        <div>
                            <div class="af-item-wrap hover-shadow top_icon" style="">
                                <div class="category-item " style="padding: 15px">
                                    <div class="flex-left">
                                        <a href="advert-category/electronics/index.html">
                                            <div class="category-icon" style="margin-bottom: 5px;max-width: 40px">


                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex-right">
                                        <h5 style="font-size: 16px">
                                            <a href="advert-category/electronics/index.html">
                                                Electronics </a>
                                        </h5>
                                        <div class="category-item-count" style="font-size: 12px">5 ads posted</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="af-item-wrap hover-shadow top_icon" style="">
                                <div class="category-item " style="padding: 15px">
                                    <div class="flex-left">
                                        <a href="advert-category/furniture/index.html">
                                            <div class="category-icon" style="margin-bottom: 5px;max-width: 40px">
                                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex-right">
                                        <h5 style="font-size: 16px">
                                            <a href="advert-category/furniture/index.html">
                                                Furniture </a>
                                        </h5>
                                        <div class="category-item-count" style="font-size: 12px">1 ad posted</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="af-item-wrap hover-shadow top_icon" style="">
                                <div class="category-item " style="padding: 15px">
                                    <div class="flex-left">
                                        <a href="advert-category/jobs/index.html">
                                            <div class="category-icon" style="margin-bottom: 5px;max-width: 40px">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex-right">
                                        <h5 style="font-size: 16px">
                                            <a href="advert-category/jobs/index.html">
                                                Jobs </a>
                                        </h5>
                                        <div class="category-item-count" style="font-size: 12px">3 ads posted</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="af-item-wrap hover-shadow top_icon" style="">
                                <div class="category-item " style="padding: 15px">
                                    <div class="flex-left">
                                        <a href="advert-category/real-estate/index.html">
                                            <div class="category-icon" style="margin-bottom: 5px;max-width: 40px">
                                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex-right">
                                        <h5 style="font-size: 16px">
                                            <a href="advert-category/real-estate/index.html">
                                                Real Estate </a>
                                        </h5>
                                        <div class="category-item-count" style="font-size: 12px">2 ads posted</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="af-item-wrap hover-shadow top_icon" style="">
                                <div class="category-item " style="padding: 15px">
                                    <div class="flex-left">
                                        <a href="advert-category/services/index.html">
                                            <div class="category-icon" style="margin-bottom: 5px;max-width: 40px">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex-right">
                                        <h5 style="font-size: 16px">
                                            <a href="advert-category/services/index.html">
                                                Services </a>
                                        </h5>
                                        <div class="category-item-count" style="font-size: 12px">3 ads posted</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="af-item-wrap hover-shadow top_icon" style="">
                                <div class="category-item " style="padding: 15px">
                                    <div class="flex-left">
                                        <a href="advert-category/vehicles/index.html">
                                            <div class="category-icon" style="margin-bottom: 5px;max-width: 40px">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex-right">
                                        <h5 style="font-size: 16px">
                                            <a href="advert-category/vehicles/index.html">
                                                Vehicles </a>
                                        </h5>
                                        <div class="category-item-count" style="font-size: 12px">6 ads posted</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kc-elm kc-css-874828 kc_col-sm-1 kc_column kc_col-sm-1">
                <div class="kc-col-container"></div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-195631 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-939935 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div data-open-on-mouseover="" data-tab-active="1" data-effect-option=""
                        class="kc-elm kc-css-62492 kc_tabs group">
                        <div class="kc_wrapper ui-tabs kc_clearfix">
                            <ul class="kc_tabs_nav ui-tabs-nav kc_clearfix">
                                <li><a href="#latest-ads" data-prevent="scroll">Latest Ads</a></li>
                                <li><a href="#ending-soon" data-prevent="scroll">Ending Soon</a></li>
                            </ul>
                            <div id="latest-ads"
                                class="kc-elm kc-css-933909 kc_tab ui-tabs-panel kc_ui-tabs-hide kc_clearfix ">
                                <div class="kc_tab_content">
                                    <div class="adverts-list clearfix adverts-slider owl-carousel" data-visibleitems="4"
                                        data-autoplay="">
                                        <div class="af-item-wrap">
                                            <div
                                                class="white-block hover-shadow advert-item advert-grid advert-hightlight">


                                                <a href="advert/scania-r-srs-l-class-r450-la-streamline-highline-diesel/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-9-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/vehicles/index.html">Vehicles</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/amsterdam/index.html">Amsterdam</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/scania-r-srs-l-class-r450-la-streamline-highline-diesel/index.html"
                                                            class="text-overflow"
                                                            title="Scania R-SRS L-CLASS R450 LA Streamline Highline Diesel">
                                                            Scania R-SRS L-CLASS R450 LA Streamline Highline Diesel </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price">300,000.00<span class="price-symbol">€</span>
                                                        </div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="88" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="88"
                                                    data-longitude="4.89516790" data-latitude="52.37021570"
                                                    data-icon="https://wp-content/uploads/2018/02/cars.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/move-quickly-with-high-load-trailer/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-8-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/services/index.html">Services</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/dortmund/index.html">Dortmund</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/move-quickly-with-high-load-trailer/index.html"
                                                            class="text-overflow"
                                                            title="Move Quickly With High Load Trailer">
                                                            Move Quickly With High Load Trailer </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="price-symbol">$</span>26,099.00
                                                            <div class="price-bids"><span>6 Bids</span></div>
                                                        </div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="87" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="87"
                                                    data-longitude="7.46529810" data-latitude="51.51358720"
                                                    data-icon="https://wp-content/uploads/2018/02/services.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                        </div>
                                        <div class="af-item-wrap">
                                            <div class="white-block hover-shadow advert-item advert-grid ">

                                                <div class="advert-tags">
                                                    <div class="ribbon negotiable">
                                                        Negotiable </div>
                                                </div>

                                                <a href="advert/indoor-furniture-pe-wicker-sofa-lounge-couch/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-22-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/furniture/index.html">Furniture</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/ostend/index.html">Ostend</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/indoor-furniture-pe-wicker-sofa-lounge-couch/index.html"
                                                            class="text-overflow"
                                                            title="Indoor Furniture PE Wicker Sofa Lounge Couch">
                                                            Indoor Furniture PE Wicker Sofa Lounge Couch </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price">90,00<span class="price-symbol">₽</span><span
                                                                class="no-strike">/ week</span></div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="127" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="127"
                                                    data-longitude="2.92865600" data-latitude="51.21543000"
                                                    data-icon="https://wp-content/uploads/2018/02/furniture.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/trained-ballet-dancer-is-required-for-the-show/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-20-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/jobs/index.html">Jobs</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/london/index.html">London</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/trained-ballet-dancer-is-required-for-the-show/index.html"
                                                            class="text-overflow"
                                                            title="Trained Ballet Dancer Is Required For The Show">
                                                            Trained Ballet Dancer Is Required For The Show </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="text-price">Job - Wanted</span>
                                                        </div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="125" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="125"
                                                    data-longitude="-0.12775830" data-latitude="51.50735090"
                                                    data-icon="https://wp-content/uploads/2018/02/jobs.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                        </div>
                                        <div class="af-item-wrap">
                                            <div class="white-block hover-shadow advert-item advert-grid ">

                                                <div class="advert-tags">
                                                    <div class="ribbon urgent">
                                                        Urgent </div>
                                                </div>

                                                <a href="advert/polaris-600-assault-144-snowmobile-2017-with-warranty/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-11-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/vehicles/index.html">Vehicles</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/sundsvall/index.html">Sundsvall</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/polaris-600-assault-144-snowmobile-2017-with-warranty/index.html"
                                                            class="text-overflow"
                                                            title="Polaris 600 Assault 144 Snowmobile 2017 With Warranty">
                                                            Polaris 600 Assault 144 Snowmobile 2017 With Warranty </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="">450.00<span
                                                                    class="price-symbol">€</span></span>400.00<span
                                                                class="price-symbol">€</span></div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="86" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="86"
                                                    data-longitude="17.30692700" data-latitude="62.39081100"
                                                    data-icon="https://wp-content/uploads/2018/02/cars.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/apartment-in-spain-for-sale-at-panoramica-golf-country-club/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-18-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/real-estate/index.html">Real
                                                                Estate</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/paris/index.html">Paris</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/apartment-in-spain-for-sale-at-panoramica-golf-country-club/index.html"
                                                            class="text-overflow"
                                                            title="Apartment In Spain For Sale At Panoramica Golf &#038; Country Club">
                                                            Apartment In Spain For Sale At Panoramica Golf &#038;
                                                            Country Club </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price">Call for price</div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="118" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="118"
                                                    data-longitude="2.35222190" data-latitude="48.85661400"
                                                    data-icon="https://wp-content/uploads/2018/02/real-estate.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                        </div>
                                        <div class="af-item-wrap">
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/fashion-luxury-men-date-stainless-steel-leather-analog-quartz/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-17-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a
                                                                href="advert-category/electronics/index.html">Electronics</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/berlin/index.html">Berlin</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/fashion-luxury-men-date-stainless-steel-leather-analog-quartz/index.html"
                                                            class="text-overflow"
                                                            title="Fashion Luxury Men Date Stainless Steel Leather Analog Quartz">
                                                            Fashion Luxury Men Date Stainless Steel Leather Analog
                                                            Quartz </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="price-symbol">$</span>65.00<div
                                                                class="price-bids"><span>1 Bid</span></div>
                                                        </div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="114" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="114"
                                                    data-longitude="13.40495400" data-latitude="52.52000660"
                                                    data-icon="https://wp-content/uploads/2018/02/electronics.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/customized-apple-imac-21-5-all-in-one-desktop-computer/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-13-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a
                                                                href="advert-category/electronics/index.html">Electronics</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/vienna/index.html">Vienna</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/customized-apple-imac-21-5-all-in-one-desktop-computer/index.html"
                                                            class="text-overflow"
                                                            title="Customized Apple iMac 21.5&#8243; All-In-One Desktop Computer">
                                                            Customized Apple iMac 21.5&#8243; All-In-One Desktop
                                                            Computer </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="text-price">Buying</span></div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="111" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="111"
                                                    data-longitude="16.37381890" data-latitude="48.20817430"
                                                    data-icon="https://wp-content/uploads/2018/02/electronics.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                        </div>
                                        <div class="af-item-wrap">
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/new-x5sw-1-2-4ghz-4ch-6-axis-rc-quadcopter-drone/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-12-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a
                                                                href="advert-category/electronics/index.html">Electronics</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/british-columbia/index.html">British
                                                                Columbia</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/new-x5sw-1-2-4ghz-4ch-6-axis-rc-quadcopter-drone/index.html"
                                                            class="text-overflow"
                                                            title="New X5SW-1 2.4GHz 4CH 6 Axis RC Quadcopter Drone">
                                                            New X5SW-1 2.4GHz 4CH 6 Axis RC Quadcopter Drone </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="text-price">Exchange</span>
                                                        </div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="105" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="105"
                                                    data-longitude="-123.12073750" data-latitude="49.28272910"
                                                    data-icon="https://wp-content/uploads/2018/02/electronics.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/2012-audi-r8-gt-spyder-convertible-2-door/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-23-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/vehicles/index.html">Vehicles</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/paris/index.html">Paris</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/2012-audi-r8-gt-spyder-convertible-2-door/index.html"
                                                            class="text-overflow"
                                                            title="2012 Audi R8 GT Spyder Convertible 2-Door">
                                                            2012 Audi R8 GT Spyder Convertible 2-Door </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="text-price">Gift</span></div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="131" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="131"
                                                    data-longitude="2.35222190" data-latitude="48.85661400"
                                                    data-icon="https://wp-content/uploads/2018/02/cars.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="ending-soon"
                                class="kc-elm kc-css-264277 kc_tab ui-tabs-panel kc_ui-tabs-hide kc_clearfix ">
                                <div class="kc_tab_content">
                                    <div class="adverts-list clearfix adverts-slider owl-carousel" data-visibleitems="4"
                                        data-autoplay="">
                                        <div class="af-item-wrap">
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/move-quickly-with-high-load-trailer/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-8-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/services/index.html">Services</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/dortmund/index.html">Dortmund</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/move-quickly-with-high-load-trailer/index.html"
                                                            class="text-overflow"
                                                            title="Move Quickly With High Load Trailer">
                                                            Move Quickly With High Load Trailer </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="price-symbol">$</span>26,099.00
                                                            <div class="price-bids"><span>6 Bids</span></div>
                                                        </div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="87" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="87"
                                                    data-longitude="7.46529810" data-latitude="51.51358720"
                                                    data-icon="https://wp-content/uploads/2018/02/services.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/apple-iphone-6-16gb-4g-lte-factory-unlocked/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-16-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a
                                                                href="advert-category/electronics/index.html">Electronics</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/belgrade/index.html">Belgrade</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/apple-iphone-6-16gb-4g-lte-factory-unlocked/index.html"
                                                            class="text-overflow"
                                                            title="Apple iPhone 6 16GB 4G LTE Factory Unlocked">
                                                            Apple iPhone 6 16GB 4G LTE Factory Unlocked </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="">800.00<span
                                                                    class="price-symbol">€</span></span>700.00<span
                                                                class="price-symbol">€</span></div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="113" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="113"
                                                    data-longitude="20.44892160" data-latitude="44.78656800"
                                                    data-icon="https://wp-content/uploads/2018/02/electronics.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                        </div>
                                        <div class="af-item-wrap">
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/hp-gaming-15-6-touchscreen-12gb-laptop-amd/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-24-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a
                                                                href="advert-category/electronics/index.html">Electronics</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/rome/index.html">Rome</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/hp-gaming-15-6-touchscreen-12gb-laptop-amd/index.html"
                                                            class="text-overflow"
                                                            title="HP Gaming 15.6 TouchScreen 12GB Laptop AMD">
                                                            HP Gaming 15.6 TouchScreen 12GB Laptop AMD </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="text-price">Gift</span></div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="112" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="112"
                                                    data-longitude="12.49636550" data-latitude="41.90278350"
                                                    data-icon="https://wp-content/uploads/2018/02/electronics.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/customized-apple-imac-21-5-all-in-one-desktop-computer/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-13-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a
                                                                href="advert-category/electronics/index.html">Electronics</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/vienna/index.html">Vienna</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/customized-apple-imac-21-5-all-in-one-desktop-computer/index.html"
                                                            class="text-overflow"
                                                            title="Customized Apple iMac 21.5&#8243; All-In-One Desktop Computer">
                                                            Customized Apple iMac 21.5&#8243; All-In-One Desktop
                                                            Computer </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="text-price">Buying</span></div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="111" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="111"
                                                    data-longitude="16.37381890" data-latitude="48.20817430"
                                                    data-icon="https://wp-content/uploads/2018/02/electronics.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                        </div>
                                        <div class="af-item-wrap">
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/new-x5sw-1-2-4ghz-4ch-6-axis-rc-quadcopter-drone/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-12-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a
                                                                href="advert-category/electronics/index.html">Electronics</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/british-columbia/index.html">British
                                                                Columbia</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/new-x5sw-1-2-4ghz-4ch-6-axis-rc-quadcopter-drone/index.html"
                                                            class="text-overflow"
                                                            title="New X5SW-1 2.4GHz 4CH 6 Axis RC Quadcopter Drone">
                                                            New X5SW-1 2.4GHz 4CH 6 Axis RC Quadcopter Drone </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="text-price">Exchange</span>
                                                        </div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="105" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="105"
                                                    data-longitude="-123.12073750" data-latitude="49.28272910"
                                                    data-icon="https://wp-content/uploads/2018/02/electronics.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                            <div class="white-block hover-shadow advert-item advert-grid ">

                                                <div class="advert-tags">
                                                    <div class="ribbon negotiable">
                                                        Negotiable </div>
                                                </div>

                                                <a href="advert/stunt-performer-for-an-action-movies-required/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-10-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/jobs/index.html">Jobs</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/miami/index.html">Miami</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/stunt-performer-for-an-action-movies-required/index.html"
                                                            class="text-overflow"
                                                            title="Stunt Performer For An Action Movies Required">
                                                            Stunt Performer For An Action Movies Required </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="price-symbol">$</span>700.00 -
                                                            <span class="price-symbol">$</span>1,000.00
                                                        </div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="68" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="68"
                                                    data-longitude="-80.19179020" data-latitude="25.76167980"
                                                    data-icon="https://wp-content/uploads/2018/02/jobs.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                        </div>
                                        <div class="af-item-wrap">
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/little-harbor-yacht-38-whisper-jet-hardtop/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-2-2-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/vehicles/index.html">Vehicles</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/seattle/index.html">Seattle</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/little-harbor-yacht-38-whisper-jet-hardtop/index.html"
                                                            class="text-overflow"
                                                            title="Little Harbor Yacht 38’ Whisper Jet &#8211; Hardtop">
                                                            Little Harbor Yacht 38’ Whisper Jet &#8211; Hardtop </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price">Call for price</div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="79" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="79"
                                                    data-longitude="-122.33207080" data-latitude="47.60620950"
                                                    data-icon="https://wp-content/uploads/2018/02/cars.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                            <div class="white-block hover-shadow advert-item advert-grid ">


                                                <a href="advert/2017-gulfsteam-ameri-lite-ultra-lite-241rb-towable/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-3-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/vehicles/index.html">Vehicles</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/los-angeles/index.html">Los
                                                                Angeles</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/2017-gulfsteam-ameri-lite-ultra-lite-241rb-towable/index.html"
                                                            class="text-overflow"
                                                            title="2017 Gulfsteam Ameri-Lite Ultra-Lite 241RB Towable">
                                                            2017 Gulfsteam Ameri-Lite Ultra-Lite 241RB Towable </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="text-price">Gift</span></div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="80" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="80"
                                                    data-longitude="-118.24368490" data-latitude="34.05223420"
                                                    data-icon="https://wp-content/uploads/2018/02/cars.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                        </div>
                                        <div class="af-item-wrap">
                                            <div class="white-block hover-shadow advert-item advert-grid ">

                                                <div class="advert-tags">
                                                    <div class="ribbon featured">
                                                        Featured </div>
                                                </div>

                                                <a href="advert/handy-mechanic-for-ford-vehicles/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-5-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/services/index.html">Services</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a
                                                                href="advert-location/washington/index.html">Washington</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/handy-mechanic-for-ford-vehicles/index.html"
                                                            class="text-overflow"
                                                            title="Handy Mechanic For FORD Vehicles">
                                                            Handy Mechanic For FORD Vehicles </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="text-price">Exchange</span>
                                                        </div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="81" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="81"
                                                    data-longitude="-77.03687070" data-latitude="38.90719230"
                                                    data-icon="https://wp-content/uploads/2018/02/services.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                            <div class="white-block hover-shadow advert-item advert-grid ">

                                                <div class="advert-tags">
                                                    <div class="ribbon urgent">
                                                        Urgent </div>
                                                </div>

                                                <a href="advert/construction-company-with-20-years-of-experience/index.html"
                                                    class="advert-media">
                                                    <img width="355" height="250"
                                                        src="wp-content/uploads/2018/02/adr-6-355x250.jpg"
                                                        class="attachment-adifier-grid size-adifier-grid wp-post-image"
                                                        alt="" decoding="async" loading="lazy" /> </a>

                                                <div class="white-block-content">

                                                    <div class="top-advert-meta flex-wrap">
                                                        <div class="advert-cat text-overflow">
                                                            <i class="aficon-dot-circle-o"></i>
                                                            <a href="advert-category/services/index.html">Services</a>
                                                        </div>
                                                        <div class="advert-city text-overflow">
                                                            <i class="aficon-map-marker-alt-o"></i>
                                                            <a href="advert-location/nantes/index.html">Nantes</a>
                                                        </div>
                                                    </div>
                                                    <h5 class="adv-title">
                                                        <a href="advert/construction-company-with-20-years-of-experience/index.html"
                                                            class="text-overflow"
                                                            title="Construction Company With 20 Years Of Experience">
                                                            Construction Company With 20 Years Of Experience </a>
                                                    </h5>
                                                    <div class="bottom-advert-meta flex-wrap">
                                                        <div class="price"><span class="text-price">Buying</span></div>
                                                        <div class="flex-right">
                                                            <a href="javascript:void(0);" class="compare-add "
                                                                data-id="83" title="Add This To Compare">
                                                                <i class="aficon-repeat"></i>
                                                            </a>

                                                            <a title="Favorite" href="#" class="af-favs "
                                                                data-toggle="modal" data-target="#login">
                                                                <i class="aficon-heart-o"></i>
                                                                <span>Favorite</span>
                                                                <span class="small-icon">Favorite</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="search-map-la-long hidden" data-id="83"
                                                    data-longitude="-1.55362100" data-latitude="47.21837100"
                                                    data-icon="https://wp-content/uploads/2018/02/services.png"
                                                    data-iconwidth="110" data-iconheight="110"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<section data-kc-equalheight="true" data-kc-equalheight-align="middle" class="kc-elm kc-css-662149 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-237606 kc_col-sm-5 kc_column kc_col-sm-5">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-466926 kc_text_block">
                        <h2><span style="color: #ffffff;">Register &#038; Benefit</span></h2>
                        <ul style="color: #fff;">
                            <li><span style="color: #ffffff;">Participate in auctions</span></li>
                            <li><span style="color: #ffffff;">Submit your ads</span></li>
                            <li><span style="color: #ffffff;">Promote your ads</span></li>
                            <li><span style="color: #ffffff;">Get reviewed to become noticeable</span></li>
                            <li><span style="color: #ffffff;">Save favorite ads</span></li>
                            <li><span style="color: #ffffff;">And more</span></li>
                        </ul>
                    </div>
                    <div class="kc-elm kc-css-318212" style="height: 30px; clear: both; width:100%;"></div>
                    <div class="kc-elm kc-css-260901 kc_text_block">
                        <p>
                            <a class="af-button" href="how-it-works/index.html">How It Works</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="kc-elm kc-css-518758 kc_col-sm-7 kc_column kc_col-sm-7">
                <div class="kc-col-container"></div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-481809 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-670989 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="af-title text-center">
                        <h3 class="af-heading">Popular Locations</h3>
                        <p>Check out ads from our members located in popular locations</p>
                    </div>
                    <div class="kc-elm kc-css-706319" style="height: 35px; clear: both; width:100%;"></div>
                    <div class="element-locations-wrap style3 clearfix">
                        <a href="advert-location/london/index.html" class="elem-location-item"
                            style="background-image:url('wp-content/uploads/2018/07/london.jpg')">
                            <div class="location-title animation">
                                <h6>London</h6>
                                <p>1 ad posted</p>
                            </div>
                        </a>
                        <a href="advert-location/rome/index.html" class="elem-location-item"
                            style="background-image:url('wp-content/uploads/2018/07/rome.jpg')">
                            <div class="location-title animation">
                                <h6>Rome</h6>
                                <p>1 ad posted</p>
                            </div>
                        </a>
                        <a href="advert-location/barcelona/index.html" class="elem-location-item"
                            style="background-image:url('wp-content/uploads/2018/07/barcelona.jpg')">
                            <div class="location-title animation">
                                <h6>Barcelona</h6>
                                <p>1 ad posted</p>
                            </div>
                        </a>
                        <a href="advert-location/los-angeles/index.html" class="elem-location-item"
                            style="background-image:url('wp-content/uploads/2018/07/los-angeles.jpg')">
                            <div class="location-title animation">
                                <h6>Los Angeles</h6>
                                <p>1 ad posted</p>
                            </div>
                        </a>
                        <a href="advert-location/paris/index.html" class="elem-location-item"
                            style="background-image:url('wp-content/uploads/2018/07/paris.jpg')">
                            <div class="location-title animation">
                                <h6>Paris</h6>
                                <p>2 ads posted</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-83579 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-300456 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="af-title text-center">
                        <h3 class="af-heading">Pricing Packages</h3>
                        <p><span style="color: #666">You can set to charge users for Packages, <b
                                    style="color: #374252">Subscriptions</b>, <b style="color: #374252">Hybrid</b> or <b
                                    style="color: #374252">Free</b></span></p>
                    </div>
                    <div class="kc-elm kc-css-800123" style="height: 35px; clear: both; width:100%;"></div>
                    <div class="kc-elm kc-css-519657 kc_row kc_row_inner">
                        <div class="kc-elm kc-css-305756 kc_col-sm-3 kc_column_inner kc_col-sm-3">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="white-block price-table-element hover-shadow ">
                                    <div class="price-table-price">
                                        <span class="price-symbol">$</span>11.99<p class="tax-included">*VAT included
                                        </p>
                                    </div>
                                    <div class="price-table-title">
                                        <h5>Bronze</h5>
                                    </div>
                                    <div class="price-table-content">
                                        Purchase this package and extend your subscription by <b>30</b> days </div>
                                    <a href="#" data-target="#login" data-toggle="modal"
                                        class="af-button purchase-pack">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="kc-elm kc-css-255486 kc_col-sm-3 kc_column_inner kc_col-sm-3">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="white-block price-table-element hover-shadow active-price-table">
                                    <div class="price-table-price">
                                        <span class="price-symbol">$</span>23.99<p class="tax-included">*VAT included
                                        </p>
                                    </div>
                                    <div class="price-table-title">
                                        <h5>Silver</h5>
                                    </div>
                                    <div class="price-table-content">
                                        Purchase this package and extend your subscription by <b>90</b> days </div>
                                    <a href="#" data-target="#login" data-toggle="modal"
                                        class="af-button purchase-pack">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="kc-elm kc-css-631237 kc_col-sm-3 kc_column_inner kc_col-sm-3">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="white-block price-table-element hover-shadow ">
                                    <div class="price-table-price">
                                        <span class="price-symbol">$</span>47.99<p class="tax-included">*VAT included
                                        </p>
                                    </div>
                                    <div class="price-table-title">
                                        <h5>Gold</h5>
                                    </div>
                                    <div class="price-table-content">
                                        Purchase this package and extend your subscription by <b>180</b> days </div>
                                    <a href="#" data-target="#login" data-toggle="modal"
                                        class="af-button purchase-pack">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="kc-elm kc-css-831121 kc_col-sm-3 kc_column_inner kc_col-sm-3">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="white-block price-table-element hover-shadow active-price-table">
                                    <div class="price-table-price">
                                        <span class="price-symbol">$</span>71.99<p class="tax-included">*VAT included
                                        </p>
                                    </div>
                                    <div class="price-table-title">
                                        <h5>Platinum</h5>
                                    </div>
                                    <div class="price-table-content">
                                        Purchase this package and extend your subscription by <b>365</b> days </div>
                                    <a href="#" data-target="#login" data-toggle="modal"
                                        class="af-button purchase-pack">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<a href="javascript:;" class="to_top af-button">
    <i class="aficon-angle-up"></i>
</a>

<div class="modal in" id="quick-search" tabindex="-1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" class="ajax-form" autocomplete="off">
                <div class="modal-header">
                    <h6 class="modal-title">Quick Search</h6>
                    <a href="#" data-dismiss="modal"><i class="aficon-times"></i></a>
                </div>

                <div class="modal-body">

                    <div class="adifier-form quick-search-form">
                        <label for="qs-search">Find ad (min. 4 chars)</label>
                        <input type="text" value="" id="qs-search" name="s" placeholder="Search for..." />
                        <a href="javascript:void(0);" class="quick-search-status"></a>
                    </div>

                    <div class="ajax-form-result"></div>
                </div>
                <input type="hidden" id="adifier_nonce" name="adifier_nonce" value="8840aa4f4f" /><input type="hidden"
                    name="_wp_http_referer" value="/themes/adifier/" />
            </form>
        </div>

    </div>
</div>

<div class="modal in" id="compare" tabindex="-1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" class="ajax-form" autocomplete="off">
                <div class="modal-header">
                    <h6 class="modal-title">Compare</h6>
                    <a href="#" data-dismiss="modal"><i class="aficon-times"></i></a>
                </div>

                <div class="modal-body"></div>
            </form>
        </div>

    </div>
</div>

<div class="search-sidebar animation">
    <div class="flex-wrap">
        <form action="https:/themes/adifier/browse-ads/" class="labeled-main-search">
            <h5>I&#039;m interested in...</h5>
            <div>
                <label for="keyword">Keyword</label>
                <div class="keyword-wrap">
                    <input type="text" class="form-control" name="keyword" placeholder="Search for...">
                </div>
            </div>


            <div>
                <label for="location">Location</label>

                <div class="header-location">
                    <input type="text" class="form-control place-lookup location" name="location"
                        placeholder="Located in...">
                    <input type="hidden" name="latitude" class="latitude">
                    <input type="hidden" name="longitude" class="longitude">
                </div>

            </div>

            <div>
                <label for="category">Category</label>
                <div class="styled-select">
                    <select name="category">
                        <option value="">In Category</option>
                        <option value="38">Electronics</option>
                        <option value="13">&nbsp;&nbsp;Computers</option>
                        <option value="37">&nbsp;&nbsp;Drones</option>
                        <option value="15">&nbsp;&nbsp;Notebooks</option>
                        <option value="39">&nbsp;&nbsp;Phones</option>
                        <option value="36">&nbsp;&nbsp;Watches</option>
                        <option value="81">Furniture</option>
                        <option value="42">Jobs</option>
                        <option value="46">&nbsp;&nbsp;Dancers</option>
                        <option value="51">&nbsp;&nbsp;Drivers</option>
                        <option value="43">&nbsp;&nbsp;Film Stunts</option>
                        <option value="9">Real Estate</option>
                        <option value="11">&nbsp;&nbsp;Appartments</option>
                        <option value="29">&nbsp;&nbsp;Houses</option>
                        <option value="17">Services</option>
                        <option value="57">&nbsp;&nbsp;Builders</option>
                        <option value="18">&nbsp;&nbsp;Car Mechanic</option>
                        <option value="59">&nbsp;&nbsp;Moving &amp; Storage</option>
                        <option value="2">Vehicles</option>
                        <option value="25">&nbsp;&nbsp;Boats &amp; Watercrafts</option>
                        <option value="24">&nbsp;&nbsp;Campers</option>
                        <option value="5">&nbsp;&nbsp;Cars</option>
                        <option value="22">&nbsp;&nbsp;Motocycles</option>
                        <option value="23">&nbsp;&nbsp;Snowmobiles</option>
                        <option value="6">&nbsp;&nbsp;Trucks</option>
                    </select>
                </div>
            </div>
            <div class="search-submit">
                <a href="javascript:void(0);" class="af-button submit-form">Search</a>
            </div>
        </form>
    </div>
</div>

<script type='module' src='wp-content/plugins/wp-performance-score-booster/assets/js/page-preloader.js'
    id='wppsb-page-preload-js'></script>
<script type='text/javascript' id='bootstrap-js-extra'>
/* <![CDATA[ */
var adifier_data = {
    "markers_max_zoom": "17",
    "ajaxurl": "https:\/\/demo.spoonthemes.net\/themes\/adifier\/wp-admin\/admin-ajax.php",
    "adifier_nonce": "8840aa4f4f",
    "enable_sticky": "yes",
    "marker_icon": "https:\/\/demo.spoonthemes.net\/themes\/adifier\/wp-content\/uploads\/2018\/02\/marker.png",
    "payment_enviroment": "test",
    "max_videos": "5",
    "max_images": "5",
    "max_image_size": "2",
    "url": "https:\/\/demo.spoonthemes.net\/themes\/adifier\/wp-content\/themes\/adifier\/images\/",
    "map_style": "[{\"featureType\":\"all\",\"elementType\":\"geometry\",\"stylers\":[{\"gamma\":\"0.82\"}]},{\"featureType\":\"all\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"gamma\":\"1.21\"}]},{\"featureType\":\"all\",\"elementType\":\"labels\",\"stylers\":[{\"lightness\":\"-60\"}]},{\"featureType\":\"all\",\"elementType\":\"labels.text\",\"stylers\":[{\"gamma\":\"5.37\"}]},{\"featureType\":\"all\",\"elementType\":\"labels.text.fill\",\"stylers\":[{\"color\":\"#419d8c\"},{\"lightness\":\"-39\"}]},{\"featureType\":\"all\",\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#ffffff\"},{\"lightness\":16}]},{\"featureType\":\"all\",\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#fefefe\"},{\"lightness\":20}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#fefefe\"},{\"lightness\":17},{\"weight\":1.2}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f5f5f5\"},{\"lightness\":20}]},{\"featureType\":\"landscape.natural\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"saturation\":\"0\"}]},{\"featureType\":\"poi\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f5f5f5\"},{\"lightness\":21}]},{\"featureType\":\"poi.park\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#dedede\"},{\"lightness\":21}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":17}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":29},{\"weight\":0.2}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":18}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":16}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f2f2f2\"},{\"lightness\":19}]},{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#e9e9e9\"},{\"lightness\":17}]},{\"featureType\":\"water\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#42738d\"},{\"gamma\":\"5.37\"}]}]",
    "map_language": "en",
    "mapbox_map_lang": "",
    "mapbox_geocoder_lang": "",
    "osm_map_lang": "",
    "country_restriction": "",
    "main_color": "#00a591",
    "address_order": "front",
    "use_google_direction": "yes",
    "tns_image_too_smal": "Image is too small",
    "tns_now": "Now",
    "tns_done": "Done",
    "search_trigger": "change",
    "pw": {
        "more_char": "Min 6 chars",
        "strong": "Strong",
        "medium": "Medium",
        "weak": "Weak"
    },
    "password_strength": "yes",
    "compare_box_autoopen": "yes",
    "is_gdpr": "0",
    "video_consent_text": "By clicking play you are giving cookies consent",
    "date_format": "MM d, yy",
    "marker_icon_width": "110",
    "marker_icon_height": "110"
};
var adifier_currency_specs = {
    "USD": {
        "abbr": "USD",
        "sign": "$",
        "form": "front",
        "rate": 1,
        "thousands_separator": ",",
        "decimal_separator": ".",
        "show_decimals": "yes"
    },
    "EUR": {
        "abbr": "EUR",
        "sign": "\u20ac",
        "form": "back",
        "rate": "1.4",
        "thousands_separator": ",",
        "decimal_separator": ".",
        "show_decimals": "yes"
    },
    "RUB": {
        "abbr": "RUB",
        "sign": "\u20bd",
        "form": "back",
        "rate": "0.015",
        "thousands_separator": ".",
        "decimal_separator": ",",
        "show_decimals": "yes"
    }
};
/* ]]> */
</script>

<script type='text/javascript' id='adifier-map-consent-js-extra'>
/* <![CDATA[ */
var adifier_map_data = {
    "map_source": "osm",
    "ask_map_consent": "",
    "consent_map_text": "I accept map cookies"
};
/* ]]> */
</script>

<script type='text/javascript' src='../../../unpkg.com/leaflet%401.6.0/dist/leaflet.js' id='adifier-map-js'></script>

<script type='text/javascript' id='adifier-custom-js-extra'>
/* <![CDATA[ */
var adifier_sc = {
    "facebook": "https:\/\/demo.spoonthemes.net\/themes\/adifier\/index.php?adifier-connect=facebook",
    "twitter": "https:\/\/demo.spoonthemes.net\/themes\/adifier\/index.php?adifier-connect=twitter",
    "google": "https:\/\/demo.spoonthemes.net\/themes\/adifier\/index.php?adifier-connect=google"
};
/* ]]> */
</script>
<script defer src="wp-content/cache/autoptimize/js/autoptimize_2daa3ff84495fdbf4d9fb99d37d0b3b8.js"></script>
</body>

@endsection