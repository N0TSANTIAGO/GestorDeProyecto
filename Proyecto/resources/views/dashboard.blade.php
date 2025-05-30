<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100">

  <!-- Header -->
  <header class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Dashboard
      </h2>
    </div>
  </header>

  <!-- Contenido Principal -->
  <main class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
        <h3 class="text-lg font-bold mb-4 text-white">Menú de opciones</h3>
        <ul class="list-disc ml-5 space-y-2 marker:text-white">
                    <li>
                        <a href="{{ route('proyectos.crear_proyecto') }}" class="text-yellow-400 hover:underline">
                        crear proyecto
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{ route('proyectos.lista_proyecto') }}" class="text-yellow-400 hover:underline">
                        lista de proyecto
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('proyectos.revision_proyecto') }}" class="text-yellow-400 hover:underline">
                        evalucacion de proyecto
                        </a>
                    </li>
        </ul>
      </div>
    </div>
  </main>

</body>
</html>
