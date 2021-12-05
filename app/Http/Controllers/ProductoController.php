<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{


    public function productoBuscar()
    {

        $r = DB::select('ObtenerListaProductos');
        return 'hola';
    }


}
