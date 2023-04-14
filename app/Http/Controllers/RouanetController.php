<?php

namespace App\Http\Controllers;

use App\Models\Rouanet;

class RouanetController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/rouanet?page=",
     *       @OA\Parameter(
     *         name="page",
     *         in="path",
     *         required=false,
     *         description="The ID of the resource",
     *         @OA\Schema(
     *             type="integer",
     *             default=1
     *         )
     *     ),
     *     @OA\Response(response="200", description="Busca as informações, limitado a 15 retornos na página escolhida")
     * )
     */
    public function index()
    {
        $columns = [
            'id_projeto',
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

    /**
     * @OA\Get(
     *     path="/api/rouanet/{id}",
     *       @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=false,
     *         description="The ID of the resource",
     *         @OA\Schema(
     *             type="integer",
     *             default=56173
     *         )
     *     ),
     *     @OA\Response(response="200", description="Busca as informações, limitado a 15 retornos na página escolhida")
     * )
     */

    public function show(string $id)
    {
        return Rouanet::where('id_projeto', $id)->get();
    }
}
