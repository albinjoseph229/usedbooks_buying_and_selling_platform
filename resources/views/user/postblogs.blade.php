@extends('layout/usermaster')
@section('content')
<div class="container" style="margin-top: 35px;">
<h2>Post Your Blog</h2>
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
    <form method="POST" action="{{'user.saveblogs'}}" enctype="multipart/form-data" >
    @csrf
    
        <label for="name">Title *</label>
        <input type="text" id="blogtitle" name="blogtitle" class="form-control required" placeholder="Title of your blog">
    </div> <div class="card-body">
       
       
        <div class="form-group">
    <div class="white-block-content">
        <div id="respond" class="comment-respond">
           
           
                <input type="hidden" value="1" name="aff-cpt"><label for="comment">Blog Content*</label>
                <textarea rows="12" cols="100" id="blogdescr" name="blogdescr" class="form-control required"
                    placeholder="Write You Blog Here........"></textarea>

                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="submit-field" id="quickad-photo-field">
                <div id="item_screen_to_clone" class="clone_item">
                    <div class="multibox file" style="cursor: move;">
                    </div>
                </div>
                <div class="form-group">
                    <div class="btn btn-default btn-file">
             
                      <input type="file" id="file" name="file">
                    </div>
                    
                    <p class="help-block">Max. 32MB</p>
                  </div>
            </div>
                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                            value="Post Blog"> <input type="hidden" name="comment_post_ID" value="425"
                            id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </p>
           
            
        </div><!-- #respond -->

    </div>
</form>
</div>
        </div>
        </div>
</div>
</div>
@endsection