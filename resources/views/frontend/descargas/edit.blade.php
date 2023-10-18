@extends('layouts.dashboard')
@section('breadcrumb')
<h1 class="mb-0 pb-0 display-4" id="title">Documentos</h1>
<nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
    <ul class="breadcrumb pt-0">
        <li class="breadcrumb-item"><a href="/">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="/documentos">Documento</a>
        </li>
        <li class="breadcrumb-item"><a
                href="#">Nuevo</a></li>
    </ul>
</nav>
@endsection

@section('contenido')


<div>

    <section class="scroll-section" id="default">
        <input type="hidden" id="idDocumento" value="{{$documento->id}}">
        <h2 class="small-title">Generamos el pdf con las imagenes</h2>
        <div class="row">
            <div class="col-12">
                <div class="card mb-5 context-menu-icons" id="contextMenuBasic">
                    <div class="row g-0  p-card pt-0 pb-0">
                        <div class="col-6 pt-4">
                            <div class="alert alert-warning" role="alert">Aquí puedes agregar las imagenes de las diapositivas para poder generar el PDF</div>
                        </div>
                        <div class="col-6 p-4">
                            <form>
                                <div class="dropzone pr" id="dropzoneImage"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="scroll-section" id="menuIcons">
        <h2 class="small-title">Hasheamos el archivo</h2>
        <div class="row">
            <div class="col-12">
                <div class="card mb-5 context-menu-icons" id="contextMenuBasic">
                    <div class="row g-0  p-card pt-0 pb-0">
                        <div class="col-6 pt-4">
                            <div class="alert alert-warning" role="alert">Aquí puedes generar el pdf con las diapositivas que has subido en el paso anterior.</div>
                        </div>
                        <div class="col-6 p-4">
                            <div class="pt-2">
                                @php
                                    $existe = file_exists(storage_path("app/public/documentos/$documento->nombre_doc"));
                                @endphp

                                @if ($existe)
                                <button class="btn btn-icon btn-icon-end btn-outline-secondary mb-1"
                                    type="button" id="btnDescargarPdf" data-url="{{Storage::url("documentos/$documento->nombre_doc")}}">
                                    <span>Download</span>
                                    <i data-acorn-icon="download"></i>
                                </button>
                                @else
                                <button class="btn btn-icon btn-icon-start btn-primary mb-1" type="button" id="btnGenerarPdf" >
                                    <span>Generar pdf</span>
                                    <i data-acorn-icon="file-chart"></i>
                                </button>
                                <button class="btn btn-icon btn-icon-end btn-outline-secondary mb-1"
                                    type="button" id="btnDescargarPdf" style="display: none">
                                    <span>Download</span>
                                    <i data-acorn-icon="download"></i>
                                </button>
                                @endif



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="scroll-section" id="disabledItem">
        <h2 class="small-title">Enviamos a Blockchain</h2>
        <div class="row">
            <div class="col-12">
                <div class="card mb-5 context-menu-icons" id="contextMenuBasic">
                    <div class="row g-0  p-card pt-0 pb-0">
                        <div class="col-6 pt-4">
                            <div class="alert alert-warning" role="alert">Aquí puedes enviar a blockchain tu archivo.</div>
                        </div>
                        <div class="col-6 p-4">
                            <div class="pt-2">
                                <form id="formEnviarBlockchain" class="d-flex">
                                    <input type="hidden" name="hash" id="hash" required>
                                    <input type="file" class="form-control mr-1" name="archivo" id="archivo">
                                    <button class="btn btn-icon btn-icon-start btn-primary mb-1 ml-2" type="submit" id="btnEnviarBlockChain" disabled>
                                        <span>Enviar a Blockchain</span>
                                        <i data-acorn-icon="send"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

@section('librerias_css')
<link rel="stylesheet" href="{{asset('frontend/css/vendor/dropzone.min.css')}}">
@endsection

@section('librerias')
<script src="{{asset('frontend/js/cs/dropzone.templates.js')}}"></script>
<script src="{{asset('frontend/js/forms/controls.dropzone.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/sjcl.js')}}"></script>
@endsection

@section('scripts')
<script>
    $('#btnGenerarPdf').click(function(){
        let url = "/dashboard/admin/documentos/generarPdf";
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let id = $('#idDocumento').val();
        let data={_token:token, id};
        $.ajax({
            type: "post",
            url: url,
            data: data,
            success: function (response) {
                $('#btnGenerarPdf').hide();
                $('#btnDescargarPdf').attr('data-url', response.url);
                $('#btnDescargarPdf').show();
            }
        });
    });

    $('#btnDescargarPdf').click(function(){
        let url = $(this).data('url');
        window.open(url, '_blank');
    });

    /**
     * Hassheamos el documento
    */

    function string_to_256digest(str) {
        var hex_str = [];
        var hex;
        for (var n = 0, l = str.length; n < l; n++) {
            15 / 16
            var a = Number(str.charCodeAt(n));
            if (a < 16) {
                hex = "0" + a.toString(16);
            }
            else {
                hex = a.toString(16);
            }
            hex_str.push(hex);
        }
        var text_hex_str = hex_str.join('');
        var text_bit_array = sjcl.codec.hex.toBits(text_hex_str); var digest_sha256_bit_array = sjcl.hash.sha256.hash(text_bit_array); var digest_sha256 = sjcl.codec.hex.fromBits(digest_sha256_bit_array); return (digest_sha256.toUpperCase());
    }

    function onloadend_file(text) {
        var the_digest = string_to_256digest(text);
       // document.getElementById('digest').innerHTML = "SHA256 DIGEST " + the_digest;
        document.getElementById('hash').value = the_digest;
        document.getElementById('btnEnviarBlockChain').disabled = false;
    }

    function handleFileSelect(evt) {
        evt.stopPropagation();
        evt.preventDefault();
        if (typeof (evt.dataTransfer) == "undefined") {
            event_obj = evt.target;
        }
        else {
            event_obj = evt.dataTransfer;
        }
        f = event_obj.files[0];
        var reader = new FileReader();
        reader.readAsBinaryString(f);
        reader.onloadend = () => onloadend_file(reader.result);
    }
    document.getElementById('archivo').addEventListener('input', handleFileSelect, false);


    /**
     * Enviamos el archivo a blockchain
    */
    $('#formEnviarBlockchain').submit(function(e){
        e.preventDefault();
        let url = "/dashboard/documentos/enviarBlockchain";
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let id = $('#idDocumento').val();
        let hash = $('#hash').val();
        let data={_token:token, id, hash};
        $.ajax({
            type: "post",
            url: url,
            data: data,
            success: function (response) {
                $('#btnGenerarPdf').hide();
                $('#btnDescargarPdf').attr('data-url', response.url);
                $('#btnDescargarPdf').show();
            }
        });
    });

</script>
@endsection
