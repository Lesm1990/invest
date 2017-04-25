<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProducto;
use App\Marca;
use App\Producto;

class ProductoController extends Controller
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
        $tipoProductos = TipoProducto::all();
        $marcas = Marca::all();
        $productos = Producto::all();

        $selectTP = array();

        foreach($tipoProductos as $tp) {
            $selectTP[$tp->id] = $tp->descripcion;
        }

        $selectM = array();

        foreach($marcas as $m) {
            $selectM[$m->id] = $m->nombre;
        }

        //dd($productos);

        return view('productos.create', [
            'marcas' => $selectM,
            'tipoProductos' => $selectTP,
            'productos' => $productos
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
            'producto' => 'required',
            'marca' => 'required',
            'cantidad' => 'required',
            'costo' => 'required',
        ]);

        $model = new Producto();
        $model->nombre_producto = $request['nombre'];
        $model->tipoProductos_id = $request['producto'];
        $model->marca_id = $request['marca'];
        $model->cantidad_producto = $request['cantidad'];
        $model->costo = $request['costo'];
        $model->save();

        $tipoProductos = TipoProducto::all();
        $marcas = Marca::all();
        $productos = Producto::all();

        $selectTP = array();

        foreach($tipoProductos as $tp) {
            $selectTP[$tp->id] = $tp->descripcion;
        }

        $selectM = array();

        foreach($marcas as $m) {
            $selectM[$m->id] = $m->nombre;
        }

        return view('productos.create', [
            'marcas' => $selectM,
            'tipoProductos' => $selectTP,
            'productos' => $productos
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
        $tipoProductos = TipoProducto::all();
        $marcas = Marca::all();
        $productos = Producto::all();
        $producto = Producto::find($id);

        $selectTP = array();

        foreach($tipoProductos as $tp) {
            $selectTP[$tp->id] = $tp->descripcion;
        }

        $selectM = array();

        foreach($marcas as $m) {
            $selectM[$m->id] = $m->nombre;
        }

        $selectP = array();

        foreach($productos as $p) {
            $selectP[$p->id] = $p->nombre_producto;
        }

        return view('productos.edit', [
            'marcas' => $selectM,
            'tipoProductos' => $selectTP,
            'productos' => $selectP,
            'producto' => $producto
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
            'producto' => 'required',
            'marca' => 'required',
            'cantidad' => 'required',
            'costo' => 'required',
        ]);

        $model = Producto::find($id);
        $model->nombre_producto = $request['nombre'];
        $model->tipoProductos_id = $request['producto'];
        $model->marca_id = $request['marca'];
        $model->cantidad_producto = $request['cantidad'];
        $model->costo = $request['costo'];
        $model->save();

        $tipoProductos = TipoProducto::all();
        $marcas = Marca::all();
        $productos = Producto::all();
        $producto = Producto::find($id);

        $selectTP = array();

        foreach($tipoProductos as $tp) {
            $selectTP[$tp->id] = $tp->descripcion;
        }

        $selectM = array();

        foreach($marcas as $m) {
            $selectM[$m->id] = $m->nombre;
        }

        $selectP = array();

        foreach($productos as $p) {
            $selectP[$p->id] = $p->nombre_producto;
        }

        return view('productos.edit', [
            'marcas' => $selectM,
            'tipoProductos' => $selectTP,
            'productos' => $selectP,
            'producto' => $producto
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

        $producto = Producto::find($id);
        $producto->delete();
        
        $tipoProductos = TipoProducto::all();
        $marcas = Marca::all();
        $productos = Producto::all();

        $selectTP = array();

        foreach($tipoProductos as $tp) {
            $selectTP[$tp->id] = $tp->descripcion;
        }

        $selectM = array();

        foreach($marcas as $m) {
            $selectM[$m->id] = $m->nombre;
        }

        //dd($productos);

        return view('productos.create', [
            'marcas' => $selectM,
            'tipoProductos' => $selectTP,
            'productos' => $productos
            ]);
    }
}
