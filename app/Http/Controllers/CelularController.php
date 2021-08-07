<?php

namespace App\Http\Controllers;

use App\Models\Celular;
use Illuminate\Http\Request;

class CelularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $celulares = Celular::all();
        return view('celular.index', compact('celulares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $celular = new Celular();
        $celular->modelo = $request->input('modelo');
        $celular->marca = $request->input('marca');
        $celular->capacidad_bateria = $request->input('capacidad_bateria');
        $celular->total_camaras = $request->input('total_camaras');
        $celular->color = $request->input('color');
        if($celular->save()){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        return redirect()->back()->with('failed', 'Could not saved!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $celular =  Celular::find($id);
        return view('celular.editar', compact('celular'));
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
        $celular =  Celular::find($id);
        $celular->modelo = $request->input('modelo');
        $celular->marca = $request->input('marca');
        $celular->capacidad_bateria = $request->input('capacidad_bateria');
        $celular->total_camaras = $request->input('total_camaras');
        $celular->color = $request->input('color');
        if($celular->update()){
            return redirect()->back()->with('success', 'Updated successfully');
        }
        return redirect()->back()->with('failed', 'Could not update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Celular::destroy($id)) {
            return redirect()->back()->with('deleted', 'Deleted successfully');
        }
        return redirect()->back()->with('delete-failed', 'Could not delete');
    }
}
