@extends('layouts.user')

@section('title')
Register
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section ptb-100 background-img full-screen">
    <div class="container">
        <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
            <div class="col-md-6 col-lg-6">
                <div class="hero-content-left text-white">
                    <h1 class="text-white">Create Your Account</h1>
                    <p class="lead">
                        Keep your face always toward the sunshine - and shadows will fall behind you.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card login-signup-card shadow-lg mb-0">
                    <div class="card-body px-md-5 py-5">
                        <div class="mb-5">
                            <h6 class="h3">Create account Teacher</h6>
                            <p class="text-muted mb-0">Made with love by developers for developers.</p>
                        </div>
                        <form class="login-signup-form" method="POST" action="">
                            @csrf
                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Username
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-user color-primary"></span>
                                    </div>
                                    <input type="text" name="username" class="form-control"
                                        placeholder="Masukan username" required>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Password
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-lock color-primary"></span>
                                    </div>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter your password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Nama Guru
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-user color-primary"></span>
                                    </div>
                                    <input type="text" name="nama_guru" class="form-control"
                                        placeholder="Masukan nama anda" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Email
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-email color-primary"></span>
                                    </div>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Masukan email anda" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Tanggal Lahir
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-user color-primary"></span>
                                    </div>
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        placeholder="Masukan email anda" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Label -->
                                <label class="pb-1">
                                    Asal Sekolah
                                </label>
                                <!-- Input group -->
                                <div class="input-group input-group-merge">
                                    <div class="input-icon">
                                        <span class="ti-user color-primary"></span>
                                    </div>
                                    <select name="asal_sekolah" class="form-control" id="asal_sekolah" required>
                                        <option value="">- Pilih Sekolah -</option>
                                    </select>
                                </div>
                            </div>

                            <div class="my-4">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="check-terms" required>
                                    <label class="custom-control-label" for="check-terms">I agree to the <a
                                            href="#">terms and conditions</a></label>
                                </div>
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-lg btn-block solid-btn border-radius mt-4 mb-3">
                                Sign up
                            </button>
                        </form>

                    </div>
                    <div class="card-footer px-md-5 bg-transparent border-top"><small>Already have an account?</small>
                        <a href="{{ url('login') }}" class="small">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-img-absolute">
        <img src="img/wave-shap.svg" alt="wave shape" class="img-fluid">
    </div>
</section>
<!--hero section end-->
@endsection