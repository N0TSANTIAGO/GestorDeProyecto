@extends('layouts.app')

@section('title', 'Crear Proyecto')

@section('content')
    <h1 class="text-xl font-bold mb-4">Crear Proyecto</h1>

    <form action="{{ route('proyectos.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="titulo" class="block font-medium">Título</label>
            <input type="text" name="titulo" id="titulo" class="w-full p-2 border rounded" required>
        </div>
        <div>
            <label for="descripcion" class="block font-medium">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="w-full p-2 border rounded" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
    </form>
@endsection

