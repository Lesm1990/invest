<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\TipoIdentificacion;

class EmpleadoController extends Controller
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
        $empleados = Empleado::all();
        $tipoIdentificaciones = TipoIdentificacion::all();

        $selectTI = array();

        foreach($tipoIdentificaciones as $ti) {
            $selectTI[$ti->id] = $ti->descripcion;
        }


        return view('empleados.create', [
            'empleados' => $empleados,
            'tipoIdentificaciones' => $selectTI,
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
            'tipoIDN' => 'required',
            'documento' => 'required',
            'apellido' => 'required|max:255',
            'telefono' => 'required',
            'email' => 'required',
            'direccion' => 'required|max:255',
        ]);

        $model = new Empleado();
        $model->nombre = $request['nombre'];
        $model->apellido = $request['apellido'];
        $model->direccion = $request['direccion'];
        $model->telefono = $request['telefono'];
        $model->email = $request['email'];
        $model->identificacion = $request['documento'];
        $model->tipoIdentificacion_id = $request['tipoIDN'];
        $model->save();

        $empleados = Empleado::all();
        $tipoIdentificaciones = TipoIdentificacion::all();

        $selectTI = array();

        foreach($tipoIdentificaciones as $ti) {
            $selectTI[$ti->id] = $ti->descripcion;
        }


        return view('empleados.create', [
            'empleados' => $empleados,
            'tipoIdentificaciones' => $selectTI,
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
        $empleado = Empleado::find($id);
        $tipoIdentificaciones = TipoIdentificacion::all();

        $selectTI = array();

        foreach($tipoIdentificaciones as $ti) {
            $selectTI[$ti->id] = $ti->descripcion;
        }


        return view('empleados.edit', [
            'empleado' => $empleado,
            'tipoIdentificaciones' => $selectTI,
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
            'tipoIDN' => 'required',
            'documento' => 'required',
            'apellido' => 'required|max:255',
            'telefono' => 'required',
            'email' => 'required',
            'direccion' => 'required|max:255',
        ]);

        $model = Empleado::find($id);
        $model->nombre = $request['nombre'];
        $model->apellido = $request['apellido'];
        $model->direccion = $request['direccion'];
        $model->telefono = $request['telefono'];
        $model->email = $request['email'];
        $model->identificacion = $request['documento'];
        $model->tipoIdentificacion_id = $request['tipoIDN'];
        $model->save();

        $empleado = Empleado::find($id);
        $tipoIdentificaciones = TipoIdentificacion::all();

        $selectTI = array();

        foreach($tipoIdentificaciones as $ti) {
            $selectTI[$ti->id] = $ti->descripcion;
        }


        return view('empleados.edit', [
            'empleado' => $empleado,
            'tipoIdentificaciones' => $selectTI,
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
        $empleado = Empleado::find($id);
        $empleado->delete();

        $empleados = Empleado::all();
        $tipoIdentificaciones = TipoIdentificacion::all();

        $selectTI = array();

        foreach($tipoIdentificaciones as $ti) {
            $selectTI[$ti->id] = $ti->descripcion;
        }


        return view('empleados.create', [
            'empleados' => $empleados,
            'tipoIdentificaciones' => $selectTI,
            ]);
    }
}
