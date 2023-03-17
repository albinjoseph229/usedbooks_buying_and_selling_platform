@extends('layout/usermaster')
@section('content')
<div class="page-title quick-search">
    <div class="container">
        <div class="flex-wrap">
            <div class="flex-left">
                <h1 class="h4-size">{{$blogs->blog_title}}</h1>
                <ul class="list-unstyled list-inline breadcrumbs">
                    <li><a href="{{ route('userhome')}}">Home</a></li>
                    <li><a href="{{ route('user.viewblogs')}}">View Blogs</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<main>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="white-block">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @elseif(session('failed'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('failed') }}
                    </div>
                    @endif
                    <div class="white-block-media">
                        <img width="750" height="500" src="{{asset('blogimages/'.$blogs->bimage1.'')}}"
                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async"
                            srcset="{{asset('blogimages/'.$blogs->bimage1.'')}}"
                            sizes="(max-width: 750px) 100vw, 750px">
                    </div>
                    <div class="white-block-content">
                        <h4 class="blog-item-title h4-size">{{$blogs->blog_title}}</h4>
                        <div class="post-content clearfix">
                            <p>{{$blogs->blog_description}}</p>
                        </div>
                        <ul class="list-inline list-unstyled single-meta top-advert-meta">
                            <li>
                                <i class="aficon-user-alt"></i>
                                {{$blogs->name}}
                            </li>

                            <li>
                                <i class="aficon-dot-circle-o"></i>
                                <a href="../category/tips-tricks/index.html" class="bz-cat"> {{$blogs->bdate}}</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="white-block">
                    <div class="white-block-title">
                        <h5>
                            {{count($blogcomments)}} Comments</h5>
                    </div>
                    <div class="white-block-content">
                        <div class="comment-content comments">
                            <!-- comment -->
                          @foreach($blogcomments as $blogcomment)
                            <div class="comment " id="comment-27">
                                <div class="flex-wrap flex-start-h">
                                    <div class="flex-left">
                                        <div class="flex-wrap flex-start-h">
                                            <div class="comment-avatar">
                                                <i class="icon-user aficon-user-alt" title="Author"></i>
                                                <img width="100" height="100"
                                                    src="../wp-content/uploads/2018/03/user-4.png"
                                                    class="attachment-thumbnail size-thumbnail" alt="" decoding="async"
                                                    loading="lazy"
                                                    srcset="https://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/03/user-4.png 100w, https://demo.spoonthemes.net/themes/adifier/wp-content/uploads/2018/03/user-4-70x70.png 70w"
                                                    sizes="(max-width: 100px) 100vw, 100px">
                                            </div>

                                            <div class="comment-info">
                                                <h5>{{$blogcomment->name}}</h5>
                                                <p>{{$blogcomment->created_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-content-wrap">
                                    <p>{{$blogcomment->comment}}</p>

                                </div>
                            </div>
                            @endforeach
                            <!-- #comment-## -->
                           
                        </div>
                    </div>
                </div>




            </div>

            <div class="col-sm-4">
                <div class="widget white-block clearfix widget_nav_menu">
                    <div class="white-block-title">
                        <h5>Quick Links</h5>
                    </div>
                    <div class="menu-widget-menu-container">
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

                <div class="white-block">
                    <div class="white-block-title">
                        <h5>Leave A Comment</h5>
                    </div>
                    <div class="white-block-content">

                        <div id="respond" class="comment-respond">
                            <p id="reply-title" class="comment-reply-title"> <a rel="nofollow"
                                    id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">or
                                    cancel reply</a></p>
                            <form method="POST" action="{{url('user.saveblogcomment')}}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" value="{{$blogs->id}}" name="blog_id"><label for="comment">Comment
                                    *</label><textarea rows="10" cols="100" id="comment" name="comment"
                                    class="form-control required" placeholder="Your comment goes here..."></textarea>
                                <div class="alert-error hidden comment-required-fields">Fields marked with * are
                                    required</div>
                                <div class="alert-error hidden comment-required-email">Email is invalid</div>

                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                        value="Send Comment"> <input type="hidden" name="comment_post_ID" value="417"
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
</main>
@endsection