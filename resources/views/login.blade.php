@extends('layout/master')
@section('content')
<link href='https://css.gg/eye.css' rel='stylesheet'>
<div class="container" style="margin-top: 40px;width: 30%;border: black;background: white;padding: 42px;" class="container"
    style="margin-top: 405px;">
    <div class="white-block">
        <div clas="col-md-10">

            <div class="card">
                <div class="ajax-form" autocomplete="off"><input type="hidden" value="1" name="aff-cpt">
                    <div class="modal-header">
                        <form method="post" action="{{route('postlogin')}}">
                            @csrf
                            @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                            @endif
                            @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                            @endif

                            <h5 class="modal-title">Login</h5>
                            <a href="#" data-dismiss="modal"><i class="aficon-times"></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="white-block-content">
                            <div class="ajax-form-result"></div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group has-feedback">
                                        <label for="log_username" class="bold">Username / Email *</label>
                                        <input type="text" class="form-control" id="email" name="email" @error('email')
                                            is-invalid @enderror" required placeholder="→">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group has-feedback relative-wrap">
                                        <label for="log_password" class="bold">Password *</label>
                                        <input type="password" class="form-control reveal-password" id="password"
                                            name="password" placeholder="→" @error('password') is-invalid @enderror>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <a href="javascript:;" title="View Password" class="toggle-password"><i
                                                class="gg-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="submit-ajax-form af-button">Login </button>

                        <div class="text-center">
                            <a href="#" class="forgot" data-toggle="modal" data-target="#recover"
                                data-dismiss="modal">Forgotten your password?</a>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('signup')}}" class="register-acc" data-toggle="modal"
                                data-target="#register" data-dismiss="modal">Don't have an account? Create one here.</a>
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