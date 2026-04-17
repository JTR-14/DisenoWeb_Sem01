<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function show()
    {
        return view('compra');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20|min:9',
            'direccion' => 'required|string|max:255',
            'region' => 'required|string',
            'metodo_pago' => 'required|string',
        ]);

        Compra::create($validatedData);

        return redirect('/')->with('success', '¡Compra realizada con éxito!');
    }
}
