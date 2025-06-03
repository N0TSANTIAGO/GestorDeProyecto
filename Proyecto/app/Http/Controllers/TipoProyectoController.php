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

    // 👇 AQUÍ VA EL MÉTODO STORE
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:tipo_proyecto,nombre',
        ]);

        TipoProyecto::create($request->only('nombre'));

        return redirect()->route('tipo-proyecto.index')->with('success', 'Tipo de proyecto creado correctamente.');
    }

    public function edit(TipoProyecto $tipoProyecto)
    {
        return view('tipo-proyecto.edit', compact('tipoProyecto'));
    }

    public function update(Request $request, TipoProyecto $tipoProyecto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:tipo_proyecto,nombre,' . $tipoProyecto->id,
        ]);

        $tipoProyecto->update($request->only('nombre'));

        return redirect()->route('tipo-proyecto.index')->with('success', 'Tipo de proyecto actualizado correctamente.');
    }

    public function destroy(TipoProyecto $tipoProyecto)
    {
        $tipoProyecto->delete();
        return redirect()->route('tipo-proyecto.index')->with('success', 'Tipo de proyecto eliminado correctamente.');
    }
}
