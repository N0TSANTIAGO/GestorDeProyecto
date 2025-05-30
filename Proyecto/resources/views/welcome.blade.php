<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="text-white font-sans antialiased bg-gray-900">

    <!-- Imagen superior con logo encima -->
    <div class="relative w-full h-72 border border-gray-300 rounded-lg shadow-lg overflow-hidden">
        <img src="{{ asset('images/Pascual-Bravo-WELCOME(ARRIBA).jpg') }}" alt="Imagen arriba" class="w-full h-full object-cover" />
        <div class="absolute right-4 bottom-4 z-10">

            <div class="bg-white border border-blue-500 rounded-xl p-2 shadow-xl"
                style="box-shadow: inset 0 0 0 8px #1e3a8a;">
                <img src="{{ asset('images/JUNTOS LO LOGRAMOS.jpg') }}" alt="Logo Alta Calidad" class="w-32 h-auto object-contain" />
            </div>

        </div>
    </div>
    

    <!-- Fondo principal -->
    <div class="relative min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/FONDO-BACK.jpg') }}');">
        <div class="relative z-10 flex flex-col items-center justify-center min-h-screen py-10 px-4 selection:bg-[#FF2D20] selection:text-white">
            <div class="w-full max-w-7xl space-y-8">
            <div class="flex items-center justify-center">
    </div>
     <div class="flex justify-center">
    <img src="{{ asset('images/AltaCalidadAmarillo.png') }}" alt="Imagen decorativa" class="w-150 h-auto rounded-lg shadow-lg">
    </div>

                <!-- Sección de imágenes y login -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 bg-blue-800 bg-opacity-40 p-6 rounded-2xl shadow-2xl border border-blue-400">

                    <!-- Imágenes verticales -->
                    <div class="flex flex-col items-center space-y-4">
                        @foreach (['egresada', 'estudiante', 'aspirante'] as $tipo)
                            <div class="w-48 h-32 rounded-xl overflow-hidden border-4 border-blue-300 shadow-md transform hover:scale-105 transition duration-300">
                                <img src="{{ asset("images/{$tipo}-pascual-bravo.png") }}" alt="{{ ucfirst($tipo) }}"
                                    class="w-full h-full object-cover" />
                            </div>
                        @endforeach
                    </div>

                    <!-- División central decorativa -->
                    <div class="hidden lg:flex items-center justify-center">
                        <div class="w-[2px] h-60 bg-blue-400 opacity-50"></div>
                    </div>

                  
                    <!-- Login box -->
@if (Route::has('login'))
    <div class="flex items-center justify-start ml-[-210px]">
        <div class="rounded-2xl shadow-2xl px-8 py-6 w-full sm:w-[320px] bg-blue-950 bg-opacity-90 border border-blue-300">
            <h2 class="text-lg font-semibold text-center mb-4 text-white tracking-wide">Accede a tu cuenta de proyecto/PIA</h2>
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="block text-center rounded-md bg-white text-blue-900 px-4 py-2 font-semibold hover:bg-yellow-400 hover:text-blue-900 focus:bg-yellow-400 focus:text-blue-900 transition">
                    Ir al Dashboard
                </a>
            @else
                <div class="flex flex-col gap-4">
                    <a href="{{ route('login') }}"
                        class="rounded-lg bg-white text-blue-900 px-4 py-2 text-center font-semibold hover:bg-yellow-400 hover:text-blue-900 focus:bg-yellow-400 focus:text-blue-900 transition">
                        Iniciar Sesión
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-lg bg-white text-blue-900 px-4 py-2 text-center font-semibold hover:bg-yellow-400 hover:text-blue-900 focus:bg-yellow-400 focus:text-blue-900 transition">
                            Registrarse
                        </a>
                    @endif
                </div>
            @endauth
        </div>
    </div>
@endif

                </div>

                <!-- Sección extra decorativa -->
                <div class="bg-blue-700 bg-opacity-30 p-6 rounded-xl border-l-8 border-blue-500 shadow-xl">
    <div class="bg-blue-700 bg-opacity-30 p-6 rounded-xl border-l-8 border-blue-500 shadow-xl flex flex-col items-center gap-4">
    <p class="text-[#1e3a8a] text-center text-lg font-medium">
        Bienvenido al portal institucional de Pascual Bravo  </p>
    <p class="text-[#1e3a8a] text-center text-lg font-medium">
         Usa los botones anteriores para iniciar sesion o registrarte como usuario del sistema PIA/S.
    </p>
</div>
</div>


            </div>
        </div>
    </div>

    <!-- Footer visual mejorado -->
    <div class="w-full flex flex-col lg:flex-row border border-blue-500 bg-blue-100 rounded-2xl shadow-xl overflow-hidden mt-10">

        <!-- Imagen inferior -->
        <div class="relative w-full lg:w-3/4 h-60">
            <img src="{{ asset('images/Pascual-Bravo-WELCOME(ABAJO).jpg') }}" alt="Imagen abajo"
                class="w-full h-full object-cover" />
            <div class="absolute top-4 left-4 z-10">
                <div class="border border-blue-400 rounded-lg p-2 bg-white shadow-lg"
                    style="box-shadow: inset 0 0 0 4px #1e3a8a; width: 90px;">
                    <img src="{{ asset('images/PascualBravoLogotipo.svg') }}" alt="Logo PascualBravo"
                        class="w-full h-auto object-contain" />
                </div>
            </div>
        </div>

        <!-- Información de contacto -->
        <div class="w-full lg:w-1/4 p-6 flex flex-col justify-center text-blue-900 text-sm space-y-1 bg-blue-50">
            <p><strong>TEL:</strong> +57 604 448 0520</p>
            <p><strong>WhatsApp:</strong> +57 318 394 3964</p>
            <p><strong>Horario:</strong> Lun a Vie, 8:00 a.m. - 7:00 p.m.</p>
            <p><strong>Email:</strong> cis@pascualbravo.edu.co</p>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="py-8 text-center text-sm text-gray-400">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>

</body>
</html>
