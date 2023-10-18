@extends('layouts.dashboard')
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-transparent justify-content-center mb-4">
            <li class="breadcrumb-item text-secondary"><a href="/">Home</a></li>

            <li class="breadcrumb-item text-muted active" aria-current="page">Usuarios</li>
        </ol>
    </nav>
    <h1 class="mb-5">Lista de <span class="font-weight-bolder">Usuarios</span></h1>
@endsection
@section('contenido')
    @include('frontend.components.filtro_users')

    <div class="section section-lg pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <div class="justify-content-between align-items-center d-none d-md-flex">
                        <div class="mr-3">
                            <h2 class="h6 mb-3 mb-md-0">Total de Usuarios: <span
                                    class="font-weiht-bolder text-primary">{{count($users)}}</span></h2>
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
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content mt-4 mt-lg-4" id="tabcontentexample-5">

                        <div class="tab-pane fade show active" id="link-example-14" role="tabpanel"
                            aria-labelledby="tab-link-example-14">
                            <div class="row">

                                @foreach ($users as $item)
                                @php
                                    $imagen = 'default.png';
                                    $imagenes = App\Models\Diapositiva::where('documento_id', $item->id)->get();
                                    if(count($imagenes) > 0)
                                    {
                                        $imagen = $imagenes->first()->archivo;
                                    }
                                    //dd($imagenes);
                                @endphp
                                <div class="col-12 col-md-6 col-lg-4">
                                    <!-- Card -->
                                    <div class="card border-light mb-4 animate-up-5">

                                        <div class="card-body">
                                            <a href="{{url('dashboard/admin/users')}}/{{$item->id}}">
                                                <h4 class="h5">{{$item->name}}</h4>
                                            </a>
                                            <ul class="list-group mb-3">
                                                <li class="list-group-item small p-0"><span
                                                        class="fas fa-file-alt mr-2"></span>{{$item->email}}
                                                </li>

                                                <li class="list-group-item small p-0"><span
                                                        class="fas fa-file mr-2"></span>dni: {{$item->num_doc}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End of Card -->
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col mt-3 d-flex justify-content-center">
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
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $('#formCrearDocumento').submit(function(e) {
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


                    document.getElementById('formCrearDocumento').reset();


                }
            });
        });
    </script>
@endsection

