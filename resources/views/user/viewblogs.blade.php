@extends('layout/usermaster')
@section('content')
<div class="page-title quick-search">
    <div class="container">
        <div class="flex-wrap">
            <div class="flex-left">
                <h1 class="h4-size">View Blogs</h1>
                <ul class="list-unstyled list-inline breadcrumbs">
                    <li><a href="http://localhost/usedbooks/public">Home</a></li>
                    <li>View Blogs</li>
                </ul>
            </div>

        </div>
    </div>
</div>
<main>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @elseif(session('failed'))
    <div class="alert alert-danger" role="alert">
        {{ session('failed') }}
    </div>
    @endif

    <div class="container">

        <div class="row">

            <div class="col-sm-12">


                <div class="row">
                    @php $i=1; @endphp
                    @foreach($blog as $blogs)
                    <div class="col-sm-4">
                        <article id="post-425"
                            class="hover-shadow white-block post-425 post type-post status-publish format-standard has-post-thumbnail hentry category-tips-tricks tag-cite tag-dollor tag-ipsum tag-laudantium tag-lorem">

                            <a href="{{url('user.viewblogs/'.$blogs->id.'')}}" class="article-media">
                                <img width="750" height="450" src="{{asset('blogimages/'.$blogs->bimage1.'')}}"
                                    class="attachment-adifier-single-slider size-adifier-single-slider wp-post-image"
                                    alt="" decoding="async"> </a>

                            <div class="white-block-content">
                                <h5> {{$blogs->blog_title}}
                                    <a href="{{url('user.viewblogs/'.$blogs->id.'')}}" class="text-overflow"
                                    title="">
                                        </a>
                                </h5>

                                <div class="flex-wrap">
                                    <a href="{{url('user.viewblogs/'.$blogs->id.'')}}" class="af-button">
                                        Read More </a>
                                    <div class="top-advert-meta">
                                        </i>
                                        <a href="{{url('user.viewblogs/'.$blogs->id.'')}}"
                                            class="bz-cat">{{$blogs->created_at}}</a>
                                    </div>
                                </div>

                            </div>

                        </article>
                    </div>
                    @php $i++; @endphp
                    @endforeach
                </div>
            </div>



        </div>


    </div>

</main>
@endsection