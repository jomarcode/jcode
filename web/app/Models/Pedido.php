<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'producto',
        'nombre_cliente',
        'apellidos_cliente',
        'dni',
        'celular',
        'ciudad',
        'direccion_entrega',
        'referencia',
        'cantidad_producto',
        'precio_unitario',
        'subtotal',
        'total',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
