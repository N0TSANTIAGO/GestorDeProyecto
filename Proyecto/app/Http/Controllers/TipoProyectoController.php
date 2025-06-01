<?php

namespace App\Http\Controllers;

use App\Models\TipoProyecto;
use Illuminate\Http\Request;

class TipoProyectoController extends Controller
{
    public function index()
    {
        $tipos = TipoProyecto::all();
    return view('tipo-proyecto.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipo-proyecto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:tipo_proyecto,codigo|max:10',
            'descripcion' => 'required|string|max:255',
        ]);

        TipoProyecto::create($request->only('codigo', 'descripcion'));

        return redirect()->route('tipo-proyecto.index')->with('success', 'Tipo de proyecto creado correctamente.');
    }

    public function edit(TipoProyecto $tipoProyecto)
    {
        return view('tipo-proyecto.edit', compact('tipoProyecto'));
    }

    public function update(Request $request, TipoProyecto $tipoProyecto)
    {
        $request->validate([
            'codigo' => 'required|max:10|unique:tipo_proyecto,codigo,' . $tipoProyecto->id,
            'descripcion' => 'required|string|max:255',
        ]);

        $tipoProyecto->update($request->only('codigo', 'descripcion'));

        return redirect()->route('tipo-proyecto.index')->with('success', 'Tipo de proyecto actualizado correctamente.');
    }

    public function destroy(TipoProyecto $tipoProyecto)
    {
        $tipoProyecto->delete();
        return redirect()->route('tipo-proyecto.index')->with('success', 'Tipo de proyecto eliminado correctamente.');
    }
}
