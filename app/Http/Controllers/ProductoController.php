<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $productos = Producto::all();
        return $productos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $fec)
    {
        $idProducto = null;
        $fecEntrega = null;

        if ($id !== 'null' && $fec !== 'null') {
            $idProducto = $id;
            $fecEntrega = $fec;
            $productos = Producto::where('id', $idProducto)
                                 ->where('fecha_entrega', $fecEntrega)
                                 ->get();
        }else if ($id != 'null' && $fec == 'null') {
            $idProducto = $id;            
            $productos = Producto::where('id', $idProducto)->get();
        }else if($id == 'null' && $fec != 'null'){
            $fecEntrega = $fec;
            $productos = Producto::where('fecha_entrega', $fecEntrega)->get();
        }

        // dd($productos);
        return $productos;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
