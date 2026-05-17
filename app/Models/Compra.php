<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'telefono',
        'direccion',
        'region',
        'metodo_pago',
        'tarjeta_num',
        'tarjeta_fecha',
        'tarjeta_cvc',
    ];
}
