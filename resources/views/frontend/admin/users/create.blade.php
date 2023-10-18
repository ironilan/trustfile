@extends('layouts.dashboard')
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-transparent justify-content-center mb-4">
            <li class="breadcrumb-item text-secondary"><a href="/">Home</a></li>
            <li class="breadcrumb-item text-secondary"><a href="{{route('admin.users.index')}}">Usuario</a></li>

            <li class="breadcrumb-item text-muted active" aria-current="page">crear usuarios</li>
        </ol>
    </nav>
    <h1 class="mb-5">Crear <span class="font-weight-bolder">Usuarios</span></h1>
@endsection
@section('contenido')
    <div class="container mt-4" >
        <form id="formCreateUser">

            <input type="hidden" name="idUser" id="idUser">
            @csrf

            <div class="modal-body">
                <div class="mb-3 form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" required name="name">
                </div>
                <div class="mb-3 form-group">
                    <label for="">Celular (51999999999)</label>
                    <input type="text" class="form-control" required name="celular">
                </div>
                <div class="mb-3 form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" required name="email">
                </div>
                <div class="mb-3 form-group">
                    <label for="">Tipo documento</label>
                    <select required name="tipo_doc" id="tipo_doc" class="form-control">
                        <option value="dni">DNI</option>
                        <option value="ce">Carnet de extrangería</option>
                        <option value="pasaporte">Pasaporte</option>
                    </select>
                </div>
                <div class="mb-3 form-group">
                    <label for="">Número documento</label>
                    <input type="text" class="form-control" required name="num_doc">
                </div>
                <div class="mb-3 form-group">
                    <label for="">Departamento</label>
                    <select required name="departamento" id="departamento" class="form-control">
                        @foreach ($departamentos as $dep)
                            <option value="{{ $dep->id }}">{{ $dep->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Regresar</button>
                <button type="submit" class="btn btn-primary" id="addEditConfirmButton">Crear</button>
            </div>
        </form>
    </div>
@endsection

@section('estilos')
<style>
    .section-header{
        padding-top: 7rem;
        padding-bottom: 2rem;
    }
</style>
@endsection

@section('scripts')
    <script src="{{ asset('frontend/js/plugins/datatable.users.js') }}"></script>
    <script>
        $('#formCreateUser').submit(function(e) {
            e.preventDefault();
            let url = '/dashboard/admin/users';
            let data = $(this).serialize();
            // var data = {
            //     _token: token
            // };
            $.ajax({
                type: "post",
                url: url,
                data: data,
                success: function(response) {
                    document.getElementById('formCreateUser').reset();
                }
            });
        });
    </script>
@endsection

@section('modals')
    <div class="modal modal-right fade" id="addEditModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="formCreateUser">
                    <input type="hidden" value="update" name="tipo" id="tipo">
                    <input type="hidden" name="idUser" id="idUser">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Crear usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" required name="name">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="">Celular (51999999999)</label>
                            <input type="text" class="form-control" required name="celular">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" required name="email">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="">Tipo documento</label>
                            <select required name="tipo_doc" id="tipo_doc" class="form-control">
                                <option value="dni">DNI</option>
                                <option value="ce">Carnet de extrangería</option>
                                <option value="pasaporte">Pasaporte</option>
                            </select>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="">Número documento</label>
                            <input type="text" class="form-control" required name="num_doc">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="">Departamento</label>
                            <select required name="departamento" id="departamento" class="form-control">
                                {{-- @foreach ($departamentos as $dep)
                                    <option value="{{ $dep->id }}">{{ $dep->nombre }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="addEditConfirmButton">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
