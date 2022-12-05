<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRequestFormCom;
use App\Http\Requests\validadorRequestFormProd;
use DB;
use Carbon\Carbon;

class ControladorDB extends Controller
{
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
                'created_at' => Carbon::now(),
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
        return view('almacenProductos');
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

    //form comics
    public function createComics()
    {
        return view('almacenComics');
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
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('comics/createComics')->with('Guardado', 'abc');
    }
}
