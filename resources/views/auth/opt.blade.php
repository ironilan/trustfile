@extends('layouts.app')


@section('contenido')
<div class="row justify-content-center">
    <div class="col-12">
        <div class="text-center text-md-center mb-5 mt-md-0 text-white">
            <h1 class="mb-0 h3" id="FormTitulo">Ingresa tus celular</h1>
        </div>
    </div>
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="signin-inner mt-3 mt-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
            <form method="POST" id="loginFormOpt" class="contentSendCodeOpt">
                @csrf
                <!-- Form -->
                <div class="form-group">
                    <label for="celular">Ingresa tu número celular asociado a esta cuenta.</label> <br>
                    <small>No olvides que debe tener el código del pais (ejm: 51999999999)</small>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <input class="form-control" name="celular" id="celular" placeholder="51999999999" type="number" aria-label="celular" value="{{ old('celular') }}">
                    </div>
                    <p class="error text-center appMsg d-none"></p>
                </div>

                <button type="submit" class="btn btn-block btn-primary" id="btnEnviar">Verificar</button>
            </form>


            <form method="POST" id="formConfirmCodeOpt" class="contentVerificarCode d-none">
                @csrf
                <!-- Form -->
                <div class="form-group">
                    <label for="codigo">Ingresa el codigo que se ha enviado a tu celular.</label> <br>
                    <small>Debe tener 6 dígitos (ejm: 555555)</small>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <input class="form-control" name="codigo" id="codigo" placeholder="555555" type="number" aria-label="codigo address" value="{{ old('celular') }}">
                    </div>
                    <p class="error text-center d-none msjCodigo"></p>
                </div>

                <button type="submit" class="btn btn-block btn-primary" >Verificar</button>
            </form>

        </div>
    </div>
</div>
@endsection


@section('contenido__antes')
<div
    class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
    <div class="sw-lg-50 px-5">
        <div class="sh-11">
            <a href="javascript:void(0)">
                <div class="">
                    <img src="{{asset('logo.jpeg')}}" alt="" style="width: 100%">
                </div>
            </a>
        </div>
        <br>
        <br>
        <br>
        <div class="alert alert-danger appMsg d-none">
            <p><b>Opps</b> el código ingresado no es correcto!</p>
        </div>
        <div class="mb-5 contentSendCodeOpt">
            <p class="h6">Ingresa tu número celular asociado a esta cuenta.</p>
            <small>No olvides que debe tener el código del pais (ejm: 51999999999)</small>
        </div>
        <div class="contentSendCodeOpt">
            <form id="loginFormOpt" class="tooltip-end-bottom" novalidate  method="post">
                @csrf
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="phone"></i>
                    <input class="form-control" placeholder="celular" name="celular" id="celular">
                </div>

                <button type="submit" class="btn btn-lg btn-primary btnEnviar">Enviar código</button>
            </form>
        </div>
        <div class="mb-5 contentVerificarCode d-none">
            <p class="h6">Ingresa el codigo que se ha enviado a tu celular.</p>
            <small>Debe tener 6 dígitos</small>
        </div>
        <div class="contentVerificarCode d-none">
            <form id="formConfirmCodeOpt" class="tooltip-end-bottom" novalidate  method="post">
                @csrf
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="codigo"></i>
                    <input class="form-control" placeholder="codigo" name="codigo" id="codigo">
                </div>

                <button type="submit" class="btn btn-lg btn-primary btnVerificar">Verificar</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('#loginFormOpt').submit(function(e){
        e.preventDefault();
        //$('#btnEnviar').prop("disabled", true);
        let url = "/auth/generarOtp";
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let celular = $('#celular').val();
        let data={_token:token, celular};
        $.ajax({
            type: "post",
            url: url,
            data: data,
            success: function (response) {

                $('.contentSendCodeOpt').addClass('d-none');
                $('.contentVerificarCode').removeClass('d-none');
                //$('#btnEnviar').prop("disabled", false);

                $('#FormTitulo').empty().append('Ingresa el código');

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                const rta = XMLHttpRequest.responseJSON;
                //console.log(rta.msj);
                $('.appMsg').empty().append(rta.msj);
                $('.appMsg').removeClass('d-none');
            }
        });
    });


    $('#celular').change(function(e){
        if(!$('.appMsg').hasClass( "d-none" ))
        {
            $('.appMsg').addClass('d-none');
        }

    });


    $('#formConfirmCodeOpt').submit(function(e){
        e.preventDefault();
        let url = "/auth/validarOtp";
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let codigo = $('#codigo').val();
        let data={_token:token, codigo};
        $.ajax({
            type: "post",
            url: url,
            data: data,
            success: function (response) {
                window.location.href = `/dashboard`
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                const rta = XMLHttpRequest.responseJSON;
                //console.log(rta.msj);
                $('.msjCodigo').empty().append(rta.msj);
                $('.msjCodigo').removeClass('d-none');
            }

        });
    });


</script>
@endsection
