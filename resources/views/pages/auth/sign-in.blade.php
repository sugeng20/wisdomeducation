@extends('layouts.user')

@section('title')
Login
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section ptb-100 background-img full-screen">
    <div class="container">
        <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
            <div class="col-md-7 col-lg-6">
                <div class="hero-content-left text-white">
                    <h1 class="text-white">Welcome Back !</h1>
                    <p class="lead">
                        Keep your face always toward the sunshine - and shadows will fall behind you.
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="card login-signup-card shadow-lg mb-0">
                    <div class="card-body px-md-5 py-5">
                        <div class="mb-5">
                            <h5 class="h3">Login</h5>
                            <p class="text-muted mb-0">Sign in to your account to continue.</p>
                        </div>
                        @if (Session::get('success'))
                        <div class="my-3 alert alert-primary alert-dismissible fade show border-0 b-round" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @error('username')
                        <div class="alert alert-danger text-center mt-2">Username dan Password anda salah !
                        </div>
                        @enderror
                        <!--login form-->
                        <form class="login-signup-form" method="POST" action="{{ url('/login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="pb-1">Username</label>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-user color-primary"></span>
                                    </div>
                                    <input type="user" name="username" class="form-control"
                                        placeholder="Masukan Username">
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label class="pb-1">Password</label>
                                    </div>
                                    <div class="col-auto">

                                    </div>
                                </div>
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-lock color-primary"></span>
                                    </div>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Masukan Passwod Kamu">
                                </div>
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-lg btn-block solid-btn border-radius mt-4 mb-3">
                                Sign in
                            </button>

                        </form>
                    </div>
                    <div class="card-footer bg-transparent border-top px-md-5"><small>Not registered?</small>
                        <a href="{{ url('sign-up') }}" class="small"> Create account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-img-absolute">
        <img src="{{ asset('img/hero-bg-shape-1.svg') }}" alt="wave shape" class="img-fluid">
    </div>
</section>
<!--hero section end-->
@endsection