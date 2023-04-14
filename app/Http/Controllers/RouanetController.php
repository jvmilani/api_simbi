<?php

namespace App\Http\Controllers;

use App\Models\Rouanet;

class RouanetController extends Controller
{
    public function index()
    {
        $columns = [
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
            'objetivo'
        ];
        return Rouanet::paginate(15, $columns);
    }

    public function show(string $id)
    {
        return Rouanet::where('id_projeto', $id)->get();
    }

}
