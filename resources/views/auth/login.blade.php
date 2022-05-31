@extends('frontend.layout.app')
@section('title', 'İletişim | '.config('app.name'))
@section('content')
    @include('frontend.layout.header2')

    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                <h2 class="font-weight-bold text-5 mb-0">Giriş Yap</h2>
                <form method="POST" action="{{ route('login') }}" >
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Email Adresiniz <span class="text-color-danger">*</span></label>
                            <input id="email" type="email" class="form-control form-control-lg text-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Şifreniz <span class="text-color-danger">*</span></label>
                            <input id="password" type="password" class="form-control form-control-lg text-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="form-group col-md-auto">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberme">
                                <label class="form-label custom-control-label cur-pointer text-2" for="rememberme" {{ old('remember') ? 'checked' : '' }}>Beni Hatırla</label>
                            </div>
                        </div>
                        <div class="form-group col-md-auto">
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2" href="{{ route('password.request') }}">Şifremi Unuttum?</a>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Giriş Yap</button>
                      </div>
                    </div>
                </form>
            </div>

        </div>

    </div>


@endsection
