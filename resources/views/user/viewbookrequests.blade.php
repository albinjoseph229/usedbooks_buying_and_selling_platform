@extends('layout/usermaster')
@section('content')
<div class="page-title quick-search">
    <div class="container">
        <div class="flex-wrap">
            <div class="flex-left">
                <h1 class="h4-size">View Book Requests</h1>
                <ul class="list-unstyled list-inline breadcrumbs">
                    <li><a href="{{ route('/')}}">Home</a></li>
                    <li>View Book Requests</li>
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
                              <span>View Book Requests</span>     
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @elseif(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                            @endif
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Book Title</th>
                                            <th>Customer</th>
                                            <th>Contact Number</th>
                                            <th>Date</th>
                                            <th>Request Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    @php $i=1; @endphp 
                                    @foreach($requests as $book)
                                    <tr>
                                        <td>{{$i}} </td>
                                        <td>{{$book->bname}}</td>
                                        <td>{{$book->name}}</td>
                                        <td>{{$book->phoneno}}</td>
                                        <td>{{$book->date}}</td>
                                        <td>@if($book->status==0) Pending @elseif($book->status==1) Accepted @endif </td>
                                        <td>
                                            <form method="post" action="{{route('user.deleteintbook')}}">
                                                @csrf
                                                <input type="hidden" id="dodelete" name="dodelete" value="{{$book->id}}" />
                                            <button title="Reject Request" class="btn btn-danger btn-sm deleteme"
                                                data-value="{{$book->id}}" data-toggle="modal"
                                                data-target="#modal-primary">Delete</button>
                                            </form>
                                            <form method="post" action="{{route('user.acceptrequest')}}">
                                                @csrf
                                                <input type="hidden" id="doupdate" name="doupdate" value="{{$book->id}}" />
                                            <button title="Accept Request" class="btn btn-danger btn-sm deleteme"
                                                data-value="{{$book->id}}" data-toggle="modal"
                                                data-target="#modal-primary">Accept</button>
                                            </form>
                                               
                                        </td>
                                        </td>
                                    </tr>
                                    @php $i++; @endphp
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>S.No</th>
                                            <th>Book Title</th>
                                            <th>Customer</th>
                                            <th>Contact Number</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                    </div>
                </div>
            </div>




         
        </div>
      

    </div>
   
</main>

@endsection