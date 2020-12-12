<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposUsuariosModel extends Model
{
    protected $table = "tb_tipos_usuarios";
    protected $primaryKey = "id_tipo_usuario";
    protected $fillable = [
        'clave',
        'nombre',

    ];
}
