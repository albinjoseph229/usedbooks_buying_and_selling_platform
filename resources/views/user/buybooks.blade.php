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
                            <h5>Quick Links</h5>
                            <a href="javascript:void(0);" class="reset-search" title="Reset Search"><i
                                    class="aficon-undo"></i></a>
                        </div>

                        <div class="white-block-content">
                            

                            <div class="form-group">
                            
                                <ul id="menu-widget-menu" class="menu">
                                    <li id="menu-item-362"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-362"><a
                                            href="{{ route('user.postblogs')}}">Post Blogs</a></li>
                                    <li id="menu-item-358"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-358"><a
                                            href="{{ route('user.howitworks')}}">How It Works</a></li>
                                    <li id="menu-item-359"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-359"><a
                                            href="{{ route('user.usercontactus')}}">Contact Us</a></li>
                                    <li id="menu-item-360"
                                        class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-360">
                                        <a href="{{ route('user.viewcareer')}}">View Creer</a>
                                    </li>
                                    <li id="menu-item-361"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-361"><a
                                            href="{{ route('user.sellbooks')}}">Sell Books</a></li>
        
                                </ul>
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

                                    <strong>{{count($books)}}</strong>

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
                        @foreach($books as $book)
                        <div class="af-item-wrap">
                            <div class="white-block hover-shadow advert-item advert-grid advert-hightlight">


                                <a href="{{url('user.buybooks/'.$book->id.'')}}" class="advert-media">
                                    <img width="355" height="250" src="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                        class="attachment-adifier-grid size-adifier-grid wp-post-image" alt=""
                                        decoding="async" loading="lazy" />
                                    <div class="white-block-content">

                                        <div class="top-advert-meta flex-wrap">
                                            <div class="advert-cat text-overflow">
                                                <i class="aficon-dot-circle-o"></i>
                                                <a href="{{url('user.buybooks/'.$book->id.'')}}">Vehicles</a>
                                            </div>
                                            <div class="advert-city text-overflow">
                                                <i class="aficon-map-marker-alt-o"></i>
                                                <a href="{{url('user.buybooks/'.$book->id.'')}}"> {{$book->location}}</a>
                                            </div>
                                        </div>
                                        <h5 class="adv-title">
                                            <a href="{{url('user.buybooks/'.$book->id.'')}}" class="text-overflow"
                                                title="{{$book->bookname}}">
                                                {{$book->bookname}}</a>

                                        </h5>
                                        <div class="bottom-advert-meta flex-wrap">
                                            <div class="price">₹{{$book->price}}</div>
                                            <div class="flex-right">
                                                <a href="javascript:void(0);" class="compare-add " data-id="88"
                                                    title="Add This To Compare">
                                                    <i class="aficon-repeat"></i>
                                                </a>

                                                <a title="Favorite" href="{{url('user.buybooks/'.$book->id.'')}}"
                                                    class="af-favs " data-toggle="modal" data-target="#login">
                                                    <i class="aficon-heart-o"></i>
                                                    <span>Favorite</span>
                                                    <span class="small-icon">Favorite</span>
                                                </a>
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
      
        <div class="">
           
            {{ $books->links() }}
                       
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