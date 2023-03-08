@extends('layout/usermaster')
@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="single-advert-tags">
                </div>
                <div class="single-advert-media">
                    <div class="owl-carousel single-slider owl-marked owl-loaded owl-drag" style="">
                        <div class="owl-stage-outer owl-height" style="height: 369.987px;">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 4934px;">
                                <div class="owl-item active" style="width: 616.662px;"><a
                                        href="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                        class="single-slider-href"><img width="750" height="450"
                                            src="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                            class="attachment-adifier-single-slider size-adifier-single-slider" alt=""
                                            decoding="async" loading="eager"></a></div>
                                <div class="owl-item" style="width: 616.662px;"><a
                                        href="../../wp-content/uploads/2018/02/adr-22.jpg"
                                        class="single-slider-href"><img width="750" height="450"
                                            src="../../wp-content/uploads/2018/02/adr-22-750x450.jpg"
                                            class="attachment-adifier-single-slider size-adifier-single-slider" alt=""
                                            decoding="async" loading="eager"
                                            srcset="https://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/02/adr-22-750x450.jpg 750w, https://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/02/adr-22-300x179.jpg 300w"
                                            sizes="(max-width: 750px) 100vw, 750px"></a></div>
                                
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
                                            loading="eager"
                                            srcset="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                            sizes="(max-width: 150px) 100vw, 150px"></div>
                                </div>
                                <div class="owl-item active" style="width: 72.708px; margin-right: 5px;">
                                    <div class="single-thumb-item animation " data-item="1"><img width="150"
                                            height="150" src="{{asset('bookimages/'.$book->coverpage1.'')}}"
                                            class="attachment-thumbnail size-thumbnail" alt="" decoding="async"
                                            loading="eager"
                                            srcset="{{asset('bookimages/'.$book->coverpage1.'')}}"
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
                                <i class="aficon-map-marker-alt-o"></i>
                                <a href="../../advert-location/netherlands/index.html">{{$book->address}}</a>
    
                            </li>

                            <li>
                                <i class="aficon-eye"></i>
                                <i class="aficon-calendar-alt"></i> {{$book->created_at}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="white-block">
                        <div class="white-block-title">
                            <h5>
                                1 Comment </h5>
                        </div>
                        <div class="white-block-content">
                            <div class="comment-content comments">
                                <!-- comment -->
                                <div class="comment " id="comment-2">
                                    <div class="flex-wrap flex-start-h">
                                        <div class="flex-left">
                                            <div class="flex-wrap flex-start-h">
                                                <div class="comment-avatar">
                                                    <i class="icon-user aficon-user-alt" title="Author"></i>
                                                    <img width="100" height="100"
                                                        src="../../wp-content/uploads/2018/03/user-4.png"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/03/user-4.png 100w, https://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/03/user-4-70x70.png 70w"
                                                        sizes="(max-width: 100px) 100vw, 100px">
                                                </div>
                                                <div class="comment-info">
                                                    <h5>Sally Doe</h5>
                                                    <p>March 12, 2018 at 2:47 pm </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content-wrap">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequa</p>

                                    </div>
                                </div><!-- #comment-## -->
                            </div>
                        </div>
                    </div>
                

            </div>
            <div class="col-sm-4">


                <div class="single-price-wrap">
                    <div class="white-block single-price">
                        <i class="aficon-dollar-sign"></i>
                        <div class="white-block-content">
                            <div class="price">{{$book->price}}<span class="price-symbol">€</span></div>
                        </div>
                    </div>
                </div>



                <div class="white-block contact-scroll-details">
                    <div class="white-block-title">
                        <h5>Ad Owner</h5>
                    </div>
                    <div class="white-block-content">
                        <div class="seller-details flex-wrap flex-start-h">
                            <a href="../../author/admin/index.html" class="avatar-wrap">
                                <img width="100" height="100" src="../../wp-content/uploads/2018/03/user-4.png"
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
                                <em>+91 {{$book->phoneno}}</em>
                                
                            </span>
                        </a>

                    </div>
                </div>

             

                <div class="white-block hide-print">
                    <div class="white-block-title">
                        <h5>Ad Action</h5>
                    </div>
                    <div class="white-block-content">
                        <ul class="list-unstyle list-inline single-advert-actions flex-wrap">
                            <li>
                                <a href="#" class="share-advert" data-toggle="modal" data-target="#share">
                                    <i class="aficon-share-alt"></i>
                                    Share </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="print-advert">
                                    <i class="aficon-print"></i>
                                    Print </a>
                            </li>
                            <li>
                                <a title="Favorite" href="#" class="af-favs " data-toggle="modal" data-target="#login">
                                    <i class="aficon-heart-o"></i>
                                    <span>Favorite</span>
                                    <span class="small-icon">Favorite</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="report-advert">
                                    <i class="aficon-flag"></i>
                                    Report </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="compare-add " data-id="88"
                                    title="Add This To Compare">
                                    <i class="aficon-repeat"></i>
                                    Compare </a>
                            </li>
                        </ul>
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
                                <form action="https://demo.spoonthemes.net/themes/adifier/wp-comments-post.php"
                                    method="post" id="commentform" class="comment-form" novalidate=""><input
                                        type="hidden" value="1" name="aff-cpt"><label for="comment">Comment
                                        *</label><textarea rows="10" cols="100" id="comment" name="comment"
                                        class="form-control required"
                                        placeholder="Your comment goes here..."></textarea>
                                    <div class="alert-error hidden comment-required-fields">Fields marked with * are
                                        required</div>
                                   
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                            value="Send Comment"> <input type="hidden" name="comment_post_ID" value="88"
                                            id="comment_post_ID">
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