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
    <div class="container" style="width:80%">
        
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
                            <h5>Dashboard</h5>
                            <a href="javascript:void(0);" class="reset-search" title="Reset Search"><i class="aficon-undo"></i></a>
                        </div>

                        <div class="white-block-content">
                           

                            <div class="form-group">
                               
                                <ul class="list-unstyled taxonomy-filter category-filter">
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="" id="category" checked="&quot;checked&quot;">
                                            <label for="category">Profile</label>
                                            <a href=""><i class="aficon-angle-down"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="" id="category" checked="&quot;checked&quot;">
                                            <label for="category"><a href="{{route('user.viewmyblogs')}}">View Blogs</a></label>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="" id="category" checked="&quot;checked&quot;">
                                            <label ><a href="{{route('user.viewmybooks')}}">View Books</a></label>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="styled-radio">
                                            <input type="radio" name="category" value="" id="category" checked="&quot;checked&quot;">
                                            <label ><a href="{{route('user.bookrequests')}}">View Book Requests</a></label>
                                        </div>
                                    </li>

                                   
                                </ul>
                            </div>

                            <div class="category-custom-fields">
                            </div>

                           

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-9">
                <div class="white-block">
                    <div class="white-block-title">
                              <span>Profile</span>     
                    </div>
                    <div class="card-body">
                        
            <div class="form-group">
                <div class="white-block-content">
                    <div id="respond" class="comment-respond">


                        <input type="hidden" value="1" name="aff-cpt">
                       
                        <div class="row">
                            <label for="comment">Name</label>
                        <input type="text" rows="12" cols="100" id="uname" name="uname" value="{{Auth::user()->name}}" class="form-control" required />
                           
                        @error('uname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    
                            <label for="comment">Email</label>
                        <input type="text" rows="12" cols="100" id="email" name="email" value="{{Auth::user()->email}}" class="form-control" readonly />
                           
                        @error('uname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror 
                        <label for="comment">Contact Number</label>
                        <input type="text" rows="12" cols="100" id="contact" name="contact" value="{{Auth::user()->phoneno}}" class="form-control" readonly />
                           
                        @error('uname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror 
                       

                    </div>
                    </form>
                </div>
            </div>
            
                    </div>
                </div>
            </div>




         
        </div>
      

    </div>
   
</main>

@endsection