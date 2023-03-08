@extends('layout/usermaster')
@section('content')
<div class="container" style="margin-top: 35px;">
    <h2>Sell Book</h2>

    <div class="white-block">
        <div class="white-block-title">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @elseif(session('failed'))
            <div class="alert alert-danger" role="alert">
                {{ session('failed') }}
            </div>
            @endif
            <form method="POST" action="{{'user.savebooks'}}" enctype="multipart/form-data">
                @csrf
                <h5>Book Name</h5>
                <input type="text" id="bookname" name="bookname" class="form-control required"
                    placeholder="Name of your book">
        </div>
        <div class="white-block-content">

            <input type="hidden" value="1" name="aff-cpt">
            <h5>Description</h5>
            <textarea rows="12" cols="100" id="bookdescription" name="bookdescription" class="form-control required"
                placeholder="Write Your Books Description........"></textarea>


            <h5>Address</h5>
            <textarea rows="12" cols="100" id="address" name="address" class="form-control required"
                placeholder="Write Your Address Here........"></textarea>


            <div class="submit-field">
                <h5>Phone Number</h5>
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="input-with-icon-left">

                            <input type="text" id="phonenumber" name="phonenumber" class="form-control required"
                                placeholder="Enter Your Phone Number">
                        </div>
                    </div>
                </div>
            </div>

            <div class="submit-field" id="price">
                <h5>Price ₹ </h5>
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="input-with-icon">
                            <input type="text" id="price" name="price" class="form-control required"
                                placeholder="Enter Your price ">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 margin-top-12">

                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="btn btn-default btn-file">

                    <input type="file" id="file" name="file">
                </div>
            </div>
            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Ad">
                <input type="hidden" name="comment_post_ID" value="425" id="comment_post_ID">
                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
            </p>
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="submit-field" id="quickad-photo-field">
                    <div id="item_screen_to_clone" class="clone_item">
                        <div class="multibox file" style="cursor: move;">
                        </div>
                    </div>



                </div><!-- #respond -->

            </div>
        </div>
    </div>
    </form>
</div>
@endsection