<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //No se esta usando
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas = Marca::all();

        return view('marcas.create', [
            'marcas' => $marcas
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
            'descripcion' => 'required|max:255',
        ]);

        $model = new Marca();
        $model->nombre = $request['nombre'];
        $model->descripcion = $request['descripcion'];
        $model->save();

        $marcas = Marca::all();

        return view('marcas.create', [
            'marcas' => $marcas
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
        //No se esta usando
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
        $marca = Marca::find($id);
        $marcas = Marca::all();

        $selectMarcas = array();

        foreach($marcas as $m) {
            $selectMarcas[$m->id] = $m->nombre;
        }

        return view('marcas.edit',[
            'marca' => $marca,
            'marcas' => $selectMarcas
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
            'descripcion' => 'required|max:255',
        ]);

        $model = Marca::find($id);
        $model->nombre = $request['nombre'];
        $model->descripcion = $request['descripcion'];
        $model->save();

        $marca = Marca::find($id);
        $marcas = Marca::all();

        $selectMarcas = array();

        foreach($marcas as $m) {
            $selectMarcas[$m->id] = $m->nombre;
        }

        return view('marcas.edit',[
            'marca' => $marca,
            'marcas' => $selectMarcas
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
        $marca = Marca::find($id);
        $marca->delete();
        
        $marcas = Marca::all();

        return view('marcas.create', [
            'marcas' => $marcas
            ]);
    }
}
