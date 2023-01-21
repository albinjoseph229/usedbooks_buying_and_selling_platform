@extends('layout.adminmaster')
@section('content')
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>signin</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">signin</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">

                <!-- Pills navs -->
                <div class="contact-box-main">


                    <!-- Pills content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                            aria-labelledby="tab-login">
                            <form method="POST" action="{{route('postlogin')}}">
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
                                <div class="text-center mb-3">
                                    <h3>Sign in </h3>

                                </div>


                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginName">Email </label>
                                    <input type="email" id="email" name="email" class="form-control" @error('email')
                                        is-invalid @enderror required />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginPassword">Password</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        @error('password') is-invalid @enderror />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary mb-4">Sign in</button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Not a member? <a href="#!">Register</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">




                        </div>
                    </div>
                    <!-- Pills content -->
                </div>
            </div>
        </div>
    </div>
    @endsection