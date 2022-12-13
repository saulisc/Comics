<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRequestFormCom;
use App\Http\Requests\validadorRequestFormProd;
use App\Http\Requests\validadorRequestProcFormProve;
use App\Http\Requests\validadorPedido;
use App\Http\Requests\validadorCarrito;

use DB;
use Carbon\Carbon;
//use Barryvdh\DomPDF\Facade as PDF;
use PDF;
use App\Mail\PedidoMail;
//use Illuminate\Support\Facades\Mail;
use Mail;
//use App\Models\Comics;

class ControladorDB extends Controller
{
    //-------LEVANTAR PEDIDO---------

    public function downloadCarrito()
    {
        $ped = DB::table('tb_carrito')->get();

        view()->share('ped.downloadCarrito', $ped);

        $pdf = PDF::loadView('downloadCarrito', ['ped' => $ped]);

        return $pdf->download('pedidosdownload.pdf');
    }

    public function carritoUp(Request $request)
    {
        $cantidad = $request->input('txtCantidad');
        $precioVenta = $request->input('txtPrecioVenta');
        $total = $cantidad * $precioVenta;
        DB::table('tb_carrito')->insert([
            'item' => $request->input('txtItem'),
            'cantidad' => $request->input('txtCantidad'),
            'precioVenta' => $request->input('txtPrecioVenta'),
            'total' => $total,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('ped/carrito')->with('Guardado', 'abc');
    }

    public function carrito(Request $request)
    {
       
        $resultComics = DB::table('tb_comics')
            ->where('cantidad', '>', '0')
            ->get();

        $resultProductos = DB::table('table_productos')
            ->where('cantidad', '>', '0')
            ->get();

        // return view('comics/inventario', compact('comics', 'texto'));
        return view('carrito', compact('resultComics','resultProductos'));
    }

    // public function indexPedidos()
    // {
    //     $pedidos = DB::table('tb_levantar_pedido')->get();
    //     return view('pedidos/levantarPedido', compact('getProveedor'));
    // }

    public function sendMail(Request $request)
    {
        $correo = new PedidoMail();

        Mail::to('jobskevs@hotmail.com')->send($correo);
        return 'envio exitoso';
    }

    public function download()
    {
        $pedidos = DB::table('tb_levantar_pedido')->get();

        view()->share('pedidos.download', $pedidos);

        $pdf = PDF::loadView('download', ['pedidos' => $pedidos]);

        return $pdf->download('pedidosdownload.pdf');
    }

    //form PEDIDO
    public function createPedidos()
    {
        // $getProveedor = DB::table('tb_proveedores')->get();
        // $getComic = DB::table('tb_comics')->count();
        // $resultProductos = DB::table('table_productos')->get();

        $pedidos = DB::table('tb_levantar_pedido')->get();

        $result = DB::table('tb_proveedores')
            ->join('tb_comics', 'tb_proveedores.idProveedor', '=', 'tb_comics.proveedor_id')
            // -> select('tb_proveedores.idProveedor','tb_proveedores.empresa','tb_comics.nombre')
            ->get();

        $result2 = DB::table('tb_proveedores')
            ->join('table_productos', 'tb_proveedores.idProveedor', '=', 'table_productos.proveedor_id')
            // -> select('tb_proveedores.idProveedor','tb_proveedores.empresa','tb_comics.nombre')
            ->get();

        // $countArticulos = DB::table('tb_proveedores')
        // -> join('table_productos','tb_proveedores.idProveedor','=','table_productos.proveedor_id')
        // // -> select('tb_proveedores.idProveedor','tb_proveedores.empresa','tb_comics.nombre')
        // ->count();

        //return view('levantarPedido', compact('getProveedor','getComic','resultProductos'));
        return view('levantarPedido', compact('result', 'result2', 'pedidos'));
    }
    //save on DB
    public function storePedido(validadorPedido $request)
    {
        //this works!!!!!
        DB::table('tb_levantar_pedido')->insert([
            'proveedor' => $request->input('txtProveedor'),
            'item' => $request->input('txtItem'),
            'cantidad' => $request->input('txtCantidad'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // DB::table('tb_levantar_pedido')->insert([
        //     'proveedor' => $request->input('txtProveedor2'),
        //     'item' => $request->input('txtItem2'),
        //     'cantidad' => $request->input('txtCantidad2'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        //$input =['message' => 'This is a test!'];
        // foreach (['jobskevs@hotmail.com'] as $recipient) {
        //     Mail::to($recipient)->send(new PedidoMail());
        // }
        // Mail::to('120034213@upq.edu.mx')->send(new PedidoMail($input));

        // $data = ['name' => 'Juan'];

        // Mail::to('jobskevs@hotmail.com')->send(new PedidoMail($data));

        // $correo = new PedidoMail;

        // Mail::to('jobskevs@hotmail.com')->send($correo);

        return redirect('pedidos/createPedidos')->with('Pedido', 'abc');
    }

    //---------PROVEEDORES------

    //to delete
    public function destroyProveedores($id)
    {
        DB::table('tb_proveedores')
            ->where('idProveedor', $id)
            ->delete();

        return redirect('proveedores')->with('Eliminado', 'abc');
    }

    //to take the id to delete
    public function deleteProveedores($id)
    {
        $consultaIdProveedor = DB::table('tb_proveedores')
            ->where('idProveedor', $id)
            ->first();

        return view('deleteProveedores', compact('consultaIdProveedor'));
    }

    //take the proveedor
    public function editProveedores($id)
    {
        $consultaIdProveedor = DB::table('tb_proveedores')
            ->where('idProveedor', $id)
            ->first();
        return view('editProveedores', compact('consultaIdProveedor'));
    }
    //update on db
    public function updateProveedores(validadorRequestProcFormProve $request, $id)
    {
        DB::table('tb_proveedores')
            ->where('idProveedor', $id)
            ->update([
                'empresa' => $request->input('txtEmpresaProv'),
                'direccion' => $request->input('txtDireccionProv'),
                'pais' => $request->input('txtPaisProv'),
                'contacto' => $request->input('txtContactoProv'),
                'noFijo' => $request->input('txtNoFijoProv'),
                'noCelular' => $request->input('txtNoCelProv'),
                'correo' => $request->input('txtCorreoProv'),
                'updated_at' => Carbon::now(),
            ]);
        //ATENCION
        //aqui tiene que ir la raiz de tu componente
        return redirect('proveedores')->with('Actualizado', 'abc');
    }
    //get proveedores
    public function indexProveedores()
    {
        $resultProveedor = DB::table('tb_proveedores')->get();
        return view('listProveedores', compact('resultProveedor'));
    }

    //form proveedores
    public function createProveedores()
    {
        return view('registroProveedores');
    }
    //save on DB
    public function storeProveedores(validadorRequestProcFormProve $request)
    {
        DB::table('tb_proveedores')->insert([
            'empresa' => $request->input('txtEmpresaProv'),
            'direccion' => $request->input('txtDireccionProv'),
            'pais' => $request->input('txtPaisProv'),
            'contacto' => $request->input('txtContactoProv'),
            'noFijo' => $request->input('txtNoFijoProv'),
            'noCelular' => $request->input('txtNoCelProv'),
            'correo' => $request->input('txtCorreoProv'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('proveedores/createProveedores')->with('Guardado', 'abc');
    }

    //--------PRODUCTS----------

    //to delete
    public function destroyProductos($id)
    {
        DB::table('table_productos')
            ->where('idProducto', $id)
            ->delete();

        return redirect('productos')->with('Eliminado', 'abc');
    }

    //to take the id to delete
    public function deleteProductos($id)
    {
        $consultaIdProducto = DB::table('table_productos')
            ->where('idProducto', $id)
            ->first();

        return view('deleteProductos', compact('consultaIdProducto'));
    }

    //take the comic
    public function editProductos($id)
    {
        $consultaIdProducto = DB::table('table_productos')
            ->where('idProducto', $id)
            ->first();
        return view('editProductos', compact('consultaIdProducto'));
    }
    //update on db
    public function updateProductos(validadorRequestFormProd $request, $id)
    {
        $precioCompra = $request->input('txtPrecioCompraProductos');
        $calulate = $precioCompra * 0.4;
        $precioVenta = $calulate + $precioCompra;

        DB::table('table_productos')
            ->where('idProducto', $id)
            ->update([
                'tipo' => $request->input('txtTipoProductos'),
                'marca' => $request->input('txtMarcaProductos'),
                'descripcion' => $request->input('txtDescripcionProductos'),
                'cantidad' => $request->input('txtCantidadProductos'),
                'precioCompra' => $request->input('txtPrecioCompraProductos'),
                'precioVenta' => $precioVenta,
                'fecha' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        //ATENCION
        //aqui tiene que ir la raiz de tu componente
        return redirect('productos')->with('Actualizado', 'abc');
    }
    //get comics
    public function indexProductos()
    {
        $resultProducto = DB::table('table_productos')->get();
        return view('listProductos', compact('resultProducto'));
    }
    //form products
    public function createProductos()
    {
        $proveedores = DB::table('tb_proveedores')->get();

        return view('almacenProductos', compact('proveedores'));
    }
    //save on DB
    public function storeProductos(validadorRequestFormProd $request)
    {
        $precioCompra = $request->input('txtPrecioCompraProductos');
        $calulate = $precioCompra * 0.4;
        $precioVenta = $calulate + $precioCompra;

        DB::table('table_productos')->insert([
            'tipo' => $request->input('txtTipoProductos'),
            'marca' => $request->input('txtMarcaProductos'),
            'descripcion' => $request->input('txtDescripcionProductos'),
            'cantidad' => $request->input('txtCantidadProductos'),
            'precioCompra' => $request->input('txtPrecioCompraProductos'),
            'precioVenta' => $precioVenta,
            'fecha' => Carbon::now(),
            'proveedor_id' => $request->input('txtProveedor'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('productos/createProductos')->with('Guardado', 'abc');
    }

    //-----------COMICS----------

    //to delete
    public function destroyComics($id)
    {
        DB::table('tb_comics')
            ->where('idComic', $id)
            ->delete();

        return redirect('comics')->with('Eliminado', 'abc');
    }

    //to take the id to delete
    public function deleteComics($id)
    {
        $consultaIdComic = DB::table('tb_comics')
            ->where('idComic', $id)
            ->first();

        return view('deleteComics', compact('consultaIdComic'));
    }
    //take the comic
    public function editComics($id)
    {
        $consultaIdComic = DB::table('tb_comics')
            ->where('idComic', $id)
            ->first();
        return view('editComics', compact('consultaIdComic'));
    }
    //update on db
    public function updateComics(validadorRequestFormCom $request, $id)
    {
        $precioCompra = $request->input('txtPrecioCompraComics');
        $calulate = $precioCompra * 0.4;
        $precioVenta = $calulate + $precioCompra;

        DB::table('tb_comics')
            ->where('idComic', $id)
            ->update([
                'nombre' => $request->input('txtNombreComics'),
                'edicion' => $request->input('txtEdicionComics'),
                'compania' => $request->input('txtCompañiaComics'),
                'cantidad' => $request->input('txtCantidadComics'),
                'precioCompra' => $request->input('txtPrecioCompraComics'),
                'precioVenta' => $precioVenta,
                'updated_at' => Carbon::now(),
            ]);
        //ATENCION
        //aqui tiene que ir la raiz de tu componente
        return redirect('comics')->with('Actualizado', 'abc');
    }

    //get comics
    public function indexComics()
    {
        $resultComic = DB::table('tb_comics')->get();
        return view('listComics', compact('resultComic'));
    }

    //get comics
    public function inventarioComics(Request $request)
    {
        $resultComics = DB::table('tb_comics')->get();
        $resultProductos = DB::table('table_productos')->get();

        $buscarpor = $request->get('buscarpor');
        $resultComics = DB::table('tb_comics')
            ->where('nombre', 'LIKE', '%' . $buscarpor . '%')
            ->get();

        $resultProductos = DB::table('table_productos')
            ->where('tipo', 'LIKE', '%' . $buscarpor . '%')
            ->get();

        // return view('comics/inventario', compact('comics', 'texto'));
        return view('inventario', compact('resultComics', 'resultProductos', 'buscarpor'));
    }

    //form comics
    public function createComics()
    {
        $proveedores = DB::table('tb_proveedores')->get();

        return view('almacenComics', compact('proveedores'));
    }
    //save on DB
    public function storeComics(validadorRequestFormCom $request)
    {
        $precioCompra = $request->input('txtPrecioCompraComics');
        $calulate = $precioCompra * 0.4;
        $precioVenta = $calulate + $precioCompra;

        DB::table('tb_comics')->insert([
            'nombre' => $request->input('txtNombreComics'),
            'edicion' => $request->input('txtEdicionComics'),
            'compania' => $request->input('txtCompañiaComics'),
            'cantidad' => $request->input('txtCantidadComics'),
            'precioCompra' => $request->input('txtPrecioCompraComics'),
            'precioVenta' => $precioVenta,
            'proveedor_id' => $request->input('txtProveedor'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('comics/createComics')->with('Guardado', 'abc');
    }
}
