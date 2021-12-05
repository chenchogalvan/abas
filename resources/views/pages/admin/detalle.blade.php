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
                            <li class="breadcrumb-item active" aria-current="page">Detalle del producto</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4 border-end">
                        <img src="http://www.abasleal.com/imagenes_productos/259822.jpg" class="img-fluid" alt="...">
                        <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
                            {{--<div class="col"><img src="assets/images/products/12.png" width="70"
                                    class="border rounded cursor-pointer" alt=""></div>
                             <div class="col"><img src="assets/images/products/11.png" width="70"
                                    class="border rounded cursor-pointer" alt=""></div>
                            <div class="col"><img src="assets/images/products/14.png" width="70"
                                    class="border rounded cursor-pointer" alt=""></div>
                            <div class="col"><img src="assets/images/products/15.png" width="70"
                                    class="border rounded cursor-pointer" alt=""></div> --}}
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">Nombre del producto</h4>
                            <div class="d-flex gap-3 py-3">
                                {{-- <div class="cursor-pointer">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-secondary'></i>
                                </div> --}}
                                {{-- <div>142 reviews</div>
                                <div class="text-success"><i class='bx bxs-cart-alt align-middle'></i> 134 orders</div> --}}
                            </div>
                            <div class="mb-3">
                                <span class="price h4">$149.00</span>
                                <span class="text-muted">/per kg</span>
                            </div>
                            <p class="card-text fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ut quas ex eaque unde quis esse animi eius a adipisci ipsam eveniet rerum rem labore soluta ducimus, reprehenderit officia reiciendis.</p>
                            <dl class="row">
                                <dt class="col-sm-3">Datos</dt>
                                <dd class="col-sm-9">Info</dd>

                                <dt class="col-sm-3">Datos</dt>
                                <dd class="col-sm-9">Info</dd>

                                <dt class="col-sm-3">Datos</dt>
                                <dd class="col-sm-9">Info </dd>
                            </dl>
                            <hr>
                            <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
                                {{-- <div class="col">
                                    <label class="form-label">Quantity</label>
                                    <div class="input-group input-spinner">
                                        <button class="btn btn-white" type="button" id="button-plus"> + </button>
                                        <input type="text" class="form-control" value="1">
                                        <button class="btn btn-white" type="button" id="button-minus"> − </button>
                                    </div>
                                </div> --}}
                                {{-- <div class="col">
                                    <label class="form-label">Select size</label>
                                    <div class="">
                                <label class=" form-check
                                        form-check-inline">
                                        <input type="radio" class="form-check-input" name="select_size" checked=""
                                            class="custom-control-input">
                                        <div class="form-check-label">Small</div>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="select_size" checked=""
                                                class="custom-control-input">
                                            <div class="form-check-label">Medium</div>
                                        </label>

                                        <label class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="select_size" checked=""
                                                class="custom-control-input">
                                            <div class="form-check-label">Large</div>
                                        </label>
                                    </div>
                                </div> --}}
                                {{-- <div class="col">
                                    <label class="form-label">Select Color</label>
                                    <div class="color-indigators d-flex align-items-center gap-2">
                                        <div class="color-indigator-item bg-primary"></div>
                                        <div class="color-indigator-item bg-danger"></div>
                                        <div class="color-indigator-item bg-success"></div>
                                        <div class="color-indigator-item bg-warning"></div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="d-flex gap-3 mt-3">
                                <a href="#" class="btn btn-primary">Ver en tienda</a>
                                {{-- <a href="#" class="btn btn-outline-primary"><span class="text">Add to cart</span>
                                    <i class='bx bxs-cart-alt'></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <hr />


            </div>




        </div>
    </div>

@endsection
