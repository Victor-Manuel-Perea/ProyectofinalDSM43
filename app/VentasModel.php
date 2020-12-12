<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentasModel extends Model
{
    protected $table = "tb_ventas";
    protected $primaryKey = "id_venta";
    protected $fillable = [
        'fecha_venta',
        'correo',
        'total',
        'calificacion',

    ];
}
