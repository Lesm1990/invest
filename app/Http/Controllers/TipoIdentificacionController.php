<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoIdentificacion;

class TipoIdentificacionController extends Controller
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
        $tipoIdentificaciones = TipoIdentificacion::all();

        return view('tipoIdentificacion.create', [
            'tipoIdentificaciones' => $tipoIdentificaciones
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
         //
        $this->validate($request, [
            'nombre' => 'required|max:255',
        ]);

        $model = new TipoIdentificacion();
        $model->descripcion = $request['nombre'];
        $model->save();

        $tipoIdentificaciones = TipoIdentificacion::all();

        return view('tipoIdentificacion.create', [
            'tipoIdentificaciones' => $tipoIdentificaciones
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
        $tipoIdentificacion = TipoIdentificacion::find($id);
        $tipoIdentificaciones = TipoIdentificacion::all();

        $selectTI = array();

        foreach($tipoIdentificaciones as $ti) {
            $selectTI[$ti->id] = $ti->descripcion;
        }

        return view('tipoIdentificacion.edit', [
            'tipoIdentificaciones' => $selectTI,
            'tipoIdentificacion' => $tipoIdentificacion
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

        $model = TipoIdentificacion::find($id);
        $model->descripcion = $request['nombre'];
        $model->save();

        $tipoIdentificacion = TipoIdentificacion::find($id);
        $tipoIdentificaciones = TipoIdentificacion::all();

        $selectTI = array();

        foreach($tipoIdentificaciones as $ti) {
            $selectTI[$ti->id] = $ti->descripcion;
        }

        return view('tipoIdentificacion.edit', [
            'tipoIdentificaciones' => $selectTI,
            'tipoIdentificacion' => $tipoIdentificacion
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
        $tipoIdentificacion = TipoIdentificacion::find($id);
        $tipoIdentificacion->delete();

        $tipoIdentificaciones = TipoIdentificacion::all();

        return view('tipoIdentificacion.create', [
            'tipoIdentificaciones' => $tipoIdentificaciones
            ]);
        
    }
}
