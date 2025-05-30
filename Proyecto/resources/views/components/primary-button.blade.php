<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-blue-900 text-white font-semibold rounded-md hover:bg-yellow-400 hover:text-blue-900 focus:bg-yellow-400 focus:text-blue-900 transition']) }}>
    {{ $slot }}
</button>
