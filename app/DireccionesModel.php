<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DireccionesModel extends Model
{
    protected $table = "tb_direcciones";
    protected $primaryKey = "id_direccion";
    protected $fillable = [
        'calle',
        'numero_interior',
        'numero_exterior',
        'id_usuario',
        'id_municipio',
        'id_estado',
        

    ];
}
