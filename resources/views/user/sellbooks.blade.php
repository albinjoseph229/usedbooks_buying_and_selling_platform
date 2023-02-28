@extends('layout/usermaster')
@section('content')

<h2>Sell Book</h2>

<div class="white-block">
    <div class="white-block-title">
     <h5>Book Name</h5>
        <input type="text" id="name" name="author" class="form-control required" placeholder="Name of your blog">
    </div>
    <div class="white-block-content">
        
            <form action="https://themes/adifier/wp-comments-post.php" method="post" id="commentform"
                class="comment-form" novalidate="">
                <input type="hidden" value="1" name="aff-cpt">
                <h5>Description</h5>
                <textarea rows="12" cols="100" id="comment" name="comment" class="form-control required"
                    placeholder="Write Your Books Description........"></textarea>

              
                <h5>Address</h5>
                <textarea rows="12" cols="100" id="comment" name="comment" class="form-control required"
                    placeholder="Write Your Address Here........"></textarea>

                    <div class="submit-field">
                        <h5>Phone Number</h5>
                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="input-with-icon-left">
                                    <i class="flag-img"><img src="https://classified.bylancer.com/includes/assets/plugins/flags/images/in.png"></i>
                                    <input type="text" class="with-border" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="checkbox margin-top-12">
                                    <input type="checkbox" name="hide_phone" id="phone" value="1">
                                    <label for="phone"><span class="checkbox-icon"></span>
                                        Hide</label>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="submit-field" id="quickad-price-field">
                                                <h5>Price ₹ </h5>
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="input-with-icon">
                                                            <input class="with-border" type="text" placeholder="Price"
                                                                name="price">
                                                            <i class="currency">₹</i>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12 margin-top-12">
                                                        <div class="checkbox">
                                                            <input type="checkbox" id="negotiable" name="negotiable"
                                                                value="1">
                                                            <label for="negotiable"><span class="checkbox-icon"></span>
                                                                negotiate</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                <div id="item_screenDDArea">
                    <div id="item_screen" class="ui-sortable"> </div>
                    <div class="multibox uploadButton" onclick="javascript:orakuploaderLoad('item_screen');"> 
                    <h5>Upload Image</h5>
                        <br></div> <input type="file" class="item_screenInput orakuploaderFileInput"
                        accept="image/*" multiple="">
                    <div class="clear"> </div>
                </div>
            </div>
                    <p class="form-submit"><input name="Post Ad" type="submit" id="submit" class="submit"
                            value="Post Blog"> <input type="hidden" name="comment_post_ID" value="425"
                            id="comment_post_ID">
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
    
            </form>
            
        </div><!-- #respond -->

    </div>
</div>
@endsection