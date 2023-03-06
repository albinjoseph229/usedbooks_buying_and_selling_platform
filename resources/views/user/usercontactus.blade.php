@extends('layout/usermaster')
@section('content')
<div class="container" style="margin-top: 35px;">

    

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
    <form method="POST" action="{{'user.savecontactus'}}" enctype="multipart/form-data" >
    @csrf
            <h5>Send Us A Message</h5>
        </div>
        <div class="white-block-content">
            
                <div class="submit-field"
                    <div class="col-sm-4">
                        <label for="subject">Message Subject *</label>
                        <input type="text" id="message_subject" name="message_subject" class="form-control">
                
                </div>
                <div class="form-group">
                    
                  
                <label for="message">Your Message *</label>
                <textarea rows="10" cols="100" id="message__content" name="message_content" class="form-control">

                </textarea>


                <input type="hidden" name="action" value="send_contact">

                <div class="ajax-form-result"></div>

    </div>
                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                            value="send message"> <input type="hidden" name="comment_post_ID" value="425"
                            id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </p>
            </form>
        </div>
    </div>

</div>
@endsection