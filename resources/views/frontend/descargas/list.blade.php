@extends('layouts.dashboard')
@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-transparent justify-content-center mb-4">
        <li class="breadcrumb-item text-secondary"><a href="/">Home</a></li>

        <li class="breadcrumb-item text-muted active" aria-current="page">Documentos</li>
    </ol>
</nav>
<h1 class="mb-5">Lista de <span class="font-weight-bolder">documentos</span></h1>
@endsection

@section('contenido')

@include('frontend.components.filtro')


<div class="section section-lg pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="justify-content-between align-items-center d-none d-md-flex">
                    <div class="mr-3">
                        <h2 class="h6 mb-3 mb-md-0">Total de documentos: <span
                                class="font-weiht-bolder text-primary">{{count($documentos)}}</span></h2>
                    </div>
                    <div class="nav-wrapper position-relative p-0">
                        <ul class="nav nav-pills small-pills" id="tab-34" role="tablist">
                            <li class="nav-item pr-0">
                                <a class="nav-link text-sm-center border-0 active" id="tab-link-example-14"
                                    data-toggle="tab" href="#link-example-14" role="tab"
                                    aria-controls="link-example-14" aria-selected="false">
                                    <span class="nav-link-icon d-block"><span
                                            class="fas fa-th-large"></span></span>
                                </a>
                            </li>
                            <li class="nav-item pr-0">
                                <a class="nav-link text-sm-center border-0" id="tab-link-example-13"
                                    data-toggle="tab" href="#link-example-13" role="tab"
                                    aria-controls="link-example-13" aria-selected="true">
                                    <span class="nav-link-icon d-block"><span
                                            class="fas fa-th-list"></span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content mt-4 mt-lg-4" id="tabcontentexample-5">
                    <div class="tab-pane fade" id="link-example-13" role="tabpanel"
                        aria-labelledby="tab-link-example-13">
                        <div class="row justify-content-center">
                            @foreach ($documentos as $item)
                            <div class="col-12 col-sm-10 col-md-6 col-lg-12">
                                <div class="card border-light mb-4 animate-up-5">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-12 col-lg-6 col-xl-5">
                                            <a href="./single-space.html">
                                                <img src="../assets/img/private-office.jpg"
                                                    alt="private office" class="card-img p-2 rounded-xl">
                                            </a>
                                        </div>
                                        <div class="col-12 col-lg-6 col-xl-7">
                                            <div class="card-body">
                                                <a href="./single-space.html">
                                                    <h4 class="h5">{{$item->nombre_doc}}</h4>
                                                </a>
                                                <div class="d-flex my-4">
                                                    <span class="star fas fa-star text-warning"></span>
                                                    <span class="star fas fa-star text-warning"></span>
                                                    <span class="star fas fa-star text-warning"></span>
                                                    <span class="star fas fa-star text-warning"></span>
                                                    <span class="star fas fa-star text-warning"></span>
                                                    <span
                                                        class="badge badge-pill badge-primary ml-2">5.0</span>
                                                </div>
                                                <ul class="list-group mb-3">
                                                    <li class="list-group-item small p-0"><span
                                                            class="fas fa-map-marker-alt mr-2"></span>New York,
                                                        Manhattan, USA</li>
                                                    <li class="list-group-item small p-0"><span
                                                            class="fas fa-bullseye mr-2"></span>Old Street (2
                                                        mins walk)</li>
                                                    <li class="list-group-item small p-0"><span
                                                            class="fas fa-bullseye mr-2"></span>Shoreditch High
                                                        Street (10 mins walk)</li>
                                                </ul>
                                                <div class="d-flex justify-content-between">
                                                    <div class="col pl-0">
                                                        <span
                                                            class="text-muted font-small d-block mb-2">Monthly</span>
                                                        <span class="h5 text-dark font-weight-bold">500$</span>
                                                    </div>
                                                    <div class="col">
                                                        <span
                                                            class="text-muted font-small d-block mb-2">People</span>
                                                        <span class="h5 text-dark font-weight-bold">12</span>
                                                    </div>
                                                    <div class="col pr-0">
                                                        <span
                                                            class="text-muted font-small d-block mb-2">Sq.Ft</span>
                                                        <span class="h5 text-dark font-weight-bold">1200</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="link-example-14" role="tabpanel"
                        aria-labelledby="tab-link-example-14">
                        <div class="row">

                            @foreach ($documentos as $item)
                            <div class="col-12 col-md-6 col-lg-4">
                                <!-- Card -->
                                <div class="card border-light mb-4 animate-up-5">
                                    <a href="{{url('dashboard/descargas')}}/{{$item->id}}" class="position-relative">
                                        <img src="{{Storage::url('diapositivas/'.$item->imagen)}}"
                                            class="card-img-top rounded-xl p-2" alt="themesberg office">
                                    </a>
                                    <div class="card-body">
                                        <a href="{{url('dashboard/descargas')}}/{{$item->id}}">
                                            <h4 class="h5">{{$item->nombre_doc}}</h4>
                                        </a>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item small p-0"><span
                                                    class="fas fa-file-alt mr-2"></span>{{$item->hash_archivo}}
                                            </li>

                                            <li class="list-group-item small p-0"><span
                                                    class="fas fa-file mr-2"></span>{{$item->tipo}}</li>
                                        </ul>
                                    </div>
                                    <div class="card-footer bg-soft border-top">
                                        <div class="d-flex justify-content-between">
                                            <div class="col pl-0">
                                                <span class="text-muted font-small d-block mb-2">Descargas totales</span>
                                                <span class="h5 text-dark font-weight-bold">{{$item->descargas_totales}}</span>
                                            </div>

                                            <div class="col pr-0">
                                                <span class="text-muted font-small d-block mb-2">Descargas propias</span>
                                                <span class="h5 text-dark font-weight-bold">{{$item->descargas_propias}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Card -->
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-3 d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" tabindex="-1"
                                href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('contenido___')


    <aside>
        hola
    </aside>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        sdadsasdsad
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        sdadsasdsad
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        sdadsasdsad
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        sdadsasdsad
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{asset('frontend/js/plugins/datatable.descargas.js')}}"></script>
    <script>
        $('.addDocumento').click(function() {
            location.href = "/dashboard/documentos/new";
        });

        $('#addEditConfirmButton').click(function() {
            let url = "/dashboard/documentos";
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            setDocumento(url, token);

        });

        function setDocumento(url, token) {
            var data={_token:token};
            $.ajax({
                type: "post",
                url: url,
                data: data,
                success: function (response) {
                    //console.log(response);
                    window.location.href = `/dashboard/documentos/new?id=${response.id}`
                }
            });

        }


        function descargar(id)
        {
            let url = '/dashboard/descargas/validar';
            let data = {
                id
            };


            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {


                    $.get(url, data)
                        .done(function(res){
                            window.open(res, '_blank');
                        })
                        .fail(function(err){
                            let error = err.responseJSON;
                            $('.alerta').removeClass('d-none');
                            $('.mensaje').empty().append(error.msj);

                        });
                }


            })



        }



    </script>
@endsection

@section('modals')
    <div class="modal modal-right fade" id="addEditModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Crear documento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formCrearDocumento">
                        <div class="mb-3">
                            <p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta iusto sapiente, voluptatibus quasi voluptates nostrum. Perspiciatis dolor quas, temporibus, corrupti earum dolorem molestias alias saepe minus quaerat beatae, cupiditate recusandae?</p>
                        </div>

                        <div class="mb-3">
                            <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta iusto sapiente, voluptatibus quasi voluptates nostrum. Perspiciatis dolor quas, temporibus, corrupti earum dolorem molestias alias saepe minus quaerat beatae, cupiditate recusandae?</p>
                        </div>

                        <div class="mb-3">
                            <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta iusto sapiente, voluptatibus quasi voluptates nostrum. Perspiciatis dolor quas, temporibus, corrupti earum dolorem molestias alias saepe minus quaerat beatae, cupiditate recusandae?</p>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="addEditConfirmButton">Crear</button>
                </div>
            </div>
        </div>
    </div>
@endsection
