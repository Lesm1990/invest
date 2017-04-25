<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ValoresAgregado;

class ValoresAgregadoController extends Controller
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
        $valoresAgregados = ValoresAgregado::all();

        return view('valoresAgregados.create', [
            'valoresAgregados' => $valoresAgregados
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
            'porcentaje' => 'required|max:255',
        ]);

        $model = new ValoresAgregado();
        $model->descripcion = $request['nombre'];
        $model->valor = $request['porcentaje'];
        $model->save();

        $valoresAgregados = ValoresAgregado::all();

        return view('valoresAgregados.create', [
            'valoresAgregados' => $valoresAgregados
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
        $valoresAgregado = ValoresAgregado::find($id);
        $valoresAgregados = ValoresAgregado::all();

        $selectVA = array();

        foreach($valoresAgregados as $va) {
            $selectVA[$va->id] = $va->descripcion;
        }

        return view('valoresAgregados.edit', [
            'valoresAgregados' => $selectVA,
            'valoresAgregado' => $valoresAgregado
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
            'porcentaje' => 'required|max:255',
        ]);

        $model = ValoresAgregado::find($id);
        $model->descripcion = $request['nombre'];
        $model->valor = $request['porcentaje'];
        $model->save();

        $valoresAgregado = ValoresAgregado::find($id);
        $valoresAgregados = ValoresAgregado::all();

        $selectVA = array();

        foreach($valoresAgregados as $va) {
            $selectVA[$va->id] = $va->descripcion;
        }

        return view('valoresAgregados.edit', [
            'valoresAgregados' => $selectVA,
            'valoresAgregado' => $valoresAgregado
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
        $valoresAgregado = ValoresAgregado::find($id);
        $valoresAgregado->delete();

        $valoresAgregados = ValoresAgregado::all();

        return view('valoresAgregados.create', [
            'valoresAgregados' => $valoresAgregados
            ]);
    }
}
