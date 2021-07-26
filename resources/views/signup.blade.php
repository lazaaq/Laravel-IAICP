@extends('layouts.navbar-footer')

@section('judul')
SIGNUP
@endsection

@section('css')
<link rel="stylesheet" href="css/signup.css">
@endsection

@section('contents')
<section class="signup-page">
    <div class="box">
        <div class="head">
            <div class="line"></div>
            <div class="text">SIGN UP</div>
        </div>
        <div class="body">
            <div class="name pt-2 pb-2">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap">
            </div>
            <div class="email pt-2 pb-2">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="username pt-2 pb-2">
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <div class="password pt-2 pb-2">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="submit pt-2">
                <button type="button" class="btn btn-primary">SIGN UP</button>
            </div>
            <div class="text text-center pt-3">
                <p>Already have an account?</p>
                <p><a href="/login">Log In</a> Here!</p>
            </div>
        </div>
    </div>
</section>
@endsection