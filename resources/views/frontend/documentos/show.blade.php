@extends('layouts.dashboard')
@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-transparent justify-content-center mb-4">
        <li class="breadcrumb-item text-secondary"><a href="/">Home</a></li>
        <li class="breadcrumb-item text-secondary"><a href="/dashbaord/admin/documentos">Documentos</a>
        </li>
        <li class="breadcrumb-item text-white active" aria-current="page">{{$documento->nombre_doc}}</li>
    </ol>
</nav>
<h1 class="mb-4">{{$documento->nombre_doc}}</h1>
<div class="d-block d-md-flex justify-content-center">
    <span class="h6 font-weight-light"><span
            class="fas fa-check-circle mr-1 pr-1"></span>Blockchain</span>
    <span class="lh-120 ml-md-4"><i class="fas fa-map-marker-alt mr-1 pr-1"></i>
        {{Carbon\Carbon::parse($documento->created_at)->format('d-m-Y H:m')}}

    </span>
</div>
@endsection

@section('contenido')

    <div class="section section-lg pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Tab -->

                    <!-- About Tab -->
                    <div class="tab-content mt-5 mb-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-about" role="tabpanel"
                            aria-labelledby="nav-about-tab">
                            <div class="row mb-5">
                                <div class="col-12">
                                    <div>
                                        <img src="{{Storage::url('diapositivas/1.png')}}" alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card card-body bg-soft border-light p-2">
                                        <div class="card-group bg-soft">
                                            <div class="card mb-0">
                                                <div class="card-body text-center px-0 px-md-3">

                                                    <!-- Heading -->
                                                    <div class="h5 mt-3 mb-0">
                                                        10 descargas
                                                    </div>
                                                    <!-- Text -->
                                                    <span class="text-muted h6 font-weight-normal mb-0">
                                                        En total
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card mb-0 border-left">
                                                <div class="card-body text-center px-0 px-md-3">

                                                    <!-- Heading -->
                                                    <div class="h5 mt-3 mb-0">
                                                        5 descargas
                                                    </div>
                                                    <!-- Text -->
                                                    <span class="text-muted h6 font-weight-normal mb-0">
                                                        del usuario
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card mb-0 border-left">
                                                <div class="card-body text-center px-0 px-md-3">

                                                    <!-- Heading -->
                                                    <div class="h5 mt-3 mb-0">
                                                        10 personas
                                                    </div>
                                                    <!-- Text -->
                                                    <span class="text-muted h6 font-weight-normal mb-0">
                                                        tienen acceso
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- End of tab -->
                </div>
                <aside class="col-12 col-lg-4 mt-3 mt-lg-0">
                    <div class="card border-bottom rounded-0 p-4">
                        <h2 class="h5">Lista de diapositivas</h2>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex py-1">
                                <span class="icon icon-xs icon-primary">
                                    <span class="fas fa-check-circle mr-2"></span>
                                </span>
                                <span>Events</span>
                            </li>
                            <li class="d-flex py-1">
                                <span class="icon icon-xs icon-primary">
                                    <span class="fas fa-check-circle mr-2"></span>
                                </span>
                                <span>Community Lunches</span>
                            </li>
                            <li class="d-flex py-1">
                                <span class="icon icon-xs icon-primary">
                                    <span class="fas fa-check-circle mr-2"></span>
                                </span>
                                <span>Workshops</span>
                            </li>
                            <li class="d-flex py-1">
                                <span class="icon icon-xs icon-primary">
                                    <span class="fas fa-check-circle mr-2"></span>
                                </span>
                                <span>Community Drinks</span>
                            </li>
                            <li class="d-flex py-1">
                                <span class="icon icon-xs icon-primary">
                                    <span class="fas fa-check-circle mr-2"></span>
                                </span>
                                <span>Facebook Group for Members</span>
                            </li>
                            <li class="d-flex py-1">
                                <span class="icon icon-xs icon-primary">
                                    <span class="fas fa-check-circle mr-2"></span>
                                </span>
                                <span>Mentorship Programs</span>
                            </li>
                            <li class="d-flex py-1">
                                <span class="icon icon-xs icon-primary">
                                    <span class="fas fa-check-circle mr-2"></span>
                                </span>
                                <span>Pitching events</span>
                            </li>
                            <li class="d-flex py-1">
                                <span class="icon icon-xs icon-primary">
                                    <span class="fas fa-check-circle mr-2"></span>
                                </span>
                                <span>Accelerator programs</span>
                            </li>
                            <li class="d-flex py-1">
                                <span class="icon icon-xs icon-primary">
                                    <span class="fas fa-check-circle mr-2"></span>
                                </span>
                                <span>Toastmasters</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <a href="" class="btn btn-success w-100">
                            Descargar
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection

@section('librerias_css')
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/dropzone.min.css') }}">
@endsection

@section('librerias')
    <script src="{{ asset('frontend/js/cs/dropzone.templates.js') }}"></script>
    <script src="{{ asset('frontend/js/forms/controls.dropzone.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/sjcl.js') }}"></script>
@endsection

@section('scripts')
    <script>
        $('#btnGenerarPdf').click(function() {
            let url = "/dashboard/admin/documentos/generarPdf";
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            let id = $('#idDocumento').val();
            let data = {
                _token: token,
                id
            };
            $.ajax({
                type: "post",
                url: url,
                data: data,
                success: function(response) {
                    $('#btnGenerarPdf').hide();
                    $('#btnDescargarPdf').attr('data-url', response.url);
                    $('#btnDescargarPdf').show();
                }
            });
        });

        $('#btnDescargarPdf').click(function() {
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
                } else {
                    hex = a.toString(16);
                }
                hex_str.push(hex);
            }
            var text_hex_str = hex_str.join('');
            var text_bit_array = sjcl.codec.hex.toBits(text_hex_str);
            var digest_sha256_bit_array = sjcl.hash.sha256.hash(text_bit_array);
            var digest_sha256 = sjcl.codec.hex.fromBits(digest_sha256_bit_array);
            return (digest_sha256.toUpperCase());
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
            if (typeof(evt.dataTransfer) == "undefined") {
                event_obj = evt.target;
            } else {
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
        $('#formEnviarBlockchain').submit(function(e) {
            e.preventDefault();
            let url = "/dashboard/documentos/enviarBlockchain";
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            let id = $('#idDocumento').val();
            let hash = $('#hash').val();
            let data = {
                _token: token,
                id,
                hash
            };
            $.ajax({
                type: "post",
                url: url,
                data: data,
                success: function(response) {
                    $('#btnGenerarPdf').hide();
                    $('#btnDescargarPdf').attr('data-url', response.url);
                    $('#btnDescargarPdf').show();
                }
            });
        });
    </script>
@endsection
