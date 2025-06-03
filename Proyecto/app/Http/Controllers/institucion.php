<?php

namespace App\Http\Controllers;

use App\Models\institucion;
use Illuminate\Http\Request;

class institucionController extends Controller
{
    public function index()
    {
        $tipos = institucion::all();
    return view('institucion.index', compact('tipos'));
    }

    public function create()
    {
        return view('institucion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|unique:institucion,codigo|max:10',
            'descripcion' => 'required|string|max:255',
        ]);

        institucion::create($request->only('codigo', 'descripcion'));

        return redirect()->route('institucion.index')->with('success', 'Tipo de proyecto creado correctamente.');
    }

    public function edit(institucion $institucion)
    {
        return view('institucion.edit', compact('institucion'));
    }

    public function update(Request $request, institucion $institucion)
    {
        $request->validate([
            'codigo' => 'required|max:10|unique:institucion,codigo,' . $institucion->id,
            'descripcion' => 'required|string|max:255',
        ]);

        $institucion->update($request->only('codigo', 'descripcion'));

        return redirect()->route('institucion.index')->with('success', 'Institucion ha sido actualizado correctamente.');
    }

    public function destroy(institucion $institucion)
    {
        $institucion->delete();
        return redirect()->route('institucion.index')->with('success', 'Institucion ha sido eliminado correctamente.');
    }
}
