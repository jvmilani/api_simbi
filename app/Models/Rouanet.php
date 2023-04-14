<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rouanet extends Model {

    protected $fillable = [
        'pronac',
        'ano_projeto',
        'nome',
        'segmento',
        'area',
        'uf',
        'municipio',
        'data_inicio',
        'data_termino',
        'situacao',
        'mecanismo',
        'enquadramento',
        'valor_captado',
        'valor_aprovado',
        'objetivos'
    ];

}
