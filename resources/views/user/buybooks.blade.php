@extends('layout/usermaster')
@section('content')
<div class="page-title quick-search">
    <div class="container">
        <div class="flex-wrap">
            <div class="flex-left">
                <h1 class="h4-size">Browse Ads</h1>
                <ul class="list-unstyled list-inline breadcrumbs">
                    <li><a href="{{ route('/')}}">Home</a></li>
                    <li>Buy Book</li>
                </ul>
            </div>
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
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @elseif(session('failed'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('failed') }}
                        </div>
                        @endif
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
                            <a href="javascript:void(0);" class="reset-search" title="Reset Search"><i
                                    class="aficon-undo"></i></a>
                        </div>

                        <div class="white-block-content">
                            <div class="form-group">
                                <label for="keyword">Keyword</label>
                                <input type="text" class="keyword" name="keyword" id="keyword" value=""
                                    placeholder="Search for...">
                            </div>

                            <div class="form-group">
                                <label class="label-bottom-margin">Category</label>
                                <ul class="list-unstyled taxonomy-filter category-filter">
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="" id="category"
                                                checked=&quot;checked&quot;>
                                            <label for="category">All</label>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="38" id="category-38">
                                            <label for="category-38">Electronics</label>
                                            <a href="javascript:void(0);"><i class="aficon-angle-down"></i></a>

                                        </div>
                                        <ul class="list-unstyled hidden">
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="13" id="category-13">
                                                    <label for="category-13">Computers</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="37" id="category-37">
                                                    <label for="category-37">Drones</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="15" id="category-15">
                                                    <label for="category-15">Notebooks</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="39" id="category-39">
                                                    <label for="category-39">Phones</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="36" id="category-36">
                                                    <label for="category-36">Watches</label>

                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="81" id="category-81">
                                            <label for="category-81">Furniture</label>

                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="42" id="category-42">
                                            <label for="category-42">Jobs</label>
                                            <a href="javascript:void(0);"><i class="aficon-angle-down"></i></a>

                                        </div>
                                        <ul class="list-unstyled hidden">
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="46" id="category-46">
                                                    <label for="category-46">Dancers</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="51" id="category-51">
                                                    <label for="category-51">Drivers</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="43" id="category-43">
                                                    <label for="category-43">Film Stunts</label>

                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="9" id="category-9">
                                            <label for="category-9">Real Estate</label>
                                            <a href="javascript:void(0);"><i class="aficon-angle-down"></i></a>

                                        </div>
                                        <ul class="list-unstyled hidden">
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="11" id="category-11">
                                                    <label for="category-11">Appartments</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="29" id="category-29">
                                                    <label for="category-29">Houses</label>

                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="17" id="category-17">
                                            <label for="category-17">Services</label>
                                            <a href="javascript:void(0);"><i class="aficon-angle-down"></i></a>

                                        </div>
                                        <ul class="list-unstyled hidden">
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="57" id="category-57">
                                                    <label for="category-57">Builders</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="18" id="category-18">
                                                    <label for="category-18">Car Mechanic</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="59" id="category-59">
                                                    <label for="category-59">Moving &amp; Storage</label>

                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="2" id="category-2">
                                            <label for="category-2">Vehicles</label>
                                            <a href="javascript:void(0);"><i class="aficon-angle-down"></i></a>

                                        </div>
                                        <ul class="list-unstyled hidden">
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="25" id="category-25">
                                                    <label for="category-25">Boats &amp; Watercrafts</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="24" id="category-24">
                                                    <label for="category-24">Campers</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="5" id="category-5">
                                                    <label for="category-5">Cars</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="22" id="category-22">
                                                    <label for="category-22">Motocycles</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="23" id="category-23">
                                                    <label for="category-23">Snowmobiles</label>

                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="styled-radio">
                                                    <input type="radio" name="category" value="6" id="category-6">
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
                                <input type="text" class="location" name="location" id="location" value=""
                                    placeholder="Start typing...">
                                <input type="hidden" name="latitude" class="latitude" value="">
                                <input type="hidden" name="longitude" class="longitude" value="">

                                <div class="radius-slider hidden">
                                    <label class="margin-above label-bottom-margin">Radius</label>
                                    <div class="slider-wrap">
                                        <div class="filter-slider" data-min="0" data-max="2000" data-default="2000"
                                            data-sufix="mi"></div>
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
                                <div class="styled-checkbox hidden show-sale-filter">
                                    <input type="checkbox" name="sale-only" value="1" id="sale-only">
                                    <label for="sale-only">Show ads on sale only</label>
                                </div>
                                <div class="styled-checkbox">
                                    <input type="checkbox" name="image-only" value="1" id="image-only">
                                    <label for="image-only">Show ads with image(s) only</label>
                                </div>
                                <div class="styled-checkbox">
                                    <input type="checkbox" name="negotiable-only" value="1" id="negotiable-only">
                                    <label for="negotiable-only">Show negotiable ads only</label>
                                </div>
                               
                            </div>
                            <div class="submit-search-form">
                                <a href="javascript:void(0);" class="af-button filter-adverts">Apply Filters</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-9">
                <div class="ajax-search">
                    <div class="white-block">
                        <div class="white-block-content">
                            <div class="flex-wrap search-order">
                            
                            <h6>
                            
                                    Showing
                                    @foreach($books as $bookcount)
                                    <strong>{{$bookcount->count()}}</strong>
                                    @endforeach
                                    ads found
                                </h6>
                                
                                <div class="flex-right flex-wrap">
                                    <div class="styled-select styled-select-no-label">
                                        <select name="af_orderby" class="orderby">
                                            <option value="" selected='selected'>Sort By Date</option>
                                            <option value="expire-ASC">Sort By Expire</option>
                                            <option value="views-DESC">Sort By Popularity</option>
                                            <option value="price-ASC">Sort By Price - Ascending</option>
                                            <option value="price-DESC">Sort By Price - Descending</option>
                                        </select>
                                    </div>
                                    <div class="layout-view">
                                        <a href="javascript:void(0);" class="active" data-style="grid"><i
                                                class="aficon-th"></i></a>
                                        <a href="javascript:void(0);" class="" data-style="list"><i
                                                class="aficon-th-list"></i></a>
                                        <a href="javascript:void(0);" class="" data-style="card"><i
                                                class="aficon-th-large"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
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
                    <div class="pagination">
                        <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="index5f6c.html?af_page=2">2</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</main>
<a href="javascript:;" class="to_top af-button">
    <i class="aficon-angle-up"></i>
</a>
@endsection