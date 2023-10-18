@extends('layouts.app')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-12">
        <div class="text-center text-md-center mb-5 mt-md-0 text-white">
            <h1 class="mb-0 h3">Ingresa tus credenciales</h1>
        </div>
    </div>
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="signin-inner mt-3 mt-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Form -->
                <div class="form-group">
                    <label for="email">Tu email</label>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                        </div>
                        <input class="form-control" name="email" id="email" placeholder="example@company.com" type="text" aria-label="email address" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- End of Form -->
                <div class="form-group">
                    <!-- Form -->
                    <div class="form-group">
                        <label for="password">Tu contraseña</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                            </div>
                            <input class="form-control" id="password" name="password" placeholder="Password" type="password" aria-label="Password" required>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <!-- End of Form -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                              Recuérdame
                            </label>
                        </div>
                        <div><a href="{{ route('password.request') }}" class="small text-right">Recuperar contraseña</a></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Iniciar sesión</button>
            </form>
            {{-- <div class="mt-3 mb-4 text-center">
                <span class="font-weight-normal">or login with</span>
            </div>
            <div class="btn-wrapper my-4 text-center">
                <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
                    <span aria-hidden="true" class="fab fa-facebook-f"></span>
                </button>
                <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
                    <span aria-hidden="true" class="fab fa-twitter"></span>
                </button>
                <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
                    <span aria-hidden="true" class="fab fa-github"></span>
                </button>
            </div> --}}
            <div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
                <span class="font-weight-normal">
                    ¿No tienes cuenta?
                    <a href="#" class="font-weight-bold">Comunicate con tu empleador</a>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
