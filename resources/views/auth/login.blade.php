<style>
    #gambar {
        margin: 30px auto;
    }

    .forum {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #content {
        width: 475px;
        height: 600px;
    }

    #test {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #email {
        background-color: none;
    }

    #tombol {
        width: 175px;
        height: 35px;
        background: linear-gradient(180deg, #1F4FCC 0%, rgba(48, 179, 197, 0.72) 100%);
        opacity: 0.7;
        border-radius: 20px;
    }

    #login {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .tulisan, label, p, a{
        font-size: 13px;
    }
</style>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" id="content">
        <div class="">
            <div class="card">
                <img src="https://rekreartive.com/wp-content/uploads/2019/04/Logo-Tut-Wuri-Handayani-PNG-Warna.png" class="mb-1 mt-3" alt="" width="72" height="72" id="gambar">
                <h5 class="text-center tulisan" style="letter-spacing: 5px;">SISTER</h5>
                <h5 class="text-center mb-3 tulisan">Sistem Informasi Sumberdaya Terintegrasi</h5>
                <h6 class="text-center tulisan" style="letter-spacing: 5px;">INSTITUT TEKNOLOGI DEL</h6>

                <div class="forum">
                    <div class="card-body" id="test">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="">{{ __('Username') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label text-center" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>

                                        @if (Route::has('password.request'))
                                        <a style="margin-left: 10px;" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif

                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="mt-3" id="login">
                                    <button type="submit" class="btn btn-primary" id="tombol">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <p class="text-center">
                                    Don’t have account yet?<a href="{{ route('register') }}">
                                        {{ __('Sign Up') }}</a>
                                </p>
                                <p class="text-center" style="font-size: 12px;"><b>Sumber Daya - Direktorat Jenderal Pendidikan Tinggi,<br>
                                        Riset dan Teknologi</b>
                                </p>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection