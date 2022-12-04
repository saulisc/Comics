<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRequestFormCom;
use DB;
use Carbon\Carbon;

class ControladorDB extends Controller
{
    //COMICS

    //
    public function destroyComics($id)
    {
        DB::table('tb_comics')
            ->where('idComic', $id)
            ->delete();

        return redirect('comics')->with('Eliminado', 'abc');
    }

    //
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
