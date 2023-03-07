@extends('layout/usermaster')
@section('content')

<div class="container" style="margin-top: 35px;">
    <h2>Send Us Your Message</h2>
   
        
        @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}  
    </div>
    @elseif(session('failed'))
    <div class="alert alert-danger" role="alert">
        {{ session('failed') }}
    </div>
    @endif
    <form method="POST" action="{{'user.savecontactus'}}" enctype="multipart/form-data" >
    @csrf
    <div class="white-block">
    <div class="white-block-title">
    <label for="name">Message Subject *</label>
    <input type="text" id="message_subject" name="message_subject" class="form-control required" placeholder="Your Message Subject">
</div> 
<div class="card-body">
   
   
    <div class="form-group">
<div class="white-block-content">
                <div id="respond" class="comment-respond">
           
           
                    <input type="hidden" value="1" name="aff-cpt"><label for="comment">Message Content*</label>
                    <textarea rows="12" cols="100" id="message_description" name="message_description" class="form-control required"
                        placeholder="Write   You Message Here........"></textarea>
    
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="submit-field" id="quickad-photo-field">
                    <div id="item_screen_to_clone" class="clone_item">
                        <div class="multibox file" style="cursor: move;">
                        </div>
                    </div>

    </div>
</div>
                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                            value="send message"> <input type="hidden" name="comment_post_ID" value="425"
                            id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </p>
                                
        </div><!-- #respond -->

    
            </form>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection