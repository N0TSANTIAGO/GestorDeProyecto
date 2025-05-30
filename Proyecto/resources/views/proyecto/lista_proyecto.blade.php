<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Proyectos</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Lista de Proyectos</h1>

    @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
      </div>
    @endif

    <div class="mb-4">
      <a href="{{ route('proyectos.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
        Crear nuevo proyecto
      </a>
    </div>

    @if ($proyectos->count())
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded">
          <thead>
            <tr>
              <th class="py-2 px-4 border-b text-left">Título</th>
              <th class="py-2 px-4 border-b text-left">Tipo</th>
              <th class="py-2 px-4 border-b text-left">Estado</th>
              <th class="py-2 px-4 border-b text-left">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($proyectos as $proyecto)
              <tr class="hover:bg-gray-100">
                <td class="py-2 px-4 border-b">{{ $proyecto->titulo }}</td>
                <td class="py-2 px-4 border-b">{{ $proyecto->tipo }}</td>
                <td class="py-2 px-4 border-b">{{ ucfirst($proyecto->estado) }}</td>
                <td class="py-2 px-4 border-b">
                  <a href="{{ route('proyectos.show', $proyecto->id) }}" class="text-blue-500 hover:underline">Revisar</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @else
      <p class="text-gray-600">No hay proyectos registrados.</p>
    @endif
  </div>
</body>
</html>
