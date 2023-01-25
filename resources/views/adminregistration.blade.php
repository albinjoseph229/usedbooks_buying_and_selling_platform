@extends('layout/usermaster')
@section('content')
<div class="col-md-12">
    <div class="row">
        <form method="POST" action="{{route('postadminform')}}">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @elseif(session('failed'))
            <div class="alert alert-danger" role="alert">
                {{ session('failed') }}
            </div>
            @endif
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" id="aname" name="aname" required />
                @error('aname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" type="email" id="email" name="email" required />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" id="apassword" name="apassword" required />
                @error('apassword')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" type="password" id="cpassword" name="cpassword" required />
                @error('cpassword')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <input type="submit" class="btn btn-primary" id="sadmin" name="sadmin" value="SAVE" />

        </form>
    </div>
</div>
@endsection