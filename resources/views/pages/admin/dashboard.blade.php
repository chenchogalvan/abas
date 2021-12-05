@extends('admin')

@section('content')

    <div class="page-wrapper">
        <div class="page-content">

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 bg-gradient-deepblue">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">9526</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-cart fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Total compras</p>
                                {{-- <p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-gradient-orange">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">8323</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-dollar fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Compras pendientes</p>
                                {{-- <p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-gradient-ohhappiness">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">6200</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-group fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Lugares de envio</p>
                                {{-- <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-gradient-ibiza">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 text-white">5630</h5>
                                <div class="ms-auto">
                                    <i class='bx bx-envelope fs-3 text-white'></i>
                                </div>
                            </div>
                            <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center text-white">
                                <p class="mb-0">Solicitudes de soporte</p>
                                {{-- <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <table class="table mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Dato 1</th>
                                    <th scope="col">Dato 2</th>
                                    <th scope="col">Dato 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Valor</td>
                                    <td>Valor</td>
                                    <td>@Valor</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Valor</td>
                                    <td>Valor</td>
                                    <td>@Valor</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Valor</td>
                                    <td>@Valor</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!--End Row-->


            <div class="row row-cols-1 row-cols-lg-3">

                <div class="col-xl-6">
                    <div class="card border-top border-0 border-4 border-danger">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                </div>
                                <h5 class="mb-0 text-danger">Formulario</h5>
                            </div>
                            <hr>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputLastName1" class="form-label">Nombre</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class="bx bxs-user"></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputLastName1"
                                            placeholder="Ej. Alfredo">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLastName2" class="form-label">Apellido</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class="bx bxs-user"></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputLastName2"
                                            placeholder="Ej, Galvan">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputPhoneNo" class="form-label">Teléfono</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class="bx bxs-phone"></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputPhoneNo"
                                            placeholder="Ej. 8441119996">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email </label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                class="bx bxs-message"></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputEmailAddress"
                                            placeholder="Ej. alfredo@hotmail.com">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress3" class="form-label">Direccion</label>
                                    <textarea class="form-control" id="inputAddress3"
                                        placeholder="Ej. Calle #123 Col. Nombre colonia C.P. 25000" rows="3"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger px-5">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card bg-transparent shadow-none">
                        <div class="card-body">
                            <h5 class="card-title">Notificaciones</h5>
                            <hr>
                            <div
                                class="alert border-0 border-start border-5 border-primary alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="font-35 text-primary"><i class="lni lni-chevron-right"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 text-primary">¡Excelente!</h6>
                                        <div class="text-dark">Alerta neutral para notificar algo.</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>

                            <div
                                class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="font-35 text-success"><i class="bx bxs-check-circle"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 text-success">¡Excelente!</h6>
                                        <div class="text-dark">Alerta para notificar que algo salió bien</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <div
                                class="alert border-0 border-start border-5 border-danger alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="font-35 text-danger"><i class="bx bxs-message-square-x"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 text-danger">¡Algo salio mal!</h6>
                                        <div class="text-dark">Alerta para notificar que algo salió mal.</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <div
                                class="alert border-0 border-start border-5 border-warning alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="font-35 text-warning"><i class="bx bx-info-circle"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 text-warning">¡Cuidado!</h6>
                                        <div class="text-dark">Notificación para advertirte una acción</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <div class="alert border-0 border-start border-5 border-info alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="font-35 text-info"><i class="bx bx-info-square"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 text-info">¡Atención!</h6>
                                        <div class="text-dark">Notificación para notificarte o informarte de algo
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!--End Row-->


            <div class="row">

            </div>
            <!--End Row-->

            <div class="row">

            </div>
            <!--End Row-->


            <div class="card radius-10">

            </div>

        </div>
    </div>

@endsection
