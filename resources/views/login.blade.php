@extends('layouts.navbar-footer')

@section('judul')
LOGIN
@endsection

@section('css')
<link rel="stylesheet" href="css/login.css">
@endsection

@section('contents')
<section class="login-page">
    <div class="box">
        <div class="head">
            <div class="line"></div>
            <div class="text">LOGIN</div>
        </div>
        <div class="body">
            <div class="username pt-2 pb-2">
                <input type="email" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <div class="password pt-2 pb-2">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="submit pt-2">
                <button type="button" class="btn btn-primary">LOGIN</button>
            </div>
            <div class="text text-center pt-3">
                <p>Doesn't have an account?</p>
                <p><a href="/signup">Sign Up</a> Here!</p>
            </div>
        </div>
    </div>
</section>
@endsection
