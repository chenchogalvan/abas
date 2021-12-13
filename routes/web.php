<?php

use Illuminate\Support\Facades\Route;
use App\Producto;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $oferta = DB::select('WebCodigosOferta');
    $categorias = DB::select('WebCodigosClase');
    $pd = DB::select('WebCodigosDestacados');

    // return $pd;

    // return $categorias;
    return view('pages.home', compact('oferta', 'categorias'));
});

Route::get('/email', function () {
    return view('mail');
});

Route::get('/productos', function () {
    $r = DB::select('ObtenerListaProductos');

    return view('pages.productos', compact('r'));
})->name('productos');


Route::get('/categorias', function (){

    $page = request('page', 1);
    $pageSize = 15;
    $results = DB::select('SET NOCOUNT ON; EXEC WebCodigosIdClase 1');
    $offset = ($page * $pageSize) - $pageSize;
    $data = array_slice($results, $offset, $pageSize, true);
    $c = new \Illuminate\Pagination\LengthAwarePaginator($data, count($data), $pageSize, $page);

    $up = DB::select('WebCodigosObtenerRecientes');
    $categorias = DB::select('WebCodigosClase');

    return view('pages.categorias', compact('c', 'up', 'categorias'));
})->name('categorias');

Route::get('/categoria/{IdClase}', function ($IdClase){

    $page = request('page', 1);
    $pageSize = 15;
    $results = DB::select('WebCodigosIdClase "'.$IdClase.'"');
    $offset = ($page * $pageSize) - $pageSize;
    $data = array_slice($results, $offset, $pageSize, true);
    $c = new \Illuminate\Pagination\LengthAwarePaginator($data, count($data), $pageSize, $page);

    $up = DB::select('WebCodigosObtenerRecientes');
    $categorias = DB::select('WebCodigosClase');

    return view('pages.categoria', compact('c', 'up', 'categorias'));
})->name('categoria');

Route::get('/producto/{Codigo}', function ($Codigo) {

    $p = DB::select('EXEC WebCodigosObtenerInd "'.$Codigo.'" ');
    $up = DB::select('WebCodigosObtenerRecientes');
    $categorias = DB::select('WebCodigosClase');
    // $pr = DB::select('WebCodigosRelacionados "'.$Codigo.'"');
    // return $pr;
    return view('pages.producto', compact('p', 'categorias', 'up'));
})->name('producto');



Route::get('/producto/{slug}', 'ProductoController@productoBuscar')->name('buscarProducto');

Route::get('/categoria/{slug}', 'CategoriaController@categoriaBuscar')->name('buscarProducto');


Route::get('/login', function () {
    $categorias = DB::select('WebCodigosClase');
    return view('pages.login', compact('categorias'));
});


Route::post('/login-info', function (Request $request)
{
    $user = $request->get('email');
    $pass = $request->get('password');

    $datos = DB::select('WebUsuariosLogin "'.$user.'", "'.$pass.'"');

    return $datos;
    # code...
})->name('loginInfo');




Route::get('/registro', function () {
    $categorias = DB::select('WebCodigosClase');

    $estados[] =[
         ["clave" => "AGS", "nombre" => "AGUASCALIENTES"] ,
         ["clave" => "BC",  "nombre" => "BAJA CALIFORNIA"] ,
         ["clave" => "BCS", "nombre" => "BAJA CALIFORNIA SUR"] ,
         ["clave" => "CHI", "nombre" => "CHIHUAHUA"] ,
         ["clave" => "CHS", "nombre" => "CHIAPAS"] ,
         ["clave" => "CMP", "nombre" => "CAMPECHE"] ,
         ["clave" => "CMX", "nombre" => "CIUDAD DE MEXICO"] ,
         ["clave" => "COA", "nombre" => "COAHUILA"] ,
         ["clave" => "COL", "nombre" => "COLIMA"] ,
         ["clave" => "DGO", "nombre" => "DURANGO"] ,
         ["clave" => "GRO", "nombre" => "GUERRERO"] ,
         ["clave" => "GTO", "nombre" => "GUANAJUATO"] ,
         ["clave" => "HGO", "nombre" => "HIDALGO"] ,
         ["clave" => "JAL", "nombre" => "JALISCO"] ,
         ["clave" => "MCH", "nombre" => "MICHOACAN"] ,
         ["clave" => "MEX", "nombre" => "ESTADO DE MEXICO"] ,
         ["clave" => "MOR", "nombre" => "MORELOS"] ,
         ["clave" => "NAY", "nombre" => "NAYARIT"] ,
         ["clave" => "NL",  "nombre" => "NUEVO LEON"] ,
         ["clave" => "OAX", "nombre" => "OAXACA"] ,
         ["clave" => "PUE", "nombre" => "PUEBLA"] ,
         ["clave" => "QR",  "nombre" => "QUINTANA ROO"] ,
         ["clave" => "QRO", "nombre" => "QUERETARO"] ,
         ["clave" => "SIN", "nombre" => "SINALOA"] ,
         ["clave" => "SLP", "nombre" => "SAN LUIS POTOSI"] ,
         ["clave" => "SON", "nombre" => "SONORA"] ,
         ["clave" => "TAB", "nombre" => "TABASCO"] ,
         ["clave" => "TLX", "nombre" => "TLAXCALA"] ,
         ["clave" => "TMS", "nombre" => "TAMAULIPAS"] ,
         ["clave" => "VER", "nombre" => "VERACRUZ"] ,
         ["clave" => "YUC", "nombre" => "YUCATAN"] ,
         ["clave" => "ZAC", "nombre" => "ZACATECAS"] ,
    ];

    return view('pages.registro', compact('categorias', 'estados'));
});

Route::post('/registro/guardar', function (Request $request) {

    /*
    firstname
    lastname
    email
    telephone


    razon_social
    RFC
    formaPago
    usoCFDI


    calle
    numero
    numero_int
    colonia
    ciudad
    country_id
    postcode
    password
    */


    $r = DB::select("WebClienteInsertarModificar'<Cliente>
    <Info>
        <IdCliente>2</IdCliente>
        <IdUsuario>1</IdUsuario>
        <Nombre>".$request->get('firstname')."</Nombre>
        <Apellido>".$request->get('lastname')."</Apellido>
        <CorreoFactura>".$request->get('email')."</CorreoFactura>
        <Telefono>".$request->get('telephone')." </Telefono>
    </Info>
    <Facturacion>
            <razonSocial>".$request->get('razon_social')."</razonSocial>
            <Rfc>".$request->get('RFC')."</Rfc>
            <IdFormaPago>28</IdFormaPago>
            <IUsoCfdi>G01</IUsoCfdi>
    </Facturacion>
    <Direccion>
            <Calle>".$request->get('calle')." </Calle>
            <NoExt>".$request->get('numero')." </NoExt>
            <NoInt>".$request->get('numero_int')." </NoInt>
            <Colonia>".$request->get('colonia')." </Colonia>
            <IdCiudad>1</IdCiudad>
            <IdEstado>2 </IdEstado>
            <Cp>".$request->get('postcode')."</Cp>
    </Direccion>
</Cliente>'");

return $r;

    return $request->all();
})->name('guardarDatos');


Route::get('/prueba', function () {



    $r = DB::select('ObtenerListaProductos');

    return $r;
});



Route::get('/checkout', function () {
    $r = DB::select('ObtenerListaProductos');
    return view('pages.checkout', compact('r'));
})->name('checkout');

Route::get('/carrito', function () {
    $r = DB::select('ObtenerListaProductos');
    return view('pages.carrito', compact('r'));
})->name('carrito');


Route::get('/pago', function () {
        // SDK de Mercado Pago
        require base_path('/vendor/autoload.php');
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();

        // Crea un ítem en la preferencia

        $r = DB::select('ObtenerListaProductos');


        // return $r;

        // $items = [[
        //         "name" => 'producto 1',
        //         "qty" => 2,
        //         "price" => 100,
        // ],[
        //         "name" => 'producto 2',
        //         "qty" => 4,
        //         "price" => 25,],

        // ];

        // $items = json_decode($items);

        foreach ($r as $product) {
            $item = new MercadoPago\Item();
            $item->title = $product->nombre;
            $item->quantity = 1;
            $item->unit_price = $product->precio;

            $products[] = $item;

        }




        $preference->items = $products;

        $preference->payment_methods = [
            'excluded_payment_methods' => [['id' => 'paypal']],
            'installments' => 1,
        ];

        $preference->back_urls = [
            'success' => config('app.url') . 'pagos/status',
            'failure' => config('app.url') . 'pagos/status',
            'pending' => config('app.url') . 'pagos/status',
        ];
        $preference->auto_return = 'approved';
        $preference->redirect = true;

        $preference->save();

        return redirect($preference->init_point);

        // return view('pages.pago', compact('preference'));
})->name('pago');


Route::get('pagos/status', function (Request $request) {

    return $request->all();
});


Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    Route::get('/dashboard', function () {
        return view('pages.admin.dashboard');
    })->name('dashboard');


    Route::get('/compras', function () {
        return view('pages.admin.compras');
    })->name('compras');

    Route::get('/perfil', function () {
        return view('pages.admin.profile');
    })->name('perfil');

    Route::get('/detalle', function () {
        return view('pages.admin.detalle');
    })->name('detalle');

});




