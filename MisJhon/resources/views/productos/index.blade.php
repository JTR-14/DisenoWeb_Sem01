<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Productos - Admin</title>
  <link rel="icon" href="{{ asset('imagenes/i__principal/LogoTienda.png') }}" type="image/png">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900">
  
  <div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Gestión de Productos</h1>
      <a href="{{ route('productos.create') }}" 
         class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-4 rounded-lg">
        + Nuevo Producto
      </a>
    </div>

    @if(session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
      </div>
    @endif

    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
      <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-100 dark:bg-gray-700">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase">Imagen</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase">Título</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase">Precio</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase">Categoría</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase">Acciones</th>
          </tr>
        </thead>
        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
          @forelse($productos as $producto)
            <tr>
              <td class="px-6 py-4">
                <img src="{{ asset('storage/' . $producto->imagen) }}" 
                     alt="{{ $producto->titulo }}" 
                     class="h-16 w-16 object-cover rounded">
              </td>
              <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ $producto->titulo }}</td>
              <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">S/ {{ number_format($producto->precio, 2) }}</td>
              <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">
                <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">
                  {{ ucfirst(str_replace('_', ' ', $producto->categoria)) }}
                </span>
              </td>
              <td class="px-6 py-4 text-sm space-x-2">
                <a href="{{ route('productos.edit', $producto->id) }}" 
                   class="text-blue-600 hover:text-blue-800">Editar</a>
                
                <form action="{{ route('productos.destroy', $producto->id) }}" 
                      method="POST" 
                      class="inline"
                      onsubmit="return confirm('¿Estás seguro de eliminar este producto?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                No hay productos registrados. <a href="{{ route('productos.create') }}" class="text-pink-500">Crear uno ahora</a>
              </td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="mt-6">
      <a href="{{ route('home') }}" class="text-pink-500 hover:underline">← Volver al inicio</a>
    </div>
  </div>

</body>
</html>