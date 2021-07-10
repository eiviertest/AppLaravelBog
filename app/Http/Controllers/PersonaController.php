<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
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
        $persona = new Persona();
        $persona->nombre = $request->input('personaNombre');
        $persona->apellido_paterno = $request->input('personaApellidoP');
        $persona->apellido_materno = $request->input('personaApellidoM');
        $persona->edad = $request->input('personaEdad');
        $persona->sexo = $request->input('personaSexo');
        $persona->estado_civil = $request->input('personaEstadoCivil');
        if($persona->save()){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        return redirect()->back()->with('failed', 'Could not saved!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona =  Persona::find($id);
        return view('persona.editar', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona =  Persona::find($id);
        $persona->nombre = $request->input('personaNombre');
        $persona->apellido_paterno = $request->input('personaApellidoP');
        $persona->apellido_materno = $request->input('personaApellidoM');
        $persona->edad = $request->input('personaEdad');
        $persona->sexo = $request->input('personaSexo');
        $persona->estado_civil = $request->input('personaEstadoCivil');
        if($persona->update()){
            return redirect()->back()->with('success', 'Updated successfully');
        }
        return redirect()->back()->with('failed', 'Could not update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Persona::destroy($id))
        {
            return redirect()->back()->with('deleted', 'Deleted successfully');
        }
        return redirect()->back()->with('delete-failed', 'Could not delete');
    }
}
