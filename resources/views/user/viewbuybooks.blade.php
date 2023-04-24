@extends('layout/usermaster')
@section('content')
<div class="page-title quick-search">
    <div class="container">
        <div class="flex-wrap">
            <div class="flex-left">
                <h1 class="h4-size">{{$book->bookname}}</h1>
                <ul class="list-unstyled list-inline breadcrumbs">
                    <li><a href="{{ route('userhome')}}">Home</a></li>
                    <li><a href="{{ route('user.buybooks')}}">Buy Books</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="single-advert-tags">
                </div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @elseif(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>

                @elseif(session('failed'))
                <div class="alert alert-danger" role="alert">
                    {{ session('failed') }}
                </div>
                @endif
                <div class="single-advert-media">
                    <div class="owl-carousel single-slider owl-marked owl-loaded owl-drag" style="">
                        <div class="owl-stage-outer owl-height" style="height: 380.987px;">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 4934px;">
                                <div class="owl-item active" style="width: 750.662px;"><a
                                        href="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                        class="single-slider-href"><img width="750" height="450"
                                            src="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                            class="attachment-adifier-single-slider size-adifier-single-slider" alt=""
                                            decoding="async" loading="eager"></a></div>
                               
                            </div>
                        </div>
                        <div class="owl-nav">
                            <div class="owl-prev disabled"><i class="aficon-angle-left"></i></div>
                            <div class="owl-next"><i class="aficon-angle-right"></i></div>
                        </div>
                        <div class="owl-dots">
                            <div class="owl-dot active"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                        </div>
                    </div>
                    <div class="owl-carousel single-slider-thumbs hide-print owl-marked owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 623px;">
                                <div class="owl-item active" style="width: 72.708px; margin-right: 5px;">
                                    <div class="single-thumb-item animation active" data-item="0"><img width="150"
                                            height="150" src="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                            class="attachment-thumbnail size-thumbnail" alt="" decoding="async"
                                            loading="eager" srcset="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                            sizes="(max-width: 150px) 100vw, 150px"></div>
                                </div>
                               

                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <div class="owl-prev disabled"><i class="aficon-angle-left"></i></div>
                            <div class="owl-next disabled"><i class="aficon-angle-right"></i></div>
                        </div>
                        <div class="owl-dots disabled">
                            <div class="owl-dot active"><span></span></div>
                        </div>
                    </div>
                </div>
                <div class="hide-price-big">

                    <div class="single-price-wrap">
                        <div class="white-block single-price">
                            <i class="aficon-dollar-sign"></i>
                            <div class="white-block-content">
                                <div class="price">{{$book->price}}<span class="price-symbol">€</span></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="white-block">
                    <div class="white-block-content">
                        <h4 class="blog-item-title h4-size">{{$book->bookname}}</h4>
                        <div class="post-content clearfix">
                            <p>{{$book->bookdescription}}</p>

                        </div>

                        <ul class="list-inline list-unstyled single-meta top-advert-meta">
                            <li>

                                <b>Location :</b> {{$book->location}}

                            </li>

                            <li>
                             Date&Time: {{$book->created_at}}
                            </li>
                        </ul>
                        <form method="POST" action="{{route('user.sendinterest')}}">
                            @csrf
                            <input type="hidden" name="seller" id="seller" value="{{$book->sellers_id}}">
                            <input type="hidden" name="book" id="book" value="{{$book->id}}">
                            <input type="hidden" name="bookname" id="bookname" value="{{$book->bookname}}">
                            <input type="hidden" name="price" id="price" value="{{$book->price}}">

                            @if(isset(Auth::user()->id))

                            @if($book->sellers_id==Auth::user()->id)
                            <span>You are the author , you cannot buy</span>
                            @else
                            @if(isset($intereststatus))
                            @if($intereststatus->status==0)
                            <button type="submit" class="btn submit">I am Interested</button>
                            @endif
                            @else
                            <button type="submit" class="btn submit">I am Interested</button>
                            @endif

                            @endif
                            @else
                            <a href="{{route('login')}}">Please Login to continue!</a>
                            @endif

                        </form>
                    </div>
                </div>
                <div class="white-block">
                    <div class="white-block-title">
                        <h5>
                            {{count($comments)}} Comment </h5>
                    </div>
                    <div class="white-block-content">
                        <div class="comment-content comments">
                            <!-- comment -->
                            @foreach($comments as $comment)
                            <div class="comment " id="comment-2">
                                <div class="flex-wrap flex-start-h">
                                    <div class="flex-left">
                                        <div class="flex-wrap flex-start-h">

                                            <div class="comment-info">
                                                <h5>{{Auth::user()->name}}</h5>
                                                <p>{{$comment->created_at}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-content-wrap">
                                    <h6>Comment</h6>
                                    <p>{{$comment->comment}}</p>

                                </div>
                                <div class="comment-content-wrap">
                                    <h6>Reply</h6>
                                    <p>{{$comment->reply}}</p>

                                </div>
                            </div>
                            <!-- #comment-## -->
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="white-block">
                    <div class="white-block-title">
                        <h5>
                            {{count($complaints)}} Complaint </h5>
                    </div>
                    <div class="white-block-content">
                        <div class="comment-content comments">
                            <!-- comment -->
                            @foreach($complaints as $complaint)
                            <div class="comment " id="comment-2">
                                <div class="flex-wrap flex-start-h">
                                    <div class="flex-left">
                                        <div class="flex-wrap flex-start-h">

                                            <div class="comment-info">

                                                <p>{{$complaint->created_at}} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-content-wrap">

                                    <p>{{$complaint->complaint}}</p>

                                </div>

                            </div><!-- #comment-## -->
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-sm-4">


                <div class="single-price-wrap">
                    <div class="white-block single-price">
                        <i class="aficon-dollar-sign"></i>
                        <div class="white-block-content">
                            <h5>Price</h5>
                            <div class="price">₹{{$book->price}}</div>
                        </div>
                    </div>
                </div>



                <div class="white-block contact-scroll-details">
                    <div class="white-block-title">
                        <h5>Book Seller</h5>
                    </div>
                    <div class="white-block-content">
                        <div class="seller-details flex-wrap flex-start-h">
                            <a href="../../author/admin/index.html" class="avatar-wrap">
                                <img width="100" height="100" src="{{asset('wp-content/uploads/2018/03/user-4.png')}}"
                                    class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy"
                                    srcset="https://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/03/user-4.png 100w, https://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/03/user-4-70x70.png 70w"
                                    sizes="(max-width: 100px) 100vw, 100px"> </a>

                            <div class="seller-name">
                                <h5>
                                    <a href="../../author/admin/index.html">
                                        {{$book->name}}</a>
                                </h5>
                                <div class="user-rating">
                                    {{$book->email}}
                                </div>
                                <div class="online-status offline flex-wrap flex-start-h"><span></span>Offline</div>
                            </div>
                        </div>

                        <a href="javascript:void(0);" class="reveal-phone flex-wrap flex-start-h" data-last="751">
                            <i class="aficon-phone"></i>
                            <span class="flex-right">
                                <em>+91 {{$book->phonenumber}}</em>

                            </span>
                        </a>
                        <h6>Address</h6>
                        <p>{{$book->address}}</p>

                    </div>
                </div>



                <div class="white-block hide-print">
                    <div class="white-block-title">
                        <h5>Interest Status</h5>
                    </div>
                    <div class="white-block-content">
                        @if(isset($intereststatus))
                        @if($intereststatus->status==0)
                        <span>Pending</span>
                        @elseif($intereststatus->status==1)
                        <span>Confirmed</span>
                        @else
                        <span>Seller Not Interested</span>
                        @endif
                        @endif
                    </div>
                </div>
                <div class="hide-print small-screen-last">



                    <div class="white-block">
                        <div class="white-block-title">
                            <h5>Leave A Comment</h5>
                        </div>
                        <div class="white-block-content">
                            <div id="respond" class="comment-respond">
                                <p id="reply-title" class="comment-reply-title"> <a rel="nofollow"
                                        id="cancel-comment-reply-link" href="index.html#respond"
                                        style="display:none;">or cancel reply</a></p>
                                <form action="{{route('user.sendcomment')}}" method="post">
                                    @csrf
                                    <label for="comment">Comment
                                        *</label>
                                    <textarea required rows="10" cols="100" id="comment" name="comment"
                                        class="form-control required"
                                        placeholder="Your comment goes here..."></textarea>
                                    <div class="alert-error hidden comment-required-fields">Fields marked with * are
                                        required</div>
                                    <input type="hidden" name="cseller" id="cseller" value="{{$book->sellers_id}}">
                                    <input type="hidden" name="cbook" id="cbook" value="{{$book->id}}">
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                            value="Send Comment"> <input type="hidden" name="comment_post_ID" value="88"
                                            id="comment_post_ID">
                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                    </p>
                                </form>
                            </div><!-- #respond -->

                        </div>
                    </div>
                    <div class="white-block">
                        <div class="white-block-title">
                            <h5>Leave A Complaint</h5>
                        </div>
                        <div class="white-block-content">
                            <div id="respond" class="comment-respond">

                                <form action="{{route('user.sendcomplaint')}}" method="post">
                                    @csrf
                                    <label for="comment">Complaint
                                        *</label>
                                    <textarea required rows="10" cols="100" id="complaint" name="complaint"
                                        class="form-control required"
                                        placeholder="Your Complaint goes here..."></textarea>
                                    <div class="alert-error hidden comment-required-fields">Fields marked with * are
                                        required</div>
                                    <input type="hidden" name="mseller" id="mseller" value="{{$book->sellers_id}}">
                                    <input type="hidden" name="mbook" id="mbook" value="{{$book->id}}">
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                            value="Send Complaint"> <input type="hidden" name="comment_post_ID"
                                            value="88" id="comment_post_ID">
                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                    </p>
                                </form>
                            </div><!-- #respond -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

@endsection