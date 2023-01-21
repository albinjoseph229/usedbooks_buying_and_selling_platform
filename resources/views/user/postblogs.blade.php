@extends('layout/usermaster')
@section('content')
<h2>Post Your Blog</h2>
<div class="white-block">
    <div class="white-block-title">
        <label for="name">Title *</label>
        <input type="text" id="name" name="author" class="form-control required" placeholder="Title of your blog">
    </div>
    <div class="white-block-content">
        <div id="respond" class="comment-respond">
            <p id="reply-title" class="comment-reply-title">
                <a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">or
                    cancel reply</a>
            </p>
            <form action="https://themes/adifier/wp-comments-post.php" method="post" id="commentform"
                class="comment-form" novalidate="">
                <input type="hidden" value="1" name="aff-cpt"><label for="comment">Blog Content*</label>
                <textarea rows="12" cols="100" id="comment" name="comment" class="form-control required"
                    placeholder="Write You Blog Here........"></textarea>

                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="submit-field" id="quickad-photo-field">
                <div id="item_screen_to_clone" class="clone_item">
                    <div class="multibox file" style="cursor: move;">
                    </div>
                </div>
                <div id="item_screenDDArea">
                    <div id="item_screen" class="ui-sortable"> </div>
                    <div class="multibox uploadButton" onclick="javascript:orakuploaderLoad('item_screen');"> 
                    <br><span>Upload
                            Images</span> </div> <input type="file" class="item_screenInput orakuploaderFileInput"
                        accept="image/*" multiple="">
                    <div class="clear"> </div>
                </div>
            </div>
                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                            value="Post Blog"> <input type="hidden" name="comment_post_ID" value="425"
                            id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </p>
            </form>
            
        </div><!-- #respond -->

    </div>
</div>
@endsection