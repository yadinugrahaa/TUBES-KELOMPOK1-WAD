@extends('layouts.login&register.login_register')


@section('webtitle')
<title>SHOE CLEANING | Register</title>
@endsection

@section('right_content')
<!-- Right Content -->
<section id="grid-right">
    <div class="d-flex justify-content-center py-4">
                <a href="/Home" class="logo d-flex align-items-center w-auto">
        
                  <span class="d-none d-lg-block">Zeopatoe Shoes</span>
                </a>
    </div><!-- End Logo -->

    <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
    </div>

    <!-- Form -->
    <form action="/Register" method="POST">
        @csrf
        <div class="fomr-floating">
            <div class="row justify-content-center">
                <!-- Layout kiri -->
                <div class="col-5">
                    <!-- Fname -->
                    <div class="mb-4">
                        <label for="Fname" id="form-text" class="form-label">Nama Depan</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                            name="first_name" value="{{ old('first_name') }}">
                        @error('first_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- No HP -->
                    <div class="mb-4">
                        <label for="nohp" id="form-text" class="form-label">Nomor
                            Telepon</label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                            value="{{ old('no_hp') }}">
                        @error('no_hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" id="form-text" class="form-label">Kata
                            Sandi</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Layout Kanan -->
                <div class="col-5">
                    <!-- Lname -->
                    <div class="mb-4">
                        <label for="Lname" id="form-text" class="form-label">Nama
                            Belakang</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                            name="last_name" value="{{ old('last_name') }}">
                        @error('last_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" id="form-text" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Confirm -->
                    <div class="mb-4">
                        <label for="password_confirmation" id="form-text" class="form-label">Konfirmasi Kata
                            Sandi</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation">
                        @error('confirm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <!-- checkbox -->
                <div class="col-10">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="setujuemail">
                        <label id="checkbox-text" class="form-check-label" for="remember">Ya, Saya ingin
                            menerima email <span id="slip-color2">Zepatoe Shoes</span></label>
                    </div>

                    <div class="form-check pb-3">
                        <input type="checkbox" class="form-check-input @error('setujukebijakan') is-invalid @enderror"
                            name="setujukebijakan">
                        <label id="checkbox-text" class="form-check-label" for="remember">Saya setuju
                            dengan semua <span id="slip-color2">Kebijakan Privasi</span></label>
                        @error('setujukebijakan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Button -->
                    <div class="pb-3">
                        <button id="register-button" type="submit" name="Masuk" class="btn btn-primary"
                            style="width: 10rem;">Buat
                            Akun</button>
                    </div>

                    <div>
                        <p id="link-text-login">Sudah punya akun? <a id="link-page" href="/Login">Masuk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Form -->
    </div>
</section>
<!-- Right Content -->
@endsection