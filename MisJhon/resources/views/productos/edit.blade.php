<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Producto</title>
  <link rel="icon" href="{{ asset('imagenes/i__principal/LogoTienda.png') }}" type="image/png">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900">
  
  <div class="container mx-auto px-4 py-8 max-w-2xl">
    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Editar Producto</h1>

    @if ($errors->any())
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <strong class="font-bold">¡Error!</strong>
        <ul class="mt-2 list-inside">
          @foreach ($errors->all() as $error)
            <li class="ml-2">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('productos.update', $producto->id) }}" 
          method="POST" 
          enctype="multipart/form-data"
          class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 space-y-6">
      @csrf
      @method('PUT')

      <div>
        <label for="titulo" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
          Título del Producto *
        </label>
        <input type="text" 
               name="titulo" 
               id="titulo" 
               value="{{ old('titulo', $producto->titulo) }}"
               required
               class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white p-3 text-sm shadow-sm">
      </div>


      <div>
        <label for="precio" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
          Precio (S/) *
        </label>
        <input type="number" 
               name="precio" 
               id="precio" 
               value="{{ old('precio', $producto->precio) }}"
               step="0.01"
               min="0"
               required
               class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white p-3 text-sm shadow-sm">
      </div>

      <div>
        <label for="categoria" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
          Categoría *
        </label>
        <select name="categoria" 
                id="categoria" 
                required
                class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white p-3 text-sm shadow-sm">
          <option value="">Seleccione una categoría</option>
          <option value="arreglos" {{ old('categoria', $producto->categoria) == 'arreglos' ? 'selected' : '' }}>Arreglos</option>
          <option value="peluches" {{ old('categoria', $producto->categoria) == 'peluches' ? 'selected' : '' }}>Peluches</option>
          <option value="juguetes" {{ old('categoria', $producto->categoria) == 'juguetes' ? 'selected' : '' }}>Juguetes</option>
          <option value="ropa_bebe" {{ old('categoria', $producto->categoria) == 'ropa_bebe' ? 'selected' : '' }}>Ropa de Bebé</option>
        </select>
      </div>

      
      <div>
        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
          Imagen Actual
        </label>
        <img src="{{ asset('storage/' . $producto->imagen) }}" 
             alt="{{ $producto->titulo }}" 
             class="h-40 w-40 object-cover rounded-lg border">
      </div>

      
      <div>
        <label for="imagen" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
          Cambiar Imagen (opcional)
        </label>
        <input type="file" 
               name="imagen" 
               id="imagen" 
               accept="image/*"
               class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white p-3 text-sm shadow-sm">
        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">
          Deja este campo vacío si no deseas cambiar la imagen
        </p>
        
        <img id="preview" class="mt-4 hidden h-40 w-40 object-cover rounded-lg border">
      </div>

      
      <div class="flex gap-4">
        <button type="submit" 
                class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-6 rounded-lg">
          Actualizar Producto
        </button>
        <a href="{{ route('productos.index') }}" 
           class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-6 rounded-lg">
          Cancelar
        </a>
      </div>
    </form>
  </div>

  <script>
    // Preview de la imagen antes de subir
    document.getElementById('imagen').addEventListener('change', function(e) {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const preview = document.getElementById('preview');
          preview.src = e.target.result;
          preview.classList.remove('hidden');
        }
        reader.readAsDataURL(file);
      }
    });
  </script>

</body>
</html>