@extends('layouts.dashboard')
@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-transparent justify-content-center mb-4">
        <li class="breadcrumb-item text-secondary"><a href="/">Home</a></li>

        <li class="breadcrumb-item text-muted active" aria-current="page">Roles</li>
    </ol>
</nav>
<h1 class="mb-5">Lista de <span class="font-weight-bolder">roles</span></h1>
@endsection
@section('contenido')
<div class="section section-lg bg-soft">
    <div class="container">
        <div class="row pt-5 pt-md-0">

            <div class="col-12 col-md-4 d-none d-lg-block">
                <!-- Navigation -->
                <div class="card border-light p-2">
                    <div class="card-body p-2">
                        <div class="profile-thumbnail small-thumbnail mx-auto">
                            <img src="{{asset('plantilla_dashboard/assets/img/team/profile-picture-4.jpg')}}"
                                class="card-img-top rounded-circle border-white" alt="Joseph Portrait">
                        </div>
                        <h2 class="h5 font-weight-normal text-center mt-3 mb-0">{{Auth::user()->name}}</h2>
                        <div class="list-group dashboard-menu list-group-sm mt-4">
                            <a href="{{route('admin.rol.index')}}"
                                class="d-flex list-group-item list-group-item-action {{$pagina == 'perfil' ? 'active' : ''}}">Mi perfil<span
                                    class="icon icon-xs ml-auto"><span
                                        class="fas fa-chevron-right"></span></span> </a>
                            <a href="{{route('admin.users.index')}}"
                                class="d-flex list-group-item list-group-item-action {{$pagina == 'usuarios' ? 'active' : ''}}">Usuarios<span
                                    class="icon icon-xs ml-auto"><span
                                        class="fas fa-chevron-right"></span></span> </a>
                            <a href="{{route('admin.rol.index')}}"
                                class="d-flex list-group-item list-group-item-action {{$pagina == 'roles' ? 'active' : ''}}">Roles<span
                                    class="icon icon-xs ml-auto"><span
                                        class="fas fa-chevron-right"></span></span> </a>
                            <a href="{{route('admin.rol.index')}}"
                                class="d-flex list-group-item list-group-item-action  {{$pagina == 'permisos' ? 'active' : ''}} ">Permisos<span
                                    class="icon icon-xs ml-auto"><span
                                        class="fas fa-chevron-right"></span></span> </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-lg-none">
                <div class="card bg-white border-light mb-4 mb-lg-5">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10 d-flex">
                                <a href="./account.html"
                                    class="list-group-item list-group-item-action border-0 ">Mi perfil</a>
                                <a href="./settings.html"
                                    class="list-group-item list-group-item-action border-0 ">Usuarios</a>
                                <a href="./my-items.html"
                                    class="list-group-item list-group-item-action d-none d-sm-block border-0  active ">Roles</a>
                                <a href="./security.html"
                                    class="list-group-item list-group-item-action d-none d-md-block border-0 ">Permisos</a>
                            </div>
                            <div class="col-2 d-flex justify-content-center">
                                <div class="btn-group dropleft">
                                    <button
                                        class="btn btn-link dropdown-toggle dropdown-toggle-split mr-2 m-0 p-0"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-secondary fa-lg"></span>
                                        </span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="./my-items.html"
                                            class="list-group-item list-group-item-action d-sm-none border-0  active ">Roles</a>
                                        <a href="./security.html"
                                            class="list-group-item list-group-item-action d-md-none border-0 ">Permisos</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-6 col-lg-12">
                        <a href="../submit-item.html" class="btn btn-outline-secondary btn-block mb-4 py-4">
                            <span class="mr-2"><span class="fas fa-plus"></span></span>Crear nuevo rol
                        </a>
                        <div class="card border-light mb-4">
                            <div class="row no-gutters align-items-center">
                                {{-- <div class="col-12 col-lg-6 col-xl-4">
                                    <a href="../single-space.html">
                                        <img src="{{asset('plantilla_dashboard/assets/img/meeting-office.jpg')}}" alt="private office"
                                            class="card-img p-2 rounded-xl">
                                    </a>
                                </div> --}}
                                <div class="col-12 col-lg-12 col-xl-12">
                                    <div class="card-body py-lg-0">
                                        <div class="d-flex no-gutters align-items-center mb-3">
                                            <div class="col text-left">

                                                <div class="modal fade bd-example-modal-lg"
                                                    id="modal-notification" tabindex="-1" role="dialog"
                                                    aria-labelledby="modal-notification" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg"
                                                        role="document">
                                                        <div class="modal-content bg-white px-0">
                                                            <div class="modal-header">
                                                                <h2 class="h5 mb-3">Administrador</h2>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <h6>Usuarios</h6>
                                                                        <div class="form-check inbox-check mr-2">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1" style="line-height: 0">Ver usuarios</label>
                                                                        </div>
                                                                        <div class="form-check inbox-check mr-2">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1" style="line-height: 0">Editar usuarios</label>
                                                                        </div>
                                                                        <div class="form-check inbox-check mr-2">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1" style="line-height: 0">Eliminar usuarios</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <h6>Documentos</h6>
                                                                        <div class="form-check inbox-check mr-2">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1" style="line-height: 0">Ver documentos</label>
                                                                        </div>
                                                                        <div class="form-check inbox-check mr-2">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1" style="line-height: 0">Editar documentos</label>
                                                                        </div>
                                                                        <div class="form-check inbox-check mr-2">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1" style="line-height: 0">Eliminar documentos</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6 mt-4">
                                                                        <h6>Descargas</h6>
                                                                        <div class="form-check inbox-check mr-2">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1" style="line-height: 0">Ver descargas</label>
                                                                        </div>
                                                                        <div class="form-check inbox-check mr-2">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1" style="line-height: 0">Editar descargas</label>
                                                                        </div>
                                                                        <div class="form-check inbox-check mr-2">
                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                                            <label class="form-check-label" for="defaultCheck1" style="line-height: 0">Eliminar descargas</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-secondary">Guardar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="icon icon-sm">
                                                            <span
                                                                class="fas fa-ellipsis-h icon-secondary"></span>
                                                        </span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        {{-- <a class="dropdown-item" href="./edit-item.html"><span
                                                                class="fas fa-edit mr-2"></span>
                                                            Edit Item</a> --}}
                                                        <a class="dropdown-item text-danger" href="#"><span
                                                                class="fa fa-trash mr-2"
                                                                aria-hidden="true"></span>
                                                            Deshabilitar</a>
                                                        <a class="dropdown-item" data-toggle="modal"
                                                            data-target="#modal-notification"><span
                                                                class="fas fa-chart-line mr-2"></span>Permisos</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="../single-space.html">
                                            <h2 class="h5">Administrador</h2>
                                        </a>
                                        <div class="col d-flex pl-0">
                                            <span class="text-success font-small mr-3"><span
                                                    class="fas fa-check-circle mr-2"></span>Activo</span>
                                            <span class="text-muted font-small mr-3"><span
                                                    class="fas fa-eye mr-2"></span>680</span>
                                            <span class="text-muted font-small mr-3"><span
                                                    class="far fa-heart mr-2"></span>10</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="card border-light mb-4">
                            <div class="row no-gutters align-items-center">
                                {{-- <div class="col-12 col-lg-6 col-xl-4">
                                    <a href="../single-space.html">
                                        <img src="{{asset('plantilla_dashboard/assets/img/meeting-office.jpg')}}" alt="private office"
                                            class="card-img p-2 rounded-xl">
                                    </a>
                                </div> --}}
                                <div class="col-12 col-lg-12 col-xl-12">
                                    <div class="card-body py-lg-0">
                                        <div class="d-flex no-gutters align-items-center mb-3">
                                            <div class="col text-left">

                                                <div class="modal fade bd-example-modal-lg"
                                                    id="modal-notification" tabindex="-1" role="dialog"
                                                    aria-labelledby="modal-notification" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg"
                                                        role="document">
                                                        <div class="modal-content bg-white px-0">
                                                            <div class="modal-header">
                                                                <h2 class="h5 mb-3">Usuario final</h2>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="col">
                                                                        <h2 class="h4">Views</h2>
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <div class="form-group">
                                                                            <select class="custom-select"
                                                                                id="exampleFormControlSelect2">
                                                                                <option>15 days</option>
                                                                                <option>30 days</option>
                                                                                <option>60 days</option>
                                                                                <option>90 days</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="ct-chart-statistics ct-golden-section ct-series-a">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-secondary">Go to
                                                                    Dashboard</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col text-right">
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="icon icon-sm">
                                                            <span
                                                                class="fas fa-ellipsis-h icon-secondary"></span>
                                                        </span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        {{-- <a class="dropdown-item" href="./edit-item.html"><span
                                                                class="fas fa-edit mr-2"></span>
                                                            Edit Item</a> --}}
                                                        <a class="dropdown-item text-danger" href="#"><span
                                                                class="fa fa-trash mr-2"
                                                                aria-hidden="true"></span>
                                                            Deshabilitar</a>
                                                        <a class="dropdown-item" data-toggle="modal"
                                                            data-target="#modal-notification"><span
                                                                class="fas fa-chart-line mr-2"></span>Permisos</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="../single-space.html">
                                            <h2 class="h5">Usuario final</h2>
                                        </a>
                                        <div class="col d-flex pl-0">
                                            <span class="text-success font-small mr-3"><span
                                                    class="fas fa-check-circle mr-2"></span>Activo</span>
                                            <span class="text-muted font-small mr-3"><span
                                                    class="fas fa-eye mr-2"></span>680</span>
                                            <span class="text-muted font-small mr-3"><span
                                                    class="far fa-heart mr-2"></span>10</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                {{-- <div class="row">
                    <div class="col">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mt-5">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

    <script>
        // $('#formCrearDocumento').submit(function(e) {
        //     e.preventDefault();
        //     let url = '/dashboard/admin/users';
        //     let data = $(this).serialize();
        //     // var data = {
        //     //     _token: token
        //     // };
        //     $.ajax({
        //         type: "post",
        //         url: url,
        //         data: data,
        //         success: function(response) {
        //             Swal.fire(
        //             'Creado!',
        //             'El usuario ha sido creado.',
        //             'success'
        //             )

        //             setTimeout(() => {
        //                 location.reload();
        //             }, 2000);
        //         }
        //     });
        // });



    </script>
@endsection

@section('modals')



@endsection
