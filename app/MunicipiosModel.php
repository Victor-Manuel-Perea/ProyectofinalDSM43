<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MunicipiosModel extends Model
{
    protected $table = "tb_municipios";
    protected $primaryKey = "id_municipio";
    protected $fillable = [
        'id_estado',
        'nombre',

    ];
}
