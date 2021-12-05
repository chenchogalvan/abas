@extends('admin')


@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Mis datos</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Mis datos</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="container">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="/admin/assets/images/avatars/avatar-1.png" alt="Admin"
                                            class="rounded-circle p-1 bg-primary" width="110">
                                        <div class="mt-3">
                                            <h4>John Doe</h4>
                                            <p class="text-secondary mb-1">Alfredo Galvan</p>
                                            <p class="text-muted font-size-sm">alfredogalvan.91@gmail.com</p>
                                            <button class="btn btn-primary">Ir a la tienda</button>
                                            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar otra dirección</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Agregar dirección
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="p-4 rounded">
                                                                <div class="row mb-3">
                                                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Nombre de dirección</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" id="inputEnterYourName" placeholder="Ej. casa de juan">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputAddress4" class="col-sm-3 col-form-label">Dirección</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea class="form-control" id="inputAddress4" rows="3" placeholder=""></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <label class="col-sm-3 col-form-label"></label>
                                                                    <div class="col-sm-9">
                                                                        <button type="submit" class="btn btn-primary px-5">Registrar dirección</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nombre</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" value="Alfredo Galvan" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" value="alfredogalvan.91@gmail.com" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Teléfono</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" value="(239) 816-9029" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">RFC</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" value="gaga910630" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Dirección actual</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" value="Saltillo Coahuila" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="button" class="btn btn-primary px-4" value="Guardar datos" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                        <div class="col">
                            <div class="card bg-success text-white ">
                                <div class="card-body">
                                    <div>
                                        <h5 class="card-title text-white">Dirección 1</h5>
                                    </div>
                                    <p class="card-text">Calle nombre, #123 Col. Nombre de la colonia. Saltillo,
                                        Coahuila</p> <a href="javascript:;" class="btn btn-primary">Seleccionar
                                        dirección</a>
                                </div>
                            </div>
                        </div>

                        @for ($i = 0; $i < 5; $i++)

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="card-title">Dirección {{ $i + 2 }}</h5>
                                        </div>
                                        <p class="card-text">Calle nombre, #123 Col. Nombre de la colonia. Saltillo,
                                            Coahuila</p> <a href="javascript:;" class="btn btn-primary">Seleccionar
                                            dirección</a>
                                    </div>
                                </div>
                            </div>

                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
