@extends('admin')

@section('content')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Tienda</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Compras</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th># Orden</th>
                                    <th>Producto</th>
                                    <th>Estatus</th>
                                    <th>N° de guia</th>
                                    <th>Total</th>
                                    <th>Fecha de compra</th>
                                    <th>Ver detalles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">#000354</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Producto 1</td>
                                    <td>
                                        <div
                                            class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">
                                            <i class='bx bxs-circle me-1'></i>Entregado</div>
                                    </td>
                                    <td><a href="https://www.dhl.com/mx-es/home/tracking/tracking-express.html?submit=1&tracking-id=8757041580">DHL - 8757041580</a></td>
                                    <td>$485.20</td>
                                    <td>Junio 10, 2021</td>
                                    <td><a href="{{ route('detalle') }}" class="btn btn-primary btn-sm radius-30 px-4">Ver Detalles</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">#000986</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Producto 2</td>
                                    <td>
                                        <div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i
                                                class='bx bxs-circle align-middle me-1'></i>Cancelado</div>
                                    </td>
                                    <td></td>
                                    <td>$650.30</td>
                                    <td>Julio 12, 2021</td>
                                    <td><a href="{{ route('detalle') }}" class="btn btn-primary btn-sm radius-30 px-4">Ver detalles</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">#000536</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Producto 3</td>
                                    <td>
                                        <div
                                            class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3">
                                            <i class='bx bxs-circle align-middle me-1'></i>En transito </div>
                                    </td>
                                    <td><a href="https://www.dhl.com/mx-es/home/tracking/tracking-express.html?submit=1&tracking-id=8757041580">DHL - 8757041580</a></td>
                                    <td>$159.45</td>
                                    <td>Agosto 14, 2021</td>
                                    <td><a href="{{ route('detalle') }}" class="btn btn-primary btn-sm radius-30 px-4">Ver detalles</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
