<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::orderBy('created_at', 'desc')->get();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
        'titulo' => 'required|string|max:255',
        'precio' => 'required|numeric|min:0',
        'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // máximo 2MB
        'categoria' => 'required|in:arreglos,peluches,juguetes,ropa_bebe',
    ]);
      if ($request->hasFile('imagen')) {
        $imagenPath = $request->file('imagen')->store('productos', 'public');
        $validated['imagen'] = $imagenPath;
    }

    Producto::create($validated);

    return redirect()->route('productos.index')
        ->with('success', 'Producto creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
    
    return view('productos.edit', compact('producto'));
}
 
    public function update(Request $request, string $id)
    {
    $producto = Producto::findOrFail($id);

    $validated = $request->validate([
        'titulo' => 'required|string|max:255',
        'precio' => 'required|numeric|min:0',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // opcional en edición
        'categoria' => 'required|in:arreglos,peluches,juguetes,ropa_bebe',
    ]);

    if ($request->hasFile('imagen')) {
        if ($producto->imagen) {
            Storage::disk('public')->delete($producto->imagen);
        }
        $imagenPath = $request->file('imagen')->store('productos', 'public');
        $validated['imagen'] = $imagenPath;
    }

    $producto->update($validated);

    return redirect()->route('productos.index')
        ->with('success', 'Producto actualizado exitosamente');
    }

    public function destroy(string $id)
    {
    $producto = Producto::findOrFail($id);

    if ($producto->imagen) {
        Storage::disk('public')->delete($producto->imagen);
    }

    $producto->delete();

    return redirect()->route('productos.index')
        ->with('success', 'Producto eliminado exitosamente');
    }
}
