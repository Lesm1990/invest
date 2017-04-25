<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $proveedores = Proveedor::all();

        return view('proveedores.create', [
            'proveedores' => $proveedores
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
            'RIF' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);

        $model = new Proveedor();
        $model->nombre = $request['nombre'];
        $model->rif = $request['RIF'];
        $model->telefono = $request['telefono'];
        $model->email = $request['email'];
        $model->save();

        $proveedores = Proveedor::all();

        return view('proveedores.create', [
            'proveedores' => $proveedores
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
        $proveedores = Proveedor::all();
        $proveedor = Proveedor::find($id);

        $selectP = array();

        foreach($proveedores as $p) {
            $selectP[$p->id] = $p->nombre;
        }

        return view('proveedores.edit', [
            'proveedores' => $selectP,
            'proveedor' => $proveedor
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
            'RIF' => 'required',
            'telefono' => 'required',
            'email' => 'required',
        ]);

        $model = Proveedor::find($id);
        $model->nombre = $request['nombre'];
        $model->rif = $request['RIF'];
        $model->telefono = $request['telefono'];
        $model->email = $request['email'];
        $model->save();

        $proveedores = Proveedor::all();
        $proveedor = Proveedor::find($id);

        $selectP = array();

        foreach($proveedores as $p) {
            $selectP[$p->id] = $p->nombre;
        }

        return view('proveedores.edit', [
            'proveedores' => $selectP,
            'proveedor' => $proveedor
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
        $proveedor = Proveedor::find($id);
        $proveedor->delete();

        $proveedores = Proveedor::all();

        return view('proveedores.create', [
            'proveedores' => $proveedores
            ]);
    }
}
