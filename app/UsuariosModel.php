<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    protected $table = "tb_usuarios";
    protected $primaryKey = "id_usuario";
    protected $fillable = [
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'telefono',
        'email',
        'pass',
        'id_tipo_usuario',
    ];
}
