<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVentaModel extends Model
{
    /protected $table = "tb_detalle_ventas";
    protected $primaryKey = "id_detalle_venta";
    protected $fillable = [
        'precio_unitario',
        'cantidad',
        'id_venta',
        'id_producto',
        'id_usuario',

    ];
}
