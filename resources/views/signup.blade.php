@extends('layout/master')
@section('content')
<link href='https://css.gg/eye.css' rel='stylesheet'>
<div style="margin-top: 35px;width: 30%;border: black;background: white;padding: 38px;" class="container"
    style="margin-top: 35px;">

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @elseif(session('failed'))
    <div class="alert alert-danger" role="alert">
        {{ session('failed') }}
    </div>
    @endif
    <form method="post" class="ajax-form" method="POST" action="{{route('saveuser')}}" autocomplete="off">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register</h5>
                <a href="#" data-dismiss="modal"></a>
            </div>
            <div class="modal-body">


                <div class="ajax-form-result"></div>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-group has-feedback">
                            <label for="name" class="bold">Username *</label>
                            <input type="text" class="form-control" id="name" name="name" required
                                placeholder="Your desired username" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group has-feedback">
                            <label for="email" class="bold">Email *</label>
                            <input type="email" class="form-control" id=email" name="email"
                                placeholder="It will be verified" required />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group has-feedback">
                            <label class="bold">Phone No*</label>
                            <input type="text" class="form-control" id="phoneno" name="phoneno"
                                placeholder="It will be verified" required />
                            @error('phoneno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-group has-feedback relative-wrap">
                            <label for="reg_password" class="bold">Password * <span class="pw-strength"></span></label>
                            <input type="password" class="form-control reveal-password pw-check-strength"
                                id="reg_password" name="reg_password" required placeholder="Use a strong password" />
                            <a href="javascript:;" title="View Password" class="toggle-password"><i
                                    class="gg-eye"></i></a>
                            @error('reg_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group has-feedback relative-wrap">
                            <label for="reg_r_password" class="bold">Repeat Password*</label>
                            <input type="password" class="form-control reveal-password" id="cregpassword"
                                name="cregpassword" required placeholder="for making sure it's correct" />
                            <a href="javascript:;" title="View Password" class="toggle-password"><i
                                    class="gg-eye"></i></a>
                            @error('cregpassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>


                <input type="submit" class="submit-ajax-form af-button" value="Register" />
    </form>

    <div class="text-center">
        <a href="#" class="forgot" data-toggle="modal" data-target="#resend" data-dismiss="modal">Resend
            verification?</a>
    </div>

    <div class="or-divider">
        <h6>OR</h6>
    </div>

    <div class="text-center">
        <label>Sign In With</label>
    </div>
    <ul class="list-unstyled social-login">
        <li>
            <a href="javascript:void(0);" class="facebook">
                <img src="wp-content/themes/adifier/images/facebook.png" width="48" height="48">
                <span>Facebook</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="twitter">
                <img src="wp-content/themes/adifier/images/twitter.png" width="58" height="48">
                <span>Twitter</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="google">
                <img src="wp-content/themes/adifier/images/google.png" width="70" height="70">
                <span>Google</span>
            </a>
        </li>
    </ul>

    <div class="text-center">
        <a href="{{route('login')}}" class="register-acc" data-toggle="modal" data-target="#login"
            data-dismiss="modal">Already have
            an account? Login here.</a>
    </div>

    <input type="hidden" value="adifier_register" name="action" />
</div>
<input type="hidden" id="adifier_nonce" name="adifier_nonce" value="8840aa4f4f" /><input type="hidden"
    name="_wp_http_referer" value="/themes/adifier/" /> </form>
</div>

</div>
</div>

<div class="modal in lrr" id="recover" tabindex="-1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" class="ajax-form" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title">Recover Password</h5>
                    <a href="#" data-dismiss="modal"><i class="aficon-times"></i></a>
                </div>
                <div class="modal-body">
                    <div class="ajax-form-result"></div>
                    <div class="form-group has-feedback">
                        <label for="rec_email" class="bold">Email *</label>
                        <input type="text" class="form-control" id="rec_email" name="rec_email"
                            placeholder="Your registered email" />
                    </div>
                    <a href="javascript:;" class="submit-ajax-form af-button">Recover </a>

                    <div class="text-center">
                        <a href="{{ route('login')}}" class="register-acc" data-toggle="modal" data-target="#login"
                            data-dismiss="modal">Already have an account? Login here.</a>
                    </div>


                    <input type="hidden" value="adifier_recover" name="action" />
                </div>
                <input type="hidden" id="adifier_nonce" name="adifier_nonce" value="8840aa4f4f" /><input type="hidden"
                    name="_wp_http_referer" value="/themes/adifier/" />
            </form>
        </div>

    </div>
</div>

<div class="modal in lrr" id="resend" tabindex="-1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" class="ajax-form" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title">Resend Verification</h5>
                    <a href="#" data-dismiss="modal"><i class="aficon-times"></i></a>
                </div>
                <div class="modal-body">

                    <div class="ajax-form-result"></div>

                    <div class="form-group has-feedback">
                        <label for="res_email" class="bold">Email *</label>
                        <input type="text" class="form-control" id="res_email" name="res_email"
                            placeholder="Your registered email" />
                    </div>


                    <a href="javascript:;" class="submit-ajax-form af-button">Resend </a>

                    <input type="hidden" value="adifier_resend" name="action" />
                </div>
                <input type="hidden" id="adifier_nonce" name="adifier_nonce" value="8840aa4f4f" /><input type="hidden"
                    name="_wp_http_referer" value="themes/adifier/" />
            </form>
        </div>

    </div>
</div>


@endsection