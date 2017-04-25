<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProducto;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //No se usa
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipoproductos = TipoProducto::all();

        return view('tipoProducto.create', [
            'tipoproductos' => $tipoproductos
            ]);
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
        $this->validate($request, [
            'nombre' => 'required|max:255',
        ]);

        $model = new TipoProducto();
        $model->descripcion = $request['nombre'];
        $model->save();

        $tipoproductos = TipoProducto::all();

        return view('tipoProducto.create', [
            'tipoproductos' => $tipoproductos
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //No se usa
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tipoProducto = TipoProducto::find($id);
        $tipoProductos = TipoProducto::all();

        $selectTP = array();

        foreach($tipoProductos as $tp) {
            $selectTP[$tp->id] = $tp->descripcion;
        }

        return view('tipoProducto.edit',[
            'tipoProducto' => $tipoProducto,
            'tipoProductos' => $selectTP
            ]);
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
        $this->validate($request, [
            'nombre' => 'required|max:255',
        ]);

        $model = TipoProducto::find($id);
        $model->descripcion = $request['nombre'];
        $model->save();

        $tipoProducto = TipoProducto::find($id);
        $tipoProductos = TipoProducto::all();

        $selectTP = array();

        foreach($tipoProductos as $tp) {
            $selectTP[$tp->id] = $tp->descripcion;
        }

        return view('tipoProducto.edit',[
            'tipoProducto' => $tipoProducto,
            'tipoProductos' => $selectTP
            ]);
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
        $tipoProducto = TipoProducto::find($id);
        $tipoProducto->delete();
        
        $tipoproductos = TipoProducto::all();

        return view('tipoProducto.create', [
            'tipoproductos' => $tipoproductos
            ]);
    }
}
