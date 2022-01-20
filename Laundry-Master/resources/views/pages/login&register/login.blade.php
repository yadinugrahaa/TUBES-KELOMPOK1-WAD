@extends('layouts.login&register.login_register')


@section('webtitle')
<title>Zeopatoe Shoes | Login</title>
@endsection

@section('right_content')
<!-- Right Content -->
<div class="container">

    <section id="grid-right" class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <!-- alert regis berhasil -->
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <!-- alert login gagal -->
            @if(session()->has('loginError'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="d-flex justify-content-center py-4">
                <a href="/Home" class="logo d-flex align-items-center w-auto">
        
                  <span class="d-none d-lg-block">Zeopatoe Shoes</span>
                </a>
            </div><!-- End Logo -->

            <div class="card-body">
                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>
                <!-- Form Masuk -->
                
                <form action="{{ route('login-user') }}" method="POST">
                    @csrf
                    <div class="form">
                        <!-- Email -->
                        <div class="mb-4">
                            <label for="Email" id="form-text" class="form-label">Your
                                Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" autofocus>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="Password" id="form-text" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Button -->
                        <div class="mb-4">
                            <button id="login-button" type="submit" name="Masuk" class="btn btn-primary">Masuk</button>
                        </div>
                    </div>
                </form>
                <div class="mb-4">
                    <p id="link-text-register" class="text-center">Belum punya akun? <a id="link-page"
                            href="/Register">Daftar</a></p>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Right Content -->
@endsection