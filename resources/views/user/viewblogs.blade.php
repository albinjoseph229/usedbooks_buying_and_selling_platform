@extends('layout/usermaster')
@section('content')
<main>
	
	<div class="container">
	<h2>View Blogs</h2>
		<div class="row">
		@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @elseif(session('failed'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('failed') }}
                        </div>
                        @endif
			<div class="col-sm-12">
									
									@php $i=1; @endphp
                                        @foreach($blog as $blog)
										<div class="row">
								
							<div class="col-sm-6">
								<article id="post-425" class="hover-shadow white-block post-425 post type-post status-publish format-standard has-post-thumbnail hentry category-tips-tricks tag-cite tag-dollor tag-ipsum tag-laudantium tag-lorem">

										<a href="velit-esse-cillum-dolore-eu-fugiat-nulla-pariatur/index.html" class="article-media">
											<img width="750" height="450" src="{{asset('blogimages/'.$blog->bimage1.'')}}" class="attachment-adifier-single-slider size-adifier-single-slider wp-post-image" alt="" decoding="async">										
										</a>
									
									<div class="white-block-content">
										<h5>
											<a href=".velit-esse-cillum-dolore-eu-fugiat-nulla-pariatur/index.html" class="text-overflow" title="Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur">
											<td>{{$blog->blog_title}}</td></a>
										</h5>

										<div class="article-excerpt">
											<p>{{$blog->blog_description}}</p>
										</div>
											
										<div class="flex-wrap">
											<a href="velit-esse-cillum-dolore-eu-fugiat-nulla-pariatur/index.html" class="af-button">
												Read More											</a>
											<div class="top-advert-meta">
												<i class="aficon-dot-circle-o"></i>
												<a href="category/tips-tricks/index.html" class="bz-cat">Tips &amp; Tricks</a> 											</div>
										</div>

							        </div>
						        </article>
							</div>
							
					@php $i++; @endphp
                    @endforeach
			</div>
		</div>
	</div>
</main>
@endsection
