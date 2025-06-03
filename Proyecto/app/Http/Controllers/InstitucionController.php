<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    public function index()
    {
        $instituciones = Institucion::all();
        return view('institucion.index', compact('instituciones'));
    }

    public function create()
    {
        return view('institucion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:institucion,nombre|max:255',
            'direccion' => 'nullable|string|max:255',
        ]);

        Institucion::create($request->only('nombre', 'direccion'));

        return redirect()->route('institucion.index')->with('success', 'Institución creada correctamente.');
    }

    public function edit(Institucion $institucion)
    {
        return view('institucion.edit', compact('institucion'));
    }

    public function update(Request $request, Institucion $institucion)
    {
        $request->validate([
            'nombre' => 'required|max:255|unique:institucion,nombre,' . $institucion->id,
            'direccion' => 'nullable|string|max:255',
        ]);

        $institucion->update($request->only('nombre', 'direccion'));

        return redirect()->route('institucion.index')->with('success', 'Institución actualizada correctamente.');
    }

    public function destroy(Institucion $institucion)
    {
        $institucion->delete();

        return redirect()->route('institucion.index')->with('success', 'Institución eliminada correctamente.');
    }
}
