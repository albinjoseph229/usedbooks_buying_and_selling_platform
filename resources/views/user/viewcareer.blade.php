@extends('layout/usermaster')
@section('content')

<div class="page-title quick-search">
    <div class="container">
        <div class="flex-wrap">
            <div class="flex-left">
                <h1 class="h4-size">View Career</h1>
                <ul class="list-unstyled list-inline breadcrumbs">
                    <li><a href="http://localhost/usedbooks/public">Home</a></li>
                    <li>View Career</li>
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
            @php $i=1; @endphp
            @foreach($careers as $careers)
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <article id="post-425"
                            class="hover-shadow white-block post-425 post type-post status-publish format-standard has-post-thumbnail hentry category-tips-tricks tag-cite tag-dollor tag-ipsum tag-laudantium tag-lorem">

                            <a href="velit-esse-cillum-dolore-eu-fugiat-nulla-pariatur/index.html"
                                class="article-media">
                                <img width="750" height="450" src="{{asset('cimages/'.$careers->image.'')}}"
                                    class="attachment-adifier-single-slider size-adifier-single-slider wp-post-image"
                                    alt="" decoding="async">
                            </a>

                            <div class="white-block-content">
                                <h5>
                                    <a href=".velit-esse-cillum-dolore-eu-fugiat-nulla-pariatur/index.html"
                                        class="text-overflow" title="Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur">
                                        {{$careers->ctitle}}</td>}}</a>
                                </h5>

                                <div class="article-excerpt">
                                    <p>{{$careers->description}}</p>
                                </div>

                                <div class="flex-wrap">
                                    <a href="velit-esse-cillum-dolore-eu-fugiat-nulla-pariatur/index.html"
                                        class="af-button">
                                        Read More </a>
                                    <div class="top-advert-meta">
                                        <i class="aficon-dot-circle-o"></i>
                                        <a href="category/tips-tricks/index.html" class="bz-cat">Tips &amp; Tricks</a>
                                    </div>
                                </div>

                            </div>

                        </article>
                    </div>

                </div>

                @php $i++; @endphp
                @endforeach
            </div>


        </div>
    </div>
</main>
@endsection