@extends('layouts.app')

@section('contenido')
<div
    class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
    <div class="sw-lg-50 px-5">
        <div class="sh-11">
            <a href="/">
                <div class="">
                    <img src="{{asset('logo.jpeg')}}" alt="" style="width: 100%">
                </div>
            </a>
        </div>
        <div class="mb-5">
            <h2 class="cta-1 mb-0 text-primary">Ya casi está,</h2>
            <h2 class="cta-1 text-primary">Ingresa tu celular por favor</h2>
        </div>
        <div class="mb-5">
            <p class="h6">No olvides que debe tener el código del pais (ejm: 51999999999)</p>

        </div>
        <div>
            <form id="loginForm" class="tooltip-end-bottom" novalidate action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="celular"></i>
                    <input class="form-control" placeholder="celular" name="celular">
                    @error('celular')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-lg btn-primary">Enviar código</button>
            </form>
        </div>
    </div>
</div>
@endsection
