@extends('layout/usermaster')
@section('content')
<link href='https://css.gg/eye.css' rel='stylesheet'>
<div style="margin-top: 40px;width: 30%;border: black;background: white;padding: 42px;" class="container"
    style="margin-top: 405px;">

    <div clas="col-md-10">
        <div class="card">
            <div class="ajax-form" autocomplete="off"><input type="hidden" value="1" name="aff-cpt">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <a href="#" data-dismiss="modal"><i class="aficon-times"></i></a>
                </div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @elseif(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>

                @elseif(session('failed'))
                <div class="alert alert-danger" role="alert">
                    {{ session('failed') }}
                </div>
                @endif

                <div class="modal-body">
                    <div class="ajax-form-result"></div>
                    <div class="row">

                        <form method="POST" action="{{route('user.updatepassword')}}">
                            @csrf

                            <div class="col-sm-10">
                                <div class="form-group has-feedback">
                                    <label for="log_username" class="bold">Old Password*</label>
                                    <input type="password" class="form-control" id="reg_password" name="reg_password"
                                        <div class="form-group has-feedback relative-wrap">
                                    <label for="new_password" class="bold">New Password * <span
                                            class="pw-strength"></span></label>
                                    <input type="password" class="form-control reveal-password pw-check-strength"
                                        id="new_password" name="new_password" required
                                        placeholder="Use a strong password" />
                                    <a href="javascript:;" title="View Password" class="toggle-password">
                                        <i class="gg-eye"></i></a>

                                </div>


                                <div class="form-group has-feedback relative-wrap">
                                    <label for="password_confirmation" class="bold">Repeat New Password*</label>
                                    <input type="password" class="form-control reveal-password"
                                        id="password_confirmation" name="password_confirmation" required
                                        placeholder="for making sure it's correct" />
                                    <a href="javascript:;" title="View Password" class="toggle-password"><i
                                            class="gg-eye"></i></a>

                                </div>

                            </div>


                            <button type="submit" class="submit-ajax-form af-button">Change Password </button>

                            <div class="text-center">
                                <a href="#" class="forgot" data-toggle="modal" data-target="#recover"
                                    data-dismiss="modal">Forgotten your password?</a>
                            </div>

                            <input type="hidden" value="adifier_login" name="action">
                    </div>
                    <input type="hidden" id="adifier_nonce" name="adifier_nonce" value="8840aa4f4f"><input type="hidden"
                        name="_wp_http_referer" value="/themes/adifier/contact/">
                    </form>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection