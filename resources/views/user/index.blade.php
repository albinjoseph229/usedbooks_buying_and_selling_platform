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
            
            <div class="kc-elm kc-css-874828 kc_col-sm-1 kc_column kc_col-sm-1">
                <div class="kc-col-container"></div>
            </div>
        </div>
    </div>
</section>


<section class="kc-elm kc-css-195631 kc_row">
    <div class="kc-row-container kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm
                                                                                                                                                kc-css-939935 kc_col-sm-12 kc_column
                                                                                                                                                kc_col-sm-12">
                <div class="kc-col-container">
                    <div data-open-on-mouseover="" data-tab-active="1" data-effect-option="" class="kc-elm
                                                                                                                                                        kc-css-62492 kc_tabs group">
                        <div class="kc_wrapper ui-tabs
                                                                                                                                                            kc_clearfix">
                            <ul class="kc_tabs_nav ui-tabs-nav
                                                                                                                                                                kc_clearfix">
                                <li class="ui-tabs-active"><a href="#latest-ads" data-prevent="scroll">Latest Ads</a></li>
             
                            </ul>
                            <div class="af-items-3 af-listing-grid">
                            @php $i=1; @endphp
                            @foreach($books as $books)
                                             
                                                <div class="af-item-wrap">
                                                    <div class="white-block hover-shadow advert-item advert-grid advert-hightlight">
                        
                        
                                                        <a href="{{url('user.buybooks/'.$books->slug.'/'.$books->slug)}}"
                                                            class="advert-media">
                                                            <img width="355" height="250" src="{{asset('bookimages/'.$books->coverpage1.'')}}"
                                                                class="attachment-adifier-grid size-adifier-grid wp-post-image" alt=""
                                                                decoding="async" loading="lazy" /> </a>
                        
                                                        <div class="white-block-content">
                        
                                                            <div class="top-advert-meta flex-wrap">
                                                                <div class="advert-cat text-overflow">
                                                                    <i class="aficon-dot-circle-o"></i>
                                                                    <a href="{{ route('user.viewbuybooks')}}">Vehicles</a>
                                                                </div>
                                                                <div class="advert-city text-overflow">
                                                                    <i class="aficon-map-marker-alt-o"></i>
                                                                    <a href="advert-location/amsterdam/index.html"> {{$books->address}}</a>
                                                                </div>
                                                            </div>
                                                            <h5 class="adv-title">
                                                                <a href="{{ route('user.viewbuybooks')}}"
                                                                    class="text-overflow"
                                                                    title="Scania R-SRS L-CLASS R450 LA Streamline Highline Diesel">
                                                                    {{$books->bookname}}</a>
                                                            </h5>
                                                            <div class="bottom-advert-meta flex-wrap">
                                                                <div class="price">₹{{$books->price}}</div>
                                                                <div class="flex-right">
                                                                    <a href="javascript:void(0);" class="compare-add " data-id="88"
                                                                        title="Add This To Compare">
                                                                        <i class="aficon-repeat"></i>
                                                                    </a>
                        
                                                                    <a title="Favorite" href="#" class="af-favs " data-toggle="modal"
                                                                        data-target="#login">
                                                                        <i class="aficon-heart-o"></i>
                                                                        <span>Favorite</span>
                                                                        <span class="small-icon">Favorite</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                        
                                                        <div class="search-map-la-long hidden" data-id="88" data-longitude="4.89516790"
                                                            data-latitude="52.37021570" data-icon="https://wp-content/uploads/2018/02/cars.png"
                                                            data-iconwidth="110" data-iconheight="110"></div>
                                                </div>
                                                </div>
                                       
@php $i++; @endphp
@endforeach
                            </div>
                        </div>
                                            </section>


</div></div></div></div></section>
<section data-kc-equalheight="true" data-kc-equalheight-align="middle" class="kc-elm kc-css-662149 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-237606 kc_col-sm-5 kc_column kc_col-sm-5">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-466926 kc_text_block">
                        <h2><span style="color: #ffffff;">Register &#038; Benefit</span></h2>
                        <ul style="color: #fff;">
                            <li><span style="color: #ffffff;">Sell Your Old Books</span></li>
                            <li><span style="color: #ffffff;">Post Your Blogs</span></li>
                            <li><span style="color: #ffffff;">View Career Options</span></li>
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